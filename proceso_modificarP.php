<?php
include("base.php");

$id= $_REQUEST['id'];

$nombreP=$_POST['nombre_producto'];
$precioP=$_POST['precio_producto'];
$iva=$_POST['iva'];
$stock=$_POST['stock'];
$imagen = addslashes(file_get_contents($_FILES['imagenes']['tmp_name']));

         $query="UPDATE productos SET nombre_producto='$nombreP', precio_producto='$precioP', iva='$iva', stock='$stock', imagen='$imagen' WHERE id='$id'";
         $resultado=$conex->query($query);
         if ($resultado) {
         	header("Location: mostrar.php");
            
         }
         else{
         	echo "no se modifico";
         }
?>