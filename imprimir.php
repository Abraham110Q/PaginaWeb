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
         <script>
     function imprimirPagina(){
        a=window.print();
     }

 </script>
    <center>
       
          <table border="2">
            <thead>

                <tr>
                <th colspan="3">Tu ticket es el siguiente</th>
            </tr>
                
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Nombre del cliente</th>
     
                </tr>
            </thead>
            <tbody>
                  <?php
                include("base.php");
                $id = $_REQUEST['id'];
                $query= "SELECT * FROM compra WHERE id='$id'";
                $resultado= $conex->query($query);
                $row = $resultado->fetch_assoc();
            ?>

                 <tr>
                        <td><?php echo $row['cantidad']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <button onclick="imprimirPagina();">Imprimir</button><br><br>


                   
                    </tr>
                    </tr>
         

            </tbody>
        </table>
    </body>
    
</html>
