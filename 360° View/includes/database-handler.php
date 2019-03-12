<?php

// Set the variable below to
// 1 for local DB
// 2 for 00webhost DB
$localTestingVariable = 1;

if ($localTestingVariable==1){
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "360";
} else if($localTestingVariable==2){
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "Nk94CFuF";
	$dbName = "dreilaenderbank";
}


$databaseConnection = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (!$databaseConnection) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
