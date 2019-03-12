<!DOCTYPE html5>
	<html>
		<head>
			<meta charset="UTF-8">
		 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>OER - UIBK</title>
			<!-- <link rel='stylesheet' href='style.css' /> -->
			<link rel="shortcut icon" href="images/icon.ico"/>
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<link href='https://fonts.googleapis.com/css?family=Petrona' rel='stylesheet'>
			<style>
			body {
			    font-family: Petrona !important;
			}

			/* Text paragraphs */
			p {
				line-height: 1.6;
			}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

.modal-header {
    padding: 15px 16px;
    background-color: #003362;
    color: white;
}

.modal-body {
  padding: 2px 16px;
  background-color: white;
  text-align: justify;
  width: 100%;
  display: flex;
}

.modal-footer {
    padding: 10px 16px;
    background-color: #003362;
    color: white;
}
.close-button{
		cursor: pointer;
    padding: 5px 10px;
    display: inline-block;
    background: white;
    color: #003362;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    border-radius: 5px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
		margin-right: 10px;
  /*  border: 2px solid #aaa;*/
    /* float: right; */
}

.close-button:hover {
    background-color: orange;
    color: white;
}
.show-more-button{
    background-color: #003362;
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    border: 2px solid #aaa;
}
.show-more-button:hover {
    background-color: orange;
    color: white;
    border: 2px solid #003362;
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
}
/* div > img{
width: 50%;
height: auto;
} */

.img {
	height: 308;
	margin-right: 15;
	width: 200;
}
.cursor-style-pointer{
	cursor: pointer;
}
</style>

<?php include_once "./includes/stylesheet-loader.php";
			include_once "./includes/top-navigation-bar.php";
?>
		</head>
	<body>

<!--header from php file-->
		<header>
		<?php //include 'header.php';?>
		</header>

<!--top menu div from php file-->
		<?php //include 'topmenu.php';?>
		<?php include 'scroll-to-top-button.php';?>

<!--content bar with both left menu and content divs-->
		<section>

<!--left menu from php file-->
		  <nav>
			<?php// include 'leftmenu.php';?>
		  </nav>

<!--content-->
		  <article>
<h1>About</h1>
<p class="text-justify">
	Our enthusiastic team is located at the Department of Information Systems of the University of Innsbruck. We aim at creating open education resources (OER) focusing on research areas of the IS discipline. By including both theoretical knowledge and practical examples
we intend to offer the students and teachers a holistic learning experience. For further information on our team members please click on the profile cards.
</p>


			<div id="profile1" class="modal">
				<div class="modal-content">
					<div class="modal-header cursor-style-pointer">
						<button class="close-button" onclick="closeThisModal(this)">&times;</button>
						<span>Ronald Maier</span>

					</div>
					<div class="modal-body cursor-style-pointer">

							<img class="img" src="./images/maierronald.jpg">

							<p style="">Ronald Maier holds a PhD in Management Information Systems from The Koblenz School of Corporate Management - Otto Beisheim Graduate School of Management (WHU) and a habilitation degree from the University of Regensburg. <br /><br />He worked as Visiting Assistant Professor at the Terry College of Business, University of Georgia in Athens, GA from 1998-1999. From 2002-2007 he was with the School of Business and Economics, Martin-Luther-University Halle-Wittenberg and held a Chair in Management Information Systems, Information Systems Leadership. <br /><br />Since February 2007, he is a Professor of Information Systems at the School of Management, University of Innsbruck, Austria. He has participated as work package leader of the EU projects KnowCom, MATURE, ARISTOTELE, POSECCO and LAYERS. <br /><br />His research interests include collaboration engineering, connectivity, crowdsourcing, digital change and knowledge management. His research has appeared in books such as Knowledge Management Systems or Knowledge Management in Digital Change and journals such as Journal of Management Information Systems, Journal of Strategic Information Systems, Business & Information Systems Engineering, Computers in Human Behavior, IEEE Transactions on Learning Technologies and Journal of Knowledge Management.
							</p>

					</div>

					<div class="modal-footer">
					</div>
				</div>
			</div>




<div id="profile2" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<button class="close-button" onclick="closeThisModal(this)">&times;</button>
			<span>Isabella Seeber</span>

		</div>

					<div class="modal-body">

							<img class="img" src="./images/seeberisabella.jpg">

							<p style="">Isabella Seeber is a post-doc / assistant professor in the Department of Information Systems at the School of Management and holds a doctorate degree from the University of Innsbruck, Austria. <br /><br />Her research focuses on team- and crowd-based idea convergence and selection, feedback in innovation competitions, knowledge externalization on social media and the design and development of tool support in these research areas. In 2015 she has spent one year abroad for research at the University of South Florida, which was funded by FWF Schrödinger.<br /><br /> Since March 2017, she leads the FWF funded research project UMIC (Understanding and Measuring facilitated Idea Convergence). With her enthusiastic group of young researchers, they investigate challenges in convergence processes and develop software in order to support the selection of the best idea(s). She also teaches courses in the Bachelor/Master program, supervises theses, drinks coffee, and is involved in the faculty council.</p>
							</p>

					</div>

		<div class="modal-footer">
		</div>
	</div>
</div>





