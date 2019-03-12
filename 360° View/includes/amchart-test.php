<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- AmCharts JS Grouped Countries Map -->
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<style>
	#chartdiv {
  width: 100%;
  height: 400px;}
</style>
</head>
<body>



<!-- This is the <div> for the Countries Map -->
	<div id="chartdiv"></div>

<!-- jQuery -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<!-- AmCharts JS Grouped Countries Map -->
<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script>
var map = AmCharts.makeChart( "chartdiv", {
  "type": "map",
  "theme": "light",
  "dataProvider": {
    "map": "worldHigh",
    "zoomLevel": 7,
    "zoomLongitude": 15,
    "zoomLatitude": 48,
    "areas": [ {
        "title": "Austria",
        "id": "AT",
        "color": "#67b7dc",
        "groupId": "Austria"
      }, {
        "title": "Germany",
        "id": "DE",
        "color": "#67b7dc",
        "groupId": "Germany"
      }, {
        "title": "Italy",
        "id": "IT",
        "color": "#67b7dc",
        "groupId": "Italy"
      }
    ]
  },

  "areasSettings": {
    "rollOverOutlineColor": "#FFFFFF",
    "rollOverColor": "#CC0000",
    "alpha":1.0,
    "unlistedAreasAlpha": 0.1,
    "balloonText": "[[title]]"
  },


  // "legend": {
  //   "width": "100%",
  //   "marginRight": 27,
  //   "marginLeft": 27,
  //   "equalWidths": false,
  //   "backgroundAlpha": 0.5,
  //   "backgroundColor": "#FFFFFF",
  //   "borderColor": "#ffffff",
  //   "borderAlpha": 1,
  //   "top": 450,
  //   "left": 0,
  //   "horizontalGap": 10,
  //   "data": [ {
  //     "title": "Countries that 3 Länder Bank operates in",
  //     "color": "#67b7dc"
  //   } ]
  // },
  "export": {
    "enabled": false
  }

} );</script>
</body>
</html>
