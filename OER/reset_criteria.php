<?php

include 'Poll.class.php';
include 'admin-page.php';

// create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
			
// check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}


function executereset(){
	global $conn;
	
	$conn->query($sql = "UPDATE criteriavotes SET feasible_vote = 0, novel_vote = 0, elaborate_vote = 0, relevant_vote = 0, feasible_counter = 0, novel_counter = 0, elaborate_counter = 0, relevant_counter = 0");
}

executereset();

echo "<script> location.href='admin-page.php'; </script>";
