<!DOCTYPE html5>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>OER - UIBK</title>
			<link rel='stylesheet' href='style.css' />
			<link rel="shortcut icon" href="images/icon.ico"/>
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<link href='https://fonts.googleapis.com/css?family=Petrona' rel='stylesheet'>
			</head>
	<body>
    <?php

    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session.
    session_destroy();

    // Redirect to index page
    // header("location: index.php");
    // exit;
		echo " You are logged out now".$_SESSION['userid'];
    ?>



	</body>
</html>
