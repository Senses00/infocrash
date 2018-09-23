<?php include ('functions.php');



$ubicacion=$_GET['ubicacion'];
$fecha=$_GET['fecha'];
$gravedad=$_GET['gravedad'];
$heridos=$_GET['heridos'];



ejecutarSQLCommand("INSERT INTO  `accidentes` (ubicacion, fecha, gravedad, heridos)
VALUES (
'$ubicacion',
'$fecha',
'$gravedad',
'$heridos')

 ON DUPLICATE KEY UPDATE 
`ubicacion`= '$ubicacion',
`fecha`='$fecha',
`gravedad`='$gravedad',
`heridos`='$heridos';");

 ?>