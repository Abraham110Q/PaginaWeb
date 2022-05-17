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

        </script>
    <body>
    <center>
        <table border="3">
            <thead>
                                <tr> <th><a href="admin.php" >Agregar</a></th></tr>

                <tr>
                
                    <th>IdAdmin</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Contraseña</th>
             
                </tr>
            </thead>
            <tbody>
                <?php
                include("base.php");
                $query= "SELECT * FROM admin";
                $resultado= $conex->query($query);
                while($row = $resultado->fetch_assoc())
                {
                    ?>
                    <tr>
                        <td><?php echo $row['idAdmin']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellidop']; ?></td>
                        <td><?php echo $row['apellidom']; ?></td>
                        <td><?php echo $row['contraseña']; ?></td>

                    </tr>
                
                <?php
                }
                
                ?>
            </tbody>
        </table>
    </center> 
    </body>
    
</html>