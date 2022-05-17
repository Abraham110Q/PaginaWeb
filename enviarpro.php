<?php 


include ("base.php");

	$name = $_POST['nombre'];
	$apeP = $_POST['apellidoP'];
	$apeM = $_POST['apellidoM'];
	$eda =  $_POST['edad'];
	$sex = $_POST['sexo'];
	$corr = $_POST['correo'];
	$con = $_POST['contraseña'];
	$fe = date("y/m/d");
	$ima = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$query = "INSERT INTO registro(nombre, apellidoP, apellidoM, edad, sexo, correo, contraseña, fechaR, imagen) VALUES ('$name','$apeP','$apeM','$eda','$sex','$corr','$con','$fe','$ima')";
	$resultado = $conex->query($query);
	if ($resultado){

			header("Location:ProyectoWeb.php");

		
	} else {
		
     echo "error";
     
     } 

?>
