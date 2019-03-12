<!DOCTYPE html5>
<html>
<head>
 <meta charset="UTF-8">
 <script type="text/javascript" src="raphael.min.js"></script>
 <script type="text/javascript" src="raphael.icons.min.js"></script>
 <script type="text/javascript" src="wheelnav.min.js"></script>
 <title>OER - UIBK</title>
 <link rel='stylesheet' href='style.css' />
 <link rel='stylesheet' href='CSS_circumplex.css' />
 <link rel="shortcut icon" href="images/icon.ico"/>
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link href='https://fonts.googleapis.com/css?family=Petrona' rel='stylesheet'>

 <style>
	#piemenu > svg { width: 100%; height: 100%; }
	#piemenu { height: 450px; width: 450px; margin:auto; }
	@media (max-width: 450px) { #piemenu { height: 450px; width: 450px; } }

	[class|=wheelnav-piemenu-slice-basic] { fill: #003362; stroke: none; }
	[class|=wheelnav-piemenu-slice-selected] { fill: orange; stroke: none; }
	[class|=wheelnav-piemenu-slice-hover] { fill: #005baf;  stroke: none; fill-opacity: 0.77; cursor: pointer; }

	[class|=wheelnav-piemenu-title-basic] {font-weight: normal;  fill: white; stroke: none; }
	[class|=wheelnav-piemenu-title-selected] {font-weight: normal; fill: white; stroke: none; }
	[class|=wheelnav-piemenu-title-hover] {font-weight: normal; fill: white; stroke: none; cursor: pointer; }
  [class|=wheelnav-piemenu-title] > tspan {font-weight: normal; font-size: 12px; }

  /* scenario divs for circumplex */
.tab {
	background-color: white;
	float: right;
	width: 100%;
	display: none;
	border-left: 3px solid orange;
	padding: 15px;
}

/* scenario divs for circumplex */
.tabtitle {
	width: 100%;
	display: none;
	padding: 15px;
}

 </style>

</head>
<?php include_once "./includes/stylesheet-loader.php";
			include_once "./includes/top-navigation-bar.php";
?>
<body>


  <!--content bar with both left menu and content divs-->
  <section>


   <!--content-->
   <article>
    <h1>Circumplex</h1>
<!-- 		    <p class="definition">Lorem ipsum bla bla skjd skjd ksjd kjsd asjkhf askjhdf asjhf kasdhfkj asdkjfh kajdhf kajdfh adskjh ks kjsd kj kj kj kj kj kjs ksjd ksdjhf lkadhj kaljhdfkl jsahflkjsdhaf kajsdhf kladjshf kladjshf lkadjshkaldjshkaldjsh kadjsh aldhjsakldjsfbla bla</p>
		  	<p class="regular">Regular text explaining stuff bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
		  	<p class="regular">Regular text explaining stuff bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p> -->
        <p class="definition">
				Ten different challenges can be explored in detail by clicking the respective challenge in the “challenge circumplex”. By clicking on “See real-life example”, a description of a real-life situation where this problem has actually happened can be read and downloaded.
			</p><br />




        <div id="challenge1" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Similarity of Ideas</span>
            </div>
            <div class="modal-body">
              <div><p>
                Trying to improve <b>AwesomeTech’s</b> future innovation contests, <b><b>Anna</b></b> decided to discuss with <b>Bob</b> some important topics that emerged from their last experiences. <b>Bob</b>, very keen on discussing the phenomenon of idea similarity, said: <em>“I think we should find a way to deal with similar ideas. In the previous challenge, we tried to match individuals with similar ideas and bring them together so that they can integrate and improve their idea. However, I don’t think that this is possible when we discuss about participants from outside our company. Nobody would accept that.”</em> <b><b>Anna</b></b> agreed and tried to come up with alternatives. She said, <em>“How about not revealing the ideas to the audience and share them only with the evaluation team? In this case we can still be sure that the similar ideas are not stolen or copied.”</em> <b>Bob</b> was very sceptical about this option, as he was counting a lot on the participation of the community. Thus, he argued: <em>“People tend to submit ideas that are similar or even sometimes copied, so we try to take out every idea that is copied, but sometimes it's really hard to tell whether an idea is a new idea or it's just a stolen idea. How about taking the first chronologically submitted idea from the similar ones and discard the rest?”</em> Then <b><b>Anna</b></b> added: <em>“And what if the second idea is way more elaborated?”</em> and <b>Bob</b> replied: <em>“In this case, it's up to the technical specialists or experts, or in the end jury, to decide which idea they want to award and which idea they want to take out.”</em> <br /><b><b>Anna</b></b> was very skeptical, since all the options were still embedding some flaws that could contribute to a failure of the challenge and added complexity during the evaluation process. While listening to the discussion and searching for solutions, they came across a tool implemented by a company that has the following functionality: <em>“it can show all similar, to a specific one, ideas and create a corresponding basket, where all similar ideas are collected. The user can automatically create this basket and just look what is in there, and then throw things back and forth.”</em> <br /><b><b>Anna</b></b> and <b>Bob</b> concluded that even though the functionality seemed good for clustering, it is still a manual solution, which requires time and effort.
</p>
              </div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Similarity of ideas.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>



        <div id="challenge2" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Lack of shared understanding of selection criteria</span>
            </div>
            <div class="modal-body">
              <div><p>
                As the contest deadline approaches, <b>Bob</b> and his team are ready for the shortlisting process. <b>Bob</b> plans
                a workshop, which is expected to last half a day. In this workshop, the team should reduce the number
                of ideas to a reasonable amount for the next round. <b>John</b>, <b>Mike</b>, <b>Lisa</b> and <b>Sara</b> are distributed in various places around the globe and therefore, will join the meeting via Skype. The rest of the team is located at the headquarters of AwesomeTech. For the shortlisting phase, the evaluators are supposed to take into consideration the official criteria, which were announced during the description of the challenge. The criteria are novelty, coolness, feasibility und customer-value. In a previous meeting with the evaluators, <b>Bob</b> communicated upfront the criteria to the evaluators, so that they have a shared understanding. <br />The shortlisting phase starts punctually. <b>Bob</b> welcomes the participants and briefly describes the structure of the process. For the next hours, the evaluators will form teams of two and start discussing the ideas that have been assigned to them. <b>Bob</b> already knew which of the team members are familiar with which ideas and subsequently distributes them evenly among the teams. After some in-depth discussions, the teams insert their ratings across the four pre-specified criteria. <b>Bob</b> observes the discussions and aggregates the ratings in the available online tool. While going through the ratings, he realizes that many ideas are consistently rated with a 3 in a 5-point scale. As he describes in his memo <em>“In a 5-point scale, everyone crosses a 3. Can it be that the evaluators didn’t actually understand the definition of the criteria?”</em> He also notices that some teams are surprisingly faster with the evaluation than others are, even though the amount of ideas is evenly distributed. <b>Bob</b> writes in his memo: <em>“there are always cases, where the teams of two are evaluating somehow too fast”</em>. <br />As a result, when the evaluation completes, <b>Bob</b> decides to start <em>“an open discussion with the evaluators about the evaluation of the ideas to develop a shared understanding”</em>. Therefore, <b>Bob</b> asks the evaluators about the suitability and understandability of the evaluation criteria. <b>Mike</b> is the first to say:<em>“I think the evaluation criteria are very “softly” described”</em>  and <b>Sara</b> continues: <em>“Customer value is very difficult.  Actually, you cannot say which idea deserves five stars or three stars, it is difficult to assess.”</em> <b>Bob</b> listens to the evaluators carefully and takes some notes: <em>“A precise description of each criterion”</em> and <em>“In-depth discussion of the criteria prior to the shortlisting process”</em>.<br /> The workshop lasts much longer than originally planned until the team concludes to the finalists for the next round.

</p></div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Lack of shared understanding of selection criteria.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>


        <div id="challenge3" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Lack of expertise of evaluators</span>
            </div>
            <div class="modal-body">
              <div><p>
                The internal challenge of AwesomeTech ends and <b>Bob</b>, the project coordinator, invite his team to list
and sort out the submissions. For AwesomeTech the received amount of 300 ideas is unexpectedly high. It looks like the team has to work hard to narrow the decision down to the 20 finalists.<br /> <b>Bob</b> sends 100 ideas to <b>Lisa</b>, from the Marketing department. <b>Lisa</b> is involved in the process since the beginning of the contest as a Community Coordinator and has a good overview of the submitted content. As a member of the Marketing department, <b>Lisa</b> has some expertise on the customers’ needs, which helps assessing the ideas and providing valuable feedback. <b>Bob</b> tells <b>Lisa</b> that she has two weeks to evaluate the 100 ideas and submit her ratings. <b>Lisa</b> agrees and starts the evaluation.<br /> As the days pass by, <b>Lisa</b> rates a number of ideas, leaving on the side those that she could not fully comprehend. While reading the ideas repeatedly, she wonders, <em>“hum...what is this idea about?”</em> and decides to <em>“evaluate the idea quite bad, because he [the ideator] is not able to convey the message.”</em> <br />At the same time, <b>Mike</b>, from the Research & Development department, also receives 100 ideas and has to go through the same procedure. <b>Mike</b> face difficulties to rate all ideas, because he cannot fully understand the delivered message. However, he does not want to rate them badly and thinks, <em>“well, I think this might be good. But I'm not sure or is it borderline?”</em> Thus, <b>Mike</b> decides that the critical ideas should be <em>“kept in the pile”</em> and discussed during the face-to-face meeting. He knows that this approach will cost some extra time, but he wants to ensure that ideas with potential will still be taken into consideration.<br /> <b>Bob</b> is also evaluating ideas and he recognizes that he doesn't have all of the expertise. In his case, there is one idea, which he finds very interesting but he is not sure about its feasibility. As the project coordinator he can easily email some experts from other departments and ask their opinion. One of the experts replies in time and tells him that even though the idea looks nice, it is not easy to implement. Therefore, he decides to change his rating.<br /> After two weeks, the whole team gathers for the shortlisting process. <b>Bob</b> is curious to find out whether <b>Lisa</b> and <b>Mike</b> face difficulties during the evaluation. Both confirm the challenges and add that if a network of experts were available online, it would be much easier for them to evaluate all the ideas. <b>Bob</b> agrees.
              </p>
              </div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Lack of expertise of evaluators.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>



        <div id="challenge4" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Divergence of opinions among evaluators</span>
            </div>
            <div class="modal-body">
              <div><p>
                After establishing a shared understanding about the selection criteria, the jury members of AwesomeTech start discussing the ideas to define the finalists. As the moderator, <b>Bob</b> intends to keep a balance during the discussion so that all voices are heard. While going through the ideas, <b>Lisa</b> is very skeptical about a high-rated idea and nodded disagreement. <b>Bob</b> notices <b>Lisa</b>’s reaction, but he is aware that <b>Lisa</b> is too shy to express her opinion. <b>Bob</b> asks her to express her disagreement, as he always feels that a moderator has to stay alerted; if someone wants to say something it should be said, especially in cases that the person has a quieter voice. <b>Lisa</b> feels awkward, as her manager <b>Jeff</b> is also joining the discussion. He is one of those that gave good ratings to the idea. She expresses her concerns, but her arguments puzzle the team. Some members find her concerns reasonable, while others are still not convinced. The discussion heats up and conflicts emerge. <b>Bob</b> takes over and says: <em>“I would like to remind you that this is not about forcing your opinion but identifying the best idea. I would propose to control your emotions and reach an agreement.”</em> Even though he disagrees with <b>Lisa</b>, <b>Jeff</b> understands her concerns and asks <b>John</b> and <b>Mike</b>’s opinion, as they are experts in this area. They both agree with <b>Lisa</b>. Although the rest of the team is not happy, they decide to discard the idea. <br />Moving forward, <b>Bob</b> notices that <b>Brad</b> is the only one rating a specific idea with a five, while the ratings from the rest of the team range between 2 and 3. <b>Brad</b> takes over and says <em>“I know this guy. We used to work for several months together. He has innovative ideas and this particular has high potential in different levels.”</em> The others are not convinced and the idea is discarded. After a long discussion round, the team defines the finalists for the next round. While observing the conflicts, <b>Bob</b> realizes that adjustments are required to overcome the conflicts. Therefore, he writes down: <em>“Maybe by establishing an anonymous voting everybody would rate the ideas without feeling biased or influenced by the others.” </em> He also likes the idea of a “veto right”: <em>“If I am the only one in the team to disagree then the idea is out.”</em> but while reconsidering he notices: <em>“would that work if some jury members have different expertise or have not dealt with this specific topic to date?”</em><br /> <b>Bob</b> concludes that he should maybe talk to his team and brainstorm for the right solution.
</p></div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Divergence of opinions among evaluators.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>



        <div id="challenge5" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Too many ideas to be processed</span>
            </div>
            <div class="modal-body">
              <div><p>
                AwesomeTech just reached the submission deadline of another successful innovation contest. As this was not his first contest, <b>Bob</b> knew that it was worth promoting the contest to minimize the risk of low participation. However, he did not expect the outcomes. As, <b>Bob</b> did not know how to manage the situation, he thought about cancelling the competition, since the company would not have the capacity
                to process all ideas sufficiently.<br /> In a meeting, <b>Bob</b> said to his colleagues <b>Jeff</b> and <b>Lisa</b>: <em>“We never received more than, maybe, 300 submissions in a competition, but now we have 5000. We need to come up with a good plan to minimize the effort but still ensure quality. The ideas should be evaluated in detail to avoid missing out the good ones. Do you have any recommendations on how to achieve that?”</em> <b>Lisa</b> said: <em>“Well, I read through some of the ideas and realized that some were pretty similar, while others were not comparable.”</em> <b>Jeff</b> stepped in and argued: <em>“We could group them according to their topics. At least the obvious ones.”</em> <b>Bob</b> replied: <em>“You’re right, but still we would need to read through the ideas. What if we define some categories or labels and ask the participants to add some keywords or tags? Is that too much to ask for? And what if not everybody is willing to support us?”</em> <b>Lisa</b> thought that they need some support by externals for the idea elimination, so she added: <em>“Maybe we don’t need categories, but direct evaluations if an idea is overall “bad” or “good”. These evaluations might not necessarily come from the ideators, but from some externals. We could ask anyone for help and afterwards we just take the top 300 and check them for feasibility and good features.”</em> <b>Bob</b> answered: <em>“Maybe you’re right, we just need to find a few really good ideas anyway, as we cannot implement them all. We don’t have the resources, but if we ask some customers for evaluations we can assure that the selected ideas are definitely interesting.”</em> <b>Jeff</b> added that they only have two weeks to identify five winning ideas and adding more evaluators would definitely help to meet the deadline. <b>Lisa</b> concluded the meeting:<em> “In the worst case we need to extend the deadline.”</em>
</p>              </div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Too many ideas to be processed.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>




        <div id="challenge6" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Fear of missing out on good ideas</span>
            </div>
            <div class="modal-body">
              <div><p>
                The submission phase of the current contest had just ended with around 1000 submission. As the jury team has demanded to receive only the 40 best ideas for detailed assessment, <b>Bob</b> and his team have a lot of work to do within the next four weeks. <b>Bob</b> sits together with <b>Anna</b>, the head of the innovation division from AwesomeTech, and establishes five cut-off criteria, which will help them shortlisting ideas more efficiently, given the short time span they have. Having determined the criteria, <b>Bob</b> has a meeting with his team, in which he explains all the criteria and instructs the evaluators to eliminate the ideas that do not meet all criteria.<br /> After one week of evaluation, the team manages to eliminate a significant amount of ideas, leaving only 200 for further consideration. When meeting with <b>Anna</b>, <b>Bob</b> shares the good news, ensuring that the innovation department will meet the deadline. Two days after their meeting, <b>Bob</b> receives a call from <b>Anna</b>, in which she says, <em>“I’m getting a bit nervous here. We want to make sure that no good ideas were eliminated, so can you guys go back and check the eliminated ideas?”</em> Even though <b>Bob</b> is quite sure that they are doing everything correctly, he instructs his evaluation team to double-check all ideas so they go back and determine if any of the ideas should be added back to the pile. <br />After that, the evaluation team proceeds with analyzing the remaining 200 ideas. In this phase, the evaluators have to read all ideas in detail and rank them according to the criteria, so that they can conclude to the 40 finalists. They also take into account the number of votes each idea got from the crowd in the platform, but that is not a key determinant. As argued by <b>Paul</b>, <em>“only because an idea has low or high amount of votes, or has not received many comments, it does not mean that it is a bad idea, especially if it’s a radical”</em>. Therefore, he instructs his team to check if they are overlooking something because the idea is somehow written messy. The goal is to solve misunderstanding and avoid excluding meaningful ideas, which might be beneficial. After going through the ideas with the fine-grained criteria, <b>Bob</b>’s team proposed 65 promising ideas for the jury team. After discussing the issue within AwesomeTech, <b>Paul</b> manages to convince the jury team that they need to look at more than 40 ideas.
</p>              </div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Fear of missing out good ideas.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>


        <div id="challenge7" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Lack of objectivity</span>
            </div>
            <div class="modal-body">
              <div><p>
                AwesomeTech is organizing the next innovation contest. At the end of the submission phase, AwesomeTech has received around 100 submissions. Since the guidelines about the format of the submission are vague, <b>Bob</b> realizes that the submissions vary greatly in terms of content. As he fears that the evaluation requires extra effort, <b>Bob</b> decides to manually edit the idea descriptions so they have similar format. In addition, he also decides to remove six submissions due to poor elaboration. He does not want to present someone, who takes their time to evaluate with an idea that is so weak in the degree of elaboration. <br />After modifying the submissions, <b>Bob</b> distributes them among the experts to obtain at least two ratings for each idea. After receiving sufficient evaluations, <b>Bob</b> realizes that the process of finding the best ideas is a matter of perspective and opinions. Given the distinct ratings, he realizes that the determination of a winning idea is going to be more difficult than originally expected. He realizes that there are people who have a positive view of the idea and others who tend to have a more negative view and that everyone has his or her BIAS, assessment and position, which makes the idea evaluation a challenging task. <b>Bob</b> decides to incorporate the community voting on the aggregated ratings. When doing so, he is even more confused, because some clearly bad ideas have many positive votes. Looking further into some of the ideators’ activity on social media, he sees that those with higher ratings send messages to their contacts saying <em>“hey look, I posted an idea to this innovation contest, it would be really important to me if you could vote on it”</em>. The problem is that, in his opinion, these are ideas that were “pushed” for network reasons and not quality reasons, and they should in no way move forward, given that they are completely unrealistic. Finally, he calculates the average score of the expert ratings and obtains a ranking, from which the 20 best ideas are selected for further consideration. However, he has to add three extra submissions against his will, because <b>Anna</b>, the Chief of Innovation Officer (CIO), had a quick look at the submissions and said that these 3 must at any costs be in the shortlist, regardless of their scores.
</p>              </div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Lack of Objectivity.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>





        <div id="challenge8" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Inadequate amount of idea content</span>
            </div>
            <div class="modal-body">
              <div><p>
                AwesomeTech organizes the next innovation contest. Before launching the contest, <b>Bob</b> calls in his team of experts for a meeting to explain them their role during the contest. His first orientation to the team is to take the comments on the ideas into consideration, because at first sometimes ideas are not sufficiently elaborated, but with the comments, value is added and the ideas improve. He also mentions that when ideators notice that the experts are active in the platform and check submissions, they will want to submit more. Another advice <b>Bob</b> gives to the team is to check if there is an image included in the idea. In addition, the experts should also skim through the idea description to see if the idea has anything to do with the contest. In the following week, the contest is launched.<br /> The experts try their best to look into the idea descriptions, check if there are relevant images and provide feedback on the platform to motivate participants. However, as the number of ideas grows, the task becomes increasingly challenging. After the submission period is over, <b>Bob</b> calls in the team of experts to guide them through the next steps. As they have about 200 submissions, <b>Bob</b>’s first advice is to get rid of submissions with irrelevant or inappropriate images, so that they can quickly narrow down the number of ideas. <b>Bob</b> reminds them that there are some sloppy submissions since some people pay attention to the instructions and try to understand what they’re asked for, while others are not interested. All experts agree that the submissions that are hard to understand because of broken English or bad formulation should be eliminated, since the effort to understand and assess the idea is high. After going through the elimination phase, the experts narrow down the number of submissions to 100. <br />The next phase is to score the ideas according to a multi-criteria rating scale elaborated by the team. <b>Lisa</b>, one of the experts, mentions that some ideas are basically the same thing, and she wonders whether they can bring the similar submissions together. <b>John</b>, another expert, encounters the opposite situation, in which a submission has different concepts in it, and proposed to split these ideas. <b>Mike</b> also mentions that he found some ideas, which do not have the same content, but “complement one another and he wonders if these ideas should be merged. After listening to their considerations, <b>Bob</b> and his team come to a consensus that they should restructure the ideas in order to better assess them. Nevertheless, <b>Bob</b> is a little frustrated with the process, because in his opinion the experts spend far too much time on tasks such as eliminating irrelevant ideas or checking for similarity. <br />He wonders if in the future they can find a way to automate these tasks.
</p>              </div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Inadequate amount of Idea Content.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>





        <div id="challenge9" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Missing crowd opinion</span>
            </div>
            <div class="modal-body">
              <div><p>
                <b>Anna</b> and <b>Bob</b> discuss the details of the next innovation contest of AwesomeTech. As always, they plan to invite the team of experts they’ve been working with to evaluate the submissions. <b>Anna</b> thinks it might be interesting to incorporate crowd votes and comments in the platform. <b>Bob</b> disagrees, since in the latest contests, he did not have a very good experience. He argues: <em>“we should keep it closed. If we have comments on the ideas, we will also have to make use of the comments in the evaluation. This then will make the evaluation more time-consuming, because the experts will have to read through the comments.”</em> <b>Anna</b> replies: <em>“But that might give us a good insight on what the customers want, and maybe it’s worth it to have our experts putting a little more effort into their evaluations. Maybe we can incorporate a voting system.”</em> <b>Bob</b> <em>says, “In the last contests we thought we could consider the crowd votes, but in the end they were not the main decision makers. In that particular case, the topic was too complex for the crowd. We want an idea that not only sounds good, but is also feasible” </em>. <em>“Hmm...”</em>, says <b>Anna</b>, <em>“maybe we’re not properly ‘harnessing’ the wisdom of the crowd. What if instead of asking them to vote on the best ideas, we tell them to downvote the ideas they don’t like?”</em> <b>Bob</b> is not convinced since the crowd might engage in ‘bad’ behavior. He proposes though to make use of the voting system, by taking into consideration only the final ranking to eliminate the least voted idea. Another option would be to use the crowd vote as a separate criterion, such as ‘popularity’. Finally, they choose to maintain the likes and comments for now, but both remain skeptical on which is best way to exploit crowd voting in AwesomeTech’s contests.
</p>              </div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Missing crowd opinion.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>





        <div id="challenge10" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                            <button class="close-button" onclick="closeThisModal(this)">&times;</button>
              <span>Misfit of rating scales</span>
            </div>
            <div class="modal-body">
              <div><p>

                Before launching their innovation contest, the members of the innovation division of AwesomeTech held a meeting to define the details of the challenge. One very important topic was the definition of the selection criteria. After a short brainstorming session, the members collect about 17 criteria. While discussing the criteria, <b>Bob</b> affirms, <em>“it doesn’t make sense to evaluate 300 ideas with 17 criteria, that’s too much at this point”</em>. Everyone agrees and they proceed with a short deliberation, after which they define the final five criteria: Innovativeness, feasibility, customer value, market potential and elaborateness. The meeting ends and a few days later, the contest is launched. <br />At the end of the submission period, the expert team starts evaluating the ideas on a 5-point Likert scale. Soon, <b>Bob</b> reviews the first assessments and realizes that the experts ratings vary significantly. The same idea was given an overall score of 2.5 by <b>Lisa</b>, 4 by <b>John</b> and 5 by <b>Mike</b>. <b>Bob</b> calls for another meeting to solve this issue. At the update meeting, <b>Brad</b> affirms: <em>“rating with those criteria is not realistic, customer value is relatively difficult to assess, market potential is super difficult to assess... so if you ask three people, you'll probably get different assessments. That is very complex.” </em><b>Mike</b> complements: <em>“it’s probably not working out because the evaluation criteria are softly described. There are people who evaluate very positively, and there are people who evaluate very negatively”</em>. <b>Bob</b> decides to average the ratings and define the 30 finalist ideas based on the highest scores. However, when seeing the final ranking, <b>Bob</b> notices that an idea he finds incredibly promising did not make it. Thinking the idea has a chance to win, <b>Bob</b> changes the ranking and includes it in the shortlist.<br /> At the shortlisting meeting, <b>Bob</b> presents the ideas to the experts and they proceed to nominate their favorites. After processing all votes, <b>Bob</b> presents the ranking to the evaluators. To his surprise, no one seems truly satisfied with the result, because all evaluators feel that it does not really reflect their opinion. Reflecting on the dissatisfaction of the shortlisting phase, <b>Bob</b> starts preparing the materials for the winner determination with the senior-level managers of AwesomeTech.
                <b>Bob</b> adds more holistic, coarse-grained criteria, such as a simple “would you invest?” question, in order to incorporate the intuitive assessments. <br />At the winner determination meeting every submission is discussed, and since there is no ranking included, the jury discusses whether there should be just one winner or more, given the high level of submissions.
</p>              </div>
            </div>
            <div class="modal-footer">
              <a href="./PDFs/Misfit of rating scales.pdf" target="_blank" class="downloadLink">Download this text as PDF</a>
            </div>
          </div>
        </div>



        <!--grey frame-->
        <div class="frame">

          <!--tab titles above the circumplex frame-->
          <div id="100" class="tabtitle" style="display: block;">
           <h2>Similarity of Ideas</h2>
          </div class="tab">

          <div id="200" class="tabtitle">
           <h2>Lack of shared understanding of selection criteria</h2>
          </div class="tab">

          <div id="300" class="tabtitle">
           <h2>Lack of expertise of evaluators</h2>
          </div class="tab">

          <div id="400" class="tabtitle">
           <h2>Divergence of opinions among evaluators</h2>
          </div class="tab">

          <div id="500" class="tabtitle">
           <h2>Too many ideas to be processed</h2>
          </div class="tab">

          <div id="600" class="tabtitle">
           <h2>Fear of missing out on good ideas</h2>
          </div class="tab">

          <div id="700" class="tabtitle">
           <h2>Lack of objectivity</h2>
          </div class="tab">

          <div id="800" class="tabtitle">
           <h2>Inadequate amount of idea content</h2>
          </div class="tab">

          <div id="900" class="tabtitle">
           <h2>Missing crowd opinion</h2>
          </div class="tab">

          <div id="1000" class="tabtitle">
           <h2>Misfit of rating scales</h2>
          </div class="tab">

          <!-- square div containing the circumplex -->
  <div class="piecontainer">
<div id='piemenu' data-wheelnav
 data-wheelnav-slicepath='DonutSlice'
 data-wheelnav-navangle='270'
 data-wheelnav-cssmode
 data-wheelnav-init>
  <div data-wheelnav-navitemtext='Similarity' class="link" onmouseup="myfunction('1')"></div>
  <div data-wheelnav-navitemtext='Understanding' class="link"  onmouseup="myfunction('2')"></div>
  <div data-wheelnav-navitemtext='Expertise' class="link" onmouseup="myfunction('3')"></div>
  <div data-wheelnav-navitemtext='Divergence' class="link" onmouseup="myfunction('4')"></div>
  <div data-wheelnav-navitemtext='Ideas' class="link" onmouseup="myfunction('5')"></div>
  <div data-wheelnav-navitemtext='FOMO' class="link" onmouseup="myfunction('6')"></div>
  <div data-wheelnav-navitemtext='Objectivity' class="link" onmouseup="myfunction('7')"></div>
  <div data-wheelnav-navitemtext='Content' class="link" onmouseup="myfunction('8')"></div>
  <div data-wheelnav-navitemtext='Crowd' class="link" onmouseup="myfunction('9')"></div>
  <div data-wheelnav-navitemtext='Scales' class="link" onmouseup="myfunction('10')"></div>
</div>
  </div class="piecontainer">

          <!-- tabs with different scenarios -->
          <div id="1" class="tab" style="display: block;">
           <div class="container">
            <blockquote cite="Bob, Project Manager"><p><i>
I think we should find a way to deal with similar ideas. In the previous challenge, we tried to match individuals with similar ideas and bring them together so that they can integrate and improve their idea. However, I don’t think that this is possible when we discuss about participants from outside our company. Nobody would accept that.
            </i></p></blockquote>
          </div>
           <p class="regular">What if there exist many similar and redundant ideas after idea generation?. In such a case, evaluators face the following problems: Ideators might have copied the idea from a fellow participant and ideas are essentially the same. Moreover, a certain aspect of an idea might be good whereas another aspect might be good in another very similar ideas. But, the quality of each idea by its own is low.<br /> In addition, evaluators might face disagreements about the degree of idea similarity. Such challenges among others can increase the time and effort required for selecting the most suitable ideas. Now, evaluators need to find innovative ways how to deal with these problems. </p>
           <p><img src=".\images\SelectionChallenges\similarity of ideas.png" width="100%"></p>

          <button class="show-more-button" onclick="openFullChallenge(challenge1)">See real-life example</button>
        </div class="tab">

        <div id="2" class="tab">
         <div class="container">
          <blockquote cite="Mike, R&D Department"><p><i>
            I think the evaluation criteria are very “softly” described.
          </i></p></blockquote>
        </div>
         <div class="clearfix">
           <div class="box">
            <p class="regular">
              What if the evaluators have not fully understood the definition or the essence of the selection criteria?<br /> When the selection criteria are too broadly or very strictly defined, the evaluators might face challenges on how to proceed with the evaluation of each idea. Selection criteria like customer value or novelty could include various attributes and do not fully facilitate an optimal evaluation. <br />Furthermore, the selection criteria might be perceived differently according to the evaluators’ experience, background, expectations, etc. To address these issues, the evaluators should develop adequate strategies to establish a shared understanding prior to idea evaluation.
            </p>
          </div>
          <p ><img src=".\images\SelectionChallenges\Lack of shared understanding of selection criteria.png" width="40%" class="box"></p>
        </div>

        <button class="show-more-button" onclick="openFullChallenge(challenge2)">See real-life example</button>
      </div class="tab">

      <div id="3" class="tab">
       <div class="container">
        <blockquote cite="Lisa, Marketing Department"><p><i>hum...what is this idea about?</i></p></blockquote>
      </div>
      <div class="container">
       <blockquote cite="Mike, R&D Department"><p><i>Well, I think this might be good. But I'm not sure or is it borderline?</i></p></blockquote>
     </div>
       <div class="clearfix">
         <div class="box">
           <p class="regular">
What if the evaluators do not have the required expertise to evaluate all ideas? <br />Evaluating  ideas requires a certain level of expertise, especially when the ideas require domain-specific knowledge. In many cases, though, it is impossible for the evaluation team to consist of that many experts In these cases, the evaluators might dismiss ideas they do not fully comprehend or request additional time for completing the evaluation. <br />The evaluation team should take such challenges into consideration and establish a network of experts that could support the overall process and ensure that the quality standards remain high.
           </p>
         </div>
         <p ><img src=".\images\SelectionChallenges\Lack of expertise of raters.png" width="60%" class="box"></p>
       </div>
      <button class="show-more-button" onclick="openFullChallenge(challenge3)">See real-life example</button>
    </div class="tab">



    <div id="4" class="tab">
     <div class="container">
      <blockquote cite="Bob, Project Manager"><p><i>
I would like to remind you that this is not about forcing your opinion but identifying the best idea. I would propose to control your emotions and reach an agreement.
      </i></p></blockquote>
    </div>
     <div class="clearfix">
       <div class="box">
         <p class="regular">
           What if the evaluators have incongruent opinions on which ideas should be further pursued? <br />When the evaluators are selecting the best ideas might have diverse opinions due to different levels of expertise, lack of shared understanding or personal goals. <br />Cognitive biases pose another obstacle, as the evaluators might be influenced by their supervisors and feel imposed to agree with a certain opinion. In such cases, the evaluators or the moderator should find the right solution in order to maintain the balance and derive adequate compromises.

         </p>

       </div>
       <p><img src=".\images\SelectionChallenges\Divergence of opinions among raters.png" width="60%" class="box"></p>
     </div>

    <button class="show-more-button" onclick="openFullChallenge(challenge4)">See real-life example</button>
  </div class="tab">

  <div id="5" class="tab">
   <div class="container">
      <blockquote cite="Bob, Project Manager"><p><i>
We never received more than, maybe, 300 submissions in a competition”, but now we have 5000. We need to come up with a good plan to minimize the effort but still ensure quality.
      </i></p></blockquote>
    </div>
   <div class="clearfix">
     <div class="box">
       <p class="regular">
What if the innovation contest results into numerous ideas for evaluation? <br />When an innovation contest generates an unexpectedly high amount of ideas, the evaluation process becomes challenging. As human resources are usually very limited, the evaluation team has find efficient ways to deal with the workload.
        </p>

     </div>
     <p><img src=".\images\SelectionChallenges\Too many ideas to be processed.png" width="60%" class="box"></p></div>
    <button class="show-more-button" onclick="openFullChallenge(challenge5)">See real-life example</button>
  </div class="tab">

  <div id="6" class="tab">
   <div class="container">
      <blockquote cite="Anna, Head of Innovation Department"><p><i>
I’m getting a bit nervous here. We want to make sure that no good ideas were eliminated, so can you guys go back and check the eliminated ideas?</i></p></blockquote>
    </div>
   <div class="clearfix">
     <div class="box">
       <p class="regular">
         What if the evaluation is so demanding, that the evaluators exclude ideas that have further potential? <br />As idea contests can result in a large amount of submissions, it can be hard to adequately process every single idea. <br /> The process to assess every single submission in detail requires increasing time, effort and resources. In such cases the evaluators have to deploy efficient and effective strategies that can support the reduction of the ideas while at the same time ensure that all good ideas are included.

       </p>

     </div>
     <p><img src=".\images\SelectionChallenges\Fear of missing out on good ideas.png" width="60%" class="box"></p></div>

    <button class="show-more-button" onclick="openFullChallenge(challenge6)">See real-life example</button>
  </div class="tab">

  <div id="7" class="tab">
   <div class="container">
      <blockquote cite="Bob, Project Manager"><p><i>
These are ideas that were “pushed” for network reasons and not quality reasons, and they should in no way move forward, given that they are completely unrealistic.
      </i></p></blockquote>
    </div>
   <div class="clearfix">
     <div class="box">
       <p class="regular">
What if the evaluators assess the ideas according to their own biases instead of objective criteria? <br />The involvement of several evaluators in the idea selection process results in conflicting interests. Many evaluators select ideas according to their taste, expertise and personal interests. Thus, the assessment often can be influenced by personal relationships between the evaluators and ideators, certain interest on the domain or other subjective factors.<br /> In such cases, the team has to find alternative ways to minimize the subjectivity in the evaluation process.</p>

     </div>
     <p><img src=".\images\SelectionChallenges\Lack of objectivity.png" width="60%" class="box"></p></div>

    <button class="show-more-button" onclick="openFullChallenge(challenge7)">See real-life example</button>
  </div class="tab">

  <div id="8" class="tab">
   <div class="container">
      <blockquote cite="Bob, Project Manager"><p><i>
Some people pay attention to the instructions and try to understand what they’re asked for, while others are not interested.</i></p></blockquote>
    </div>
   <div class="clearfix">
     <div class="box">
       <p class="regular">
What if the idea content does not comply with the contest expectations?<br /> Even in cases, in which the submission requirements are set clear, ideators submit ideas that do not fully meet the expectations. Some ideas are too long and complex, while others are short, poorly written or lack of important characteristics. <br />Such differences in the content increase the level of complexity and require additional effort by the evaluators.
       </p>

     </div>
     <p><img src=".\images\SelectionChallenges\Inadequate amount of idea content.png" width="60%" class="box"></p></div>

    <button class="show-more-button" onclick="openFullChallenge(challenge8)">See real-life example</button>
  </div class="tab">

  <div id="9" class="tab">
   <div class="container">
      <blockquote cite="Bob, Project Manager"><p><i>
In that particular case, the topic was too complex for the crowd. We want an idea that not only sounds good, but is also feasible.
      </i></p></blockquote>
    </div>
   <div class="clearfix">
     <div class="box">
       <p class="regular">What if the crowd has the opportunity to influence the idea assessment? <br /> The submission of numerous ideas often urges the evaluators to think of additional strategies to facilitate an efficient and effective process. In several cases, taking into consideration the opinion of the crowd can be a good solution, as the likes and comments can easily emphasize the strengths and weaknesses of an idea. <br />Unfortunately, the opinion of the crowd can often be biased or misleading especially when the selection criteria focus on attributes like feasibility or relevancy. To balance the pros and the cons, the team has to find the right techniques in order to make use of the wisdom of the crowd while minimizing the potential biases. </p>

     </div>
     <p><img src=".\images\SelectionChallenges\Missing crowd opinion.png" width="60%" class="box"></p></div>

    <button class="show-more-button" onclick="openFullChallenge(challenge9)">See real-life example</button>
  </div class="tab">

  <div id="10" class="tab">
   <div class="container">
      <blockquote cite="Brad, Innovation Department"><p><i>So if you ask three people, you'll probably get different assessments. That is very complex.</i></p></blockquote>
    </div>
   <div class="clearfix">
     <div class="box">
       <p class="regular">
What if the selection criteria do not fit the evaluation expectations?<br /> Often the selection criteria cannot fully assist the evaluation process especially when they 1) are not strictly defined, 2) are too many, 3) are too fine-grained or 4) are too coarse-grained.<br /> In such cases the evaluation team has to determine the ideal outcome and decide accordingly the right criteria to facilitate the process. </p>
     </div>
     <p><img src=".\images\SelectionChallenges\Misfit of ratings scales.png" width="80%" class="box"></p></div>

    <button class="show-more-button" onclick="openFullChallenge(challenge10)">See real-life example</button>
  </div class="tab">


