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
    <body>
    <center>
        <h1>Tu ticket es el siguiente: <h1> 
          <table border="3">
            <thead>

                <tr>
                <th colspan="9">Productos en existencia</th>
            </tr>
                
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Iva</th>
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
                        <td><img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
                        <th><a onclick="alerta()" href="imprimir.php?id=<?php echo $row['id']; ?> " >Imprimir ticket</a></th>

                   
                    </tr>
                    </tr>
         
            
                        <?php
                }
                
                ?>
            </tbody>
        </table>
    </body>
    
</html>
