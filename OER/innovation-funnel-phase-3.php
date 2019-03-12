<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<link rel='stylesheet' href='style.css' />
	<link href="CSS_innovationfunnel.css" type="text/css" rel="stylesheet"/>
	<link href="CSS_html-tables.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<link href='https://fonts.googleapis.com/css?family=Petrona' rel='stylesheet'>
	<?php include_once "./includes/stylesheet-loader.php";
				include_once "./includes/top-navigation-bar.php";
	?>

	<title>Innovation Funnel</title>
</head>

<body>

		<?php include 'scroll-to-top-button.php';?>
<!--content bar with both left menu and content divs-->
		<section>


<!--content-->
<article>
<div>
	<p class="definition">The determination of the best ideas goes through different phases. By clicking on the different parts of the displayed funnel, you can find out the most important information about the four phases of idea selection, namely idea generation, filtering, shortlisting and winner determination. On devices with small screens you can swipe the images horizontally to see the phases. </p>
</div>
<div style="clear: both;">

</div>
	<section class="header">

		<!-- Images next to each other in responsive slider -->
	  <div class="responsive-slider" style="width: 100%; max-width: 1000px;">
	<!-- 			<div id="imageIntro"><img id="imageIntroFile" src="./images/SVGs/intro.svg" width="200px" onclick="showIntro()" style="padding-bottom: 120px;border: 0.5px dotted black" /></div> -->
	    <div id="imageOne1"><a href="innovation-funnel-phase-1.php"><img id="imageOneFile" src="./images/SVGs/phase1-blur.svg" width="170px"  /></a></div>
	    <div id="imageTwo1"><a href="innovation-funnel-phase-2.php"><img id="imageTwoFile" src="./images/SVGs/phase2-blur.svg" width="170px"  style="margin-top: 8px"></a></div>
	    <div id="imageThree1"><a href="innovation-funnel-phase-3.php"><img id="imageThreeFile" src="./images/SVGs/phase3.svg" width="170px"  style="margin-top: 3px"></a></div>
	    <div id="imageFour1"><a href="innovation-funnel-phase-4.php"><img id="imageFourFile" src="./images/SVGs/phase4-blur.svg" width="170px"  style="margin-top: 5px"></a></div>
	  </div>
	  <br />

				<span><a href="innovation-funnel-phase-2.php">
					<img src="./images/SVGs/arrow-backward.svg"/>
				</a>Switch phase<a href="innovation-funnel-phase-4.php">
					<img src="./images/SVGs/arrow-forward.svg"/>
				</a></span>
	</section>



	<!-- PHASE 1: IDEA GENERATION -->
	<div id="phase1">

		<!-- <h1>Idea generation</h1>
		<b>Where do the ideas come from?</b>
	<p class="regular">The roles and contributions to the community of participants in innovation contests are well researched. There are six different community member types, namely the socializer, idea generator, master, efficient contributor, passive commentator, and passive idea generator. The member types of innovation contest communities are described in the boxes below. The basic social structure of such online communities is described as being built on voluntary participation, where there is a large percentage of passive users and a small, densely knitted core of highly active users [1]. Below are the member types as identified by the researchers:</p>
<br />

		<div class="card-grid">
			<div class="card-wrap">
				<div class="card">
					<h1><b>Socializer</b></h1>
					<p class="regular">
2.13% of all participants showed active communication and interaction behavior with  ideators and their designs or ideas. The amount of ideas submitted by this member type is very low, so socializers contribute to the contest community with interaction behavior rather than design ideas.
					</p>
				</div>
			</div>

			<div class="card-wrap">
				<div class="card">
					<h1><b>Idea generator</b></h1>
					<p class="regular">2.40% of all participants generated a vast number of designs or ideas. However, these submissions did not necessarily lead to high attention and curiosity of the other community members. Idea generators do not actively engage in communication, facilitate information exchange, or build social relationships.</p>
				</div>
			</div>

			<div class="card-wrap">
				<div class="card">
					<h1><b>Master</b></h1>
					<p class="regular">Just 1% of of the participants in the innovation contest community were identified as Master types. This member type showed results above average in terms of active communication and interaction behavior and number of generated ideas. The submissions of Masters attracted a high level of attention within the contest community and provided a high quantity of content. Masters are a valuable user type that should be captured and encouraged to engage in the community.	</p>
				</div>
			</div>

			<div class="card-wrap">
				<div class="card">
					<h1><b>Efficient contributor</b></h1>

					<p class="regular">
