<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
include('base.php');
$consulta="SELECT * FROM admin where nombre='$usuario' and contraseña='$contraseña'";
$fecha=date("y/m/d");
$resultado=mysqli_query($conex,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas)
{
	
	header("location:mostrarimagenes.php");
}else{
	?>
	<?php
	include('login.php');
	?>
	<h1>Error en inicio de sesion</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conex);

