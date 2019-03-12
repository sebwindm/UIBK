


<html>
<head>
  <title>Drei Länder Bank - Buildings</title>
  <!-- Latest compiled and minified Bootstrap CSS -->
  <?php
  include './includes/stylesheet-loader.php';
  ?>
  <link rel="shortcut icon" href="./images/favicon.ico" />
  <!-- Leaflet map library - CSS-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="" />
</head>
<body>
  <?php
  include './includes/top-navigation.php';
  include './includes/user-session-check.php';
   ?>
   <?php
     include_once './includes/database-handler.php';


     if(isset($_SESSION["userid"])){

       $_SESSION['$sql_get_collaterals'] = "SELECT buildings.geocode, buildings.name, buildings.street, buildings.number, buildings.zipcode, buildings.city  FROM useraccounts
       JOIN customers ON	useraccounts.email = customers.useraccount_email
       JOIN customer_projects ON customers.customer_id = customer_projects.customer_id
       JOIN projects ON customer_projects.project_id = projects.project_id
       JOIN collaterals ON projects.project_id = collaterals.project_id
       JOIN buildings ON collaterals.building_id = buildings.building_id
       ;";


       $_SESSION['$sql_get_loans'] =
       // buildings.name, buildings.geocode, buildings.street, buildings.number, buildings.zipcode, buildings.city
       "SELECT * FROM useraccounts
          JOIN customers ON	useraccounts.email = customers.useraccount_email
          JOIN customer_projects ON customers.customer_id = customer_projects.customer_id
          JOIN projects ON customer_projects.project_id = projects.project_id
          JOIN buildings on buildings.building_id = projects.building_id
          where projects.type='Loan';";

       $_SESSION['$sql_get_all_buildings'] = "SELECT buildings.name, buildings.city, buildings.zipcode, buildings.street, buildings.number, buildings.geocode FROM useraccounts
					JOIN customers ON	useraccounts.email = customers.useraccount_email
					JOIN customer_projects ON customers.customer_id = customer_projects.customer_id
					JOIN projects ON customer_projects.project_id = projects.project_id
          JOIN buildings on buildings.building_id = projects.building_id
                    UNION
                    SELECT buildings.name, buildings.city, buildings.zipcode, buildings.street, buildings.number, buildings.geocode FROM useraccounts
					JOIN customers ON	useraccounts.email = customers.useraccount_email
					JOIN customer_projects ON customers.customer_id = customer_projects.customer_id
					JOIN projects ON customer_projects.project_id = projects.project_id
                    JOIN collaterals ON projects.project_id = collaterals.project_id
                    join buildings on buildings.building_id = collaterals.building_id
					;";


       $_SESSION['$sql_get_projects'] = "SELECT * FROM useraccounts
					JOIN customers ON	useraccounts.email = customers.useraccount_email
					JOIN customer_projects ON customers.customer_id = customer_projects.customer_id
					JOIN projects ON customer_projects.project_id = projects.project_id
                    join buildings on buildings.building_id = projects.building_id
				;";

       $_SESSION['$sql_get_deals'] = "SELECT * FROM useraccounts
					JOIN customers ON	useraccounts.email = customers.useraccount_email
					JOIN customer_projects ON customers.customer_id = customer_projects.customer_id
					JOIN projects ON customer_projects.project_id = projects.project_id
                    join buildings on buildings.building_id = projects.building_id
					where projects.type='Deal';";
     }
   ?>



<div class="btn-group btn-group-lg" role="group" style="margin: 10px;">
  <span id="showAllButton" class="btn btn-info" onclick="showAllBuildings()">Show all buildings <span class="badge">
    <?php
    $query_collaterals = mysqli_query($databaseConnection, $_SESSION['$sql_get_all_buildings']);
    $number_of_rows = mysqli_num_rows($query_collaterals);
    echo $number_of_rows;
    ?>
  </span></span>



<span id="projectsButton" class="btn btn-outline-secondary" onclick="showProjects()">Show projects <span class="badge">
  <?php
  $query_collaterals = mysqli_query($databaseConnection, $_SESSION['$sql_get_projects']);
  $number_of_rows = mysqli_num_rows($query_collaterals);
  echo $number_of_rows;
  ?>
</span></span>

<span id="loansButton" class="btn btn-outline-secondary" onclick="showLoans()">Show loans <span class="badge">
  <?php
  $query_collaterals = mysqli_query($databaseConnection, $_SESSION['$sql_get_loans']);
  $number_of_rows = mysqli_num_rows($query_collaterals);
  echo $number_of_rows;
  ?>
