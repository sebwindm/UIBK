extensions [csv]
globals
[

  ;; patch agentsets:
  queues ;; queues have two functions:
         ;; 1) WIP inventory for goods that wait to be processed further
         ;; 2) Scheduling heuristic to schedule the waiting goods on a machine of the next step
  conveyors  ;; agentset containing the patches that are conveyors
  machines ;;agentset containing the patches that are machines

  input-from-csv
  current-arrival
  job-arrivals
  current-highest-order-number
  list-of-all-finished-orders
  list-of-all-variables-per-tick
  list-of-due-date-deviations
  list-of-total-wait-times
  list-of-all-idle-times
  machine1-utilisation ; boolean -> 1 if machine gets used, 0 if idle
  machine2-utilisation ; boolean -> 1 if machine gets used, 0 if idle
  machine3-utilisation ; boolean -> 1 if machine gets used, 0 if idle
  backlog-at-queue1 ; sum of all processing-times for this process step of orders in the queue
  backlog-at-queue2
  backlog-at-queue3
  number-waiting-orders-at-queue1 ; current amount of orders waiting in queue 1
  number-waiting-orders-at-queue2
  number-waiting-orders-at-queue3
  sum-of-current-wait-times-at-queue1 ; sum of the wait times of all orders waiting in this queue
  sum-of-current-wait-times-at-queue2
  sum-of-current-wait-times-at-queue3
  machine1-idle-time ;time the machine has been idle (resets to 0 when machine runs)
  machine2-idle-time ;time the machine has been idle (resets to 0 when machine runs)
  machine3-idle-time ;time the machine has been idle (resets to 0 when machine runs)
  late-orders ;amount of late orders that got finished
  early-orders
  finished-orders ;total amount of finished orders
]

turtles-own
[
  wait-time ;; the amount of time since the last time a turtle has moved
  due-date ;; externally given through FlexSim import
  finished-date ; the time at which the order was completed on the last machine
  arrival-in-production ;the time at which the order gets created in the system and enters WIP 1
  due-date-deviation ; difference between due date and finished date (if negative, it finished early)
  product-type ;refers to the product type as seen in the ProcessingTimes table of the FlexSim model
  step1-processing-time ; time to process the job on step 1
  step2-processing-time
  step3-processing-time
  order-id ; individual number that is given according to order of appearance in the system
  ;total-time-waited ; sum of wait times in all WIP inventories
  remaining-slack ; due date - current date - processing times of that product
  used-heuristic-step1 ;the heuristic that was used in step 1 - used for the ML decision tree
  used-heuristic-step2
  used-heuristic-step3
  time-waited-at-queue1 ;total time that the order waited at queue 1
  time-waited-at-queue2
  time-waited-at-queue3
]

patches-own
[
  process-step   ;; the process step of the machine or scheduler (1, 2 or 3)
]

;;;;;;;;;;;;;;;;;;;;;;
;; Setup Procedures ;;
;;;;;;;;;;;;;;;;;;;;;;

to setup
  file-close-all
  clear-all
  resize-world 0 6 0 6
  setup-patches
  setup-global-variables-and-tables
  reset-ticks

  ; the on/off switch in the model interface allows to make use of a
  ; predefined random seed to have reproducible random numbers
  if random-seed-active = true [
    random-seed 12345678 ; every run gets the same random numbers
    print "random seed is active"]
end

to setup-patches
  ask patches [set pcolor brown + 3]
  ; here we define the three different types of patches
  ; patches are location-agents that don't do much besides looking good
  set conveyors patches with [ pycor = 0]
  set queues conveyors with [pxcor = 2 or pxcor = 4 or pxcor = 0]
  set machines conveyors with [ pxcor = 3 or pxcor = 5 or pxcor = 1]

  ; for easier visual differentiation, we assign colors to patches
  ; and we assign the process step for each patch
  ask conveyors [ set pcolor white ]
  ask machines [set pcolor black]
  ask queues  [ set pcolor red]
  ask machines with [pxcor = 1] [set process-step 1]
  ask machines with [pxcor = 3] [set process-step 2]
  ask machines with [pxcor = 5] [set process-step 3]
  ask queues with [pxcor = 0] [set process-step 1]
  ask queues with [pxcor = 2] [set process-step 2]
  ask queues with [pxcor = 4] [set process-step 3]
  ask machines [set machine1-idle-time 0 set machine2-idle-time 0 set machine3-idle-time 0]
end

to setup-global-variables-and-tables
   ;;;;;;;;;;;;;; global variables ;;;;;;;;;;;;;;
  set-default-shape turtles "box"
  set number-waiting-orders-at-queue1  0
  set number-waiting-orders-at-queue2  0
  set number-waiting-orders-at-queue3  0
  set late-orders 0
  set early-orders 0
  set finished-orders 0
  ;;;;;;;;; lists ;;;;;;;;;;;;;;
    ; opens the file with arrival data which was exported from FlexSim
  file-open "job_arrivals.csv"
  set job-arrivals (csv:from-file "job_arrivals.csv" ";")
  file-close-all
  ; declare lists
  set list-of-all-idle-times []
  set list-of-due-date-deviations []
  set list-of-total-wait-times []
  set job-arrivals remove-item 0 job-arrivals
  set current-arrival item 0 job-arrivals

  ;; this creates the header row of the csv output file
  set list-of-all-finished-orders [["order-id" "product-type" "arrival-in-production" "due-date" "finished-date" "due-date-deviation"
    "time-waited-at-queue1" "time-waited-at-queue2" "time-waited-at-queue3" "used-heuristic-step1" "used-heuristic-step2" "used-heuristic-step3"]]

  ;; this creates the header row of the csv output file
  set list-of-all-variables-per-tick [["ticks" "backlog-at-queue1" "backlog-at-queue2" "backlog-at-queue3" "number-waiting-orders-at-queue1"
    "number-waiting-orders-at-queue2" "number-waiting-orders-at-queue3" "sum-of-current-wait-times-at-queue1" "sum-of-current-wait-times-at-queue2"
    "sum-of-current-wait-times-at-queue3" "machine1-utilisation" "machine2-utilisation" "machine3-utilisation" "machine1-idle-time"
    "machine2-idle-time" "machine3-idle-time"]]
