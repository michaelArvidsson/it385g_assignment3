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
    form {
        width:500px;
        background-color:coral;
        padding:50px;
        margin:auto;
        box-shadow: 2px 2px 4px 2px;
    }
    #f_Body {
        Width:300px;
        margin:auto;
        font-weight:bold;
        font-size:15px;
    }
    #head {
        background-color: black;
        color:coral;
        font-size: 200%;
        font-weight: 700;
        letter-spacing: 10px;
        text-align: center;
        text-transform: uppercase;
        padding:10px;
    }

    </style>

<body>
<pre>
<h1 id='head'>Big Trucks information database</h1>    
<form method='post' action='respond_it385g_assignment3.php'>

<?php                                                                                                                                                  
  $url="https://wwwlab.iit.his.se/gush/XMLAPI/vehiclesservice/manufacturer/";
  $jsontext = file_get_contents($url);
  $arr = json_decode($jsontext);
  echo "<div id='f_body'>";
  echo "<label>Select Manufacturer </label><select name='country'>";
  foreach($arr as $manufacturer){
      echo "<option value='".$manufacturer[1]."' >".$manufacturer[0]."</option>";
  }
  echo "</select>";
  echo "<input style='margin-left:10px'; type='submit' name='submitbutton' value='Show result'>";
  echo "</div>";
    
  ?>  
</form>                          
</pre>
</body>
</html>