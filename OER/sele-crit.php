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
						include_once "./includes/top-navigation-bar.php";?>

			<?php include 'Poll.class.php' ?>
			<style>
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
				cursor: pointer;
			}

			.standard-button:hover {
				background-color: orange;
				color: white;
				border: 2px solid #003362;
				box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
			}
			.radiocontainer {
				width: 60%;
				float: right;
			}
			.card-wrap{
				margin-bottom: 10px;
				text-align: justify;
			}
			</style>
		</head>
	<body>



<!--content bar with both left menu and content divs-->
		<section>

<!--content-->
		  <article>
		    <h1>Selection Criteria</h1>
		    <p class="definition"> After the generation and filtering of several ideas, selection criteria method assists the idea evaluation according to how well the defined criteria are met.</p>

			<p class="regular"><b class="paragraph-topic">What?</b>
			Selection criteria facilitate the shortlisting phase by the assessment of certain quality dimensions of each idea. Widely adopted selection criteria are feasibility, novelty, elaboration, and relevance (based on Dean et al. 2006). See also Holistic & Analytic scales. 		  	</p>

			<p class="regular"><b class="paragraph-topic">Why?</b>
			Every idea can be evaluated based on several selection criteria. The selection criteria provide a guide for identifying the most adequate ideas for solving specific problems. The criteria differ depending on the underlying problem. The most prominent ideas are selected according to how well each criterion is met.
		  	</p>

			<p class="regular"><b class="paragraph-topic">How?</b>
			Each idea is assessed according to certain criteria in a 5-point likert scale. In the example below,  the following criteria are used:
			<ul>
    <b class="regular">Feasible: an idea is feasible if it can be easily implemented and it is socially, legally or politically acceptable.</b>
        <li class="regular">the idea is technically feasible.</li>
        <li class="regular">the idea is economically feasible.</li>
        <li class="regular">the idea is socially, legally, or politically acceptable.</li>

   <b class="regular">Novel: an idea is most novel if it is original and modifies a paradigm. </b></ol>
        <li class="regular">the idea is unique or at least rare.</li>
        <li class="regular">the idea is imaginative, uncommon or surprising.</li>

   <b class="regular">Elaborate: an idea is elaborate if it is described in detail.</b>
        <li class="regular">the idea is precise, complete and exactly described.</li>
        <li class="regular">the idea is mature.</li>
        <li class="regular">the idea's utility is clearly described.</li>

   <b class="regular">Relevant: an idea is relevant if it applies to the stated problem and will be effective at solving the problem.</b>
        <li class="regular">the idea applies to the matter at hand.</li>
        <li class="regular">the idea is effective in supporting, enhancing and improving the teaching of IS courses.</li>
		  	</ul>
		  	</p>
		  	<p class="regular">
			  The total score of an idea is a weighted average of the individual criteria scores. As a result, ideas are ranked according to the final score.
			</p>

			<h2>Example: Idea Contest</h2>
			<p class="regular">While the knowledge around IT is becoming mandatory in business education, at many universities the Information Systems courses are not effective at teaching the future generation of business managers the key concepts for thriving in the digital innovation era. Therefore, we ask the following question: What kind of digital resources would support, enhance and improve the teaching of IS courses? Please provide your ideas.</p>


