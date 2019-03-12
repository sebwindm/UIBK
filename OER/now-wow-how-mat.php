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

/* matrix container div in the first matrix page */
.matrixcontainer {
	width: 50%;
}

/* matrix container div in the matrix results page */
.matrixcontainer2 {
	width: 100%;
}

.matrix {
    border-collapse: collapse;
    text-align: center;
    font-size: 0.75em;
    width: 100%;
}

.matrix .td2, .td3, .td5, .td6, .td8, .td9 {
    position: relative;
}

.matrix .td1, .td4, .td7 {
    width: 10%;
    padding-right: 10px;
}

.matrix .td8, .td9 {
    padding-top: 10px;
}

.matrix .td2:after, .td3:after, .td5:after, .td6:after {
    content: '';
    display: block;
    margin-top: 100%;
}

/* divs inside cells to make cells square */
td .nope, .wow, .how, .now {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: silver;
    border: 1px solid black;
		padding-top: 40%;
}

.matrix .td1, .td2, .td3, .td4, .td5, .td6, .td7, .td8, .td9 {
    width: 30%;
    position: relative;
}

.matrix .td2:after, .td3:after, .td5:after, .td6:after {
    content: '';
    display: block;
    margin-top: 100%;
}

/* divs inside cells to make cells square */
td .nope, .wow, .how, .now {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: lightgray;
    border: 1px solid black;
		padding-top: 50%;
}

td .highlight {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: orange;
    border: 1px solid black;
		padding-top: 50%;
}
/* default display of cards none so filtering might work */
.filterDiv {
    opacity: 0.2; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show {
    opacity: 1;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 12px;
  background-color: lightgrey;
  cursor: pointer;
}

/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: orange;
}

/* Add a dark background to the active button */
.btn.active {
  background-color: #003362;
  color: white;
}
/* cards style */
/* Outer structure where card wraps get placed in*/
.card-grid {
	width: 100%;
}
.card-grid:after {
	content: "";
	display: table;
	clear: both;
}
/* Card wrap placed inside card grid*/
/* on small screens show one card per row */
.c1ard-wrap {
	float: left;
	width: 100%;
	padding: 5px;
}
/* on medium screens show two cards per row */
@media (min-width: 500px) {
.c1ard-wrap {
		width: 50%;
	}
}
/* on large screens show three cards in a row */
@media (min-width: 720px) {
.c1ard-wrap {
        width: 33%;
	}
}
/* Cards placed inside c1ard-wrap */
.c1ard {
	/* Add shadows to create the "c1ard" effect */
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
	transition: 0.3s;
	border-radius: 5px;	/* 5px rounded corners */
	padding: 2px 16px;
	background: white;
	border: 1px solid #ccc;
    border-bottom: 2px solid #ccc;
    min-height: 300px;
    padding-bottom: 60px;
}
/* On mouse-over, add a deeper shadow */
.c1ard:hover {
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
}

.r1owdiv {
	width: 100%;
}
								</style>
		</head>
	<body>

		<?php include 'scroll-to-top-button.php';?>

<!--content bar with both left menu and content divs-->
		<section>


<!--content-->
		  <article>
		    <h1>Now-Wow-How Matrix</h1>
		    <p class="definition">
			The Now-Wow-How matrix supports the idea selection process by targeting two criteria namely the degree of idea originality and the difficulty of idea implementation. The resulting ideas (Wow ideas) would be those that require both relatively low implementation effort and high degree of originality.
</p>





		  	<p class="regular"><b class="paragraph-topic">What?</b>
			  The NOW-WOW-HOW matrix is an idea selection tool that forces evaluators to asses ideas in two dimensions, the degree of originality and the degree of feasibility. Degree of originality refers to ideas that vary according to the level of novelty, and degree of feasibility refers to ideas that vary according to the level of implementation. </p>
			<p class="regular"><b class="paragraph-topic">Why?</b>
			Gray (2011) argues that when it comes to convergence, people often end up picking ideas that are most familiar to them. This is called a ‘creative paradox’ or a ‘creadox’. To address this paradox, the method allows the evaluators to think outside the box and take all relevant parameters into consideration while evaluating an idea.  </p>
			<p class="regular"><b class="paragraph-topic">How?</b>
			The selection process is facilitated by a matrix as the core artefact. The matrix consists of two axes at a right angle depicting a coordinate system. The X axis represents the degree of idea originality and the Y axis represents the difficulty of idea implementation. The four quadrants resulting from the position of the axes are conceptualized as following: The <b>NOW</b> quadrant includes ideas that are easy to implement but lack a substantial degree of novelty. The <b>WOW</b> quadrant includes ideas that are both original and easy to implement. The <b>HOW</b> quadrant includes ideas that are original ideas, but very difficult to implement. The final quadrant includes all ideas that are impossible to implement and therefore, out of consideration. The categorization process takes place during the evaluators' discussion or in combination with the Post-it Voting technique.



