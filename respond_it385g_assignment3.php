<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Big trucks</title>
<style>
    * {
        font-family: Courier, monospace;
        font-weight:bold;
    }
    body {
        background-color:#5c8261;
    }
    table{
        margin:auto;
        background-color:lightgrey;
    }
    td {
        padding:0px;
        
    }
    button {
        width: 50px;
        color:black;
        text-decoration:none;
        transition: 0.8s;
        padding:5px;
        margin: auto;
        margin-bottom:10px;
        font-weight:bold;
    }
    button:hover {
        box-shadow: 0px 0px 4px 3px white;
    }
    #tbl {
        box-shadow: 2px 2px 4px 2px;
    }
    #selection {
        Background-color: black;
        width:350px;
        border: 2px solid white;
        margin:auto;
        margin-bottom: 20px;
        color: white;
        padding: 5px;
        text-align:center;
        font-weight:bold;
        font-size: 120%;
        box-shadow: 2px 2px 4px 2px black;
    }
    #caption {
        background-color: black;
        color:coral;
        font-size: 200%;
        font-weight: 700;
        letter-spacing: 10px;
        text-align:center;
        text-transform: uppercase;
        padding:10px;
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
<table id='tbl' border='2px'>
<?php
//Check form value
if(isset($_POST['country'])){
    $country=$_POST['country'];
}else{
    $country="USA";
}

/*check if value is missing
if (empty($incountry)) {
        echo "<h1 id='caption'>Big Trucks information database</h1>";
        echo "<div id='selection'>";
        echo "<p>Your selection is empty</p>";
        echo "<button type='button' name='backbutton'><a href='it385g_assignment2.php' >Back</a></button>";
        echo "</div>";
// kör tabellen      
}else{*/
    $url="https://wwwlab.iit.his.se/gush/XMLAPI/vehiclesservice/vehicles/?country=".$country;
    $jsontext = file_get_contents($url);
    $arr = json_decode($jsontext);
    
   echo "<h1 id='caption'>Big Trucks information database</h1>";
    //echo "<div id='selection'>";
      //  echo "<p>Your selection: $country</p>";
    //echo "</div>";
    
    echo "<tr><th id='head'>Manufacturer</th><th id='head'>Drive shafts</th><th id='head'>Horsepowers</th></tr>";
    foreach ($arr[0] as $trucks) {
        //if($country[2]==$incountry){  
        echo "<tr>";
        //echo "<td id='sub'>" . $country. "</td>";  
        echo "<td id='sub'>" . $trucks[0]. "</td>";
        echo "<td id='sub'>" . $trucks[1] . "</td>";
        echo "<td id='sub'>" . $trucks[2] . "</td>";
    }
// Test POST
//print_r($_POST);
?>
</table>

</pre>
</body>
</html>