end


;;;;;;;;;;;;;;;;;;;;;;;;
;; Runtime Procedures ;;
;;;;;;;;;;;;;;;;;;;;;;;;

;; Run the simulation
to go
  ask turtles [
    set-order-wait-times
    set-remaining-slack
  ]
  calculate-waiting-times-at-queues
  calculate-backlog-at-queues
  create-orders-for-current-tick
  schedule-jobs
  process-jobs-on-machines
  set-idle-times
  check-for-errors

  create-list-of-all-variables-per-tick
  tick
 end


;; keep track of the number of stopped turtles and the amount of time a turtle has been stopped
to set-order-wait-times  ;; turtle procedure
  ifelse pcolor = red
  [

    ;; for queue 1
    if xcor = 0 [
      set wait-time wait-time + 1
      set time-waited-at-queue1 time-waited-at-queue1 + 1
    ]
    ;; for queue 2
    if xcor = 2 [
      set wait-time wait-time + 1
      set time-waited-at-queue2 time-waited-at-queue2 + 1
    ]

    ;; for queue 3
    if xcor = 4 [
      set wait-time wait-time + 1
      set time-waited-at-queue3 time-waited-at-queue3 + 1
    ]
  ]
  [
    set wait-time 0
  ]
end

to calculate-waiting-times-at-queues
  set number-waiting-orders-at-queue1 count turtles with [xcor = 0]
  set number-waiting-orders-at-queue2 count turtles with [xcor = 2]
  set number-waiting-orders-at-queue3 count turtles with [xcor = 4]

  set sum-of-current-wait-times-at-queue1 sum [time-waited-at-queue1] of turtles with [xcor = 0]
  set sum-of-current-wait-times-at-queue2 sum [time-waited-at-queue2] of turtles with [xcor = 2]
  set sum-of-current-wait-times-at-queue3 sum [time-waited-at-queue3] of turtles with [xcor = 4]
end


to schedule-jobs
  if schedule-heuristic = "fcfs" [schedule-by-fcfs]
  if schedule-heuristic = "SPT" [schedule-by-shortest-processing-time]
  if schedule-heuristic = "flexible-slack" [schedule-by-flexible-with-slack]
  if schedule-heuristic = "flex-slack-spt-with-backlog" [schedule-by-backlog-with-slack]
  if schedule-heuristic = "slack" [schedule-by-slack]
  if schedule-heuristic = "random" [schedule-by-random]
end

to schedule-by-duedate
  ; process step 1
  ask queues with [process-step = 1] [
    ; if there are no turtles one patch further (= in the machine),
    ;the one with the lowest due-date goes there
    ; in case of several with the same value, a random one is chosen
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [due-date]
          [fd 1]
    ]
  ]
  ; process step 2
  ask queues with [process-step = 2] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [due-date]
          [fd 1]
    ]
  ]
  ;  process step 3
  ask queues with [process-step = 3] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [due-date]
          [fd 1]
    ]
  ]
end

to schedule-by-fcfs
  ; process step 1
  ask queues with [process-step = 1] [
    ; if there are no turtles one patch further (= in the machine),
    ;the one with the lowest order-id goes there
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [order-id]
          [fd 1]
    ]
  ]
  ; process step 2
  ask queues with [process-step = 2] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [order-id]
          [fd 1]
    ]
  ]
  ;  process step 3
  ask queues with [process-step = 3] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [order-id]
          [fd 1]
    ]
  ]
end

to schedule-by-shortest-processing-time
  ; process step 1
  ask queues with [process-step = 1] [
    ; if there are no turtles one patch further (= in the machine),
    ;the one with the lowest processing time goes there
    ; in case of several with the same value, a random one is chosen
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [step1-processing-time]
          [fd 1]
    ]
  ]
  ; process step 2
  ask queues with [process-step = 2] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [step2-processing-time]
          [fd 1]
    ]
  ]
  ;  process step 3
  ask queues with [process-step = 3] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [step3-processing-time]
          [fd 1]
    ]
  ]
end

to schedule-by-longest-processing-time
  ; process step 1
  ask queues with [process-step = 1] [
    ; if there are no turtles one patch further (= in the machine),
    ;the one with the highest processing time goes there
    ; in case of several with the same value, a random one is chosen
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask max-one-of turtles-here [step1-processing-time]
          [fd 1]
    ]
  ]
  ; process step 2
  ask queues with [process-step = 2] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask max-one-of turtles-here [step2-processing-time]
          [fd 1]
    ]
  ]
  ;  process step 3
  ask queues with [process-step = 3] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask max-one-of turtles-here [step3-processing-time]
          [fd 1]
    ]
  ]
end