</span></span>
<span id="dealsButton" class="btn btn-outline-secondary" onclick="showDeals()">Show deals <span class="badge">
  <?php
  $query_collaterals = mysqli_query($databaseConnection, $_SESSION['$sql_get_deals']);
  $number_of_rows = mysqli_num_rows($query_collaterals);
  echo $number_of_rows;
  ?>
</span></span>

<span id="collateralsButton" class="btn btn-outline-secondary" onclick="showCollaterals()">Show collaterals <span class="badge">
  <?php
  $query_collaterals = mysqli_query($databaseConnection, $_SESSION['$sql_get_collaterals']);
  $number_of_rows = mysqli_num_rows($query_collaterals);
  echo $number_of_rows;

  ?>
</span></span>


</div>



     <div id="show-all-buildings-map" style="height: 500px;"></div>
     <div id="collaterals-map" style="height: 500px;"></div>
     <div id="loans-map" style="height: 500px;"></div>
     <div id="projects-map" style="height: 500px;"></div>
     <div id="deals-map" style="height: 500px;"></div>
     <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
      <div id="test-map" style="height: 500px;"></div>

<!-- <table class="table table-striped table-bordered table-hover">
  <caption class="title">My buildings</caption>
  <thead>
    <tr>
      <th>Project ID </td>
      <th>Name </td>
      <th>Street </td>
      <th>Number</td>
      <th>Zipcode</td>
      <th>City</td>
      <th>Coordinates</td>
    </tr>
  </thead> -->

<!-- <p><b>Your position:</b></p>
<p id="demo"></p> -->



  <?php
  // include_once './includes/database-handler.php';
  // $getAllBuildings = new PDO("mysql:host=localhost;dbname=$dbName;charset=utf8", $dbUsername, $dbPassword);
  //
  // $sql = "SELECT * FROM buildings";
  // foreach ($getAllBuildings->query($sql) as $row) {
     // echo '<tr><a href="deals.php">
     //     <td>'.$row['building_id'].'</td>
     //     <td>'.$row['name'].'</td>
     //     <td>'.$row['street'].'</td>
     //     <td>'.$row['number'].'</td>
     //     <td>'.$row['zipcode'].'</td>
     //     <td>'.$row['city'].'</td>
     //    <td>'.$row['geocode'].'</td>
     //   </a></tr>';
  // }
  ?>

<!-- </table> -->

<?php
include './includes/scripts-loader.php';
?>
<!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
   <!-- Leaflet map library - JS-->
   <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
   <script src="./JS/buildings.js"></script>
   <script>
// This script populates the maps with database entries
   <?php
   include_once './includes/database-handler.php';
   $pdo = new PDO("mysql:host=localhost;dbname=$dbName;charset=utf8", $dbUsername, $dbPassword);

   // $sql_buildings = "SELECT * FROM buildings";
   // foreach ($pdo->query($sql_buildings) as $row) {
     // set markers for all rows from the query result
      // echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: houseIcon}).addTo(leafletAllBuildingsMap);
      // marker.bindPopup("<b>' . $row['name'] . '</b><br>' .  $row['street'] ." ".
      // $row['number'] .'<br>'.  $row['zipcode'] ." ".  $row['city'] . '<br><br><a href=deals.php>See project details</a>");';
   // }
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

  if(isset($_SESSION["userid"])){


    /////// query is above the HTML document
    $query_collaterals = mysqli_query($databaseConnection, $_SESSION['$sql_get_collaterals']);
    $number_of_rows = mysqli_num_rows($query_collaterals);

    if ($number_of_rows){
      while ($row = mysqli_fetch_array($query_collaterals))
      {
        // set markers for all rows from the query result
         echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: collateralIcon}).addTo(leafletCollateralsMap);
         marker.bindPopup("<b>' . utf8_encode($row['name']) . '</b><br>' .  utf8_encode($row['street']) ." ".
         $row['number'] .'<br>'.  $row['zipcode'] ." ".  utf8_encode($row['city']) . '");
         ';
      }
    }


