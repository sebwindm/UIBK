<!DOCTYPE html5>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>OER - UIBK</title>
			<link rel='stylesheet' href='style.css' />
			<link href="CSS_html-tables.css" type="text/css" rel="stylesheet"/>
			<link rel="shortcut icon" href="images/icon.ico"/>
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<link href='https://fonts.googleapis.com/css?family=Petrona' rel='stylesheet'>
		</head>
		<?php include_once "./includes/stylesheet-loader.php";
					include_once "./includes/top-navigation-bar.php";
		?>
	<body>
		<style>
.criteriatable {
	border-collapse: collapse;
	width: 100%;
}

.criteriatable td, .criteriatable th {
    border: 1px solid #ddd;
    padding: 8px;
}

.criteriatable tr:nth-child(even){background-color: #f2f2f2;}

.criteriatable tr:hover {background-color: #ddd;}

.criteriatable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #003362;
    color: white;
    font-weight: normal;
}

		</style>

		<?php include 'scroll-to-top-button.php';?>
<!--content bar with both left menu and content divs-->
		<section>



<!--content-->
		  <article>
		<div style="overflow-x:auto;">
			<table id="glossary-table" class="criteriatable">
				<h1>Glossary</h1>
				<tr>
					<th>Concept</th>
					<th>Description</th>
				</tr>
			</table>
		</div>
		  </article>
<!--empty div to keep the footer at the bottom-->
		  <div id="empty"></div>
		</section>


<script type="text/javascript" src="JS_html-tables.js"></script>
<script type="text/javascript">
	// These methods populate the table that shows the glossary
addTableRowFor2Columns("glossary-table","Convergence ", "Move from a state of having many concepts to a state of having a focus on and understanding of the few worthy of further attention. (Briggs et al., 2003)");
addTableRowFor2Columns("glossary-table","Filtering", "Ideas are filtered according to certain hard criteria that facilitate fast elimination. Filtering is helpful in innovation contests with high number of submissions.");
addTableRowFor2Columns("glossary-table","Idea generation", "Ideas or concepts  are generated from a brainstorming session or an innovation contest.");
addTableRowFor2Columns("glossary-table","Innovation Contests", "The goal of an innovation contest is to identify the winning ideas among a pile of many idea submissions. Online innovation contests can result in hundreds and of thousands of submissions. ");
addTableRowFor2Columns("glossary-table","Selection Challenges", "Selection challenges exist when problems occur during idea selection. Such challenges can result in additional effort, time and resources. ");
addTableRowFor2Columns("glossary-table","Selection Methods", "Using the right method to evaluate the ideas and filter out the best, is crucial. Each selection method provides certain attributes  according to the selection requirements.");
addTableRowFor2Columns("glossary-table","Shortlisting", "Ideas are assessed with the help of certain selection techniques. The evaluators by applying such methods aim to reduce the number of ideas to a manageable amount to be considered in the next phase. ");
addTableRowFor2Columns("glossary-table","Winner determination", "One or more winning ideas are selected to be further pursued. These ideas have the potential to be realized and turn into a final product. ");
</script>
		<?php include_once "./includes/javascript-loader.php" ?>
			</body>
</html>
