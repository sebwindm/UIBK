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


		<?php include 'scroll-to-top-button.php';?>

<!--content bar with both left menu and content divs-->
		<section>


<!--content-->
		  <article>
				<h1>How to use the content:</h1>

				<p class="regular">
					The content of this website has been created for Master students of Information Systems, Business Administration and sub-disciplines, interested in learning about digital collaboration, crowdsourcing innovation, idea convergence or information filtering.
				</p>
				<p class="regular">
				The website consists of three major sections namely Idea Selection, Challenges in Idea Selection and Methods for Idea Selection. Each section provides conceptual knowledge and case examples. The inclusion of interactive elements intends to help students to acquire first-hand experience of the application of convergence techniques in order to enrich your learning journey. The users can reflect on the identified challenges, apply a variety of selection methods intended to overcome those challenges and therefore find out about possible solutions to overcome typical needs of idea selection.
			</p>
			<p class="regular">
				The first section explains the four phases of innovation with the help of the innovation funnel. By clicking through the four elements (phases) of the funnel, the users can learn the characteristics of each phase and understand how a typical idea selection process unfolds.
			</p>
			<p class="regular">
				The second section presents a series of challenges in idea selection. By clicking through the circumplex, the user can read 10 problem scenarios that describe real life examples as narrated by experts in an empirical study. The fictive stories summarize the findings of this study and show the role of the actors, their actions and the corresponding outcomes. The learners can confront these challenges, reflect on the actors’ actions and recommend possible solutions.
</p>
<p class="regular">
				The third section explains established methods for idea selection. The users can learn the origins and principles of each selection method. They can further test each method through practical examples. For testing the methods we use 9 ideas adapted from a real innovation contest on “digital transformation for IS teaching resources”.
</p>
<p class="regular">
				Please be aware that in order to fully experience the offered elements of the Website, it is recommended to use a desktop or laptop computer.
</p>
<p class="regular">
				Although we have done our best in order to provide for a well-rounded learning experience and for accessibility, we have to note that this is a prototype educational resource and parts of the resource might not be accessible by screen readers, particularly the interactive parts. We welcome feedback, adaptations, enrichments and extensions of this resource.
</p>
<br /><br /><br />

<p class="regular">
				Version number: 1.0
</p>


		  </article>
<div style="clear: both;">

</div>
			<?php
				include_once "./includes/carousel.php";
			?>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
			<div>
			<span class="badge badge-pill badge-primary">Convergence</span>
			<span class="badge badge-pill badge-secondary">Idea</span>
			<span class="badge badge-pill badge-success">Selection</span>
			<span class="badge badge-pill badge-danger">Innovation</span>
			<span class="badge badge-pill badge-warning">Funnel</span>
			<span class="badge badge-pill badge-info">Crowdsourcing</span>
			<span class="badge badge-pill badge-light">OER</span>
			<span class="badge badge-pill badge-dark">Challenges</span>
			</div>
		</section>


		<script>
		function openFullProfile(challengeID){
			challengeID.style.display = "block";
		}
		function closeThisModal(thisElement){
			thisElement.parentElement.parentElement.parentElement.style.display = "none";

		}
		// This allows the user to close modals by clicking anywhere outside the modal content
		var allModals = document.getElementsByClassName('modal');

		window.onclick = function(event) {
				for(var i = 0; i < allModals.length; i++){
		    if (event.target == allModals[i]) {
					allModals[i].style.display = "none";
			}
		    }
		}


		</script>
		<?php include_once "./includes/javascript-loader.php" ?>
			</body>
</html>
