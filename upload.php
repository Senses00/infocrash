<?PHP
$ruta = "imagenes/" .basename($_FILES['fotoUp']['name']);
if(move_uploaded_file($_FILES['fotoUp']['tmp_name'], $ruta))
       chmod ("www/".basename( $_FILES['fotoUp']['name']), 0644);
?>