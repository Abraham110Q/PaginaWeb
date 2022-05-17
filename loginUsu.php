<!DOCTYPE html>
<html>
    <head>
        <title> Usuarios</title>
        <link rel="shortcut icon" href="https://www.tbkids.es/wp-content/uploads/2017/07/icono-videojuegos.png">

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
                            alert("Si estas registrado"); 
                           }
            
        </script>
 <body>
 <center>
   
<form  action="validacionUsu.php" method="post" enctype="multipart/form-data">
        <h1> Inicio de sesion de usuario </h1> <br><br>
           Nombre de usuario: <input type="text" placeholder="Ingresar Nombre" name="usuario"> <br><br>
           Contraseña: <input type="password"  placeholder="Ingresa Contraseña" name="contraseña"> <br><br>
<input type="submit"  onclick="alerta()" name="ok">
 <br><br>
          
    </form></center>
    </body>
    
</html>