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
		<?php include "Poll.class.php"; votePostIt(9); ?>
			<script src="Chart.bundle.js"></script>
			<script src="utils.js"></script>
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
</style>
		</head>
	<body>



<!--content bar with both left menu and content divs-->
		<section>


<!--content-->
		  <article>
		    <h1>Post-it Voting</h1>
		    <p class="definition">
				Post-it voting facilitates idea selection, through multiple voting. The method ensures an equal say among the evaluation team members and allows for multiple ideas to be further pursued.
				</p>

		  	<p class="regular">Post-it Voting or dot voting is a cumulative voting approach for recognizing preferences among
different options. The origins of cumulative voting date back to the 19th century, where the method was used frequently in elections. Dot-voting is said to be used since the 1980s  and is a popular method for quick collaborative decisions.
 				</p>

			<h2>Example: Idea Contest</h2>
			<p class="regular">While the knowledge around IT is becoming mandatory in business education, at many universities the Information Systems courses are not effective at teaching the future generation of business managers the key concepts for thriving in the digital innovation era. Therefore, we ask the following question: What kind of digital resources would support, enhance and improve the teaching of IS courses? Please provide your ideas.</p>

<!--grey frame-->
			<div class="frame">
				<h2>Idea Contest</h2>
	<div id="container" style="width: 100%;">
		<canvas id="canvas"></canvas>
	</div>


			<form action="admin3.class.php" method="post">
				<a href="post-it-voti.php"><input class="standard-button" type="button" value="Back to questions"></a>
			</form>

			</div class="frame">

			<p class="regular"><h2>Reflective Questions</h2></p>
			<p class="regular">What is the benefit of Post-it Voting over traditional approaches where each participant has only one vote?</p>
			<p class="regular">What could be potential functionalities of a software tool that supports this voting method?</p>

			<p class="regular"><h2>Further Reading</h2></p>
			<ol class="references">
				<li>
					<a href="https://www.interaction-design.org/literature/article/how-to-select-the-best-idea-by-the-end-of-an-ideation-session">https://www.interaction-design.org/literature/article/how-to-select-the-best-idea-by-the-end-of-an-ideation-session  </a><br>
				</li>
				<li>
					<a href="https://en.wikipedia.org/wiki/Dot-voting">https://en.wikipedia.org/wiki/Dot-voting</a><br>
				</li>
				<li>
					<a href="https://en.wikipedia.org/wiki/Cumulative_voting">https://en.wikipedia.org/wiki/Cumulative_voting</a><br>
				</li>
				<li>
					<a href="https://innovationenglish.sites.ku.dk/metode/idea-selection-by-dot-voting/">https://innovationenglish.sites.ku.dk/metode/idea-selection-by-dot-voting/</a><br>
				</li>
				<li>
					<a href="https://gamestorming.com/dot-voting/">https://gamestorming.com/dot-voting/</a><br>
				</li>
			</ol>
		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
		</section>


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

	<script>
		var vote1 = Math.round("<?php displayVote(1); ?>");
		var vote2 = Math.round("<?php displayVote(2); ?>");
		var vote3 = Math.round("<?php displayVote(3); ?>");
		var vote4 = Math.round("<?php displayVote(4); ?>");
		var vote5 = Math.round("<?php displayVote(5); ?>");
		var vote6 = Math.round("<?php displayVote(6); ?>");
		var vote7 = Math.round("<?php displayVote(7); ?>");
		var vote8 = Math.round("<?php displayVote(8); ?>");
		var vote9 = Math.round("<?php displayVote(9); ?>");

		var my_vote1 = "<?php echo $my_vote1; ?>";
		var my_vote2 = "<?php echo $my_vote2; ?>";
		var my_vote3 = "<?php echo $my_vote3; ?>";
		var my_vote4 = "<?php echo $my_vote4; ?>";
		var my_vote5 = "<?php echo $my_vote5; ?>";
		var my_vote6 = "<?php echo $my_vote6; ?>";
		var my_vote7 = "<?php echo $my_vote7; ?>";
		var my_vote8 = "<?php echo $my_vote8; ?>";
		var my_vote9 = "<?php echo $my_vote9; ?>";

		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: [' Run2learn', 'Immerse.Now!', ' Foundation Video inputs', 'Play while you learn', 'CodeEditor', 'Cool-laboration', ' Statorial', 'AI-Reflector', ' DailyQ'],
			datasets: [{
				label: 'Cumulative',
				backgroundColor: color(window.chartColors.orange).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					vote1,
					vote2,
					vote3,
					vote4,
					vote5,
					vote6,
					vote7,
					vote8,
					vote9
				],

			}, {
				label: 'Your votes',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					my_vote1,
					my_vote2,
					my_vote3,
					my_vote4,
					my_vote5,
					my_vote6,
					my_vote7,
					my_vote8,
					my_vote9
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Post-it Voting Results [%] '
					}
				}
			});

		};

	</script>
	<?php include_once "./includes/javascript-loader.php" ?>

	</body>
</html>