<!--grey frame-->
			<div class="frame">
				<h2>Now-Wow-How Matrix</h2>
				<div class="matrixcontainer">

					<?php
					//include Poll class
					    include 'Poll.class.php';
						matrix(0);
					?>
				</div class="matrixcontainer">
			</div class="frame">

			<h2>Example: Idea Contest</h2>
			<p class="regular">While the knowledge around IT is becoming mandatory in business education, at many universities the Information Systems courses are not effective at teaching the future generation of business managers the key concepts for thriving in the digital innovation era. Therefore, we ask the following question: What kind of digital resources would support, enhance and improve the teaching of IS courses? Please provide your ideas.</p>
<!--grey frame-->
			<div class="frame">
				<h2>Ideas</h2>

				<form action="now-wow-how-mat-res.php" method="post">
				<div class="rowdiv">
				<div class="card-grid">

<div class="card-group">
					<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(1);
								?>
							</h4>
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
								<div>
									Vote:
									<br>
									<input type="radio" name="1" value="Wow">Wow <br />
									<input type="radio" name="1" value="Now">Now<br />
									<input type="radio" name="1" value="How">How<br />
									<input type="radio" name="1" value="Nope">Nope
									<br>

								</div>
						</div class="card-body">
						<button type="button" onclick="toggleDetails('more1', 'less1', this)" id="seeMoreButton0" class="standard-button">Show more</button>
					</div class="card">

					<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(2);
								?>
							</h4>
							<div id="less2"><p class="regular">
								<?php
								//display shorter description from the db
									displayless(2);
								?>
							</p></div>
							<div id="more2"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(2);
								?>
							</p></div>
								<div>
									Vote:
									<br>
									<input type="radio" name="2" value="Wow">Wow<br />
									<input type="radio" name="2" value="Now">Now<br />
									<input type="radio" name="2" value="How">How<br />
									<input type="radio" name="2" value="Nope">Nope
									<br>

								</div>
						</div class="card-body">
						<button type="button" onclick="toggleDetails('more2', 'less2', this)" id="seeMoreButton0" class="standard-button">Show more</button>
					</div class="card">

					<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(3);
								?>
							</h4>
							<div id="less3"><p class="regular">
								<?php
								//display shorter description from the db
									displayless(3);
								?>
							</p></div>
							<div id="more3"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(3);
								?>
							</p></div>
								<div>
									Vote:
									<br>
									<input type="radio" name="3" value="Wow">Wow<br />
									<input type="radio" name="3" value="Now">Now<br />
									<input type="radio" name="3" value="How">How<br />
									<input type="radio" name="3" value="Nope">Nope
									<br>

								</div>
						</div class="card-body">
						<button type="button" onclick="toggleDetails('more3', 'less3', this)" id="seeMoreButton0" class="standard-button">Show more</button>
					</div class="card">
				</div class="card-group">
				</div class="card-grid">
				</div class="rowdiv">
<br />
				<div class="rowdiv">
				<div class="card-grid">
					<div class="card-group">
				<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(4);
								?>
							</h4>
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
								<div>
									Vote:
									<br>
									<input type="radio" name="4" value="Wow">Wow<br />
									<input type="radio" name="4" value="Now">Now<br />
									<input type="radio" name="4" value="How">How<br />
									<input type="radio" name="4" value="Nope">Nope
									<br>

								</div>
						</div class="card-body">
						<button type="button" onclick="toggleDetails('more4', 'less4', this)" id="seeMoreButton0" class="standard-button">Show more</button>
					</div class="card">

					<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(5);
								?>
							</h4>
							<div id="less5"><p class="regular">
								<?php
								//display shorter description from the db
									displayless(5);
								?>
							</p></div>
							<div id="more5"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(5);
								?>
							</p></div>
								<div>
									Vote:
									<br>
									<input type="radio" name="5" value="Wow">Wow<br />
									<input type="radio" name="5" value="Now">Now<br />
									<input type="radio" name="5" value="How">How<br />
									<input type="radio" name="5" value="Nope">Nope
									<br>

								</div>
						</div class="card-body">
						<button type="button" onclick="toggleDetails('more5', 'less5', this)" id="seeMoreButton0" class="standard-button">Show more</button>
					</div class="card">

					<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(6);
								?>
							</h4>
							<div id="less6"><p class="regular">
								<?php
								//display shorter description from the db
									displayless(6);
								?>
							</p></div>
							<div id="more6"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(6);
								?>
							</p></div>
								<div>
									Vote:
									<br>
									<input type="radio" name="6" value="Wow">Wow<br />
									<input type="radio" name="6" value="Now">Now<br />
									<input type="radio" name="6" value="How">How<br />
									<input type="radio" name="6" value="Nope">Nope
									<br>

								</div>
						</div class="card-body">
						<button type="button" onclick="toggleDetails('more6', 'less6', this)" id="seeMoreButton0" class="standard-button">Show more</button>
					</div class="card">
				</div class="card-group">
				</div class="card-grid">
				</div class="rowdiv">