<!--grey frame-->
			<div class="frame">
				<h2>Digital Transformation in Education Ideas</h2>

				<form action="sele-crit-res.php" method="post">
				<!--  Ideas 1 - 3 -->
			<div class="card-group">
			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
			    <div class="card-body">
			      <h5 class="card-title"><?php
							//display title from the db
								displaytitle(1);	?></h5>
								<div id="less1"><p class="regular">
									<?php
									//display shorter description from the db
										displayless(1);
									?>
								</p></div>
								<div id="more1"><p class="regular">
									<?php
									//display longer description from the db
										displaymore(1);
									?>
								</p></div>
									<!-- HOW THE BUTTONS WORK: -->
									<!-- 1. Create the different DIVs that you want to switch between and assign IDs to them -->
									<!-- 2. In JavaScript, hide the desired elements when the page loads -->
									<!-- 3. The button calls the function toggleDetails(param1, param2, this) -->
									<!-- Parameters: "param1" = ID of the DIV to show; "param2" = ID of the DIV to hide; "this" = refers to this button and is necessary to change the button text -->
									<button type="button" onclick="toggleDetails('more1', 'less1', this)" id="seeMoreButton0" class="standard-button">Show more</button>

			    </div>
			    <div class="card-footer">
						<div>
							Vote:<br>
			<div class="button-container">
			<div class="radiocontainer">
										<input type="radio" name="1" value="1">1
										<input type="radio" name="1" value="2">2
										<input type="radio" name="1" value="3">3
										<input type="radio" name="1" value="4">4
										<input type="radio" name="1" value="5">5
										<br>
										<input type="radio" name="2" value="1">1
										<input type="radio" name="2" value="2">2
										<input type="radio" name="2" value="3">3
										<input type="radio" name="2" value="4">4
										<input type="radio" name="2" value="5">5
										<br>
										<input type="radio" name="3" value="1">1
										<input type="radio" name="3" value="2">2
										<input type="radio" name="3" value="3">3
										<input type="radio" name="3" value="4">4
										<input type="radio" name="3" value="5">5
										<br>
										<input type="radio" name="4" value="1">1
										<input type="radio" name="4" value="2">2
										<input type="radio" name="4" value="3">3
										<input type="radio" name="4" value="4">4
										<input type="radio" name="4" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>
			</div class="button-container">
						</div>
			    </div class="card-footer">
			  </div class="card">


			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
			    <div class="card-body">
			      <h5 class="card-title">	<?php
							//display title from the db
								displaytitle(2);	?></h5>
						<div id="less2"><p class="card-text">
									<?php
									//display shorter description from the db
										displayless(2);									?>
								</p>
						</div>
						<div id="more2"><p class="card-text">
									<?php
									//display longer description from the db
										displaymore(2);									?>
								</p>
						</div>
			      <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> -->
						<button type="button" onclick="toggleDetails('more2', 'less2', this)" id="seeMoreButton0" class="standard-button">Show more</button>
			    </div class="card-body">
			    <div class="card-footer">
						<div>
							Vote:<br>
							<div class="button-container">
							<div class="radiocontainer">
										<input type="radio" name="5" value="1">1
										<input type="radio" name="5" value="2">2
										<input type="radio" name="5" value="3">3
										<input type="radio" name="5" value="4">4
										<input type="radio" name="5" value="5">5
										<br>
										<input type="radio" name="6" value="1">1
										<input type="radio" name="6" value="2">2
										<input type="radio" name="6" value="3">3
										<input type="radio" name="6" value="4">4
										<input type="radio" name="6" value="5">5
										<br>
										<input type="radio" name="7" value="1">1
										<input type="radio" name="7" value="2">2
										<input type="radio" name="7" value="3">3
										<input type="radio" name="7" value="4">4
										<input type="radio" name="7" value="5">5
										<br>
										<input type="radio" name="8" value="1">1
										<input type="radio" name="8" value="2">2
										<input type="radio" name="8" value="3">3
										<input type="radio" name="8" value="4">4
										<input type="radio" name="8" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>
						</div>
						</div>
					</div>
			  </div>


			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
					<div class="card-body">
			      <h5 class="card-title">	<?php
							//display title from the db
								displaytitle(3);	?></h5>
						<div id="less3"><p class="card-text">
									<?php
									//display shorter description from the db
										displayless(3);
									?>
								</p>
						</div>
						<div id="more3"><p class="card-text">
									<?php
									//display longer description from the db
										displaymore(3);									?>
								</p>
						</div>
			      <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> -->
						<button type="button" onclick="toggleDetails('more3', 'less3', this)" id="seeMoreButton0" class="standard-button">Show more</button>
			    </div class="card-body">
			    <div class="card-footer">
						<div>
							Vote:<br>
			<div class="button-container">
			<div class="radiocontainer">
										<input type="radio" name="9" value="1">1
										<input type="radio" name="9" value="2">2
										<input type="radio" name="9" value="3">3
										<input type="radio" name="9" value="4">4
										<input type="radio" name="9" value="5">5
										<br>
										<input type="radio" name="10" value="1">1
										<input type="radio" name="10" value="2">2
										<input type="radio" name="10" value="3">3
										<input type="radio" name="10" value="4">4
										<input type="radio" name="10" value="5">5
										<br>
										<input type="radio" name="11" value="1">1
										<input type="radio" name="11" value="2">2
										<input type="radio" name="11" value="3">3
										<input type="radio" name="11" value="4">4
										<input type="radio" name="11" value="5">5
										<br>
										<input type="radio" name="12" value="1">1
										<input type="radio" name="12" value="2">2
										<input type="radio" name="12" value="3">3
										<input type="radio" name="12" value="4">4
										<input type="radio" name="12" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>
			</div class="button-container">
