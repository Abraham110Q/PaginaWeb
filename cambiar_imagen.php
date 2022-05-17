<?php 


include("base.php");

  
$id= $_REQUEST['id'];
	
	$name = $_POST['nombre'];
	$apep = $_POST['apellidoP'];
	$apem = $_POST['apellidoM'];
	$eda =  $_POST['edad'];
	$sex = $_POST['sexo'];
	$corr = $_POST['correo'];
	$con = $_POST['contraseña'];
	$fe = date("y/m/d");
	$ima = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	$query = "UPDATE registro SET nombre='$name',apellidoP='$apep',apellidoM='$apem',edad='eda',sexo='$sex',correo='$corr',contraseña='$con',fechaR='$fe',imagen='$ima' WHERE id= '$id'";
	$resultado = $conex->query($query);
	if ($resultado){

         	header("Location:  mostrarimagenes.php");
		
	} 
   
    else{
    	
       echo "No se modifico";

    }


?>