<br />
				<div class="card-grid">
					<div class="card-group">
				<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(7);
								?>
							</h4>
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
								<div>
									Vote:
									<br>
									<input type="radio" name="7" value="Wow">Wow<br />
									<input type="radio" name="7" value="Now">Now<br />
									<input type="radio" name="7" value="How">How<br />
									<input type="radio" name="7" value="Nope">Nope
									<br>

								</div>
						</div class="card-body">
						<button type="button" onclick="toggleDetails('more7', 'less7', this)" id="seeMoreButton0" class="standard-button">Show more</button>
					</div class="card">

					<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(8);
								?>
							</h4>
							<div id="less8"><p class="regular">
								<?php
								//display shorter description from the db
									displayless(8);
								?>
							</p></div>
							<div id="more8"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(8);
								?>
							</p></div>
								<div>
									Vote:
									<br>
									<input type="radio" name="8" value="Wow">Wow<br />
									<input type="radio" name="8" value="Now">Now<br />
									<input type="radio" name="8" value="How">How<br />
									<input type="radio" name="8" value="Nope">Nope
									<br>

								</div>
						</div class="card-body">
						<button type="button" onclick="toggleDetails('more8', 'less8', this)" id="seeMoreButton0" class="standard-button">Show more</button>
					</div class="card">

					<div class="card">
						<div class="card-body">
							<h4>
								<?php
								//display title from the db
									displaytitle(9);
								?>
							</h4>
							<div id="less9"><p class="regular">
								<?php
								//display shorter description from the db
									displayless(9);
								?>
							</p></div>
							<div id="more9"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(9);
								?>
							</p></div>
								<div>
									Vote:
									<br>
									<input type="radio" name="9" value="Wow">Wow<br />
									<input type="radio" name="9" value="Now">Now<br />
									<input type="radio" name="9" value="How">How<br />
									<input type="radio" name="9" value="Nope">Nope
									<br>

								</div>

						</div class="card-body">
						<button type="button" onclick="toggleDetails('more9', 'less9', this)" id="seeMoreButton0" class="standard-button">Show more</button>

					</div class="card">
</div class="card-group">
				</div class="card-grid">
<br />
				<input type="submit" class="standard-button" value="Submit">
				<a href="now-wow-how-mat-res.php"><input class="standard-button" type="button" value="Show results"></a>
			</form>

			</div class="frame">
			<p class="regular"><h2>Reflective Questions</h2></p>
			<p class="regular">Would it make sense to put some ideas into this useless "nope" quadrant or should you discard them right away?</p>

			<p class="regular"><h2>Further Reading</h2></p>

			<ol class="references">
				<li>
					<a href="https://gamestorming.com/how-now-wow-matrix/">https://gamestorming.com/how-now-wow-matrix/</a>
				</li>
				<li>
					<a href="https://www.interaction-design.org/literature/article/how-to-select-the-best-idea-by-the-end-of-an-ideation-session">https://www.interaction-design.org/literature/article/how-to-select-the-best-idea-by-the-end-of-an-ideation-session</a>
				</li>
				<li>
					<a href="https://www.groupmap.com/map-templates/how-now-wow-matrix/">https://www.groupmap.com/map-templates/how-now-wow-matrix/</a>
				</li>
				<li>
					<a href="https://www.innovationgames.com/how-now-wow-matrix/">https://www.innovationgames.com/how-now-wow-matrix/</a>
				</li>
			</ol>
		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
		</section>


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
	<?php include_once "./includes/javascript-loader.php" ?>

	</body>
</html>
