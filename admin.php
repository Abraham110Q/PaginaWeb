<!DOCTYPE html>
<html>
    <head>
        <title> Admin</title>
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
            function alerta(){
                            alert("Registrado"); 
                           }
            
        </script>
 <body>
 <center>
   
<form  action="enviaradmin.php" method="post" enctype="multipart/form-data">
        <h1> Administrador </h1> <br><br>
           Nombre: <input type="text" placeholder="Ingresar Nombre" name="n2"> <br><br>
            Apellido Paterno: <input  type="text" placeholder="Ingresar Apellido" name="ap"> <br><br>
            Apellido Materno <input  type="text" placeholder="Ingresar Apellido" name="app"> <br><br>
            Contraseña: <input type="password"  placeholder="Ingresa Contraseña" name="co"> <br><br>
<input type="submit"  onclick="alerta()" name="ok">
<p> <a class="link" href="login.php">Iniciar sesion</a></p>

 <br><br>
          
    </form></center>
    </body>
    
</html>
