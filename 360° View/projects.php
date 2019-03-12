



<!DOCTYPE html>
<html>
<head>
	<title>Drei Länder Bank - Projects</title>
	  <!-- Latest compiled and minified Bootstrap CSS -->
		<?php
		include './includes/stylesheet-loader.php';
		?>
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<link rel="shortcut icon" href="./images/favicon.ico" />
</head>
<body>
	<?php
  include './includes/top-navigation.php';
  include './includes/user-session-check.php';
   ?>
	 <div class="btn-group btn-group-lg" role="group" style="margin:10px;">
  <span id="projectsButton" class="btn btn-info" onclick="showProjectsDIV()">Project profiles</span>
  <span id="dashboardsButton" class="btn btn-outline-secondary" onclick="showDashboardDIV()">Dashboard</span>
</div>

				<?php
				include_once './includes/database-handler.php';
				if(isset($_SESSION["userid"])){

					$sql_get_all_projects_from_this_user = "SELECT * FROM useraccounts
					JOIN customers ON	useraccounts.email = customers.useraccount_email
					JOIN customer_projects ON customers.customer_id = customer_projects.customer_id
					JOIN projects ON customer_projects.project_id = projects.project_id
					where useraccounts.email = '".$_SESSION['useraccount_email']."';";

					$query = mysqli_query($databaseConnection, $sql_get_all_projects_from_this_user);
					$number_of_rows = mysqli_num_rows($query);

					if ($number_of_rows){
						// echo '<table class="table table-striped table-bordered table-hover">
						// 	<caption class="title">My projects</caption>
						// 	<thead>
						// 		<tr>
						// 			<th>Project ID </td>
						// 			<th>Name </td>
						// 			<th>Status </td>
						// 			<th>Repayment amount</td>
						// 			<th>Interest rate</td>
						// 			<th>Remaining term</td>
						// 		</tr>
						// 	</thead>';
							while ($row = mysqli_fetch_array($query))
							{
								//echo '<tr><a href="deals.php">
									// 	<td>'.$row['project_id'].'</td>
									// 	<td>'.$row['name'].'</td>
									// 	<td>'.$row['status'].'</td>
									// 	<td>'.$row['repaymentamount'].'</td>
									// 	<td>'.$row['interestrate'].'</td>
									// 	<td>'.$row['remainingterm'].'</td>
									// </a></tr>';
							}
						//echo '</table>';
					} else {
					echo "<h2 class='alert alert-danger'>There are no projects associated with this user account.</h2>" ;
					}
								}?>
								<div id="projects">

										<div class="row">
										<?php
										include_once './includes/database-handler.php';
										if(isset($_SESSION["userid"])){

											$sql_get_all_buildings = "SELECT * FROM useraccounts
											JOIN customers ON	useraccounts.email = customers.useraccount_email
											JOIN customer_projects ON customers.customer_id = customer_projects.customer_id
											JOIN projects ON customer_projects.project_id = projects.project_id
											JOIN buildings on buildings.building_id = projects.building_id
											where useraccounts.email = '".$_SESSION['useraccount_email']."';";

											$query = mysqli_query($databaseConnection, $sql_get_all_buildings);
											$number_of_rows = mysqli_num_rows($query);

											if ($number_of_rows){
													while ($row = mysqli_fetch_array($query))
													{
														echo '
														<div class="card-deck">
															<div class="card bg-light mb-3" style="max-width: 24rem;margin-right:50px;">
															<img class="card-img-top" src="'.$row['picture_file_path'].'" alt="Image of the building" width="auto" height="200">
															<div class="card-body">
															<h5 class="card-title">'.utf8_encode($row['name']).'</h5>
															<p class="card-text">
															</p>
															<table class="table table-striped table-bordered table-hover">
															<tr>
																<th>Type</th>
																<td>'.$row['type'].'</td>
															</tr>
																<tr>
																	<th>Status</th>
																	<td>'.$row['status'].'</td>
																</tr>
																<tr>
																	<th>Project size</th>
																	<td>'.$row['project_size']." €".'</td>
																</tr>
																<tr>
																	<th>Total amount</th>
																	<td>'.$row['totalamount']." €".'</td>
																</tr>
																<tr>
																	<th>Repayment amount</th>
																	<td>'.$row['repaymentamount']." €".'</td>
																</tr>
																<tr>
																	<th>Interest rate</th>
																	<td>'.$row['interestrate']*100 ." %" .'</td>
																</tr>
																<tr>
																	<th>Repayment rate</th>
																	<td>'.$row['repaymentrate']." €".'</td>
																</tr>
																<tr>
																	<th>Remaining term</th>
																	<td>'.$row['remainingterm']." months" .'</td>
																</tr>

															</table>
															</div class="card-body">
															<div class="card-footer">
																<small class="text-muted">
																'.utf8_encode($row['street'])." ".$row['number'].", ".$row['zipcode']." ".utf8_encode($row['city']).'
																</small>
															</div>
														</div class="card">
													</div class="card-deck">
														';
													}
											} else {
											echo "<h2 class='alert alert-danger'>There are no projects associated with this user account.</h2>" ;
											}
														}?>

				</div><!-- end card grid div -->
	</div> <!-- end projects div -->


<div id="dashboard">
  <?php include 'includes/powerbi-iframe.php';?>
</div>






<?php
include './includes/scripts-loader.php';
?>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="./JS/projects.js"></script>

<!-- The script below is to handle the "active" class in the top navigation menu -> the current navigation item is visually indicated -->
<script type="text/javascript">
$(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from
                                     //previously active menu item
  $('#deals').addClass('active');
});</script>
</body>
</html>