<div id="profile3" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<button class="close-button" onclick="closeThisModal(this)">&times;</button>
			<span>Christina Sarigianni</span>

		</div>

					<div class="modal-body">

							<img class="img" src="./images/christina.jpg">

							<p style="">Christina Sarigianni is a PhD student in the Department of Information Systems at the School of Management, University of Innsbruck. She has a bachelor's degree in Applied Economics from the University of Ioannina, Greece and a master's degree in Business Information Systems from the University of Innsbruck. <br /><br />She has worked as a project assistant in the EU project Learning Layers and currently works as a project assistant at the FWF funded research project UMIC (Understanding and Measuring facilitated Idea Convergence). Her research interests include knowledge management, connectivity and social media.
							</p>

					</div>

		<div class="modal-footer">
		</div>
	</div>
</div>





<div id="profile4" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<button class="close-button" onclick="closeThisModal(this)">&times;</button>
			<span>Piotr Konecki</span>

		</div>

					<div class="modal-body">

							<img class="img" src="./images/piotr.jpg">

							<p style="">Piotr is currently in the second year of MSc Information Systems at the University of Innsbruck. He completed a four year joint honours degree in Business Economics and Sociology at the University of Glasgow. <br><br> His previous experience includes Audit and Customer Administration internships, voluntary service at the Warsaw Uprising Museum and holding Computer Science workshops in a primary school. <br><br> He is interested in new technologies, climate change and chess.
							</p>

					</div>

		<div class="modal-footer">
		</div>
	</div>
</div>




<div id="profile5" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<button class="close-button" onclick="closeThisModal(this)">&times;</button>
			<span>Sebastian Windmüller</span>

		</div>

					<div class="modal-body">

							<img class="img" src="./images/sebastian.jpg">

							<p style="">Sebastian Windmüller studies in the Master program Information Systems at the University of Innsbruck. Before coming to Innsbruck, he studied Business Administration at the University of Würzburg and worked in last-mile logistics. <br /><br />This project was his first time learning web development and creating open educational resources.
							</p>

					</div>

		<div class="modal-footer">
		</div>
	</div>
</div>





<div id="profile6" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<button class="close-button" onclick="closeThisModal(this)">&times;</button>
			<span>Further contributors</span>

		</div>
		<div class="modal-body">
			<div>
					<p>
						<a href="http://iwi.uibk.ac.at/umic/index.php/team/victoria-banken/" target="_blank"  style="text-decoration: underline;">Victoria Banken</a>
					</p>
											<br />
					<p>
						<a href="http://iwi.uibk.ac.at/umic/index.php/team/renata-santiago-walser/" target="_blank" style="text-decoration: underline;">Renata Santiago-Walser</a>	</p>
					</p>

				<br />	<br />
				<p>
				For further details about the UMIC project and the team members, please refer to the <a href="http://iwi.uibk.ac.at/umic/" style="text-decoration: underline;">UMIC website</a>.
				</p>
			</div>
		</div>
		<div class="modal-footer">
		</div>
	</div>
</div>


<div id="profile7" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<button class="close-button" onclick="closeThisModal(this)">&times;</button>
			<span>How to reference</span>
		</div>
		<div class="modal-body">
			<div>
				<h1>How to reference</h1>
				<p>
					Sarigianni, C.; Konecki, P.;  Windmüller, S.; Seeber, I.; Maier, R. (2018). Crowdsourced Idea Convergence
				</p>
				<h1>Licensing</h1>
				<p>
					You are free to:
				</p>
				<ul>
					<li>
						Share — copy and redistribute the material in any medium or format
					</li>
					<li>
						Adapt — remix, transform, and build upon the material
						for any purpose, even commercially.
					</li>
					<li>
					 The licensor cannot revoke these freedoms as long as you follow the license terms.
					</li>
				</ul>
				<p>
					Under the following terms:
				</p>
				<ul>
					<li>
						Attribution — You must give appropriate credit, provide a link to the license, and indicate if changes were made.
						You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
					</li>
					<li>
						ShareAlike — If you remix, transform, or build upon the material, you must distribute your
						contributions under the same license as the original.
					</li>
				</ul>




			</div>
		</div>
		<div class="modal-footer">
		</div>
	</div>
</div>




<div class="card-group">

	<div class="col-md-4">
  <div class="card" onclick="openFullProfile(profile1)">
    <img class="card-img-top" src="./images/maierronald.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ronald Maier</h5>
    </div>
  </div></div>

	<div class="col-md-4">
  <div class="card" onclick="openFullProfile(profile2)">
    <img class="card-img-top" src="./images/seeberisabella.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Isabella Seeber</h5>
    </div>
  </div></div>

	<div class="col-md-4">
  <div class="card" onclick="openFullProfile(profile3)">
    <img class="card-img-top" src="./images/christina.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Christina Sarigianni</h5>
    </div>
  </div></div>

</div>

<br />

<div class="card-group">
	<div class="col-md-4">
  <div class="card" onclick="openFullProfile(profile4)">
    <img class="card-img-top" src="./images/piotr.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Piotr Konecki</h5>
    </div>
  </div>  </div>

	<div class="col-md-4">
  <div class="card" onclick="openFullProfile(profile5)">
    <img class="card-img-top" src="./images/sebastian.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Sebastian Windmüller</h5>
    </div>
  </div>  </div>

</div>

<br />
<div class="card-group">


	<div class="col-md-4">
	<div class="card" onclick="openFullProfile(profile6)">
		<div class="card-body">
			<h5 class="card-title"><br /><b>Further contributors</b></h5>
		</div>
	</div>
	</div>

	<div class="col-md-4">
	<div class="card" onclick="openFullProfile(profile7)">
		<div class="card-body">
			<h5 class="card-title"><br /><b>How to reference</b></h5>
		</div>
	</div>
	</div>

</div>


		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
		</section>

<!--footer from php file-->
		<footer>
		  <?php //include 'footer.php';?>
		</footer>

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
