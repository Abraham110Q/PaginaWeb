<?php
include("base.php");

$id= $_REQUEST['id'];


         $query="DELETE FROM registro WHERE id='$id'";
         $resultado=$conex->query($query);
         if ($resultado) {
         	header("Location: mostrarimagenes.php");
            
         }
         else{
         	echo "no se modifico";
         }
?>