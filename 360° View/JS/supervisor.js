var loanIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/loan.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var collateralIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/collateral.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var dealIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/deal.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});


var leafletSupervisorMap = L.map('supervisor-map').setView([47.265538, 11.395276], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 maxZoom: 18,
 id: 'mapbox.streets',
 accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
}).addTo(leafletSupervisorMap);






function showMapDIV() {
	projectsDIV.style.display = "none";
	logsDIV.style.display = "none";
	mapsDIV.style.display = "block";
	document.getElementById("projectsSupervisorButton").className = "btn btn-outline-secondary";
	document.getElementById("logdataSupervisorButton").className = "btn btn-outline-secondary";
	document.getElementById("buildingsmapSupervisorButton").className = "btn btn-info";
}
