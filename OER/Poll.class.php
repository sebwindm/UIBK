<?php
// Set the value of $localTestingModeOn to 1 to test code locally 
// Set $localTestingModeOn to 0 or any othe value for using the code on the webserver
$localTestingModeOn = 1;

if ($localTestingModeOn == 1){
	// db local
  	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "matrixowo";
} else {
	// db server
	 $servername = "localhost";
	 $username = "id4047401_root";
	 $password = "123654";
	 $dbname = "id4047401_matrixowo";
}



// local: localhost; root; ""; matrixowo
// server: localhost; id4047401_root; 123654; id4047401_matrixowo

		
// create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
			
// check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

// ---------------
// WOW-NOW-HOW MATRIX
// ---------------

// displaying result of a query given 2 parameters
function display($idea_id, $option_id){
	global $conn;
		
	$sql = "SELECT vote_count FROM votes WHERE idea_id = ".$idea_id." AND option_id = ".$option_id."";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	return $row[0];
}

// displaying shorter description of an idea, given idea_id
function displayless($idea_id){
	global $conn;
		
	$sql = "SELECT show_less FROM ideas WHERE id = ".$idea_id." ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	echo $row[0], "<br>";
}

// displaying longer description of an idea, given idea_id
function displaymore($idea_id){
	global $conn;
		
	$sql = "SELECT show_more FROM ideas WHERE id = ".$idea_id." ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	echo $row[0], "<br>";
}

// displaying title of an idea, given idea_id
function displaytitle($idea_id){
	global $conn;
		
	$sql = "SELECT name FROM ideas WHERE id = ".$idea_id." ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	echo $row[0], "<br>";
}
	
// get form data and vote
// $amount variable is the number of ideas
function vote($amount){
	global $conn;
	
for ($i = 1; $i <= $amount; $i++){
	
	$wow_vote = 0;
	$now_vote = 0;
	$how_vote = 0;
	$nope_vote = 0;
	
    if (isset($_POST[$i]) && $_POST[$i] == 'Wow') {
    $wow_vote = 1;
	} else {
	$wow_vote = 0;}

    if (isset($_POST[$i]) && $_POST[$i] == 'Now') {
    $now_vote = 1;
	} else {
	$now_vote = 0;}
	
    if (isset($_POST[$i]) && $_POST[$i] == 'How') {
    $how_vote = 1;
	} else {
	$how_vote = 0;}

    if (isset($_POST[$i]) && $_POST[$i] == 'Nope') {
    $nope_vote = 1;
	} else {
	$nope_vote = 0;}
	
	$sql1 = "SELECT vote_count FROM votes WHERE option_id = 1 AND idea_id = ".$i."";
	$result1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_row($result1);
	
	$sql2 = "SELECT vote_count FROM votes WHERE option_id = 2 AND idea_id = ".$i."";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_row($result2);
	
	$sql3 = "SELECT vote_count FROM votes WHERE option_id = 3 AND idea_id = ".$i."";
	$result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_row($result3);
	
	$sql4 = "SELECT vote_count FROM votes WHERE option_id = 4 AND idea_id = ".$i."";
	$result4 = mysqli_query($conn, $sql4);
	$row4 = mysqli_fetch_row($result4);
	
	$wow_updated = $wow_vote + $row1[0];
	$now_updated = $now_vote + $row2[0];
	$how_updated = $how_vote + $row3[0];
	$nope_updated = $nope_vote + $row4[0];
	
	$conn->query($sql1 = "UPDATE votes SET vote_count = ".$wow_updated." WHERE option_id = 1 AND idea_id = ".$i."");
	$conn->query($sql2 = "UPDATE votes SET vote_count = ".$now_updated." WHERE option_id = 2 AND idea_id = ".$i."");
	$conn->query($sql3 = "UPDATE votes SET vote_count = ".$how_updated." WHERE option_id = 3 AND idea_id = ".$i."");
	$conn->query($sql4 = "UPDATE votes SET vote_count = ".$nope_updated." WHERE option_id = 4 AND idea_id = ".$i."");

}
				
}

