// Available map styles:
// mapbox.streets
// mapbox.light
// mapbox.dark
// mapbox.satellite
// mapbox.streets-satellite
// mapbox.wheatpaste
// mapbox.streets-basic
// mapbox.comic
// mapbox.outdoors
// mapbox.run-bike-hike
// mapbox.pencil
// mapbox.pirates
// mapbox.emerald
// mapbox.high-contrast


// icons: https://fontawesome.com/icons/building?style=solid
var houseIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/home-solid.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var industryIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/industry-solid.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var brokenHouseIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/house-damage-solid.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var tallBuildingIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/building-solid.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var loanIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/loan.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [50, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var collateralIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/collateral.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [50, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
var dealIcon = L.icon({
    // iconUrl: 'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconUrl: './images/deal.svg',
    // shadowUrl: 'https://leafletjs.com/examples/custom-icons/leaf-shadow.png',
    iconSize:     [50, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});


// leaflet howto:
// https://leafletjs.com/examples/quick-start/
// initialize map
//var leafletAllBuildingsMap = L.map('show-all-buildings-map').setView([mylatitude, mylongitude], 13);
var leafletAllBuildingsMap = L.map('show-all-buildings-map').setView([47.265538, 11.395276], 13);
// add imagery and tile layers to map
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 maxZoom: 18,
 id: 'mapbox.streets',
 accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
}).addTo(leafletAllBuildingsMap);

var leafletCollateralsMap = L.map('collaterals-map').setView([47.265538, 11.395276], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 maxZoom: 18,
 id: 'mapbox.streets',
 accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
}).addTo(leafletCollateralsMap);

var leafletLoansMap = L.map('loans-map').setView([47.265538, 11.395276], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 maxZoom: 18,
 id: 'mapbox.streets',
 accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
}).addTo(leafletLoansMap);

var leafletProjectsMap = L.map('projects-map').setView([47.265538, 11.395276], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 maxZoom: 18,
 id: 'mapbox.streets',
 accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
}).addTo(leafletProjectsMap);

var leafletDealsMap = L.map('deals-map').setView([47.265538, 11.395276], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 maxZoom: 18,
 id: 'mapbox.streets',
 accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
}).addTo(leafletDealsMap);




var collateralsMap = document.getElementById("collaterals-map");
var loansMap = document.getElementById("loans-map");
var showAllBuildingsMap = document.getElementById("show-all-buildings-map");
var projectsMap = document.getElementById("projects-map");
var dealsMap = document.getElementById("deals-map");


var collateralsButton = document.getElementById("collateralsButton");
var loansButton = document.getElementById("loansButton");
var showAllButton = document.getElementById("showAllButton");
var dealsButton = document.getElementById("dealsButton");
var projectsButton = document.getElementById("projectsButton");

collateralsMap.style.display = "none";
loansMap.style.display = "none";
showAllBuildingsMap.style.display = "block";
projectsMap.style.display = "none";
dealsMap.style.display = "none";