to schedule-by-flexible-with-fcfs
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 1 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;; if there is idle time in machine 2,queue 1 will switch to SPT
  ;; if there is no idle time in machine 2, queue 1 will switch to FCFS
  ;; when removing an order from the machine, there is always an idle time of 1
  ;; until the next order comes into the machine

  ask machines with [process-step = 2] [
    ifelse machine2-idle-time > 1

    ;; use SPT on queue 1
    [
      ask queues with [process-step = 1] [
        if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [step1-processing-time]
          [fd 1
          set used-heuristic-step1 "SPT"]
        ]
      ]
    ]

    ;; use FCFS on queue 1
    [
      ask queues with [process-step = 1] [
        ; if there are no turtles one patch further, the one with the lowest due date goes there
        if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [order-id]
          [fd 1
          set used-heuristic-step1 "FCFS"]
        ]
      ]
    ]
  ]

  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 2 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;; if there is idle time in machine 3,queue 2 will switch to SPT
  ;; if there is no idle time in machine 3, queue 2 will switch to FCFS
  ;; when removing an order from the machine, there is always an idle time of 1
  ;; until the next order comes into the machine

  ask machines with [process-step = 3] [
    ifelse machine3-idle-time > 1

    ;; use SPT on queue 2
    [
      ask queues with [process-step = 2] [
        if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [step2-processing-time]
          [fd 1
          set used-heuristic-step2 "SPT"]
        ]
      ]
    ]

    ;; use FCFS on queue 2
    [
      ask queues with [process-step = 2] [
        ; if there are no turtles one patch further, the one with the lowest due date goes there
        if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [order-id]
          [fd 1
            set used-heuristic-step2 "FCFS"]
        ]
      ]
    ]
  ]
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 3 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

  ask queues with [process-step = 3] [
    ;; Queue 3 always uses FCFS
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [order-id]
          [fd 1
            set used-heuristic-step3 "FCFS"
          ]
    ]
  ]
end

to schedule-by-flexible-with-slack
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 1 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;; if there is idle time in machine 2,queue 1 will switch to SPT
  ;; if there is no idle time in machine 2, queue 1 will switch to slack heuristic
  ;; when removing an order from the machine, there is always an idle time of 1
  ;; until the next order comes into the machine

  ask machines with [process-step = 2] [
    ifelse machine2-idle-time > 1

    ;; use SPT on queue 1
    [
      ask queues with [process-step = 1] [
        if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [step1-processing-time]
          [fd 1
          set used-heuristic-step1 "SPT"]
        ]
      ]
    ]

    ;; use slack on queue 1
    [
      ask queues with [process-step = 1] [
                if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [remaining-slack]
          [fd 1
          set used-heuristic-step1 "Slack"]
        ]
      ]
    ]
  ]

  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 2 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;; if there is idle time in machine 3,queue 2 will switch to SPT
  ;; if there is no idle time in machine 3, queue 2 will switch to slack heuristic
  ;; when removing an order from the machine, there is always an idle time of 1
  ;; until the next order comes into the machine

  ask machines with [process-step = 3] [
    ifelse machine3-idle-time > 1

    ;; use SPT on queue 2
    [
      ask queues with [process-step = 2] [
        if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [step2-processing-time]
          [fd 1
          set used-heuristic-step2 "SPT"]
        ]
      ]
    ]

    ;; use slack on queue 2
    [
      ask queues with [process-step = 2] [
        if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [remaining-slack]
          [fd 1
          set used-heuristic-step2 "Slack"]
        ]
      ]
    ]
  ]
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 3 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

  ask queues with [process-step = 3] [
    ;; Queue 3 always uses slack
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [remaining-slack]
          [fd 1
          set used-heuristic-step3 "Slack"]
    ]
  ]
end

to schedule-by-backlog-with-slack
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 1 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ; if backlog > X ticks, switch to SPT, else use Slack
  ; X is defined by the slider for backlog-limit in the interface
  ifelse backlog-at-queue1 > backlog-limit

  ;; use SPT on queue 1
  [
    ask queues with [process-step = 1] [
      if count turtles-at 1 0 = 0 and any? turtles-here
      [ask min-one-of turtles-here [step1-processing-time]
        [fd 1
          set used-heuristic-step1 "SPT"]
      ]
    ]
  ]

  ;; use slack on queue 1
  [
    ask queues with [process-step = 1] [
      if count turtles-at 1 0 = 0 and any? turtles-here
      [ask min-one-of turtles-here [remaining-slack]
        [fd 1
          set used-heuristic-step1 "Slack"]
      ]
    ]
  ]
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 2 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ; if backlog > X ticks, switch to SPT, else use Slack
  ; X is defined by the slider for backlog-limit in the interface
  ifelse backlog-at-queue2 > backlog-limit

  ;; use SPT on queue 2
  [
    ask queues with [process-step = 2] [
      if count turtles-at 1 0 = 0 and any? turtles-here
      [ask min-one-of turtles-here [step1-processing-time]
        [fd 1
          set used-heuristic-step2 "SPT"]
      ]
    ]
  ]

  ;; use slack on queue 2
  [
    ask queues with [process-step = 2] [
      if count turtles-at 1 0 = 0 and any? turtles-here
      [ask min-one-of turtles-here [remaining-slack]
        [fd 1
          set used-heuristic-step2 "Slack"]
      ]
    ]
  ]
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;; FOR QUEUE 3 ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
  ; if backlog > X ticks, switch to SPT, else use Slack
  ; X is defined by the slider for backlog-limit in the interface
  ifelse backlog-at-queue3 > backlog-limit

  ;; use SPT on queue 3
  [
    ask queues with [process-step = 3] [
      if count turtles-at 1 0 = 0 and any? turtles-here
      [ask min-one-of turtles-here [step1-processing-time]
        [fd 1
          set used-heuristic-step3 "SPT"]
      ]
    ]
  ]

  ;; use slack on queue 3
  [
    ask queues with [process-step = 3] [
      if count turtles-at 1 0 = 0 and any? turtles-here
      [ask min-one-of turtles-here [remaining-slack]
        [fd 1
          set used-heuristic-step3 "Slack"]
      ]
    ]
  ]
end

to schedule-by-slack
  ; this is for MST (minimum slack time) heuristic
  ; process step 1
  ask queues with [process-step = 1] [
    ; if there are no turtles one patch further (= in the machine),
    ;the one with the lowest processing time goes there
    ; in case of several with the same value, a random one is chosen
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [remaining-slack]
          [fd 1]
    ]
  ]
  ; process step 2
  ask queues with [process-step = 2] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [remaining-slack]
          [fd 1]
    ]
  ]
  ;  process step 3
  ask queues with [process-step = 3] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask min-one-of turtles-here [remaining-slack]
          [fd 1]
    ]
  ]
