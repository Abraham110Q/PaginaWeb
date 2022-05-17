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
        <table border="3">
            <thead>
                <tr>
                <th colspan="5"><a href="productos.php" onclick="alerta3()" >Agregar</a></th>
                <th colspan="3"><a href="http://localhost/EjerciciosEslava/ProyectoWeb.php" onclick="alerta4()" >Consultar</a></th>
            </tr>
                
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Iva</th>
                    <th>Stock</th>
                    <th>Imagen</th>
                    <th colspan="2">Acciones</th>
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
                        <th><a onclick="alerta()" href="modificar.php?id=<?php echo $row['id']; ?>">Editar</th>
                        <th><a onclick="alerta2()"  href="eliminar_produ.php?id=<?php echo $row['id']; ?>" >Eliminar</a></th>

                    </tr>
                
                <?php
                }
                
                ?>
            </tbody>
        </table>
    </center> 
    </body>
    
</html>