<?php
// IMPORTANT:
// If the user session check causes any trouble, call it BEFORE the top-navigation.php
// like so:
//  include './includes/top-navigation.php';
//  include './includes/user-session-check.php';
// else it might continuously refer back to the login page, even if the user is logged in 
if (!isset($_SESSION["userid"])){
	header("location: login.php");
}
?>
