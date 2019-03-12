<!DOCTYPE html>
<html>
<head>
	<title>Drei Länder Bank - Supervisor</title>
	<!-- Latest compiled and minified Bootstrap CSS -->
  <?php
  include './includes/stylesheet-loader.php';
  ?>
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <!-- Leaflet map library - CSS-->
</head>
<body>
  <?php
  include './includes/top-navigation.php';
  include './includes/user-session-check.php';
   ?>


<div class="btn-group btn-group-lg" role="group" style="margin:10px;">
	<span id="projectsSupervisorButton" class="btn btn-info" onclick="showSupervisorProjectsDIV()">Projects</span>
	<span id="logdataSupervisorButton" class="btn btn-outline-secondary" onclick="showLogDataDIV()">Log data</span>
<!-- <span id="buildingsmapSupervisorButton" class="btn btn-outline-secondary" onclick="showMapDIV()">Map of buildings</span> -->
</div>
<br />

<div id="supervisor-projects">
	<iframe width="1200" height="850"
	src="https://app.powerbi.com/view?r=eyJrIjoiMTljZGMxMTktN2QwMS00NDcwLWIzMmQtZmFiOGUwNDgyZDY2IiwidCI6IjU4MDVlYmNhLWRjMTgtNDQzZi1iNzJjLTdlZDk5Yjk5MzRiNSIsImMiOjh9"
	frameborder="0" allowFullScreen="true"></iframe>
</div>

<div id="supervisor-logs">
	<iframe width="1200" height="850"
	src="https://app.powerbi.com/view?r=eyJrIjoiMDcwZDdhMTMtYTg3NS00Yzc3LWExZTEtZjg3OGUxZmJiMTE4IiwidCI6IjU4MDVlYmNhLWRjMTgtNDQzZi1iNzJjLTdlZDk5Yjk5MzRiNSIsImMiOjh9"
	frameborder="0" allowFullScreen="true"></iframe>
</div>







<?php
include './includes/scripts-loader.php';
?>
<script>

var projectsDIV = document.getElementById("supervisor-projects");
var logsDIV = document.getElementById("supervisor-logs");
// var mapsDIV = document.getElementById("supervisor-map-outer-DIV");

projectsDIV.style.display = "block";
logsDIV.style.display = "none";
// mapsDIV.style.display = "none";


function showSupervisorProjectsDIV() {
	projectsDIV.style.display = "block";
	logsDIV.style.display = "none";
	// mapsDIV.style.display = "none";
	document.getElementById("projectsSupervisorButton").className = "btn btn-info";
	document.getElementById("logdataSupervisorButton").className = "btn btn-outline-secondary";
	// document.getElementById("buildingsmapSupervisorButton").className = "btn btn-outline-secondary";
}

function showLogDataDIV() {
	projectsDIV.style.display = "none";
	logsDIV.style.display = "block";
	// mapsDIV.style.display = "none";
	document.getElementById("projectsSupervisorButton").className = "btn btn-outline-secondary";
	document.getElementById("logdataSupervisorButton").className = "btn btn-info";
	// document.getElementById("buildingsmapSupervisorButton").className = "btn btn-outline-secondary";
}
</script>

<!-- The script below is to handle the "active" class in the top navigation menu -> the current navigation item is visually indicated -->
<script type="text/javascript">
$(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from
                                     //previously active menu item
  $('#supervisor').addClass('active');
});</script>
</body>
</html>