</div>
			</div class="card-footer">
			  </div class="card">
			</div class="card-group">
<!-- End ideas 1 - 3 -->





<br>












<!--  Ideas 4 - 6 -->
			<div class="card-group">
			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
			    <div class="card-body">
			      <h5 class="card-title"><?php
							//display title from the db
								displaytitle(4);	?></h5>
								<div id="less4"><p class="regular">
									<?php
									//display shorter description from the db
										displayless(4);
									?>
								</p></div>
								<div id="more4"><p class="regular">
									<?php
									//display longer description from the db
										displaymore(4);
									?>
								</p></div>
									<button type="button" onclick="toggleDetails('more4', 'less4', this)" id="seeMoreButton0" class="standard-button">Show more</button>

			    </div>
			    <div class="card-footer">
						<div>
							Vote:<br>
			<div class="button-container">
			<div class="radiocontainer">
										<input type="radio" name="13" value="1">1
										<input type="radio" name="13" value="2">2
										<input type="radio" name="13" value="3">3
										<input type="radio" name="13" value="4">4
										<input type="radio" name="13" value="5">5
										<br>
										<input type="radio" name="14" value="1">1
										<input type="radio" name="14" value="2">2
										<input type="radio" name="14" value="3">3
										<input type="radio" name="14" value="4">4
										<input type="radio" name="14" value="5">5
										<br>
										<input type="radio" name="15" value="1">1
										<input type="radio" name="15" value="2">2
										<input type="radio" name="15" value="3">3
										<input type="radio" name="15" value="4">4
										<input type="radio" name="15" value="5">5
										<br>
										<input type="radio" name="16" value="1">1
										<input type="radio" name="16" value="2">2
										<input type="radio" name="16" value="3">3
										<input type="radio" name="16" value="4">4
										<input type="radio" name="16" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>
			</div class="button-container">
						</div>
			    </div class="card-footer">
			  </div class="card">


			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
			    <div class="card-body">
			      <h5 class="card-title">	<?php
							//display title from the db
								displaytitle(5);	?></h5>
						<div id="less5"><p class="card-text">
									<?php
									//display shorter description from the db
										displayless(5);									?>
								</p>
						</div>
						<div id="more5"><p class="card-text">
									<?php
									//display longer description from the db
										displaymore(5);									?>
								</p>
						</div>
			      <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> -->
						<button type="button" onclick="toggleDetails('more5', 'less5', this)" id="seeMoreButton0" class="standard-button">Show more</button>
			    </div class="card-body">
			    <div class="card-footer">
						<div>
							Vote:<br>
							<div class="button-container">
							<div class="radiocontainer">
										<input type="radio" name="17" value="1">1
										<input type="radio" name="17" value="2">2
										<input type="radio" name="17" value="3">3
										<input type="radio" name="17" value="4">4
										<input type="radio" name="17" value="5">5
										<br>
										<input type="radio" name="18" value="1">1
										<input type="radio" name="18" value="2">2
										<input type="radio" name="18" value="3">3
										<input type="radio" name="18" value="4">4
										<input type="radio" name="18" value="5">5
										<br>
										<input type="radio" name="19" value="1">1
										<input type="radio" name="19" value="2">2
										<input type="radio" name="19" value="3">3
										<input type="radio" name="19" value="4">4
										<input type="radio" name="19" value="5">5
										<br>
										<input type="radio" name="20" value="1">1
										<input type="radio" name="20" value="2">2
										<input type="radio" name="20" value="3">3
										<input type="radio" name="20" value="4">4
										<input type="radio" name="20" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>					</div>
						</div>
					</div>
			  </div>


			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
					<div class="card-body">
			      <h5 class="card-title">	<?php
							//display title from the db
								displaytitle(6);	?></h5>
						<div id="less6"><p class="card-text">
									<?php
									//display shorter description from the db
										displayless(6);
									?>
								</p>
						</div>
						<div id="more6"><p class="card-text">
									<?php
									//display longer description from the db
										displaymore(6);									?>
								</p>
						</div>
			      <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> -->
						<button type="button" onclick="toggleDetails('more6', 'less6', this)" id="seeMoreButton0" class="standard-button">Show more</button>
			    </div class="card-body">
			    <div class="card-footer">
						<div>
							Vote:<br>
			<div class="button-container">
			<div class="radiocontainer">
										<input type="radio" name="21" value="1">1
										<input type="radio" name="21" value="2">2
										<input type="radio" name="21" value="3">3
										<input type="radio" name="21" value="4">4
										<input type="radio" name="21" value="5">5
										<br>
										<input type="radio" name="22" value="1">1
										<input type="radio" name="22" value="2">2
										<input type="radio" name="22" value="3">3
										<input type="radio" name="22" value="4">4
										<input type="radio" name="22" value="5">5
										<br>
										<input type="radio" name="23" value="1">1
										<input type="radio" name="23" value="2">2
										<input type="radio" name="23" value="3">3
										<input type="radio" name="23" value="4">4
										<input type="radio" name="23" value="5">5
										<br>
										<input type="radio" name="24" value="1">1
										<input type="radio" name="24" value="2">2
										<input type="radio" name="24" value="3">3
										<input type="radio" name="24" value="4">4
										<input type="radio" name="24" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>
			</div class="button-container">
