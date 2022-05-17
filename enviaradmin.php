<?php 

include ("base.php");

if (isset($_POST['ok'])) {

	if(strlen($_POST['n2']) >= 1 &&
strlen($_POST['ap']) >= 1 &&
strlen($_POST['app']) >= 1 &&
strlen($_POST['co']) >= 1)
{
	$n = trim($_POST['n2']);
	$apl = trim($_POST['ap']);
	$appl = trim($_POST['app']);
	$con = trim($_POST['co']);
	$consu = "INSERT INTO admin(nombre, apellidop, apellidom, contraseña) VALUES ('$n','$apl','$appl','$con')";
	$resul = mysqli_query($conex,$consu);
	if ($resul){
		
	header("location:login.php");
		
	} else {
		?>
				<h3 class='bad'> error </h3>
        <?php
    }
     
     } else{
    	?>
    			<h3 class='bad'> complete </h3>
    			<?php


    }

}
?>