</div class="frame">
<!-- 		    <p class="important">Lorem ipsum bla bla skjd skjd ksjd kjsd asjkhf askjhdf asjhf kasdhfkj asdkjfh kajdhf kajdfh adskjh ks kjsd kj kj kj kj kj kjs ksjd ksdjhf lkadhj kaljhdfkl jsahflkjsdhaf kajsdhf kladjshf kladjshf lkadjshkaldjshkaldjsh kadjsh aldhjsakldjsfbla bla</p>
 <p class="regular">Regular text explaining stuff bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p> -->

</article>
<!--empty div to keep the footer at the bottom-->
<div id="empty"></div>
</section>


<script>
	function myfunction(slice) {

	    var i, tab, link, tabtitle;
      tab = document.getElementsByClassName("tab");
      tabtitle = document.getElementsByClassName("tabtitle");
	    for (i = 0; i < tab.length; i++) {
        tab[i].style.display = "none";
        tabtitle[i].style.display = "none";
		}

		link = document.getElementsByClassName("link");
    		for (i = 0; i < link.length; i++) {
      		link[i].className = link[i].className.replace(" active", "");
    	}

      document.getElementById(slice).style.display = "block";
      document.getElementById(slice*100).style.display = "block";
	    event.currentTarget.className += " active";

	}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.js"
integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
crossorigin="anonymous"></script>
<?php include_once "./includes/javascript-loader.php" ?>
<script src="JS_circumplex.js"></script>

<script>

var piemenu = new wheelnav('piemenu');
piemenu.clockwise = false;
piemenu.wheelRadius = piemenu.wheelRadius * 0.9;
piemenu.createWheel();
piemenu.setTooltips(['Similarity of ideas','No shared understanding of criteria','Lack of expertise of evaluators','Divergence of opinions among evaluators','Too many ideas to be processed','Fear of missing out on good ideas','Lack of objectivity','Inadequate amount of idea content','Missing crowd opinion','Misfit of rating scales']);

</script>

</body>
</html>