</div>
			</div class="card-footer">
			  </div class="card">
			</div class="card-group">
<!-- End ideas 4 - 6 -->





<br>







<!--  Ideas 7 - 9 -->
			<div class="card-group">
			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
			    <div class="card-body">
			      <h5 class="card-title"><?php
							//display title from the db
								displaytitle(7);	?></h5>
								<div id="less7"><p class="regular">
									<?php
									//display shorter description from the db
										displayless(7);
									?>
								</p></div>
								<div id="more7"><p class="regular">
									<?php
									//display longer description from the db
										displaymore(7);
									?>
								</p></div>
									<button type="button" onclick="toggleDetails('more7', 'less7', this)" id="seeMoreButton0" class="standard-button">Show more</button>

			    </div>
			    <div class="card-footer">
						<div>
							Vote:<br>
			<div class="button-container">
			<div class="radiocontainer">
										<input type="radio" name="25" value="1">1
										<input type="radio" name="25" value="2">2
										<input type="radio" name="25" value="3">3
										<input type="radio" name="25" value="4">4
										<input type="radio" name="25" value="5">5
										<br>
										<input type="radio" name="26" value="1">1
										<input type="radio" name="26" value="2">2
										<input type="radio" name="26" value="3">3
										<input type="radio" name="26" value="4">4
										<input type="radio" name="26" value="5">5
										<br>
										<input type="radio" name="27" value="1">1
										<input type="radio" name="27" value="2">2
										<input type="radio" name="27" value="3">3
										<input type="radio" name="27" value="4">4
										<input type="radio" name="27" value="5">5
										<br>
										<input type="radio" name="28" value="1">1
										<input type="radio" name="28" value="2">2
										<input type="radio" name="28" value="3">3
										<input type="radio" name="28" value="4">4
										<input type="radio" name="28" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>
			</div class="button-container">
						</div>
			    </div class="card-footer">
			  </div class="card">


			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
			    <div class="card-body">
			      <h5 class="card-title">	<?php
							//display title from the db
								displaytitle(8);	?></h5>
						<div id="less8"><p class="card-text">
									<?php
									//display shorter description from the db
										displayless(8);									?>
								</p>
						</div>
						<div id="more8"><p class="card-text">
									<?php
									//display longer description from the db
										displaymore(8);									?>
								</p>
						</div>
			      <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> -->
						<button type="button" onclick="toggleDetails('more8', 'less8', this)" id="seeMoreButton0" class="standard-button">Show more</button>
			    </div class="card-body">
			    <div class="card-footer">
						<div>
							Vote:<br>
							<div class="button-container">
							<div class="radiocontainer">
										<input type="radio" name="29" value="1">1
										<input type="radio" name="29" value="2">2
										<input type="radio" name="29" value="3">3
										<input type="radio" name="29" value="4">4
										<input type="radio" name="29" value="5">5
										<br>
										<input type="radio" name="30" value="1">1
										<input type="radio" name="30" value="2">2
										<input type="radio" name="30" value="3">3
										<input type="radio" name="30" value="4">4
										<input type="radio" name="30" value="5">5
										<br>
										<input type="radio" name="31" value="1">1
										<input type="radio" name="31" value="2">2
										<input type="radio" name="31" value="3">3
										<input type="radio" name="31" value="4">4
										<input type="radio" name="31" value="5">5
										<br>
										<input type="radio" name="32" value="1">1
										<input type="radio" name="32" value="2">2
										<input type="radio" name="32" value="3">3
										<input type="radio" name="32" value="4">4
										<input type="radio" name="32" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>						</div>
					</div>
			  </div>
				 </div>


			  <div class="card">
			    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
					<div class="card-body">
			      <h5 class="card-title">	<?php
							//display title from the db
								displaytitle(9);	?></h5>
						<div id="less9"><p class="card-text">
									<?php
									//display shorter description from the db
										displayless(9);
									?>
								</p>
						</div>
						<div id="more9"><p class="card-text">
									<?php
									//display longer description from the db
										displaymore(9);									?>
								</p>
						</div>
			      <!-- <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p> -->
						<button type="button" onclick="toggleDetails('more9', 'less9', this)" id="seeMoreButton0" class="standard-button">Show more</button>
			    </div class="card-body">
			    <div class="card-footer">
						<div>
							Vote:<br>
			<div class="button-container">
			<div class="radiocontainer">
										<input type="radio" name="33" value="1">1
										<input type="radio" name="33" value="2">2
										<input type="radio" name="33" value="3">3
										<input type="radio" name="33" value="4">4
										<input type="radio" name="33" value="5">5
										<br>
										<input type="radio" name="34" value="1">1
										<input type="radio" name="34" value="2">2
										<input type="radio" name="34" value="3">3
										<input type="radio" name="34" value="4">4
										<input type="radio" name="34" value="5">5
										<br>
										<input type="radio" name="35" value="1">1
										<input type="radio" name="35" value="2">2
										<input type="radio" name="35" value="3">3
										<input type="radio" name="35" value="4">4
										<input type="radio" name="35" value="5">5
										<br>
										<input type="radio" name="36" value="1">1
										<input type="radio" name="36" value="2">2
										<input type="radio" name="36" value="3">3
										<input type="radio" name="36" value="4">4
										<input type="radio" name="36" value="5">5
										<br>
									</div>
									Feasible:<br>
									Novel<br>
									Elaborate<br>
									Relevant<br>
			</div class="button-container">
