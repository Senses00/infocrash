<!DOCTYPE html>
<html lang="ES">
<head>
<title>Reportes de Accidentes</title>


</head>

<body>


<div style="width:100%;"> 
<?php 

include('style.css');

$con = mysql_connect("localhost", "root", "nino1998");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("infocrash",$con);

$result = mysql_query("SELECT  id, ubicacion, fecha, gravedad, heridos FROM accidentes", $con); 


$dir='imagenes/';  //nombre de la carpeta
$images = glob("$dir{*.gif,*.jpg,*.png}", GLOB_BRACE); 

echo "<table border=10; align='center'; bordercolor='black';> "; 
echo "<tr> "; 

echo "<TD><b>ID</b></TD> "; 
echo "<TD><b>Ubicacion</b></TD> "; 
echo "<TD><b>Fecha</b></TD> "; 
echo "<TD><b>Gravedad</b></TD> "; 
echo "<TD><b>Heridos</b></TD> "; 
echo "<TD><b>Imagen</b></TD> "; 
echo "</tr> "; 

 

foreach($images as $v){  
echo"<tr>";

$row = mysql_fetch_row($result); 
echo "<td>$row[0]</td> "; 
echo "<td>$row[1]</td> "; 
echo "<td>$row[2]</td> "; 
echo "<td>$row[3]</td> "; 
echo "<td>$row[4]</td> "; 

echo "<td>";
echo '<img src="'.$v.'" border="4" style="width:100px;height:100px;float:left;margin:10px;" />';  
echo "</td>";
}  
?>  
</div>


</body>
</html>