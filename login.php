<!DOCTYPE html>
<html>
    <head>
        <title> Admin</title>
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
    input[type="submit"] {
    background: linear-gradient(#FFDA63, #FFB940);
    border: 0;
    width: 160px;
    color: white;
    opacity: 3;
    cursor: pointer;
    border-radius: 20px;
    margin-bottom: 0;
}

</style>
<script>
            function alerta(){
                            alert("Si estas registrado"); 
                           }
            
        </script>
 <body>
 <center>
   
<form  action="validacion.php" method="post" enctype="multipart/form-data">
        <h1> Inicio de sesion de administrador </h1> <br><br>
           Nombre de usuario:&#128272; <input type="text" placeholder="Ingresar Nombre" name="usuario" > <br><br>
           Contraseña:&#128272; <input type="password"  placeholder="Ingresa Contraseña" name="contraseña"> <br><br><br>
<input type="submit"  onclick="alerta()" value="Iniciar sesión">
 <br><br>
          
    </form></center>
    </body>
    
</html>
