
<!DOCTYPE html>
<html>
<head>
	<title>Turbobank - Logout</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>


<!-- include the top navigation bar -->
    <?php include 'includes/top-navigation.php';?>

<?php
 
// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to index page
header("location: index.php");
exit;
?>



<!-- jQuery -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<!-- Latest compiled and minified JavaScript for Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
