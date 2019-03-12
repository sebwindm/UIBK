<!DOCTYPE html5>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>OER - UIBK</title>
			<link rel='stylesheet' href='style.css' />
			<link rel='stylesheet' href='CSS_affinity-diagram.css' />
			<link rel="shortcut icon" href="images/icon.ico"/>
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<link href='https://fonts.googleapis.com/css?family=Petrona' rel='stylesheet'>
		</head>
		<?php include_once "./includes/stylesheet-loader.php";
					include_once "./includes/top-navigation-bar.php";
		?>
	<body>


		<?php include 'scroll-to-top-button.php';?>

<!--content bar with both left menu and content divs-->
		<section>



<!--content-->
		  <article>


		<h2>Four Categories</h2>
		<p class="definition">The four categories method encourages users to consider those crazy but meaningful ideas [4]. In this way the teams can take into consideration also potentially interesting ideas with low degree of rationality but potentially interesting outcomes.</p>
		<p class="regular">
			<b class="paragraph-topic">What?</b>
			Instead of inventing categories from scratch, the evaluators can distribute the ideas among four categories: the rational choice, the most likely to delight, the darling and the long shot. The “rational choice” refers to ideas that are most logical and provide the highest amount of utility. The “most likely to delight” refers to ideas that will potentially deliver a high degree of gratification or pleasure. The “darling” refers to the evaluators’ favorite ideas. The “long shot” refers to ideas that involve a great risk but equally great rewards if successful. 			</p>
		<p class="regular">
			<b class="paragraph-topic">Why?</b>
			The method uses predefined categories that enhance the degree of structure. The big advantage of this method is that after the ideas are categorized, the ones with the desired properties can be further pursued. 			<p class="regular">
			<b class="paragraph-topic">How?</b>
			Depending on the size of the group, the participants can either discuss the allocation of each idea to one of the four categories or incorporate aspects of post-it voting. The goal of this technique is to make the team consider not only the rational, obvious ideas, but also the creative ones that display a low degree of rationality. For example if the stakeholders of the project prefer innovation instead of rationality, they can focus on the ideas that belong to the "long shot" category.

		<p class="regular" >
			<b> You can:</b></p>
		<ul>
			<li class="regular">Add or rename categories and ideas</li>
			<li class="regular">Drag ideas to attach them to categories</li>
			<li class="regular">Add a colored background to categories</li>
			<li class="regular">Delete categories and ideas by clicking on the button next to each element</li>
			<li class="regular">See examples of the Four Categories und Bingo Selection methods</li>
		</ul>


		 <div id="container-for-all-categories" contenteditable="false" spellcheck="false">

			<!--This is an example for how the HTML code for a category looks like.
			The categories get created/reset with JavaScript when the page loads or when the respective button gets pressed.

			<div id="categoryID1" class="container-to-drop-idea">
					<div>
					<span class="category-name">Category (click to edit)</span>
					</div>
				<div>
					<input type="color" id="categoryID1ColorPicker" value="#e66465" class="color-chooser"/>
					<button onclick="changeColor(categoryID1ColorPicker, categoryID1)" class="apply-color-button">Apply color</button>
					<button class="close-button" onclick="removeElement(this)">X</button>
				</div>
				<div class="drop-off-area" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
			</div>
			</div>-->

		</div>
		<div style="clear: both;">
			<!-- empty DIV to clear float property-->
		</div>

		<div class="button-container">
			<!-- <button onclick="showFourCategoriesExample()" class="standard-button" title="Give example categories and ideas">Show Four Categories example</button> -->
		</div>
<br>

		<div id="container-for-new-ideas" ondrop="drop(event)" ondragover="allowDrop(event)" contenteditable="false">
<!-- This is an example for how the HTML code for an idea looks like.
			The ideas get created/reset with JavaScript when the page loads or when the respective button gets pressed.

			<div id="ideaID1" class="draggable-idea" draggable="true" ondragstart="drag(event)">
				<div>
				<span class="close-idea-button" onclick="removeElement(this)">x</span>
				<span class="idea-name">Vestaboard: visible expressions of gratitude</span>
				</div>
			</div> -->

		</div>
<br>
<div style="clear: both;">
	<!-- empty DIV to clear float property-->
</div>
		</div>
		<div class="button-container">
			<button onclick="showFourCategoriesExample()" class="standard-button" title="Removes all existing categories, including any ideas inside them, and creates four new empty categories">Reset to default</button>

			<!-- <button onclick="resetIdeas()" class="standard-button">Reset ideas</button> -->
		</div>

		<div style="clear: both;">
			<!-- empty DIV to clear float property-->
		</div>
		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
		</section>


	<!-- Import jQuery -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>

	<!-- This is the self-written JS code-->
	<script src="JS_affinity-diagram.js"></script>
	<script>
showFourCategoriesExample();
	</script>
		<?php include_once "./includes/javascript-loader.php" ?>
	</body>
</html>
