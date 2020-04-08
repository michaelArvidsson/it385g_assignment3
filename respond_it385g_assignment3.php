<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Big trucks</title>
<style>
    body {
        font-family: sans-serif;
        background-color:lightslategrey;
    }
    table{
        margin:auto;
        background-color:white;
    }
    td {
        padding:0px;
        
    }
    button, a {
        color:black;
        text-decoration:none;
        transition: 0.8s;
        padding:5px;
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
        color:white;
        font-size: 200%;
        font-weight: 700;
        letter-spacing: 10px;
        text-align:center;
        text-transform: uppercase;
        padding:10px;
    }
    #head {
        Background-color: black;
        color: white;
        padding: 15px;
        font-size: 120%;
    }
    #sub {
        font-weight: bold;
        text-align: center;
        padding: 15px;
    }
    #m_head{
        Background-color: black;
        color: white;
    }
    #misc {
        width:100px;
        text-align: center;
        font-size: 12px;
        padding: 5px;
    }
</style>
<body>
<pre>
<table id='tbl' border='1px'>
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
    print_r($arr);
    
    //echo "<h1 id='caption'>Big Trucks information database</h1>";
    //echo "<div id='selection'>";
      //  echo "<p>Your selection: $country</p>";
    //echo "</div>";
    
    //echo "<tr><th id='head'>Manufacturer</th><th id='head'>City</th><th id='head'>Country</th><th id='head' colspan='6'>Misc</th></tr>";
    foreach ($arr as $trucks) {
        //if($country[2]==$incountry){  
        echo "<tr>";  
        echo "<td id='sub'>" . $trucks[0]. "</td>";
        echo "<td id='sub'>" . $trucks[1] . "</td>";
        echo "<td id='sub'>" . $trucks[2] . "</td>";
    
        /*foreach ($country[3] as $brand) {
            echo "<td>";
            echo "<table>";
            echo "<tr><th id='m_head'>Model</th></tr>";
            echo "<tr><td id='misc'>" . $brand[0] . "</td></tr>";
            echo "<tr><th id='m_head'>Drive shafts</th></tr>";
            echo "<tr><td id='misc'>" . $brand[1] . "</td></tr>";
            echo "<tr><th id='m_head'>Horsepowers</th></tr>";
            echo "<tr><td id='misc'>" . $brand[2] . "</td></tr>";
            echo "</table>";
            echo "</td>";*/
        } 
        echo "</tr>";   
    //}
       
//}
echo "</table>";
// Test POST
echo 'truck: ';
print_r($trucks);
print_r($_POST);
?>  
</pre>
</body>
</html>