end

to schedule-by-random
  ; process step 1
  ask queues with [process-step = 1] [
     if count turtles-at 1 0 = 0 and any? turtles-here
        [ask one-of turtles-here
          [fd 1]
    ]
  ]
  ; process step 2
  ask queues with [process-step = 2] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask one-of turtles-here
          [fd 1]
    ]
  ]
  ;  process step 3
  ask queues with [process-step = 3] [
    if count turtles-at 1 0 = 0 and any? turtles-here
        [ask one-of turtles-here
          [fd 1]
    ]
  ]
end

to process-jobs-on-machines
  ;; in the flexsim model, each step has the following amount of machines:
  ;; step 1 has 2 machines, step 2 has 3 machines, step 3 has 3 machines
  ;; since this netlogo model has only one machine per step, we adjust the processing times
  ;; instead of subtracting 1 each step, we subtract more depending on the step

  ;; process step 1
  ask machines with [process-step = 1] [
    ifelse count turtles-here = 1[
      set machine1-utilisation 1
      ask turtles-here [
        if step1-processing-time < 2 [set step1-processing-time 0]
        ifelse step1-processing-time > 0
        ;; jobs stay in the machine as long as the processing time requests
        [set step1-processing-time step1-processing-time - 2 set wait-time 0]
        ;; when they are finished, they move to the next WIP inventory and wait to be scheduled
        [
          move-to one-of queues with [process-step = 2]
          set wait-time 0
          set due-date-deviation ticks - due-date
        ]

      ]
    ]
    [set machine1-utilisation 0]
  ]
  ;; process step 2
  ask machines with [process-step = 2] [
    ifelse count turtles-here = 1[
      set machine2-utilisation 1
      ask turtles-here [
        if step2-processing-time < 3 [set step2-processing-time 0]
        ifelse step2-processing-time > 0
        ;; jobs stay in the machine as long as the processing time requests
        [set step2-processing-time step2-processing-time - 3 set wait-time 0]
        ;; when they are finished, they move to the next WIP inventory and wait to be scheduled
        [
          move-to one-of queues with [process-step = 3]
          set wait-time 0
          set due-date-deviation ticks - due-date
        ]

      ]
    ]
    [set machine2-utilisation 0]
  ]
  ;; process step 3
  ask machines with [process-step = 3] [
    ifelse count turtles-here = 1[
      set machine3-utilisation 1
      ask turtles-here [
        if step3-processing-time < 3 [set step3-processing-time 0]
        ifelse step3-processing-time > 0
        ;; jobs stay in the machine as long as the processing time requests
        [set step3-processing-time step3-processing-time - 3 set wait-time 0]
        ;; when they are finished, they move to the finished goods inventory
        [
          set wait-time 0
          set finished-date ticks
          set due-date-deviation ticks - due-date
          set finished-orders finished-orders + 1
          ;set total-time-waited 1  ; (time-waited-at-queue1 + time-waited-at-queue2 + time-waited-at-queue3)

          ;; create lists for csv export of all orders
          let templist []
          set templist lput order-id templist
          set templist lput product-type templist
          set templist lput arrival-in-production templist
          set templist lput due-date templist
          set templist lput finished-date templist
          set templist lput due-date-deviation templist
          ;set templist lput total-time-waited templist
          set templist lput time-waited-at-queue1 templist
          set templist lput time-waited-at-queue2 templist
          set templist lput time-waited-at-queue3 templist
          set templist lput used-heuristic-step1 templist
          set templist lput used-heuristic-step2 templist
          set templist lput used-heuristic-step3 templist



          set list-of-all-finished-orders lput templist list-of-all-finished-orders

          if due-date-deviation < 0 [set early-orders early-orders + 1]
          if due-date-deviation > 0 [set late-orders late-orders + 1]
          set list-of-due-date-deviations lput due-date-deviation list-of-due-date-deviations
          set list-of-total-wait-times lput (time-waited-at-queue1 + time-waited-at-queue2 + time-waited-at-queue3) list-of-total-wait-times
          setxy 6 0
          die
        ]

      ]
    ]
    [set machine3-utilisation 0]
  ]



end

to check-for-errors
  ask turtles [if product-type < 1 or product-type > 24 [write "wrong product-type"]]
  ask machines [if count turtles-here > 1 [write "more than 1 job at machine"]]
end

to set-processing-times
  let step1-all-times [5 9 20 51 11 13 20 33 8 9 18 27 14 34 24 127 19 44 29 99 34 19 23 195]
  set step1-processing-time (item (product-type - 1) step1-all-times )

  let step2-all-times [8 12 24 53 39 43 60 90 26 27 50 66 10 21 18 84 30 77 54 162 63 34 39 324]
  set step2-processing-time (item (product-type - 1) step2-all-times )

  let step3-all-times [11 12 28 121 22 16 30 68 14 13 27 69 13 16 20 200 18 30 26 135 29 18 19 173]
  set step3-processing-time (item (product-type - 1) step3-all-times )
end



to create-orders-for-current-tick
  ;; approach: create list of all arrivals
  ;; read first item from list, create order from it, remove the item from list
  ;; read first item, create order from it, remove the item etc


  while [item 0 current-arrival = ticks and length job-arrivals > 1]
    [
      create-turtles 1
      [
        set order-id  current-highest-order-number
        set wait-time 0
        setxy 0 0
        set heading 90
        set due-date item 2 current-arrival
        set arrival-in-production ticks
        set product-type item 1 current-arrival
        ;set total-time-waited 0
        set-processing-times
        set-order-wait-times
        set  current-highest-order-number  current-highest-order-number + 1
      ]
        set job-arrivals remove-item 0 job-arrivals
        set current-arrival item 0 job-arrivals
  ]