// function highlight returns most voted cell for a given idea
function highlight($idea){
	global $conn;
	
	$sql1 = "SELECT vote_count FROM votes WHERE option_id = 1 AND idea_id = ".$idea."";
	$result1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_row($result1);

	$sql2 = "SELECT vote_count FROM votes WHERE option_id = 2 AND idea_id = ".$idea."";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_row($result2);
	
	$sql3 = "SELECT vote_count FROM votes WHERE option_id = 3 AND idea_id = ".$idea."";
	$result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_row($result3);
	
	$sql4 = "SELECT vote_count FROM votes WHERE option_id = 4 AND idea_id = ".$idea."";
	$result4 = mysqli_query($conn, $sql4);
	$row4 = mysqli_fetch_row($result4);			
	
	$wow = $row1[0];
	$now = $row2[0];
	$how = $row3[0];
	$nope = $row4[0];
	
	$highlight = 0;
	
	if($wow >= $now && $wow >= $how && $wow >= $nope){
		$highlight = 1;
	}
	
	if($now > $wow && $now >= $how && $now >= $nope){
		$highlight = 2;
	}
	
	if($how > $wow && $how > $now && $how >= $nope){
		$highlight = 3;
	}
	
	if($nope > $wow && $nope > $now && $nope > $how){
		$highlight = 4;
	}			
	
	return $highlight;
}

// function determining the most voted cell for a given idea and echoing the html line containing div class necessary for the filtering js script
function filter($idea){
	$result = highlight($idea);
	$filter = "default";
	
	if($result == 1){
		$filter = "filterwow";
	}
	if($result == 2){
		$filter = "filternow";
	}	
	if($result == 3){
		$filter = "filterhow";
	}
	if($result == 4){
		$filter = "filternope";
	}
	
	return $filter;
}

// creating matrix and displaying results using display()
function matrix($idea){

	if(highlight($idea) == 1){
			echo
	'<table class="matrix">
    <tr>   	
        <td class="td1">
           Easily implemented
        </td>
        <td class="td2">
            <div class="now">', "NOW: ",  display($idea, 2), '</div>
        </td>
        <td class="td3">
            <div class="highlight">', "WOW: ",  display($idea, 1), '</div>
        </td>
    </tr>
    <tr>
        <td class="td4">
            Impossible to implement
        </td>
        <td class="td5">
            <div class="nope">', "NOPE:",  display($idea, 4), '</div>
        </td>
        <td class="td6">
            <div class="how">',	"HOW: ",  display($idea, 3), '</div>
        </td>
    </tr>
    <tr>
        <td class="td7">
            
        </td>
        <td class="td8">
            Normal ideas
        </td>
        <td class="td9">
            Original ideas
        </td>
    </tr>
    </table>
    <br>';
	}

	if(highlight($idea) == 2){
			echo
	'<table class="matrix">
    <tr>   	
        <td class="td1">
           Easily implemented
        </td>
        <td class="td2">
            <div class="highlight">', "NOW: ",  display($idea, 2), '</div>
        </td>
        <td class="td3">
            <div class="wow">', "WOW: ",  display($idea, 1), '</div>
        </td>
    </tr>
    <tr>
        <td class="td4">
            Impossible to implement
        </td>
        <td class="td5">
            <div class="nope">', "NOPE:",  display($idea, 4), '</div>
        </td>
        <td class="td6">
            <div class="how">',	"HOW: ",  display($idea, 3), '</div>
        </td>
    </tr>
    <tr>
        <td class="td7">
            
        </td>
        <td class="td8">
            Normal ideas
        </td>
        <td class="td9">
            Original ideas
        </td>
    </tr>
    </table>
    <br>';
	}

	if(highlight($idea) == 3){
			echo 
	'<table class="matrix">
    <tr>   	
        <td class="td1">
           Easily implemented
        </td>
        <td class="td2">
            <div class="now">', "NOW: ",  display($idea, 2), '</div>
        </td>
        <td class="td3">
            <div class="wow">', "WOW: ",  display($idea, 1), '</div>
        </td>
    </tr>
    <tr>
        <td class="td4">
            Impossible to implement
        </td>
        <td class="td5">
            <div class="nope">', "NOPE:",  display($idea, 4), '</div>
        </td>
        <td class="td6">
            <div class="highlight">',	"HOW: ",  display($idea, 3), '</div>
        </td>
    </tr>
    <tr>
        <td class="td7">
            
        </td>
        <td class="td8">
            Normal ideas
        </td>
        <td class="td9">
            Original ideas
        </td>
    </tr>
    </table>
    <br>';
	}

	if(highlight($idea) == 4){
			echo
	'<table class="matrix">
    <tr>   	
        <td class="td1">
           Easily implemented
        </td>
        <td class="td2">
            <div class="now">', "NOW: ",  display($idea, 2), '</div>
        </td>
        <td class="td3">
            <div class="wow">', "WOW: ",  display($idea, 1), '</div>
        </td>
    </tr>
    <tr>
        <td class="td4">
            Impossible to implement
        </td>
        <td class="td5">
            <div class="highlight">', "NOPE:",  display($idea, 4), '</div>
        </td>
        <td class="td6">
            <div class="how">',	"HOW: ",  display($idea, 3), '</div>
        </td>
    </tr>
    <tr>
        <td class="td7">
            
        </td>
        <td class="td8">
            Normal ideas
        </td>
        <td class="td9">
            Original ideas
        </td>
    </tr>
    </table>
    <br>';
	}

}

