<!DOCTYPE html5>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>OER - UIBK</title>
			<link rel='stylesheet' href='style.css' />
			<link rel="shortcut icon" href="images/icon.ico"/>
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<link href='https://fonts.googleapis.com/css?family=Petrona' rel='stylesheet'>
			<?php include_once "./includes/stylesheet-loader.php";
						include_once "./includes/top-navigation-bar.php";
			?>
		</head>
	<body>


		<?php
		// IMPORTANT:
		// If the user session check causes any trouble, call it BEFORE any other php includes
		// like so:
		//  include './includes/header.php';
		//  	if (!isset($_SESSION["userid"])){
			// 	header("location: login.php");
			// }
		// else it might continuously refer back to the login page, even if the user is logged in
		// if (!isset($_SESSION["userid"])){
		// 	header("location: admin-page-login.php");
		// }
		?>
<!--content bar with both left menu and content divs-->
		<section>


<!--content-->
		<article>
				<h1>
					Admin Page
				</h1>

				<form action="reset_matrix.php" method="post">
						<input type="submit" value="Reset Now-Wow-How Matrix" onclick="return confirm('Are you sure you want to reset?')">
				</form>

				<form action="reset_postit.php" method="post">
						<input type="submit" value="Reset Post-It Votes" onclick="return confirm('Are you sure you want to reset?')">
				</form>

				<form action="reset_criteria.php" method="post">
						<input type="submit" value="Reset Selection Criteria Votes" onclick="return confirm('Are you sure you want to reset?')">
				</form>

				<br>
				<form action="admin-page-logout.php">
				    <input type="submit" value="Logout" />
				</form>
		</article>
		<?php include_once "./includes/javascript-loader.php" ?>

		<script type="text/javascript" src=""></script>
	</body>
</html>