8.4% of the community members were quite similar to Idea Generators, but with a different level of productivity. Identified as Efficient Contributors, these participants focused on idea-generating activities instead of commenting actively. When comparing the number of submitted ideas with Idea Generators, the Efficient Contributors attracted attention among the contest community more “efficiently”. With fewer submitted ideas, this user type was able to attract the same level of attention as Idea Generators with a very high number of submitted designs.					</p>

				</div>
			</div>

			<div class="card-wrap">
				<div class="card">
					<h1><b>Passive users</b></h1>

					<p class="regular">
						The majority of participants in the contest community was represented by passive users, divided into passive commentators (47%) and passive idea generators (39%).
						Passive users do not really generate ideas nor engage in communication or interaction with other community members. Passive commentators provide very few comments. Passive idea generators submitted one idea on average and did not contribute anything further.
					</p>
				</div>
			</div>
		</div>

		<br /><br />
			<div>
					<h1>References</h1><br />
				<ol class="references">
<li>
	Füller, J., Hutter, K., Hautz, J., & Matzler, K. (2014). User roles and contributions in innovation-contest communities. Journal of Management Information Systems, 31(1), 273-308.
</li>
				</ol>
			</div> -->
	</div>
	<!-- End phase 1-->



	<!-- PHASE 2: FILTERING-->
	<div id="phase2">
		<!-- <h1>Filtering</h1>
		<p class="regular">The generation phase of an innovation contest results in a large pile of ideas that differ in terms of quality. The goal of the filtering phase is to identify efficient and effective mechanisms to reduce the submitted ideas to a manageable number that can reach the shortlisting phase. Especially with large amounts of submissions from an innovation contest, it can be challenging to find a suitable method to reduce the amount of ideas. An efficient way to reduce the number of ideas is to establish hard cut-off criteria that facilitate the filtering process. The definition of hard cut-off criteria differs from contest to contest.<br /><br />
The picture below (Figure 1) shows an interface element from a scientific experiment. The displayed idea includes an idea title, a detailed description, a design sketch and the respective ratings by other evaluators, like the number of “applauds” given to an idea or the idea score. The experiment was about a virtual idea contest where the evaluators (the experiment participants) could filter out ideas. As the contest in the experiment had many submissions and there was not much time available for the selection of the best idea, the virtual contest organizers had to come up with meaningful hard cut-off criteria to come close to a manageable set of ideas that could be analyzed in depth. Therefore, the evaluators in the experiment used designated software to access the ideas and to determine if the submissions suffice the contest criteria.
One cut-off criterion was “form completeness”. During the submission phase, ideators had to fill in different fields in a designated form to describe their ideas. In case any of the required fields was left blank, the idea was automatically eliminated. The organizers aimed for complete ideas, which means that ideas that did not include all the relevant information required, are immediately excluded. Due to the fact that all ideas were stored in a database, the elimination could be executed efficiently and effectively.<br /><br />
Another cut-off criterion was the uploaded design sketch. Since the underlying contest was a design challenge, ideators were asked to also upload their design to illustrate how the solution could look like. Every idea that did not include a design was immediately eliminated. In a consecutive step, the selection was further narrowed down through the elimination of those pictures that were very simple. In line with the opinion “a picture says more than a thousand words”, the contest organizers used this cut-off criterion to select those ideas that included detailed designs, which could be further pursued.
</p>
<figure>
<img src="./images/IdeaSel_Phase1.png" style="width: 60%;height: auto;">
<figcaption>Figure 1: Example of idea with related components</figcaption>
</figure>