end


to set-idle-times
  ask machines with [process-step = 1] [
    ifelse count turtles-here = 0
    [set machine1-idle-time machine1-idle-time + 1 ]
    [set machine1-idle-time 0]
  ]
  ask machines with [process-step = 2] [
    ifelse count turtles-here = 0
    [set machine2-idle-time machine2-idle-time + 1 ]
    [set machine2-idle-time 0]
  ]
  ask machines with [process-step = 3] [
    ifelse count turtles-here = 0
    [set machine3-idle-time machine3-idle-time + 1 ]
    [set machine3-idle-time 0]
  ]
  let mean-idle-times-in-this-step mean [machine1-idle-time + machine2-idle-time + machine3-idle-time] of machines
  set list-of-all-idle-times lput mean-idle-times-in-this-step list-of-all-idle-times
end

to set-remaining-slack
  let combined-processing-times (step1-processing-time + step2-processing-time + step3-processing-time)
  set remaining-slack (due-date - ticks - combined-processing-times)
end

to calculate-backlog-at-queues
  ; for queue 1
  ask queues with [process-step = 1] [set backlog-at-queue1 sum [step1-processing-time] of turtles-here]
  ; for queue 2
  ask queues with [process-step = 2] [set backlog-at-queue2 sum [step2-processing-time] of turtles-here]
  ; for queue 3
  ask queues with [process-step = 3] [set backlog-at-queue3 sum [step3-processing-time] of turtles-here]
end

to create-list-of-all-variables-per-tick
  ;; create lists for csv export of all global variables per tick
  ; first we create a temporary list that contains a single row of the csv file
  let templist []
  set templist lput ticks templist
  set templist lput backlog-at-queue1 templist
  set templist lput backlog-at-queue2 templist
  set templist lput backlog-at-queue3 templist
  set templist lput number-waiting-orders-at-queue1 templist
  set templist lput number-waiting-orders-at-queue2 templist
  set templist lput number-waiting-orders-at-queue3 templist
  set templist lput sum-of-current-wait-times-at-queue1 templist
  set templist lput sum-of-current-wait-times-at-queue2 templist
  set templist lput sum-of-current-wait-times-at-queue3 templist
  set templist lput machine1-utilisation templist
  set templist lput machine2-utilisation templist
  set templist lput machine3-utilisation templist
  set templist lput machine1-idle-time templist
  set templist lput machine2-idle-time templist
  set templist lput machine3-idle-time templist
  ; create the final list
  set list-of-all-variables-per-tick lput templist list-of-all-variables-per-tick
end

to export-orders-to-csv
  ; for header row items see method "setup-global-variables-and-tables"
  if schedule-heuristic = "fcfs" [ csv:to-file "exported-orders-fcfs.csv" list-of-all-finished-orders]
  if schedule-heuristic = "SPT" [ csv:to-file "exported-orders-spt.csv" list-of-all-finished-orders]
  if schedule-heuristic = "flexible-slack" [ csv:to-file "exported-orders-flexible-slack.csv" list-of-all-finished-orders]
  if schedule-heuristic = "flex-slack-spt-with-backlog" [ csv:to-file "exported-orders-flex-slack-spt-with-backlog.csv" list-of-all-finished-orders]
  if schedule-heuristic = "slack" [ csv:to-file "exported-orders-slack.csv" list-of-all-finished-orders]
  if schedule-heuristic = "random" [ csv:to-file "exported-orders-random.csv" list-of-all-finished-orders]
  ;csv:to-file "exported-orders.csv" list-of-all-finished-orders
end

to export-variables-per-tick-to-csv
  ; for header row items see method "setup-global-variables-and-tables"
  if schedule-heuristic = "fcfs" [ csv:to-file "variables-per-tick-fcfs.csv" list-of-all-variables-per-tick]
  if schedule-heuristic = "SPT" [ csv:to-file "variables-per-tick-spt.csv" list-of-all-variables-per-tick]
  if schedule-heuristic = "flexible-slack" [csv:to-file "variables-per-tick-flexible-slack.csv" list-of-all-variables-per-tick]
  if schedule-heuristic = "flex-slack-spt-with-backlog" [csv:to-file "variables-per-tick-flex-slack-spt-with-backlog.csv" list-of-all-variables-per-tick]
  if schedule-heuristic = "slack" [ csv:to-file "variables-per-tick-slack.csv" list-of-all-variables-per-tick]
  if schedule-heuristic = "random" [ csv:to-file "variables-per-tick-random.csv" list-of-all-variables-per-tick]
  ;csv:to-file "variables-per-tick.csv" list-of-all-variables-per-tick
end
@#$#@#$#@
GRAPHICS-WINDOW
319
10
692
384
-1
-1
52.143
1
12
1
1
1
0
1
1
1
0
6
0
6
1
1
1
ticks
30.0

PLOT
5
481
223
645
Average Wait Time of Orders
Time
Average Wait
0.0
100.0
0.0
5.0
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "if empty? list-of-total-wait-times = false\n[plot mean list-of-total-wait-times]"

PLOT
5
213
221
378
Average Due Date Deviation
Time
Due Date Deviation
0.0
100.0
0.0
1.0
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "if empty? list-of-due-date-deviations = false\n[plot mean list-of-due-date-deviations]"

BUTTON
155
10
219
43
Go
if ticks < desired-duration [go]\n;if ticks < 864000 [go]
T
1
T
OBSERVER
NIL
NIL
NIL
NIL
0

BUTTON
229
10
313
43
Reset
setup
NIL
1
T
OBSERVER
NIL
NIL
NIL
NIL
1

MONITOR
606
239
692
284
Finished orders
finished-orders
1
1
11

MONITOR
6
378
156
423
Average Due Date Deviation
mean list-of-due-date-deviations
0
1
11