function showCollaterals(){
  collateralsMap.style.display = "block";
  loansMap.style.display = "none";
  showAllBuildingsMap.style.display = "none";
  projectsMap.style.display = "none";
  dealsMap.style.display = "none";

  collateralsButton.className = "btn btn-info";
  loansButton.className = "btn btn-outline-secondary";
  showAllButton.className = "btn btn-outline-secondary";
  dealsButton.className = "btn btn-outline-secondary";
  projectsButton.className = "btn btn-outline-secondary";
}
function showLoans(){
  collateralsMap.style.display = "none";
	loansMap.style.display = "block";
  showAllBuildingsMap.style.display = "none";
  projectsMap.style.display = "none";
  dealsMap.style.display = "none";

	collateralsButton.className = "btn btn-outline-secondary";
	loansButton.className = "btn btn-info";
  showAllButton.className = "btn btn-outline-secondary";
  dealsButton.className = "btn btn-outline-secondary";
  projectsButton.className = "btn btn-outline-secondary";
}
function showAllBuildings(){
  collateralsMap.style.display = "none";
  loansMap.style.display = "none";
  showAllBuildingsMap.style.display = "block";
  projectsMap.style.display = "none";
  dealsMap.style.display = "none";

  collateralsButton.className = "btn btn-outline-secondary";
  loansButton.className = "btn btn-outline-secondary";
  showAllButton.className = "btn btn-info";
  dealsButton.className = "btn btn-outline-secondary";
  projectsButton.className = "btn btn-outline-secondary";
}
function showProjects(){
  collateralsMap.style.display = "none";
	loansMap.style.display = "none";
  showAllBuildingsMap.style.display = "none";
  projectsMap.style.display = "block";
  dealsMap.style.display = "none";

	collateralsButton.className = "btn btn-outline-secondary";
	loansButton.className = "btn btn-outline-secondary";
  showAllButton.className = "btn btn-outline-secondary";
  dealsButton.className = "btn btn-outline-secondary";
  projectsButton.className = "btn btn-info";
}
function showDeals(){
  collateralsMap.style.display = "none";
	loansMap.style.display = "none";
  showAllBuildingsMap.style.display = "none";
  projectsMap.style.display = "none";
  dealsMap.style.display = "block";

	collateralsButton.className = "btn btn-outline-secondary";
	loansButton.className = "btn btn-outline-secondary";
  showAllButton.className = "btn btn-outline-secondary";
  dealsButton.className = "btn btn-info";
  projectsButton.className = "btn btn-outline-secondary";
}



// L.marker([47.265538, 11.395276], {icon: houseIcon}).addTo(leafletCollateralsMap);
// L.marker([47.265538, 11.41276], {icon: industryIcon}).addTo(leafletCollateralsMap);
// L.marker([47.256538, 11.395276], {icon: brokenHouseIcon}).addTo(leafletLoansMap);
// L.marker([47.275538, 11.41276], {icon: tallBuildingIcon}).addTo(leafletLoansMap);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var littleton = L.marker([39.61, -105.02]).bindPopup('This is Littleton, CO.'),
    denver    = L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.'),
    aurora    = L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.'),
    golden    = L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.');

var cities = L.layerGroup([littleton, denver, aurora, golden]);

// map styles
var wheatpaste = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
 attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
 maxZoom: 18,
 id: 'mapbox.wheatpaste',
 accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
}),
    streets   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
     maxZoom: 18,
     id: 'mapbox.streets',
     accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
   }),
   outdoors   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.outdoors',
    accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
  emerald   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox.emerald',
   accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
 }),
   pirates   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.pirates',
    accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
  light   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox.light',
   accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
  dark   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox.dark',
   accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
  satellite   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox.satellite',
   accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
  streetssatellite   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox.streets-satellite',
   accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
  streetsbasic   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox.streets-basic',
   accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
  runbikehike   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox.run-bike-hike',
   accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
  pencil   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   maxZoom: 18,
   id: 'mapbox.pencil',
   accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  }),
   highcontrast   = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.high-contrast',
    accessToken: 'pk.eyJ1IjoiZGVyc2Nobml0dGVyIiwiYSI6ImNqbm9seWh0bjI4bnYzdnRhbXl5aGw3b2wifQ.mkwyeefhBhhVprtNilwYRg'
  });
// var map = L.map('test-map', {
//     center: [47.265538, 11.395276],
//     zoom: 13,
//     layers: [wheatpaste, streets, outdoors, emerald, pirates, light, dark, satellite, streetssatellite, streetsbasic, runbikehike, pencil, highcontrast]
// });


var baseMaps = {
    "wheatpaste": wheatpaste,
    "Streets": streets,
    "outdoors": outdoors,
    "emerald": emerald,
    "pirates": pirates,
    "light": light,
    "dark": dark,
    "satellite": satellite,
    "streetssatellite": streetssatellite,
    "streetsbasic": streetsbasic,
    "runbikehike": runbikehike,
    "pencil": pencil,
    "high-contrast": highcontrast
};
var overlayMaps = {
    "Cities": cities
};

// L.control.layers(baseMaps, overlayMaps).addTo(map);
