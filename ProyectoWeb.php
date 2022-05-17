<!-- PORGRAMA DEL PROYECTO  -->
<!DOCTYPE html>

<html>
<head>
	<title>Formulario</title>
</head>
<style>
	
	form {
		margin: 50px;
		width: 500px;
		background-color: lightyellow;
		padding: 5xp;
		border-radius: 10px;
	}
    body {
	    background-image: url(https://fondosmil.com/fondo/3551.jpg);
    }

</style>
<script>
            function alerta ()
        {
            var statusConfirm = confirm("¿Realmente quieres registrarte?");
            
        }
            
        </script>
<body>
 <center>
 	<div class="contenedor">
	<form  action="enviarpro.php" method="post" enctype="multipart/form-data">
		<h1> Usuario </h1> <br><br>
            Nombre:           <input name="nombre"     type="text"    placeholder="Ingresar Nombre"    required> <br><br>
            Apellido Paterno: <input name="apellidoP"  type="text"    placeholder="Ingresar Apellido"  required> <br><br>
            Apellido Materno  <input name="apellidoM"  type="text"    placeholder="Ingresar Apellido"  required> <br><br>
            Edad:             <input type="number"      name="edad"   placeholder="Ingresa Edad"       required> <br><br>
            Sexo:             <input type="text"        name="sexo"   placeholder="Ingresa tu Sexo"    required> <br><br>
            Email:            <input type="email"       name="correo" placeholder="Ingresa Email"      required> <br><br>
            Contraseña:       <input type="password"    name="contraseña" placeholder="Ingresa Contraseña" required> <br><br>
            Insertar Imagen:  <input type="file"        name="imagen" required> <br> <br> <br>
 	<input type="submit" onclick="alerta()" value="Enviar"></a>
<p> <a class="link" href="login.php">Administrador</a></p>
<p> <a class="link" href="loginUsu.php">Iniciar sesion</a></p>

 <br><br>
          
    </form></div></center>
</body>

</html>