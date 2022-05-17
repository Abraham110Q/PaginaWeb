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
            <?php
                include("base.php");
                $id = $_REQUEST['id'];
                $query= "SELECT * FROM productos WHERE id='$id'";
                $resultado= $conex->query($query);
                $row = $resultado->fetch_assoc();
            ?>
          <center>
        <head><h1>Proporciona los datos de tu compra: <h1> </head>
            <center>
   
<form  action="enviar_compra.php" method="post" enctype="multipart/form-data">

            Cantidad de productos a comprar: <input type="number" name="cantidad"> <br><br>
            Precio del producto: <input  name="precio" type="number" value="<?php echo $row['precio_producto'];?>"/> <br><br>
            Direccion email: <input  type="text"  name="direccion"> <br><br>
            Nombre:          <input  type="text"  name="nombre"> <br><br>
            Apellidos:       <input type="tex"    name="apellidos"> <br><br>
            Telefono:        <input type="number"   name="telefono"> <br><br>
            Direccion: <br><br>
            Codigo postal:   <input type="text"   name="codigop"> <br><br>
            Calle:           <input type="text"  name="calle"> <br><br>
            Colonia:         <input type="text"  name="colonia"> <br><br>
            Delegacion:      <input type="text"  name="delegacion"> <br><br>
            <a onclick="alerta()" href="imprimir.php?id=<?php echo $row['id']; ?> " >Imprimir ticket</a> <br>
            <a onclick="alerta()" href="imprimir.php?id=<?php echo $row['id']; ?> " >Enviar por correo</a>

 <br><br>
          
    </form></center>
    </body>
    
</html>
