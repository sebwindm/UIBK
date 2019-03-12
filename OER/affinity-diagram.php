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
		    <h1>Affinity Diagrams</h1>
		    <p class="definition">Affinity Diagrams are used to categorize and organize a large number of ideas into groups or clusters. The technique facilitates complexity reduction and enhances creativity.</p>
		  	<p class="regular">Also known as KJ-Method (after its creator Jiro Kawakita), Affinity Diagrams are useful for clustering ideas and to discover patterns or relationships between them. This allows to group similar ideas together, eliminate duplicates and to find the best ones out of a large pile of ideas. After a brainstorming session, each available idea is written onto a post-it note. Then you start creating groups of ideas that belong together and attach them to a wall, blackboard or any other large surface. For ideas that don't fit into an existing group, you create a new one. After all ideas are grouped, you can then name the groups or clusters, draw connections and rank them by importance. Finally, the most promising clusters should be transitioned into practice.
			</p>
			<p class="regular">
				<b class="paragraph-topic">What?</b>
				In the 1950s, Jiro Kawakita developed the Affinity Diagram method. Known also as KJ-Method, Affinity Diagrams are a generalized brainstorming technique for gathering qualitative data [1]. The users can gather ideas, opinions or issues and discovering patterns or relationships between them [2].
			</p>
			<p class="regular">
				<b class="paragraph-topic">Why?</b>
				The technique is useful for getting people working on a creative level to solve issues and reach agreements. Selecting the best idea among many good, is a challenging process. The evaluation can vary according to the level of expertise, the degree of shared understanding, the personal biases of the evaluators or the amount of similar ideas. Affinity diagrams can facilitate the selection by allowing evaluators to organize the ideas in similar categories and reduce the level of confusion.  With this technique, the evaluators can group similar ideas together, eliminate duplicates and identify the finalists. The technique is particularly useful for dealing with large volumes of data or for encouraging new patterns of thinking [2].</p>
			<p class="regular">
				<b class="paragraph-topic">How?</b>
				First, the goal of the session is clearly described. In the case of idea selection, the evaluators should have a clear understanding with regards to the required outcome. Second, each idea is written in a sticky note or index card. Third, the evaluators hang the ideas to the wall  and silently start sorting the ideas into categories. For ideas that don't fit into an existing category, the evaluators create a new one. Fourth, as soon as all ideas are clustered, the evaluators label each group of ideas, draw connections and rank them by importance. Fifth, the most promising categories can be transitioned into practice [3].</p>
			<p class="regular">
			In the figure below you can see a visualisation of the categorization process with the use of the Affinity Diagrams. Unlike the <a href="innovation-funnel.php">Innovation Funnel</a> with the predetermined phases, the categorization process can be expanded into many more iterative phases, depending on the task requirements. In  this example, you can see three consecutive phases starting with a large amount of ideas. By using Affinity Diagrams or one of the context-specific techniques such as the Four Categories method or the Bingo selection, the users can cluster the ideas into categories. These categories can be further refined through merging or discarding inadequate ideas.  <br>
				Let’s assume that during an idea contest or a brainstorming session a number of fictional ideas emerges (phase 1). These ideas can first be clustered in various categories (phase 2). In the next step, the similar categories can be merged or inadequate categories can be discarded (phase 3). Finally, the remaining categories can be further pursued. The Affinity Diagram method is suitable for the shortlisting phase of the Innovation Funnel, as it does not cover the filtering or the winner determination phase.

			</p>
					<p class="regular">The affinity diagrams concept is only one option for idea categorization. Similar concepts are the "Four Categories" method, the "Bingo Selection" method or any other alteration that suits the selection requirements.</p>
		<div>
			<img src="./images/SVGs/categorization/phase1.svg" width="200px"  style="margin-top: 0px; float: left;">
			<img src="./images/SVGs/categorization/phase2.svg" width="200px"  style="margin-top: 0px; float: left;">
			<img src="./images/SVGs/categorization/phase3.svg" width="200px"  style="margin-top: 0px; float: left;">
		</div>
<div style="clear: both;"></div>
		<p class="regular" style="margin-top: 40px;">
			Below, you can interact with some empty Affinity Diagrams.
		</p>
		<p class="regular" >
			<b> You can:</b></p>
		<ul>
			<li class="regular">Add or rename categories and ideas</li>
			<li class="regular">Drag ideas to attach them to categories</li>
			<li class="regular">Add a colored background to categories</li>
			<li class="regular">Delete categories and ideas by clicking on the button next to each element</li>
			<!-- <li class="regular">See examples of the Four Categories und Bingo Selection methods</li> -->
		</ul>
		<br />
		<div style="clear: both;">
			<!-- empty DIV to clear float property-->
		</div>
