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
	
	$conn->query($sql = "UPDATE postitvotes SET vote_count = 0");
}

executereset();

echo "<script> location.href='admin-page.php'; </script>";

