<!DOCTYPE html>
<html>
<head>
	<title>Drei Länder Bank - Home</title>
	<!-- Latest compiled and minified CSS -->
	<?php
	include './includes/stylesheet-loader.php';
	?>
    <!-- Custom styles for this template -->
    <link rel="shortcut icon" href="./images/favicon.ico" />
</head>
<body>


<!-- include the top navigation bar -->
    <?php include 'includes/top-navigation.php';?>





		<!-- include the amchart test  -->
		<?php include './includes/amchart-test.php';?>


		<!-- Main jumbotron for a primary marketing message or call to action -->
		    <div class="jumbotron">
		      <div class="container">
		        <h1>Die Bayern Bank</h1>
						<p class="lead">

						</p>
		        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
		      </div>
		    </div>
		      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>
</h2>

<p>Laura, Alexander, Philipp, Sebastian</p>
          <!-- <p><a class="btn btn-primary btn-lg" href="projects.php" role="button">View details &raquo;</a></p> -->
        </div>
        <!-- <div class="col-md-4">
          <h2>Buildings</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-primary btn-lg" href="buildings.php" role="button">View details &raquo;</a></p>
        </div> -->
      </div>
		</div>


		<?php
		include './includes/scripts-loader.php';
		?>
<script type="text/javascript">
$(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from
                                     //previously active menu item
  $('#home').addClass('active');
});</script>
</body>
</html>
