<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
if (!isset($_SESSION["powerbi"])){
	header("location: login.php");
} else {
	echo
	'<iframe width="1200" height="850" src="'. $_SESSION["powerbi"]. '" frameborder="0" allowFullScreen="true"></iframe>';
}
?>


</body>
</html>