<!-- </article> -->

<div class="wrapper-for-categories-container">

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
</div>
		<div style="clear: both;">
			<!-- empty DIV to clear float property-->
		</div>

		<div class="button-container">
			<button onclick="addCategory()" class="standard-button" title="Add a new empty category">Add category</button>
			<button onclick="confirmResetCategories()" class="standard-button" title="Removes all existing categories, including any ideas inside them, and creates four new empty categories">Reset categories</button>
			<span style="margin-right: 20px; margin-left: 20px;"></span>
			<!-- <button onclick="showFourCategoriesExample()" class="standard-button" title="Give example categories and ideas">Show Four Categories example</button> -->
			<button onclick="showBingoSelectionExample()" class="standard-button" title="Give example categories and ideas">Show Bingo Selection example</button>
		</div>
<br>

		<div id="container-for-new-ideas" ondrop="drop(event)" ondragover="allowDrop(event)" contenteditable="false">
<!-- This is an example for how the HTML code for an idea looks like.
			The ideas get created/reset with JavaScript when the page loads or when the respective button gets pressed.

<div class="draggable-idea" id="ideaID1" draggable="true" ondragstart="drag(event)">
	<span class="idea-name" contenteditable="false"> Idea (click button to edit)</span>
	<span class="idea-button-container">
		<span class="close-idea-button" onclick="removeElement(this)" title="Delete this idea" contenteditable="false">x</span>
		<span style="font-size:2px;" onclick="editIdeaTitle(this)" title="Rename this idea" class="idea-rename-button">
			<i class="material-icons">mode_edit</i>
		</span>
	</span>
</div>	-->


		</div>

<br>

		<div class="button-container">
			<button onclick="addIdea()" class="standard-button">Add idea</button>
			<button onclick="resetIdeas()" class="standard-button">Reset ideas</button>
		</div>
		</div>
			<!-- <p class="regular">You can extend the here presented affinity diagram concept with the "Four Categories" method or the "Bingo Selection" method or any other alteration that suits your requirements.</p>
			<h2>Four Categories</h2>
			<p class="definition">The four categories method encourages you to hang onto those crazy but meaningful ideas [4]. In this way the teams can take into consideration also potentially interesting ideas with low degree of rationality but potentially interesting.</p>
			<p class="regular">
				<b class="paragraph-topic">What?</b>
				Instead of inventing categories from scratch, the evaluators should distribute the ideas among four categories: the rational choice, the most likely to delight, the darling and the long shot. The “rational choice” refers to ideas that are most logical and provide the highest amount of utility. The “most likely to delight” refers to ideas that will potentially deliver a high degree of gratification or pleasure. The “darling” refers to the evaluators’ favorite ideas. The “long shot” refers to ideas that involve a great ris but promising a great reward if successful. 			</p>
			<p class="regular">
				<b class="paragraph-topic">Why?</b>
				The method uses predefined categories that enhance the degree of structure. The big advantage of this method is that after the ideas are categorized, the ones with the desired properties can be further pursued. 			<p class="regular">
				<b class="paragraph-topic">How?</b>
				Depending on the size of the group, the participants can either discuss the placement of each idea to one of the four categories or incorporate aspects of post-it voting. The goal of this technique is to make the team consider not only the rational, obvious ideas, but also the creative ones that display a low degree of rationality. For example if the stakeholders of the project prefer innovation instead of rationality, they can focus on the ideas that belong to the "long shot" category.
 -->
 <br><br>
