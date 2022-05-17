<?php
include("base.php");
$nombreP=$_POST['nombre_producto'];
$precioP=$_POST['precio_producto'];
$iva=$_POST['iva'];
$stock=$_POST['stock'];
$imagen = addslashes(file_get_contents($_FILES['imagenes']['tmp_name']));

         $query="INSERT INTO productos(nombre_producto, precio_producto, iva, stock, imagen) VALUES ('$nombreP','$precioP','$iva','$stock','$imagen')";
         $resultado=$conex->query($query);
         if ($resultado) {
         	header("Location: mostrar.php");
         }
         else{
         	echo "no se inserto";
         }
?>