</div>
			</div class="card-footer">
			  </div class="card">
			</div class="card-group">
<!-- End ideas 7 - 9 -->

				<input type="submit" value="Submit" class="standard-button">
				<a href="sele-crit-res.php"><input class="standard-button" type="button" value="Show results"></a>
			</form>


			</div class="frame">

			<p class="regular"><h2>Reflective Questions</h2></p>
			<p class="regular">What are the advantages and disadvantages of using analytic scales for idea evaluation? </p>
			<p class="regular">In which cases the analytic scales are not suitable for idea evaluation?</p>


		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
		</section>
		<?php include_once "./includes/javascript-loader.php" ?>

<!--js script for cards-->
		<script>
		/*
---------------------------------------------------------------------
---------------------- See more button  -----------------------------
---------------------------------------------------------------------
*/
/* Initialize display and hiding of elements - default: show "see less" elements and hide "see more" elements */
document.getElementById("more1").style.display = "none";
document.getElementById("less1").style.display = "inline";
document.getElementById("more2").style.display = "none";
document.getElementById("less2").style.display = "inline";
document.getElementById("more3").style.display = "none";
document.getElementById("less3").style.display = "inline";
document.getElementById("more4").style.display = "none";
document.getElementById("less4").style.display = "inline";
document.getElementById("more5").style.display = "none";
document.getElementById("less5").style.display = "inline";
document.getElementById("more6").style.display = "none";
document.getElementById("less6").style.display = "inline";
document.getElementById("more7").style.display = "none";
document.getElementById("less7").style.display = "inline";
document.getElementById("more8").style.display = "none";
document.getElementById("less8").style.display = "inline";
document.getElementById("more9").style.display = "none";
document.getElementById("less9").style.display = "inline";
/*
	@param moreID - ID of the "show more" element; hidden when page loads
	@param lessID - ID of the "show less" element; this gets displayed as default when page loads
	@param thisButton - ID of the button that called the function; button needs to call toggleDetails('id','id',this) for it to work
	*/
	function toggleDetails(moreID, lessID, thisButton) {
		var moreText = document.getElementById(moreID);
		var lessText = document.getElementById(lessID);

		if (moreText.style.display == "none") {
			moreText.style.display = "inline";
			lessText.style.display = "none";
			thisButton.textContent = "Show less";
		} else {
			lessText.style.display = "inline";
			moreText.style.display = "none";
			thisButton.textContent = "Show more";
		}
	}

	</script>


	</body>
</html>