CHOOSER
8
10
151
55
schedule-heuristic
schedule-heuristic
"fcfs" "SPT" "flexible-slack" "flex-slack-spt-with-backlog" "slack" "random"
0

TEXTBOX
585
387
637
405
Machine 3
11
0.0
1

TEXTBOX
537
306
590
334
Queue 3
11
0.0
1

TEXTBOX
642
286
692
328
Finished \ngoods \ninventory
11
0.0
1

MONITOR
5
645
187
690
Average wait time of all orders
mean list-of-total-wait-times
1
1
11

TEXTBOX
485
385
537
413
Machine 2
11
0.0
1

TEXTBOX
379
381
432
399
Machine 1
11
0.0
1

TEXTBOX
432
308
480
336
Queue 2
11
0.0
1

TEXTBOX
327
309
379
337
Queue 1
11
0.0
1

MONITOR
321
240
410
285
Jobs in Queue 1
count turtles with [xcor = 0]
17
1
11

MONITOR
421
239
509
284
Jobs in Queue 2
count turtles with [xcor = 2]
17
1
11

MONITOR
515
240
603
285
Jobs in Queue 3
count turtles with [xcor = 4]
17
1
11

PLOT
724
138
950
282
Machine 1 utilisation
Time
Machine 1 utilisation
0.0
10.0
0.0
1.5
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "plot machine1-utilisation"

MONITOR
360
188
636
233
Total time of all orders spent in WIP / 1000
(sum list-of-total-wait-times) / 1000
0
1
11

PLOT
977
14
1202
134
Average idle time of machines
Time
Idle time
0.0
10.0
0.0
10.0
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "plot mean [machine1-idle-time + machine2-idle-time + machine3-idle-time] of machines"

MONITOR
981
589
1115
634
Avg idle time of machines
mean list-of-all-idle-times
1
1
11

BUTTON
389
501
651
534
Export orders with their variables as .CSV
export-orders-to-csv
NIL
1
T
OBSERVER
NIL
NIL
NIL
NIL
1

SWITCH
9
55
151
88
random-seed-active
random-seed-active
1
1
-1000

MONITOR
7
424
77
469
Early orders
early-orders
17
1
11

PLOT
725
286
951
436
Machine 2 utilisation
Time
Machine 2 utilisation
0.0
10.0
0.0
1.5
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "plot machine2-utilisation"

PLOT
726
438
951
588
Machine 3 utilisation
Time
Utilisation
0.0
10.0
0.0
1.5
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "plot machine3-utilisation"

PLOT
722
12
949
132
Avg machine utilisation 
Time
Machine utilisation
0.0
10.0
0.0
1.5
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "plot (machine1-utilisation + machine2-utilisation + machine3-utilisation) / 3"

BUTTON
388
633
668
666
Export global variables for each step as .CSV
export-variables-per-tick-to-csv
NIL
1
T
OBSERVER
NIL
NIL
NIL
NIL
1

PLOT
978
140
1202
284
Machine 1 idle time
Time
Idle time
0.0
10.0
0.0
10.0
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "plot machine1-idle-time"

PLOT
980
287
1202
432
Machine 2 idle time
Time
Idle time
0.0
10.0
0.0
10.0
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "plot machine2-idle-time"

PLOT
981
437
1201
584
Machine 3 idle time
Time
Idle time
0.0
10.0
0.0
10.0
true
false
"" ""
PENS
"default" 1.0 0 -16777216 true "" "plot machine3-idle-time"

MONITOR
87
424
154
469
Late orders
late-orders
17
1
11

SLIDER
5
101
177
134
backlog-limit
backlog-limit
100
2000
2000.0
100
1
NIL
HORIZONTAL

TEXTBOX
181
104
302
188
Only necessary for the \"flex-slack-spt-with-backlog\" heuristic\n--> see more in INFO section
11
0.0
1

TEXTBOX
155
57
305
85
Turn on to use a predefined random seed
11
0.0
1

SLIDER
4
176
176
209
desired-duration
desired-duration
108000
864000
432000.0
108000
1
ticks
HORIZONTAL

TEXTBOX
178
181
328
209
Choose how many steps the model should run
11
0.0
1

TEXTBOX
390
454
540
496
This button exports a list of all orders with their corresponding variables
11
0.0
1

TEXTBOX
390
577
540
633
This button exports a list of all global variables with their values in each step of the simulation
11
0.0
1

TEXTBOX
234
434
384
548
The model might run into memory issues with the standard settings of NetLogo. More in the Info tab above!
15
15.0
1

@#$#@#$#@
## HOW IT WORKS

* Press **RESET** to reset the model into its base state (needs to be done at least before the first run)
* Press **GO** to run the model
* **random-seed-active** turns on/off the usage of a predefined random seed. If on, all random numbers will be the same for each run of the simulation. This allows for reproducible results. If off, every run will have different results due to different random numbers being used. 
* **backlog-limit** is used for the "flex-slack-spt-with-backlog" heuristic. It determines the maximum backlog before a queue uses the SPT rule to reduce that backlog. The backlog is measured by the sum of processing-times in this production step of the orders waiting in this queue.
* **desired-duration** indicates how many steps/ticks the model should run


* File export (files appear in the same directory as the netlogo model file):

	* Press **export-orders-to-csv** to export to export a list of all finished orders with their respective attributes
	* Press **export-variables-per-tick-to-csv** to export the values of the global variables to a .CSV file --> one row per tick

The model might run into memory issues with the standard settings of NetLogo. We recommend 2000 MB as the memory ceiling.
To change the settings, please refer to http://ccl.northwestern.edu/netlogo/docs/faq.html#how-big-can-my-model-be-how-many-turtles-patches-procedures-buttons-and-so-on-can-my-model-contain 
Hint: First open your desired editor with admin privileges before you edit the netlogo.cfg file. Else you may receive an error message (on Windows).
@#$#@#$#@
default
true
0
Polygon -7500403 true true 150 5 40 250 150 205 260 250

