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

			<?php include 'Poll.class.php'; voteCriteria() ?>
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

#criteriatable {
    border-collapse: collapse;
    width: 100%;
}

#criteriatable td, #criteriatable th {
    border: 1px solid #ddd;
    padding: 8px;
}

#criteriatable tr:nth-child(even){background-color: #f2f2f2;}

#criteriatable tr:hover {background-color: #ddd;}

.firstth {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #003362;
    color: white;
    font-weight: normal;
}

.criteriath {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #003362;
    color: white;
    font-weight: normal;
    cursor: pointer;
}

.criteriath:hover {
    background-color: orange;
}
			</style>
		</head>
	<body>


		<?php include 'scroll-to-top-button.php';?>

<!--content bar with both left menu and content divs-->
		<section>


<!--content-->
		  <article>
		    <h1>Selection Criteria</h1>
		    <p class="definition">Having identified several ideas, selection criteria help to evaluate and rank them according to how well they meet these criteria.</p>

			<p class="regular">
				Every idea can be evaluated based on several selection criteria. They provide a guide for identifying ideas which are optimal for specific problems, research and needs. Hence, the criteria can differ depending on the underlying problem. Ideas can be voted on, according to how well each criterion is met. The total score of an idea is a weighted average of individual criteria scores. In the end, ideas can be ranked according to how well they meet the criteria.
		  	</p>

			<h2>Example: Idea Contest</h2>
			<p class="regular">While the knowledge around IT is becoming mandatory in business education, at many universities the Information Systems courses are not effective at teaching the future generation of business managers the key concepts for thriving in the digital innovation era. Therefore, we ask the following question: What kind of digital resources would support, enhance and improve the teaching of IS courses? Please provide your ideas.</p>


<!--grey frame-->
			<div class="frame">
				<h2>Idea Contest Results</h2>


			<table id="criteriatable">
				<tr>
					    <th class="firstth">Idea</th>
    					<th class="criteriath" onclick="sortTable(1)">Feasible &#8693</th>
    					<th class="criteriath" onclick="sortTable(2)">Novel &#8693</th>
    					<th class="criteriath" onclick="sortTable(3)">Elaborate &#8693</th>
    					<th class="criteriath" onclick="sortTable(4)">Relevant &#8693</th>
    					<th class="criteriath" onclick="sortTable(5)">Total &#8693</th>
				</tr>
				<tr>
					<?php echo td(1); ?>
				</tr>
				<tr>
					<?php echo td(2); ?>
				</tr>
				<tr>
					<?php echo td(3); ?>
				</tr>
				<tr>
					<?php echo td(4); ?>
				</tr>
				<tr>
					<?php echo td(5); ?>
				</tr>
				<tr>
					<?php echo td(6); ?>
				</tr>
				<tr>
					<?php echo td(7); ?>
				</tr>
				<tr>
					<?php echo td(8); ?>
				</tr>
				<tr>
					<?php echo td(9); ?>
				</tr>
			</table>

				<a href="sele-crit.php"><input type="button" class="standard-button" value="Back to questions"></a>
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
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("criteriatable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "desc";
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "desc") {
        dir = "asc";
        switching = true;
      }
    }
  }
}
</script>

	</body>
</html>
