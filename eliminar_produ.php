<?php
include("base.php");

$id= $_REQUEST['id'];


         $query="DELETE FROM productos WHERE id='$id'";
         $resultado=$conex->query($query);
         if ($resultado) {
         	header("Location: mostrar.php");
            
         }
         else{
         	echo "no se modifico";
         }
?>