<br /><br /> -->
	<!-- <div>
			<h1>References</h1><br />
		<ol>
			<li>V. Banken, I. Seeber, and R. Maier, “Comparing Pineapples with Lilikois : An Experimental Analysis of the Effects of Idea Similarity on Evaluation Performance in Innovation Contests,” in Proceedings of the 52nd Hawaii International Conference on System Sciences, pp. 1–10. Forthcoming paper.
</li>

</ol>
	</div> -->
	</div>

	<!-- PHASE 3: SHORTLISTING -->
	<div id="phase3">
		<p><h1>Shortlisting</h1></p>
		<p class="regular"><b>
			Selection vs. Evaluation
		</b></p>
		<p class="regular">
After the filtering phase, in which ideas are eliminated with the deployment of hard cut-off criteria,
the goal of the shortlisting phase is to perform an in-depth evaluation of the remaining ideas.
Shortlisting crowdsourced ideas is challenging, because multiple <a href="circumplex.php" style="text-decoration: none;">selection challenges</a> might arise.
There exist several techniques that one can adopt to facilitate selection, e.g., categorizing alternatives [6,7,8],
partitioning alternatives into smaller sets [5], etc. For example, recent research has found that
(1) evaluation accuracy is higher when evaluators choose from a smaller choice set [11],
(2) evaluators experience higher cognitive effort and have higher reduction rates when they are prompted towards including ideas [2],
and (3) perceive lower cognitive effort and show higher accuracy when choosing ideas from subsets of similar ideas [4].

Here, a particular focus will be given to the use of rating scales for evaluation. Rating scales can be categorized into holistic and
analytic scales. Holistic rating scale describe scoring methods, where a single scoring dimension is collected.
In contrast, analytic rating scales relate to scoring methods where multiple dimensions need to be evaluated [1].

For example  the binary assessment as good idea vs. bad idea is characterised as holistic, whereas the assessment according to quality dimensions, such as novelty and feasibility is characterized as analytic.

	</p>
<p class="regular"><b>
	Holistic scales
</b></p>
<p class="regular">
	Horton et al. (2016) suggest that instead of awarding cardinal scores to sufficiency criteria, to treat them as pass/fail decisions. They suggest that most early-stage innovation criteria should be possible to answer with a simple yes/no. When multiple evaluators assess ideas, the authors suggest to use medians for aggregating individual evaluations rather than the average.
	Another advantage of binary assessments is that one can easily compare selection accuracy between different evaluators by using a confusion or error matrix (Figure 1). A confusion matrix compares the idea quality assessment of the crowd with the assessment of a gold standard. In this context, a gold standard refers to the assessments of evaluators, who have domain knowledge on the certain topic. If the crowd rating converges with the experts’ rating then there exists a true positive or negative. On the contrary, if the crowd rating diverges from the experts’ rating,  there exists a false positive or negative. <br /><br />
	In practical terms, if the crowd rates an idea as of high quality, while the experts rate the same idea as of low quality, the assessment is a false negative. Based on the counts in the confusion matrix, several calculations can be made. For idea selection the following calculations appear meaningful: elimination accuracy, false negative rate and false positive rate. Elimination accuracy indicates how accurate the crowd predicted an idea to be of high or low quality. It measures the proportion of correct predictions (true positives and true negatives) divided by all predictions. The false negative rate indicates the rate of ideas that were falsely rated as high quality, when in fact they were of low quality. If the crowd wrongly rates an idea as of high quality even though it should be rated as of low quality, more resources need to be deployed in the next phase. Contest organizers want to avoid allocating additional financial and human resources in subsequent evaluation activities. Hence, the false negative rate (FNR) should be small to avoid retaining low quality ideas.The false positive rate refers to the share of false positive ratings. In summary, the goal is to have a high elimination accuracy (= high true negative/positive rate) and low false negative/positive rates.