airplane
true
0
Polygon -7500403 true true 150 0 135 15 120 60 120 105 15 165 15 195 120 180 135 240 105 270 120 285 150 270 180 285 210 270 165 240 180 180 285 195 285 165 180 105 180 60 165 15

arrow
true
0
Polygon -7500403 true true 150 0 0 150 105 150 105 293 195 293 195 150 300 150

box
false
0
Polygon -7500403 true true 150 285 285 225 285 75 150 135
Polygon -7500403 true true 150 135 15 75 150 15 285 75
Polygon -7500403 true true 15 75 15 225 150 285 150 135
Line -16777216 false 150 285 150 135
Line -16777216 false 150 135 15 75
Line -16777216 false 150 135 285 75

bug
true
0
Circle -7500403 true true 96 182 108
Circle -7500403 true true 110 127 80
Circle -7500403 true true 110 75 80
Line -7500403 true 150 100 80 30
Line -7500403 true 150 100 220 30

butterfly
true
0
Polygon -7500403 true true 150 165 209 199 225 225 225 255 195 270 165 255 150 240
Polygon -7500403 true true 150 165 89 198 75 225 75 255 105 270 135 255 150 240
Polygon -7500403 true true 139 148 100 105 55 90 25 90 10 105 10 135 25 180 40 195 85 194 139 163
Polygon -7500403 true true 162 150 200 105 245 90 275 90 290 105 290 135 275 180 260 195 215 195 162 165
Polygon -16777216 true false 150 255 135 225 120 150 135 120 150 105 165 120 180 150 165 225
Circle -16777216 true false 135 90 30
Line -16777216 false 150 105 195 60
Line -16777216 false 150 105 105 60

car
true
0
Polygon -7500403 true true 180 15 164 21 144 39 135 60 132 74 106 87 84 97 63 115 50 141 50 165 60 225 150 285 165 285 225 285 225 15 180 15
Circle -16777216 true false 180 30 90
Circle -16777216 true false 180 180 90
Polygon -16777216 true false 80 138 78 168 135 166 135 91 105 106 96 111 89 120
Circle -7500403 true true 195 195 58
Circle -7500403 true true 195 47 58

circle
false
0
Circle -7500403 true true 0 0 300

circle 2
false
0
Circle -7500403 true true 0 0 300
Circle -16777216 true false 30 30 240

cow
false
0
Polygon -7500403 true true 200 193 197 249 179 249 177 196 166 187 140 189 93 191 78 179 72 211 49 209 48 181 37 149 25 120 25 89 45 72 103 84 179 75 198 76 252 64 272 81 293 103 285 121 255 121 242 118 224 167
Polygon -7500403 true true 73 210 86 251 62 249 48 208
Polygon -7500403 true true 25 114 16 195 9 204 23 213 25 200 39 123

cylinder
false
0
Circle -7500403 true true 0 0 300

dot
false
0
Circle -7500403 true true 90 90 120

face happy
false
0
Circle -7500403 true true 8 8 285
Circle -16777216 true false 60 75 60
Circle -16777216 true false 180 75 60
Polygon -16777216 true false 150 255 90 239 62 213 47 191 67 179 90 203 109 218 150 225 192 218 210 203 227 181 251 194 236 217 212 240

face neutral
false
0
Circle -7500403 true true 8 7 285
Circle -16777216 true false 60 75 60
Circle -16777216 true false 180 75 60
Rectangle -16777216 true false 60 195 240 225

face sad
false
0
Circle -7500403 true true 8 8 285
Circle -16777216 true false 60 75 60
Circle -16777216 true false 180 75 60
Polygon -16777216 true false 150 168 90 184 62 210 47 232 67 244 90 220 109 205 150 198 192 205 210 220 227 242 251 229 236 206 212 183

fish
false
0
Polygon -1 true false 44 131 21 87 15 86 0 120 15 150 0 180 13 214 20 212 45 166
Polygon -1 true false 135 195 119 235 95 218 76 210 46 204 60 165
Polygon -1 true false 75 45 83 77 71 103 86 114 166 78 135 60
Polygon -7500403 true true 30 136 151 77 226 81 280 119 292 146 292 160 287 170 270 195 195 210 151 212 30 166
Circle -16777216 true false 215 106 30

flag
false
0
Rectangle -7500403 true true 60 15 75 300
Polygon -7500403 true true 90 150 270 90 90 30
Line -7500403 true 75 135 90 135
Line -7500403 true 75 45 90 45

flower
false
0
Polygon -10899396 true false 135 120 165 165 180 210 180 240 150 300 165 300 195 240 195 195 165 135
Circle -7500403 true true 85 132 38
Circle -7500403 true true 130 147 38
Circle -7500403 true true 192 85 38
Circle -7500403 true true 85 40 38
Circle -7500403 true true 177 40 38
Circle -7500403 true true 177 132 38
Circle -7500403 true true 70 85 38
Circle -7500403 true true 130 25 38
Circle -7500403 true true 96 51 108
Circle -16777216 true false 113 68 74
Polygon -10899396 true false 189 233 219 188 249 173 279 188 234 218
Polygon -10899396 true false 180 255 150 210 105 210 75 240 135 240

house
false
0
Rectangle -7500403 true true 45 120 255 285
Rectangle -16777216 true false 120 210 180 285
Polygon -7500403 true true 15 120 150 15 285 120
Line -16777216 false 30 120 270 120

