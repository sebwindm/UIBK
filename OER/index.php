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
<style>
	/* letter/scroll-like text for the welcome page */
.page {
	background-color: white;
	background-image: linear-gradient(to right, rgba(255,210,0,0.4), rgba(200, 160, 0, 0.1) 11%, rgba(0,0,0,0) 35%, rgba(200, 160, 0, 0.1) 65%);
	box-shadow: inset 0 0 10px rgba(255,210,0,0.3), inset 0 0 5px rgba(255,210,0,0.4), inset 0 0 5px rgba(220,120,0,0.8);
	width: 100%;
	padding: 1.5em 4em 4em 3em;
	margin: auto;
	text-align: justify;
}
.address {
	float:left;
	font-size: 2em;
	line-height: 40px;
	width: 100%;
	margin-top: 2em;
	margin-bottom: 1.5em;
}

.letterul>li{
	margin-top: 7px;
	counter-increment: section;
}
.standard-button {
	background-color: #003362;
	border: none;
	color: white;
	padding: 10px 24px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	border-radius: 5px;
	-webkit-transition-duration: 0.4s;
	transition-duration: 0.4s;
	border: 2px solid #aaa;
}
</style>

		<?php include 'scroll-to-top-button.php';?>
<!--content bar with both left menu and content divs-->
		<section>

<!--content-->
		  <article>

<div class="page">
<p><span class="address">Dear prospective user,</span></p>

<p>welcome to our website! The content of this website has been created with the purpose to introduce techniques of Digital Collaboration set in the context of crowdsourcing innovation. Specifically, this website focuses on a form of digital collaboration in which organization-external knowledge and information can be sourced from the crowd in order to enhance an organization’s innovation processes. This has been called crowdsourcing or open innovation. You can learn how the process of innovation contests unfolds through the metaphor of the innovation funnel. While generation of ideas in such innovation contests has been researched for quite some time, we concentrate on how organizations can be supported in the subsequent phase of idea selection. </p>
<br>
<p>The goal of the website is to build competencies for the self-organized application of digital collaboration techniques to overcome convergence challenges: </p>
<br>
<p>
	<ul class="letterul">
		<li>You will understand contemporary challenges of idea shortlisting deduced from real life crowd-based innovation competitions.</li>
		<li>You will be aware of and get hands on experience about a variety of moderation techniques that help raters to shortlist promising ideas and to select the best ideas. </li>
	</ul>
</p>
<br>
<p>Hence, the website offers both theoretical knowledge and practical experience.</p>
<br><br>
<p>Enjoy!</p>
</div>

		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
		</section>

		<?php include_once "./includes/javascript-loader.php" ?>

			</body>
</html>