</p>

	<br>
			<div>
			<table>

				<tr>
					<th id="hidden-table-cell"></th>
					<th id="hidden-table-cell"></th>
					<th colspan="2" id="">Gold standard</th>
				</tr>
				<tr>
					<td id="hidden-table-cell"></td>
					<td id="hidden-table-cell"></td>
					<td><em>Low quality</em></td>
					<td><em>High quality</em></td>
				</tr>
				<tr>
					<td rowspan="2" id=""><b>Prediction of the crowd</b></td>
					<td><em>Low quality</em></td>
					<td>True positives(TP)</td>
					<td>False positives(FP)</td>
				</tr>
				<tr>
					<td><em>High quality</em></td>
					<td>False negatives(FN)</td>
					<td>True negatives(TN)</td>
				</tr>
				<caption align="bottom" style="margin-bottom: 5px; margin-top:7px; text-align:left;">Figure 1: Confusion Matrix</caption>
			</table>
		</div>
			<br><br>
		<p class="regular"><b>
			Analytic scales
		</b></p>



				<p>
				<br><br>Idea selection can also be facilitated by criteria that allow evaluators to assess several dimensions of an idea. Widely adopted selection criteria are feasibility, novelty, elaboration, and relevance (based on [9]).
<br />

<ul>
<li class="regular"><b>Feasible</b>: an idea is feasible if it can be easily implemented and it is socially, legally or politically acceptable.<ul>
<li class="regular">the idea is technically feasible.</li>
<li class="regular">the idea is economically feasible.</li>
<li class="regular">the idea is socially, legally, or politically acceptable.</li>
</li></ul>

<li><b>Novel</b>: an idea is most novel if it is original and modifies a paradigm. <ul>
<li class="regular">the idea is unique or at least rare.</li>
<li class="regular">the idea is imaginative, uncommon or surprising.</li></li></ul>

<li><b>Elaborate</b>: an idea is elaborate if it is described in detail.<ul>
<li class="regular">the idea is precise, complete and exactly described.</li>
<li class="regular">the idea is mature.</li>
<li class="regular">the idea's utility is clearly described.</li></li></ul>

<li class="regular"><b>Relevant</b>: an idea is relevant if it applies to the stated problem and will be effective at solving the problem.<ul>
<li class="regular">the idea applies to the matter at hand </li>
<li class="regular">the idea is effective in fostering [the goal of the innovation contest]	</p></li></li></ul>
</ul>


	<br /><br />
		<div>
				<h1>References</h1><br />
			<ol class="references">
				<li>C. Harsch and G. Martin, “Comparing holistic and analytic scoring methods: issues of validity and reliability,” Assess. Educ. Princ. Policy Pract., vol. 20, no. 3, pp. 281–307, 2013.</li>
				<li>I. Boskovic-Pavkovic, I. Seeber, and R. Maier, “Reduce to the Max - How Convergence Nudges Affect Consideration Set Size and Cognitive Effort Abstract,” in Proceedings of the 52nd Hawaii International Conference on System Sciences. Forthcoming paper.
</li>
				<li>C. Harsch and G. Martin, “Comparing holistic and analytic scoring methods: issues of validity and reliability,” Assess. Educ. Princ. Policy Pract., vol. 20, no. 3, pp. 281–307, 2013.
</li>
				<li>V. Banken, I. Seeber, and R. Maier, “Comparing Pineapples with Lilikois : An Experimental Analysis of the Effects of Idea Similarity on Evaluation Performance in Innovation Contests,” in Proceedings of the 52nd Hawaii International Conference on System Sciences, pp. 1–10. Forthcoming paper.
</li>
				<li>A. Chernev, U. Böckenholt, and J. Goodman, “Choice overload: A conceptual review and meta-analysis,” J. Consum. Psychol., vol. 25, no. 2, pp. 333–358, 2012.
</li>
				<li>T. P. Walter and A. Back, “A text mining approach to evaluate submissions to crowdsourcing contests,” Proc. Annu. Hawaii Int. Conf. Syst. Sci., pp. 3109–3118, 2013.