<!-- <article> -->
			<h2>Bingo Selection</h2>
			<p class="definition">The Bingo Selection is designed to help preserve innovation potential [4].</p>
			<p class="regular">
				<b class="paragraph-topic">What?</b>
				Similar to the four categories, the bingo selection offers predefined categories for clustering the ideas. However the technique targets the selection of the most prominent prototypes, rather than general ideas. The three predefined categories include a physical prototype, a digital prototype and an experience prototype.  A “physical prototype” refers to a physical representation of an idea [5]. A “digital prototype” is a simulation of a part, product or complete installation that can be tested
				[6]. An “experience prototype” is a form of prototyping that enables design team members, users and clients to gain first-hand appreciation of existing or future conditions through active engagement with prototypes [7].
			<p class="regular">
				<b class="paragraph-topic">Why?</b>
				As with the four categories, bingo selection uses predefined categories that enhance the degree of structure.</p>
			<p class="regular">
				<b class="paragraph-topic">How?</b>
				The categories can be chosen by the facilitator based on the specific requirements of the project or product. One example could be how the ideas gathered in the brainstorming or idea contest can be prototyped. The categories might be a physical prototype, a digital prototype or a prototype that can be experienced. Depending on the team size and amount of ideas, a short discussion is devoted for each idea.
			</p>

			<p class="regular"><h2>Reflective Questions</h2></p>
			<p class="regular">What are the main differences between Bingo Selection and Affinity Diagrams?</p>
			<p class="regular"> What are the positive and negative aspects about the possibility of adding nested sub-categories? </p>
			<p class="regular">If you have found many different categories, what would you do to further reduce the amount of groups?  </p>
			<p class="regular">You are holding a brainstorming session with some colleagues and the goal is to come up with ideas for a completely new product of any kind. You have gathered many ideas, but now they need to be categorized. You have looked at Affinity Diagram and found some variations of the method, like the Four Categories oder Bingo Selection methods. Which method would you choose and why?</p>
			<p class="regular">What are the disadvantages of having a completely “open” method like Affinity Diagrams in comparison to a more structured one like Four Categories/Bingo Selection? </p>
			<p class="regular">Your idea contest resulted in hundreds of submissions, and your colleagues agreed to help you with categorizing the ideas. You are afraid that if you give them predefined categories, some unusual ideas that don’t fit might get lost. On the other hand, you are afraid that if you let them define the categories by themselves, they might have trouble understanding the categories chosen by other colleagues. How would you design the categories (open name fields vs. predefined names) and would you use a method like Four Categories or Bingo Selection? </p>
			<p class="regular">What would you advise a manager who only focuses on the "low hanging fruits" and just pursues the most rational ideas?  </p>
			<p class="regular">How would you rate the outcome of a brainstorming session that resulted in only unusual ideas, the so called long shots? How would you rate the outcome if there had been only rational ideas? </p>
			<p class="regular">How would you go about an idea that fits more than one category?  </p>
			<p class="regular">If you group by prototype applications, is it beneficial to focus on only one experience type (e.g. only on digital products)? What other categories could a facilitator choose for a business-oriented brainstorming session? </p>
			<p class="regular">If you have a really large amount of ideas, would you rather try to categorize them into just a few categories using the Bingo Selection method or would you have many possible categories? </p>
			<p class="regular">Your company only manufactures physical goods. How would you alter the format of the Bingo Selection method, since there is definitely no interest in digital or other goods? </p>





			<p class="regular"><h2>Further Reading</h2></P>
			<ol class="references">
				<li>
					Scupin, R. (1997). The KJ method: A technique for analyzing data derived from Japanese ethnology. Human organization, 233-237.
				</li>
				<li>
					<a href="https://www.balancedscorecard.org/portals/0/pdf/affinity.pdf">https://www.balancedscorecard.org/portals/0/pdf/affinity.pdf</a>
				</li>
				<li>
					<a href="https://project-management.com/affinity-diagram-kawakita-jiro-or-kj-method/">https://project-management.com/affinity-diagram-kawakita-jiro-or-kj-method/. </a>
				</li>
				<li>
					<a href="https://static1.squarespace.com/static/57c6b79629687fde090a0fdd/t/58993c9e579fb316f50f3f37/1486437546147/ideate-mixtape-v8.pdf">https://static1.squarespace.com/static/57c6b79629687fde090a0fdd/t/58993c9e579fb316f50f3f37/1486437546147/ideate-mixtape-v8.pdf</a>
				</li>
				<li>
					<a href="https://dschool-old.stanford.edu/groups/k12/wiki/f53d6/Physical_Prototype.html">https://dschool-old.stanford.edu/groups/k12/wiki/f53d6/Physical_Prototype.html</a>
				</li>
				<li>
					<a href="https://www.cadac.com/en/themes/digital-prototyping/">https://www.cadac.com/en/themes/digital-prototyping/</a>
				</li>
				<li>
					<a href="http://dx.doi.org/10.1145/347642.347802">
						Buchenau, M., Fulton S.J. (2000): Experience prototyping. In: Proceedings Designing Interactive
Systems, New York City, USA, ACM Press 424–433
					</a>
				</li>
				<li>
					<a href="https://www.interaction-design.org/literature/article/how-to-select-the-best-idea-by-the-end-of-an-ideation-session">https://www.interaction-design.org/literature/article/how-to-select-the-best-idea-by-the-end-of-an-ideation-session</a>
				</li>

</ol>
		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
		</section>


	<!-- Import jQuery -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
		<?php include_once "./includes/javascript-loader.php" ?>
	<!-- This is the self-written JS code-->
	<script src="JS_affinity-diagram.js"></script>
	</body>
</html>
