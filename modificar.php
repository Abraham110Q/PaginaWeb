<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<style >
       body {
        background-image: url(https://static.vecteezy.com/system/resources/previews/002/378/955/non_2x/joystick-gaming-controller-isolated-on-blue-background-video-game-console-developed-interactive-entertainment-free-photo.jpg);
    }


  </style>
<body>
           <?php
                include("base.php");
                $id = $_REQUEST['id'];
                $query= "SELECT * FROM productos where id='$id'";
                $resultado= $conex->query($query);
                $row = $resultado->fetch_assoc();
            ?>
 <center><br/>
    <form  action="proceso_modificarP.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
        <h1> Modificar </h1> <br><br>
            Nombre del producto: <input  name="nombre_producto" type="text"   placeholder="llenar" value="<?php echo $row['nombre_producto'];?>"/> <br><br>
            Precio del producto: <input  name="precio_producto" type="number" placeholder="llenar"  value="<?php echo $row['precio_producto'];?>"/> <br><br>
            Iva:                 <input  name="iva"             type="number" placeholder="llenar"  value="<?php echo $row['iva'];?>"/> <br><br>
            Stock:               <input  name="stock"           type="number" placeholder="llenar"  value="<?php echo $row['stock'];?>"/> <br><br>
            <img height="100px" src="data:image/png;base64, <?php echo base64_encode($row['imagen']); ?>"/>
            <input type="file" name="imagenes" required> <br> <br> <br>
    <input type="submit"  value="Aceptar">
 <br><br>          
    </form></center>
</body>
</html>