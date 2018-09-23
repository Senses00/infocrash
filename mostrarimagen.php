<div style="width:100%;"> 
<?php 
$dir='imagenes/';  //nombre de la carpeta
$images = glob("$dir{*.gif,*.jpg,*.png}", GLOB_BRACE); 

echo "<table border=8;> "; 
echo "<tr> "; 
echo "<TD><b>Imagen</b></TD> "; 
echo "</tr> "; 

 
foreach($images as $v){  
echo"<tr>";

echo "<td>";
echo '<img src="'.$v.'" border="10" style="width:100px;float:left;margin:10px;" />';  

echo "</td>";
}  
?>  
</div>