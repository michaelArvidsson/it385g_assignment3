<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Big trucks</title>
  <style>
    * {
      font-family: Courier, monospace;
      font-weight: bold;
    }

    body {
      background-color: #5c8261;
    }

    table,
    td {
      border: 1px solid black;
      margin: auto;
      background-color: lightgrey;
    }

    table {
      box-shadow: 2px 2px 4px 2px black;

    }

    #selection {
      Background-color: black;
      width: 350px;
      border: 2px solid white;
      margin: auto;
      margin-bottom: 20px;
      color: white;
      padding: 5px;
      text-align: center;
      font-weight: bold;
      font-size: 120%;
      box-shadow: 2px 2px 4px 2px black;
    }

    #caption {
      background-color: black;
      color: coral;
      font-size: 200%;
      font-weight: 700;
      letter-spacing: 10px;
      text-align: center;
      text-transform: uppercase;
      padding: 10px;
    }

    #head {
      Background-color: black;
      color: coral;
      padding: 15px;
      font-size: 120%;
    }

    #sub {
      font-weight: bold;
      text-align: center;
      padding: 15px;
    }
  </style>

<body>
<pre>
<table>
<?php
//Check form value
if (isset($_POST['country'])) {
  $country = $_POST['country'];
} else {
  $country = "USA";
}
//print_r($_POST);
// Get array from webservice
$url = "https://wwwlab.iit.his.se/gush/XMLAPI/vehiclesservice/vehicles/?country=" . $country;
$jsontext = file_get_contents($url);
$arr = json_decode($jsontext);

echo "<h1 id='caption'>Big Trucks information database</h1>";
// run table 
echo "<tr><th id='head'>Manufacturer</th><th id='head'>Drive shafts</th><th id='head'>Horsepowers</th></tr>";
foreach ($arr as $trucks) {
    foreach ($trucks as $Manufacturer){
      echo "<tr>";
      echo "<td id='sub'>" . $Manufacturer[0] . "</td>";
      echo "<td id='sub'>" . $Manufacturer[1] . "</td>";
      echo "<td id='sub'>" . $Manufacturer[2] . "</td>";
    }
    echo "</tr>";
  }   
// Test POST
//print_r($trucks);
?>
</table>
</pre>
</body>
</html>