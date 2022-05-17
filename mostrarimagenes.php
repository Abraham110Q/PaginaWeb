<?php  
    include ('base.php');
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header("Location: mostrarimagenes.php");
    }
    $id = $_SESSION ['usuario'];
   
    $sql = "SELECT idAdmin, nombre, apellidop, apellidom, contraseña FROM admin WHERE nombre = '$id'";
    $res = $conex->query($sql);
    $row = $res->fetch_assoc();
    if($id){
        date_default_timezone_set('America/Mexico_City');
        $fechainicio=date("y/m/d H:i:s");
        $query="INSERT INTO bitacora (id, nombre, fecha, inicio) values ('','$id','$fechainicio','Administrador')";
        $resultado = $conex->query($query);
    }
    ?>
<!DOCTYPE html>
<html>
   <head>
        <title> Imagenes Registradas</title>
   </head>
  <style >
       body {
        background-image: url(https://static.vecteezy.com/system/resources/previews/002/378/955/non_2x/joystick-gaming-controller-isolated-on-blue-background-video-game-console-developed-interactive-entertainment-free-photo.jpg);
    }

       thead th, tbody th {
  font-family: 'Rock Salt', cursive;
}



  </style>
<script>
           function alerta ()
        {
            var statusConfirm = confirm("¿Realmente quieres modificar el registro?");
        }
           function alerta2 ()
        {
            var statusConfirm = confirm("¿Realmente quieres eliminar el registro?");
        }
           function alerta3 ()
        {
            var statusConfirm = confirm("¿Realmente quieres agregar?");
        }
           function alerta4 ()
        {
            var statusConfirm = confirm("¿Realmente quieres consultar?");
        }
           
        </script>
    <body>
    <center>
     

<h1>El administrador activo es:<h1> <?php echo utf8_decode($row['nombre']); ?></h1></h1>
  <table border="3">
            <thead>    

               <tr> <th><a href="mostrar.php" >Tabla de productos</a></th>
                <th><a href="baseadmin.php" >Gestión de administradores</a></th></tr>
                <tr>
                <th colspan="6"><a href="ProyectoWeb.php" onclick="alerta3()" >Agregar Usuario</a></th>
                <th colspan="6"><a href="http://localhost/EjerciciosEslava/ProyectoWeb.php" onclick="alerta4()" >Consultar</a></th>
            </tr>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Fecha</th>
                    <th>Imagen</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("base.php");
                $query= "SELECT * FROM registro";
                $resultado= $conex->query($query);
                while($row = $resultado->fetch_assoc())
                {
                    
                
                    ?>
                    </tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellidoP']; ?></td>
                        <td><?php echo $row['apellidoM']; ?></td>
                        <td><?php echo $row['edad']; ?></td>
                        <td><?php echo $row['sexo']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['contraseña']; ?></td>
                        <td><?php echo $row['fechaR']; ?></td>
                        <td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                        <th><a onclick="alerta()" href="modificar_imagen.php?id=<?php echo $row['id']; ?> ">Modificar</a></th>
                        <th><a onclick="alerta2()"  href="eliminar.php?id=<?php echo $row['id']; ?> " >Eliminar</a></th>
                       

                    </tr>
                
                <?php
                }
                
                ?>
            </tbody>
        </table>
    </center> 
    </body>
    
</html>