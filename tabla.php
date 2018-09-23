<!DOCTYPE html>
<html lang="ES">
<head>
<title>Reportes de Accidentes</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<?php


$con = mysql_connect("localhost", "root", "nino1998");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("infocrash",$con);

$result = mysql_query("SELECT  a.id, a.ubicacion, a.fecha, a.gravedad, a.heridos, b.imagen FROM accidentes a, imagenes b", $con); 

echo "<table border=8;> "; 

echo "<tr> "; 

echo "<TD><b>ID</b></TD> "; 

echo "<TD><b>Ubicacion</b></TD> "; 

echo "<TD><b>Fecha</b></TD> "; 

echo "<TD><b>Gravedad</b></TD> "; 

echo "<TD><b>Heridos</b></TD> "; 

echo "<TD><b>Imagen</b></TD> "; 

echo "</tr> "; 


while ($row = mysql_fetch_row($result)){ 

echo "<tr> "; 

echo "<td>$row[0]</td> "; 

echo "<td>$row[1]</td> "; 

echo "<td>$row[2]</td> "; 

echo "<td>$row[3]</td> "; 

echo "<td>$row[4]</td> "; 

echo "<td>$row[5]</td> "; 


echo "</tr> ";

}


?>

</body>
</html>