 <?php
 require 'base.php';
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header("Location: mostrar_productos.php");
    }
    $id = $_SESSION ['usuario'];
   
    $sq = "SELECT id, nombre, apellidoP, apellidoM, edad, sexo, correo, contraseña, fechaR, imagen FROM registro WHERE nombre = '$id'";
    $res = $conex->query($sq);
    $row = $res->fetch_assoc();
    if($id){
        date_default_timezone_set('America/Mexico_City');
        $fechainicio=date("y/m/d H:i:s");
        $query="INSERT INTO bitacora (id, nombre, fecha, inicio) values ('','$id','$fechainicio','Usuario')";
        $resultado = $conex->query($query);
    }
    ?>
<!DOCTYPE html>
<html>
   <head>
        <title> Imagenes Registradas</title>
   </head>
   <script>
           function alerta ()
        {
            var statusConfirm = confirm("¿Realmente quieres comprar el producto?");
        }
          function alerta2 ()
        {
            var statusConfirm = confirm("¿Realmente quieres cancelar la compra?");
        }
    </script>
  <style >
       body {
        background-image: url(https://static.vecteezy.com/system/resources/previews/002/378/955/non_2x/joystick-gaming-controller-isolated-on-blue-background-video-game-console-developed-interactive-entertainment-free-photo.jpg);
    }

       thead th, tbody th {
  font-family: 'Rock Salt', cursive;
}



  </style>
    <body>
    <center>
        <h1>El usuario activo es:<h1> <?php echo utf8_decode($row['nombre']); ?></h1></h1>
            <td><a href="tiket.php"><img height="50px" src="https://cdn-icons-png.flaticon.com/128/2331/2331970.png"></a></td>

        <table border="3">
            <thead>
                        <th><a onclick="alerta2()" href="#">Cancelar compra</a></th>

                <tr>
                <th colspan="9">Productos en existencia</th>
            </tr>
                
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Iva</th>
                    <th>Stock</th>
                    <th>Imagen</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                include("base.php");
                $query= "SELECT * FROM productos";
                $resultado= $conex->query($query);
                while($row = $resultado->fetch_assoc())
                {
                    ?>

                 <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['precio_producto']; ?></td>
                        <td><?php echo $row['iva']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td><img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
                        <th><a onclick="alerta()" href="form_compra.php?id=<?php echo $row['id']; ?> ">Comprar</a></th>

                        
                    </tr>
                
                <?php
                }
                
                ?>
            </tbody>
        </table>
    </center> 
    </body>
    
</html>