// ---------------
// POST-IT VOTING
// ---------------

// votes percentages from the database and individual votes from website form

function displayVote($idea_id){
	global $conn;

	$cumulative = 0;

	for($i = 1; $i <= 9; $i++){
		${"sql_$i"} = "SELECT vote_count FROM postitvotes WHERE idea_id = ".$i."";
		${"result_$i"} = mysqli_query($conn, ${"sql_$i"});
		${"row_$i"} = mysqli_fetch_row(${"result_$i"});
		${"a$i"} = ${"row_$i"}[0];
		
		$cumulative += ${"a$i"};
	}
	
	if($cumulative == 0){
		$cumulative = 1;
	}
	
	for($i = 1; $i <= 9; $i++){
		${"vote$i"} = 100 * ${"a$i"} / $cumulative;
	}
	
	echo ${"vote$idea_id"};
}

	$my_cumulative = 0;	

	for ($i = 1; $i <= 9; $i++){
	    if (isset($_POST[$i]) && $_POST[$i] > 0) {
	    	${"b$i"} = $_POST[$i];
		} else {
			${"b$i"} = 0;
		}
		
		$my_cumulative += ${"b$i"};
	}
	
	if($my_cumulative == 0){
		$my_cumulative = 1;
	}
		
	for($i = 1; $i <= 9; $i++){
		${"my_vote$i"} = ${"b$i"} * 100 / $my_cumulative;
	}	

	
// function sends votes to the database
function votePostIt($amount){
	
	global $conn;
	
	for ($i = 1; $i <= $amount; $i++){
		
		$vote = 0;
		
	    if (isset($_POST[$i]) && $_POST[$i]>0) {
	    	$vote = $_POST[$i];
		} else {
			$vote = 0;
		}
	
		$sql = "SELECT vote_count FROM postitvotes WHERE idea_id = ".$i." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$sql2 = "SELECT vote_count_session FROM postitvotes WHERE idea_id = ".$i." ";
		$result2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_row($result2);
		
		$updated = $row[0] + $vote;
		
		$conn->query($sql = "UPDATE postitvotes SET vote_count = ".$updated." WHERE idea_id = ".$i."");
		}

}
	

// ---------------
// SELECTRION CRITERIA
// ---------------	


