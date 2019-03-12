var projectsDIV = document.getElementById("projects");
var dashboardDIV = document.getElementById("dashboard");

projectsDIV.style.display = "block";
dashboardDIV.style.display = "none";


function showProjectsDIV() {
	projectsDIV.style.display = "block";
	dashboardDIV.style.display = "none";
	document.getElementById("projectsButton").className = "btn btn-info";
	document.getElementById("dashboardsButton").className = "btn btn-outline-secondary";
}

function showDashboardDIV() {
	projectsDIV.style.display = "none";
	dashboardDIV.style.display = "block";
	document.getElementById("projectsButton").className = "btn btn-outline-secondary";
	document.getElementById("dashboardsButton").className = "btn btn-info";
}
