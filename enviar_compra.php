<?php 


include ("base.php");

	$cantidad = $_POST['cantidad'];
	$precio = $_POST['precio'];
	$direccion = $_POST['direccion'];
	$nombre =  $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$telefono = $_POST['telefono'];
	$codigop = $_POST['codigop'];
	$calle = $_POST['calle'];
	$colonia = $_POST['colonia'];
	$delegacion =$_POST['delegacion'];
	$fecha = date("y/m/d");
	$query = "INSERT INTO compra(cantidad, precio, email, nombre, apellidos, telefono, codigop, calle, colonia, delegacion, fecha) VALUES ('$cantidad', '$precio', '$direccion', '$nombre', '$apellidos', '$telefono', '$codigop', '$calle', '$colonia', '$delegacion', '$fecha')";
	$resultado = $conex->query($query);
	if ($resultado){

			header("Location:tiket.php");

		
	} else {
		
     echo "error";
     
     } 

?>