// function gets form results and updates the db
function voteCriteria(){
	global $conn;

	for ($i = 1; $i <= 9; $i++){
		
		$vote = 0;
		$j = ($i*4)-3;
		
		if (isset($_POST[$j]) && $_POST[$j]>0) {
		   	$vote = $_POST[$j];
		} else {
			$vote = 0;
		}
		
		$sql = "SELECT feasible_vote FROM criteriavotes WHERE idea_id = ".$i." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$updated = $row[0] + $vote;
		
		$conn->query($sql = "UPDATE criteriavotes SET feasible_vote = ".$updated." WHERE idea_id = ".$i."");		
		
		if (isset($_POST[$j]) && $_POST[$j]>0) {
			$sql2 = "SELECT feasible_counter FROM criteriavotes WHERE idea_id = ".$i." ";
			$result2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_row($result2);
		
			$updated2 = $row2[0] + 1;
			
			$conn->query($sql2 = "UPDATE criteriavotes SET feasible_counter = ".$updated2." WHERE idea_id = ".$i."");
		}		
	}
	
	for ($i = 1; $i <= 9; $i++){
		
		$vote = 0;
		$j = ($i*4)-2;
		
		if (isset($_POST[$j]) && $_POST[$j]>0) {
		   	$vote = $_POST[$j];
		} else {
			$vote = 0;
		}
		
		$sql = "SELECT novel_vote FROM criteriavotes WHERE idea_id = ".$i." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$updated = $row[0] + $vote;
		
		$conn->query($sql = "UPDATE criteriavotes SET novel_vote = ".$updated." WHERE idea_id = ".$i."");		

		if (isset($_POST[$j]) && $_POST[$j]>0) {
			$sql2 = "SELECT novel_counter FROM criteriavotes WHERE idea_id = ".$i." ";
			$result2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_row($result2);
		
			$updated2 = $row2[0] + 1;
			
			$conn->query($sql2 = "UPDATE criteriavotes SET novel_counter = ".$updated2." WHERE idea_id = ".$i."");
		}
		
	}
	
	for ($i = 1; $i <= 9; $i++){
		
		$vote = 0;
		$j = ($i*4)-1;
		
		if (isset($_POST[$j]) && $_POST[$j]>0) {
		   	$vote = $_POST[$j];
		} else {
			$vote = 0;
		}
		
		$sql = "SELECT elaborate_vote FROM criteriavotes WHERE idea_id = ".$i." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$updated = $row[0] + $vote;
		
		$conn->query($sql = "UPDATE criteriavotes SET elaborate_vote = ".$updated." WHERE idea_id = ".$i."");		

		if (isset($_POST[$j]) && $_POST[$j]>0) {
			$sql2 = "SELECT elaborate_counter FROM criteriavotes WHERE idea_id = ".$i." ";
			$result2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_row($result2);
		
			$updated2 = $row2[0] + 1;
			
			$conn->query($sql2 = "UPDATE criteriavotes SET elaborate_counter = ".$updated2." WHERE idea_id = ".$i."");
		}
		
	}
	
	for ($i = 1; $i <= 9; $i++){
		
		$vote = 0;
		$j = ($i*4);
		
		if (isset($_POST[$j]) && $_POST[$j]>0) {
		   	$vote = $_POST[$j];
		} else {
			$vote = 0;
		}
		
		$sql = "SELECT relevant_vote FROM criteriavotes WHERE idea_id = ".$i." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$updated = $row[0] + $vote;
		
		$conn->query($sql = "UPDATE criteriavotes SET relevant_vote = ".$updated." WHERE idea_id = ".$i."");		

		if (isset($_POST[$j]) && $_POST[$j]>0) {
			$sql2 = "SELECT relevant_counter FROM criteriavotes WHERE idea_id = ".$i." ";
			$result2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_row($result2);
		
			$updated2 = $row2[0] + 1;
			
			$conn->query($sql2 = "UPDATE criteriavotes SET relevant_counter = ".$updated2." WHERE idea_id = ".$i."");
		}
		
	}			

}	


// function displays score for given idea and criterion
function criteriaScore($idea, $criterion){
	global $conn;
	
	$feasible = 0;
	$novel = 0;
	$elaborate = 0;
	$relevant = 0;	
		
	if($criterion == 1){
		$sql = "SELECT feasible_vote FROM criteriavotes WHERE idea_id = ".$idea." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$sql2 = "SELECT feasible_counter FROM criteriavotes WHERE idea_id = ".$idea." ";
		$result2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_row($result2);		
	}
	
	if($criterion == 2){
		$sql = "SELECT novel_vote FROM criteriavotes WHERE idea_id = ".$idea." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$sql2 = "SELECT novel_counter FROM criteriavotes WHERE idea_id = ".$idea." ";
		$result2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_row($result2);			
	}
	
	if($criterion == 3){
		$sql = "SELECT elaborate_vote FROM criteriavotes WHERE idea_id = ".$idea." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$sql2 = "SELECT elaborate_counter FROM criteriavotes WHERE idea_id = ".$idea." ";
		$result2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_row($result2);			
	}
	
	if($criterion == 4){
		$sql = "SELECT relevant_vote FROM criteriavotes WHERE idea_id = ".$idea." ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
		$sql2 = "SELECT relevant_counter FROM criteriavotes WHERE idea_id = ".$idea." ";
		$result2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_row($result2);			
	}
			
	if($row2[0] == 0){
		$row2[0] = 1;
	}
	
	$rounded = round($row[0] / $row2[0], 2);
	return number_format((float)$rounded, 2, '.', '');
	
}

// function dusplays total score, which is the average of all criteria
function totalScore($idea){
		
	$score = (criteriaScore($idea, 1) + criteriaScore($idea, 2) + criteriaScore($idea, 3) + criteriaScore($idea, 4))/4;
	
	echo number_format((float)$score, 2, '.', '');
}

// function displaying a single row in the table with data for every idea
function td($idea){
	echo '<td>', displaytitle($idea), '</td><td>', criteriaScore($idea,1), '</td><td>', criteriaScore($idea,2), '</td><td>', criteriaScore($idea,3), '</td><td>', criteriaScore($idea,4), '</td><td>', totalScore($idea,1), '</td>';
}