</li>
				<li>L. J. Kornish and K. T. Ulrich, “Opportunity Spaces in Innovation: Empirical Analysis of Large Samples of Ideas,” Manage. Sci., vol. 57, no. 1, pp. 107–128, 2011.
</li>
				<li>O. Toubia and O. Netzer, “Idea Generation , Creativity , and Prototypicality,” Mark. Sci., vol. 25, no. 5, pp. 411–425, 2016.
</li>
				<li>Dean, D. L., Hender, J., Rodgers, T., & Santanen, E. (2006). Identifying good ideas: constructs and scales for idea evaluation.
</li>
				<li>Horton, G., Goers, J., & Knoll, S. W. (2016, January). How Not to Select Ideas for Innovations: A Critique of the Scoring Method. In System Sciences (HICSS), 2016 49th Hawaii International Conference on (pp. 237-246). IEEE.
</li>
				<li>Santiago Walser, R.; Seeber, I.; Maier, R. (2018): What Makes Evaluators Effective? Idea Presentation for Satisficers and Maximizers in Selection Processes of Open Innovation Contests.
In: Book of Abstracts of the 16th International Open and User Innovation Conference. August 6-8, 2018, New York City. New York: New York University, pp. 36 - 37.
</li>
</ol>
		</div>
	</div>



	<!-- PHASE 4: WINNER DETERMINATION-->
	<div id="phase4">
<!-- <h1>Winner determination</h1>
		<p>To attract a large crowd of idea generators and therefore many submissions, idea contests usually offer some reward to one or more winning submissions. These rewards can be diverse, ranging from cash prizes to intangible benefits like support in implementing the idea. Previous research has found that innovation contests attract more ideators, if the contests offer higher (monetary) awards or prizes, lower time cost and required expertise for an ideator to come up with a submission, shorter problem descriptions, longer duration of the contest and higher popularity of the contest (e.g. through marketing) [1].
			The evaluation of the submitted ideas to determine a winner can be done by the participants themselves (self-assessment),
			another or a jury of experts [2]. <br />
 Finally it is argued that rankings of ideas should be created using pairwise comparisons instead of assigning points to ideas.
 Pairwise comparisons are easier for the evaluators and provide a better overview of the assessed ideas.
 A characteristic example is the statement “A1 is preferable to A2”, which is perceived similarly by different people,
 whereas in contrast the value a school grade is always relative and can mean something different to different people [3].
</p>
<div>
	<h1>References</h1><br />
	<ol class="references">
				<li>Yang, Y., Chen, P. Y., & Pavlou, P. (2009). Open innovation: An empirical study of online contests. ICIS 2009 Proceedings, 13.</li>
		<li>Adamczyk, S., Bullinger, A. C., & Möslein, K. M. (2012). Innovation contests: A review, classification and outlook. Creativity and Innovation Management, 21(4), 335-360.</li>


			<li>Horton, G., Goers, J., & Knoll, S. W. (2016, January). How Not to Select Ideas for Innovations: A Critique of the Scoring Method. In System Sciences (HICSS), 2016 49th Hawaii International Conference on (pp. 237-246). IEEE.
	</li>
</li>
</ol>
</div> -->
	</div>






		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
</section>


	<!-- Import jQuery -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>

	<!-- Import slick: jQuery plugin for carousels -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<!-- This is the self-written JS code-->
	<script src="JS_javascript-sebastian.js"></script>
	<script src="JS_innovation-funnel.js"></script>
	<script>
	// Initial values for page loading: show introduction, hide the others
	// document.getElementById("intro-phase").style.display = "block";
	document.getElementById("phase1").style.display = "none";
	document.getElementById("phase2").style.display = "none";
	document.getElementById("phase3").style.display = "block";
	document.getElementById("phase4").style.display = "none";
	</script>
	<?php include_once "./includes/javascript-loader.php" ?>


</body>

</html>
