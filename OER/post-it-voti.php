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
						.standard-button-greyed-out {
							background-color: #d9d9d9;
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
						.card-wrap{
							margin-top: 50px;
						}
						.card-title{
							font-weight: bold;
						}
						</style>
		</head>
	<body>

		<?php include 'scroll-to-top-button.php';
		include_once 'Poll.class.php';?>

<!--content bar with both left menu and content divs-->
		<section>


<!--content-->
		  <article>
		    <h1>Post-it Voting</h1>
		    <p class="definition">
			Post-it voting facilitates idea selection, through multiple voting. The method ensures an equal say among the evaluation team members and allows for multiple ideas to be further pursued.
			</p>
		  	<p class="regular"><b class="paragraph-topic">What?</b>
			  Post-it Voting or dot voting is a cumulative voting approach for recognizing preferences among
different options. The origins of cumulative voting date back to the 19th century, where the method was used frequently in elections. Dot-voting is said to be used since the 1980s  and is a popular method for quick collaborative decisions.
</p>

			<p class="regular">
				<b class="paragraph-topic">Why?</b>
				Post-it Voting is beneficial for shortlisting processes as it results in a group of favorites, instead of one winning idea. Post-it voting can be used to pick a number of ideas from a much larger volume.
</p>
			<p class="regular">
				<b class="paragraph-topic">How?</b>
				The method is applied as following: each idea is written on an index card or a sticky note. Every evaluator has multiple votes (typically three to four), in the form of stickers, colored paper dots or just by using a marker pen. The evaluator can distribute the votes among the ideas depending on his/her own preferences. The facilitator chooses the best ideas according to the number of votes each idea received. The method can be adjusted according to the needs of the evaluator. Common adjustments are binary voting (two colors for like/dislike) or voting according to evaluation criteria (each color represents a different criterion).
</p>

			<h2>Example: Idea Contest</h2>
			<p class="regular">While the knowledge around IT is becoming mandatory in business education, at many universities the Information Systems courses are not effective at teaching the future generation of business managers the key concepts for thriving in the digital innovation era. Therefore, we ask the following question: What kind of digital resources would support, enhance and improve the teaching of IS courses? Please provide your ideas.</p>


<!--grey frame-->
			<div class="frame">
				<h2>Ideas</h2>
<div>
	<span><b>Total votes remaining: </b></span>
	<span id="total-votes-remaining-display">10</span>
</div>
<br>








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
				<button id="ideaOneIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaOneIncreaseButton', 'idea-one-vote-counter','ideaOneDecreaseButton')">+1 vote</button>
				<button id="ideaOneDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaOneDecreaseButton','idea-one-vote-counter')">-1 vote</button>
				<span><b>Votes: </b></span><span id="idea-one-vote-counter">0</span>
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
								<button id="ideaTwoIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaTwoIncreaseButton','idea-two-vote-counter','ideaTwoDecreaseButton')">+1 vote</button>
								<button id="ideaTwoDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaTwoDecreaseButton','idea-two-vote-counter')">-1 vote</button>
								<span><b>Votes: </b></span><span id="idea-two-vote-counter">0</span>
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
				<button id="ideaThreeIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaThreeIncreaseButton','idea-three-vote-counter','ideaThreeDecreaseButton')">+1 vote</button>
				<button id="ideaThreeDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaThreeDecreaseButton','idea-three-vote-counter')">-1 vote</button>
				<span><b>Votes: </b></span><span id="idea-three-vote-counter">0</span>
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
				<button id="ideaFourIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaFourIncreaseButton','idea-four-vote-counter','ideaFourDecreaseButton')">+1 vote</button>
				<button id="ideaFourDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaFourDecreaseButton','idea-four-vote-counter')">-1 vote</button>
				<span><b>Votes: </b></span><span id="idea-four-vote-counter">0</span>
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
								<button id="ideaFiveIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaFiveIncreaseButton','idea-five-vote-counter','ideaFiveDecreaseButton')">+1 vote</button>
								<button id="ideaFiveDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaFiveDecreaseButton','idea-five-vote-counter')">-1 vote</button>
								<span><b>Votes: </b></span><span id="idea-five-vote-counter">0</span>						</div>
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
				<button id="ideaSixIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaSixIncreaseButton','idea-six-vote-counter','ideaSixDecreaseButton')">+1 vote</button>
				<button id="ideaSixDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaSixDecreaseButton','idea-six-vote-counter')">-1 vote</button>
				<span><b>Votes: </b></span><span id="idea-six-vote-counter">0</span>
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
				<button id="ideaSevenIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaSevenIncreaseButton', 'idea-seven-vote-counter','ideaSevenDecreaseButton')">+1 vote</button>
				<button id="ideaSevenDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaSevenDecreaseButton','idea-seven-vote-counter')">-1 vote</button>
				<span><b>Votes: </b></span><span id="idea-seven-vote-counter">0</span>
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
								<button id="ideaEightIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaEightIncreaseButton','idea-eight-vote-counter','ideaEightDecreaseButton')">+1 vote</button>
								<button id="ideaEightDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaEightDecreaseButton','idea-eight-vote-counter')">-1 vote</button>
								<span><b>Votes: </b></span><span id="idea-eight-vote-counter">0</span>						</div>
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
				<button id="ideaNineIncreaseButton" class="increase-button standard-button" onclick="increaseVoteCount('ideaNineIncreaseButton','idea-nine-vote-counter','ideaNineDecreaseButton')">+1 vote</button>
				<button id="ideaNineDecreaseButton" class="decrease-button standard-button-greyed-out" onclick="decreaseVoteCount('ideaNineDecreaseButton','idea-nine-vote-counter')">-1 vote</button>
				<span><b>Votes: </b></span><span id="idea-nine-vote-counter">0</span>
			</div class="button-container">
</div>
			</div class="card-footer">
			  </div class="card">
			</div class="card-group">
<!-- End ideas 7 - 9 -->



<br><br><br>






			<form action="post-it-voti-res.php" method="post">
				<input type="hidden" name="1" id="1" value="">
				<input type="hidden" name="2" id="2" value="">
				<input type="hidden" name="3" id="3" value="">
				<input type="hidden" name="4" id="4" value="">
				<input type="hidden" name="5" id="5" value="">
				<input type="hidden" name="6" id="6" value="">
				<input type="hidden" name="7" id="7" value="">
				<input type="hidden" name="8" id="8" value="">
				<input type="hidden" name="9" id="9" value="">
				<input class="standard-button" type="submit" value="Submit">
				<a href="post-it-voti-res.php"><input class="standard-button" type="button" value="Show results"></a>
			</form>

			</div class="frame">


			<p class="regular"><h2>Reflective Questions</h2></p>
			<p class="regular">What is the benefit of Post-it Voting over traditional approaches where each participant has only one vote? </p>
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

		<?php include_once "./includes/javascript-loader.php" ?>


<script type="text/javascript" src="JS_post-it-voting.js"></script>
	</body>
</html>
