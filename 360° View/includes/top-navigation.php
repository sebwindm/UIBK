<!-- <?php
session_start();
?> -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
		<?php
		include './includes/stylesheet-loader.php';
		?>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <span class="navbar-brand">Drei Länder Bank</span>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a id="home" class="nav-link" href="index.php">Home
						<!-- <span class="sr-only">(current)</span> -->
					</a>
	      </li>

				<?php
				include_once './includes/database-handler.php';
				if(isset($_SESSION["userid"])){
				$sql = "SELECT * from useraccounts join supervisors on useraccounts.email = supervisors.useraccount_email where useraccounts.email = '".$_SESSION['useraccount_email']."';";
				$query = mysqli_query($databaseConnection, $sql);
				$number_of_rows = mysqli_num_rows($query);
				if ($number_of_rows){

				} else {
					echo '<li class="nav-item"><a id="deals" class="nav-link" href="projects.php">Projects</a></li>';
					}
				}
				?>
				<?php
				include_once './includes/database-handler.php';
				if(isset($_SESSION["userid"])){
				$sql = "SELECT * from useraccounts join supervisors on useraccounts.email = supervisors.useraccount_email where useraccounts.email = '".$_SESSION['useraccount_email']."';";
				$query = mysqli_query($databaseConnection, $sql);
				$number_of_rows = mysqli_num_rows($query);
				if ($number_of_rows){

				} else {
					echo '<li class="nav-item"><a id="map" class="nav-link" href="buildings.php">Buildings</a></li>';
					}
				}
				?>




				<?php
				include_once './includes/database-handler.php';
				if(isset($_SESSION["userid"])){
				$sql = "SELECT * from useraccounts join supervisors on useraccounts.email = supervisors.useraccount_email where useraccounts.email = '".$_SESSION['useraccount_email']."';";
				$query = mysqli_query($databaseConnection, $sql);
				$number_of_rows = mysqli_num_rows($query);
				if ($number_of_rows){
					echo '	<li class="nav-item" id="supervisor"><a class="nav-link" href="supervisor-area.php">Dashboards</a></li>';
					echo '	<li class="nav-item" id="supervisor-buildings"><a class="nav-link" href="supervisor-buildings.php">Buildings</a></li>';
				} else {
				}
				}
				?>
</ul>
<ul class="navbar-nav ml-auto">
			<span class="navbar-text" >

								<?php
								if (isset($_SESSION["userid"])){ ?>
									<li><a href="logout.php">
								 <?php  echo utf8_encode($_SESSION["user_firstname"]) ." ". utf8_encode($_SESSION["user_lastname"]).". Click to log out";   ?>
								 </a></li>

								 <?php }  else { ?>
									<li><a id="login" href="login.php">
									<?php echo "Login";} ?>
									 </a></li>


			</span>
		</ul>
	  </div>
	</nav>





	<?php
	include './includes/scripts-loader.php';
	?>
</body>
</html>
