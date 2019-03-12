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

								<?php
								//display title from the db
									//include Poll class
									include 'Poll.class.php';
									vote(9);
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
									margin-bottom: 10px;
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
.card-wrap {
	float: left;
	width: 100%;
	padding: 5px;
}
/* on medium screens show two cards per row */
@media (min-width: 500px) {
.card-wrap {
		width: 50%;
	}
}
/* on large screens show three cards in a row */
@media (min-width: 720px) {
.card-wrap {
        width: 33%;
	}
}
/* Cards placed inside card-wrap */
.card {
	/* Add shadows to create the "card" effect */
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
.card:hover {
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
}

.rowdiv {
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
			<h2>Description</h2>
		  	<p class="regular">This idea selection method aims to group ideas into three categories according to their perceived originality and feasibility. Having gathered a number of ideas, you can discuss individual ideas in a group and agree on where to put them. Alternatively, you can use some elements of the Post-it Voting technique and vote on categories for individual ideas.</p>
			<p class="regular">The matrix is a coordinate system with the X-axis standing for the originality of the idea and the Y-axis standing for the ease of implementation. It consists of four quadrants, three of which are relevant. <br>The <b>WOW</b> quadrant contains original, easily-implemented ideas. These are the most attractive ones.<br>The <b>NOW</b> quadrant contains common, easily implemented ideas.<br>The <b>HOW</b> quadrant contains original ideas which difficult to implement.<br>Each idea is evaluated and categorized by means of discussion or voting. In the end, WOW ideas should be considered first, followed by NOW and HOW ideas.</p>
			<h2>Example: Idea Contest</h2>
			<p class="regular">While the knowledge around IT is becoming mandatory in business education, at many universities the Information Systems courses are not effective at teaching the future generation of business managers the key concepts for thriving in the digital innovation era. Therefore, we ask the following question: What kind of digital resources would support, enhance and improve the teaching of IS courses? Please provide your ideas.</p>

<!--grey frame-->
			<div class="frame">
				<h2>Idea Contest Results</h2>

				<!-- Control buttons -->
				<div id="myBtnContainer">
				  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
				  <button class="btn" onclick="filterSelection('filterwow')"> Wow</button>
				  <button class="btn" onclick="filterSelection('filternow')"> Now</button>
				  <button class="btn" onclick="filterSelection('filterhow')"> How</button>
				  <button class="btn" onclick="filterSelection('filternope')"> Nope</button>
				</div id="myBtnContainer">

				<div class="rowdiv">
				<div class="card-grid">
					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(1); ?>">
							<h4>
								<?php
								//display title from the db
									//include Poll class
									displaytitle(1);
								?>
							</h4>
							<div id="less1"><p class="regular">

							</p></div id="less1">
							<div id="more1"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(1);
								?>
							</p></div id="more1">
								<!-- HOW THE BUTTONS WORK: -->
								<!-- 1. Create the different DIVs that you want to switch between and assign IDs to them -->
								<!-- 2. In JavaScript, hide the desired elements when the page loads -->
								<!-- 3. The button calls the function toggleDetails(param1, param2, this) -->
								<!-- Parameters: "param1" = ID of the DIV to show; "param2" = ID of the DIV to hide; "this" = refers to this button and is necessary to change the button text -->
								<div>
								<div class="matrixcontainer2">
								<?php
									matrix(1);
								?>
								</div class="matrixcontainer2">
								<button type="button" onclick="toggleDetails('more1', 'less1', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">

					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(2); ?>">
							<h4>
								<?php
								//display title from the db
									displaytitle(2);
								?>
							</h4>
							<div id="less2"><p class="regular">

							</p></div id="less2">
							<div id="more2"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(2);
								?>
							</p></div id="more2">
								<div>
								<div class="matrixcontainer2">
								<?php
									matrix(2);
								?>
								</div class="matrixcontainer2">
							<button type="button" onclick="toggleDetails('more2', 'less2', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">

					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(3); ?>">
							<h4>
								<?php
								//display title from the db
									displaytitle(3);
								?>
							</h4>
							<div id="less3"><p class="regular">

							</p></div id="less3">
							<div id="more3"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(3);
								?>
							</p></div id="more3">
							<div>
								<div class="matrixcontainer2">
								<?php
									matrix(3);
								?>
								</div class="matrixcontainer2">

								<button type="button" onclick="toggleDetails('more3', 'less3', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">
				</div class="card-grid">
				</div class="rowdiv">

				<div class="rowdiv">
				<div class="card-grid">
					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(4); ?>">
							<h4>
								<?php
								//display title from the db
									displaytitle(4);
								?>
							</h4>
							<div id="less4"><p class="regular">

							</p></div>
							<div id="more4"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(4);
								?>
							</p></div>
								<div>
								<div class="matrixcontainer2">
								<?php
									matrix(4);
								?>
								</div class="matrixcontainer2">

								<button type="button" onclick="toggleDetails('more4', 'less4', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">

					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(5); ?>">
							<h4>
								<?php
								//display title from the db
									displaytitle(5);
								?>
							</h4>
							<div id="less5"><p class="regular">

							</p></div>
							<div id="more5"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(5);
								?>
							</p></div>
							<div>
								<div class="matrixcontainer2">
								<?php
									matrix(5);
								?>
								</div class="matrixcontainer2">

								<button type="button" onclick="toggleDetails('more5', 'less5', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">

					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(6); ?>">
							<h4>
								<?php
								//display title from the db
									displaytitle(6);
								?>
							</h4>
							<div id="less6"><p class="regular">

							</p></div>
							<div id="more6"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(6);
								?>
							</p></div>
							<div>
								<div class="matrixcontainer2">
								<?php
									matrix(6);
								?>
								</div class="matrixcontainer2">

								<button type="button" onclick="toggleDetails('more6', 'less6', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">

				</div class="card-grid">
				</div class="rowdiv">

				<div class="rowdiv">
				<div class="card-grid">
					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(7); ?>">
							<h4>
								<?php
								//display title from the db
									displaytitle(7);
								?>
							</h4>
							<div id="less7"><p class="regular">

							</p></div>
							<div id="more7"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(7);
								?>
							</p></div>
								<div>
								<div class="matrixcontainer2">
								<?php
									matrix(7);
								?>
								</div class="matrixcontainer2">

								<button type="button" onclick="toggleDetails('more7', 'less7', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">

					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(8); ?>">
							<h4>
								<?php
								//display title from the db
									displaytitle(8);
								?>
							</h4>
							<div id="less8"><p class="regular">

							</p></div>
							<div id="more8"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(8);
								?>
							</p></div>
							<div>
								<div class="matrixcontainer2">
								<?php
									matrix(8);
								?>
								</div class="matrixcontainer2">

								<button type="button" onclick="toggleDetails('more8', 'less8', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">

					<div class="card-wrap">
						<div class="card filterDiv <?php echo filter(9); ?>">
							<h4>
								<?php
								//display title from the db
									displaytitle(9);
								?>
							</h4>
							<div id="less9"><p class="regular">

							</p></div>
							<div id="more9"><p class="regular">
								<?php
								//display longer description from the db
									displaymore(9);
								?>
							</p></div>
							<div>
								<div class="matrixcontainer2">
								<?php
									matrix(9);
								?>
								</div class="matrixcontainer2">

								<button type="button" onclick="toggleDetails('more9', 'less9', this)" id="seeMoreButton0" class="standard-button">Show more</button></div>
						</div class="card">
					</div class="card-wrap">

				</div class="card-grid">
				</div class="rowdiv">


				<form action="admin.class.php" method="post">
						<a href="now-wow-how-mat.php"><input type="button" class="standard-button" value="Back to questions"></a>
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

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<?php include_once "./includes/javascript-loader.php" ?>

	</body>
</html>