leaf
false
0
Polygon -7500403 true true 150 210 135 195 120 210 60 210 30 195 60 180 60 165 15 135 30 120 15 105 40 104 45 90 60 90 90 105 105 120 120 120 105 60 120 60 135 30 150 15 165 30 180 60 195 60 180 120 195 120 210 105 240 90 255 90 263 104 285 105 270 120 285 135 240 165 240 180 270 195 240 210 180 210 165 195
Polygon -7500403 true true 135 195 135 240 120 255 105 255 105 285 135 285 165 240 165 195

line
true
0
Line -7500403 true 150 0 150 300

line half
true
0
Line -7500403 true 150 0 150 150

pentagon
false
0
Polygon -7500403 true true 150 15 15 120 60 285 240 285 285 120

person
false
0
Circle -7500403 true true 110 5 80
Polygon -7500403 true true 105 90 120 195 90 285 105 300 135 300 150 225 165 300 195 300 210 285 180 195 195 90
Rectangle -7500403 true true 127 79 172 94
Polygon -7500403 true true 195 90 240 150 225 180 165 105
Polygon -7500403 true true 105 90 60 150 75 180 135 105

plant
false
0
Rectangle -7500403 true true 135 90 165 300
Polygon -7500403 true true 135 255 90 210 45 195 75 255 135 285
Polygon -7500403 true true 165 255 210 210 255 195 225 255 165 285
Polygon -7500403 true true 135 180 90 135 45 120 75 180 135 210
Polygon -7500403 true true 165 180 165 210 225 180 255 120 210 135
Polygon -7500403 true true 135 105 90 60 45 45 75 105 135 135
Polygon -7500403 true true 165 105 165 135 225 105 255 45 210 60
Polygon -7500403 true true 135 90 120 45 150 15 180 45 165 90

square
false
0
Rectangle -7500403 true true 30 30 270 270

square 2
false
0
Rectangle -7500403 true true 30 30 270 270
Rectangle -16777216 true false 60 60 240 240

star
false
0
Polygon -7500403 true true 151 1 185 108 298 108 207 175 242 282 151 216 59 282 94 175 3 108 116 108

target
false
0
Circle -7500403 true true 0 0 300
Circle -16777216 true false 30 30 240
Circle -7500403 true true 60 60 180
Circle -16777216 true false 90 90 120
Circle -7500403 true true 120 120 60

tree
false
0
Circle -7500403 true true 118 3 94
Rectangle -6459832 true false 120 195 180 300
Circle -7500403 true true 65 21 108
Circle -7500403 true true 116 41 127
Circle -7500403 true true 45 90 120
Circle -7500403 true true 104 74 152

triangle
false
0
Polygon -7500403 true true 150 30 15 255 285 255

triangle 2
false
0
Polygon -7500403 true true 150 30 15 255 285 255
Polygon -16777216 true false 151 99 225 223 75 224

truck
false
0
Rectangle -7500403 true true 4 45 195 187
Polygon -7500403 true true 296 193 296 150 259 134 244 104 208 104 207 194
Rectangle -1 true false 195 60 195 105
Polygon -16777216 true false 238 112 252 141 219 141 218 112
Circle -16777216 true false 234 174 42
Rectangle -7500403 true true 181 185 214 194
Circle -16777216 true false 144 174 42
Circle -16777216 true false 24 174 42
Circle -7500403 false true 24 174 42
Circle -7500403 false true 144 174 42
Circle -7500403 false true 234 174 42

turtle
true
0
Polygon -10899396 true false 215 204 240 233 246 254 228 266 215 252 193 210
Polygon -10899396 true false 195 90 225 75 245 75 260 89 269 108 261 124 240 105 225 105 210 105
Polygon -10899396 true false 105 90 75 75 55 75 40 89 31 108 39 124 60 105 75 105 90 105
Polygon -10899396 true false 132 85 134 64 107 51 108 17 150 2 192 18 192 52 169 65 172 87
Polygon -10899396 true false 85 204 60 233 54 254 72 266 85 252 107 210
Polygon -7500403 true true 119 75 179 75 209 101 224 135 220 225 175 261 128 261 81 224 74 135 88 99

wheel
false
0
Circle -7500403 true true 3 3 294
Circle -16777216 true false 30 30 240
Line -7500403 true 150 285 150 15
Line -7500403 true 15 150 285 150
Circle -7500403 true true 120 120 60
Line -7500403 true 216 40 79 269
Line -7500403 true 40 84 269 221
Line -7500403 true 40 216 269 79
Line -7500403 true 84 40 221 269

x
false
0
Polygon -7500403 true true 270 75 225 30 30 225 75 270
Polygon -7500403 true true 30 75 75 30 270 225 225 270
@#$#@#$#@
NetLogo 6.0.3
@#$#@#$#@
@#$#@#$#@
@#$#@#$#@
<experiments>
  <experiment name="Scheduling test" repetitions="5" runMetricsEveryStep="true">
    <setup>reset</setup>
    <go>go</go>
    <final>export-orders-to-csv
export-variables-per-tick-to-csv</final>
    <metric>(sum list-of-total-wait-times) / 1000</metric>
    <metric>mean list-of-due-date-deviations</metric>
    <metric>mean list-of-total-wait-times</metric>
    <enumeratedValueSet variable="schedule-heuristic">
      <value value="&quot;SPT&quot;"/>
    </enumeratedValueSet>
    <enumeratedValueSet variable="desired-duration">
      <value value="100000"/>
    </enumeratedValueSet>
    <enumeratedValueSet variable="backlog-limit">
      <value value="2000"/>
    </enumeratedValueSet>
    <enumeratedValueSet variable="random-seed-active">
      <value value="false"/>
    </enumeratedValueSet>
  </experiment>
</experiments>
@#$#@#$#@
@#$#@#$#@
default
0.0
-0.2 0 0.0 1.0
0.0 1 1.0 0.0
0.2 0 0.0 1.0
link direction
true
0
Line -7500403 true 150 150 90 180
Line -7500403 true 150 150 210 180
@#$#@#$#@
0
@#$#@#$#@