/////// query is above the HTML document
    $query_loans = mysqli_query($databaseConnection, $_SESSION['$sql_get_loans']);
    $number_of_rows = mysqli_num_rows($query_loans);

    if ($number_of_rows){
      while ($row = mysqli_fetch_array($query_loans))
      {
        // set markers for all rows from the query result
        echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: loanIcon}).addTo(leafletLoansMap);
        marker.bindPopup("<b>'.
        $row['name'] .
        '</b><br>' .  utf8_encode($row['street']) ." ".
        $row['number'] .'<br>'.  $row['zipcode'] ." ".  utf8_encode($row['city']) . '");
        ';
      }
    }


    /////// query is above the HTML document
    $query_deals = mysqli_query($databaseConnection, $_SESSION['$sql_get_deals']);
    $number_of_rows = mysqli_num_rows($query_deals);

    if ($number_of_rows){
      while ($row = mysqli_fetch_array($query_deals))
      {
        // set markers for all rows from the query result
         echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: dealIcon}).addTo(leafletDealsMap);
         marker.bindPopup("<b>' . utf8_encode($row['name']) . '</b><br>' .  utf8_encode($row['street']) ." ".
         $row['number'] .'<br>'.  $row['zipcode'] ." ".  utf8_encode($row['city']) . '");
         ';
      }
    }



    /////// query is above the HTML document
    $query_all_deals = mysqli_query($databaseConnection, $_SESSION['$sql_get_deals']);
    $query_all_loans = mysqli_query($databaseConnection, $_SESSION['$sql_get_loans']);
    $query_all_collaterals = mysqli_query($databaseConnection, $_SESSION['$sql_get_collaterals']);

    $number_of_deals_rows = mysqli_num_rows($query_all_deals);
    $number_of_loans_rows = mysqli_num_rows($query_all_loans);
    $number_of_collaterals_rows = mysqli_num_rows($query_all_collaterals);

    if ($number_of_loans_rows){
      while ($row = mysqli_fetch_array($query_all_loans))
      {
        // set markers for all rows from the query result
         echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: loanIcon}).addTo(leafletAllBuildingsMap);
         marker.bindPopup("<b>' .
         utf8_encode($row['name']) .
         '</b><br>' .  utf8_encode($row['street']) ." ".
         $row['number'] .'<br>'.  $row['zipcode'] ." ".  utf8_encode($row['city']) . '");
         ';
      }
    }

    if ($number_of_deals_rows){
      while ($row = mysqli_fetch_array($query_all_deals))
      {
        // set markers for all rows from the query result
         echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: dealIcon}).addTo(leafletAllBuildingsMap);
         marker.bindPopup("<b>' . utf8_encode($row['name']) . '</b><br>' .  utf8_encode($row['street']) ." ".
         $row['number'] .'<br>'.  $row['zipcode'] ." ".  utf8_encode($row['city']) . '");
         ';
      }
    }

    if ($number_of_collaterals_rows){
      while ($row = mysqli_fetch_array($query_all_collaterals))
      {
        // set markers for all rows from the query result
         echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: collateralIcon}).addTo(leafletAllBuildingsMap);
         marker.bindPopup("<b>' . utf8_encode($row['name']) . '</b><br>' .  utf8_encode($row['street']) ." ".
         $row['number'] .'<br>'.  $row['zipcode'] ." ".  utf8_encode($row['city']) . '");
         ';
      }

    }

    /////// query is above the HTML document
    $query_all_deals = mysqli_query($databaseConnection, $_SESSION['$sql_get_deals']);
    $query_all_loans = mysqli_query($databaseConnection, $_SESSION['$sql_get_loans']);

    $number_of_deals_rows = mysqli_num_rows($query_all_deals);
    $number_of_loans_rows = mysqli_num_rows($query_all_loans);

    if ($number_of_loans_rows){
      while ($row = mysqli_fetch_array($query_all_loans))
      {
        // set markers for all rows from the query result
         echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: loanIcon}).addTo(leafletProjectsMap);
         marker.bindPopup("<b>' .
         utf8_encode($row['name']) .
         '</b><br>' .  utf8_encode($row['street']) ." ".
         $row['number'] .'<br>'.  $row['zipcode'] ." ".  utf8_encode($row['city']) . '");
         ';
      }
    }

    if ($number_of_deals_rows){
      while ($row = mysqli_fetch_array($query_all_deals))
      {
        // set markers for all rows from the query result
         echo 'var marker = L.marker(['. $row['geocode'] .'], {icon: dealIcon}).addTo(leafletProjectsMap);
         marker.bindPopup("<b>' . utf8_encode($row['name']) . '</b><br>' .  utf8_encode($row['street']) ." ".
         $row['number'] .'<br>'.  $row['zipcode'] ." ".  utf8_encode($row['city']) . '");
         ';
      }

    }




  } // end of the large if statement
   ?>
   </script>

   <!-- The script below is to handle the "active" class in the top navigation menu -> the current navigation item is visually indicated -->
   <script type="text/javascript">
   $(document).ready(function () {
     $(".nav li").removeClass("active");//this will remove the active class from
                                        //previously active menu item
     $('#map').addClass('active');
   });</script>
</body>
</html>
