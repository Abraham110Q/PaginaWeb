
<!DOCTYPE html>

<html>
<head>
  <title>Modifica Imagen</title>
</head>
<body>


     <?php
                include("base.php");
                $id = $_REQUEST['id'];
                $query= "SELECT * FROM registro WHERE id='$id'";
                $resultado= $conex->query($query);
                $row = $resultado->fetch_assoc();
            ?>

 <center><br/>
  <form  action="cambiar_imagen.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data"><br><br>
Nombre: <input  name="nombre" type="text" placeholder="Ingresar Nombre"  value="<?php echo $row['nombre'];?>"/> <br><br>
Apellido Paterno:<input name="apellidoP" type="text" placeholder="Ingresar Apellido"  value="<?php echo $row['apellidoP'];?>"/> <br><br>
Apellido Materno:<input name="apellidoM" type="text" placeholder="Ingresar Apellido"  value="<?php echo $row['apellidoM']; ?>"/> <br><br>
Edad:<input  type="number" name="edad" placeholder="Ingresa Edad"  value="<?php echo $row['edad'];?>"/> <br><br>
Sexo:<input  type="text" name="sexo" placeholder="Ingresa tu Sexo"  value="<?php echo $row['sexo'];?>"/> <br><br>
Email:<input  type="email" name="correo" placeholder="Ingresa Email"  value="<?php echo $row['correo'];?>"/> <br><br>
Contraseña:<input type="password"  name="contraseña" placeholder="Ingresa Contraseña"  value="<?php echo $row['contraseña'];?>"/><br><br>
<img height="100px" src="data:image/png;base64,<?php echo base64_encode($row['imagen']); ?>"/> 
<input type="file" name="imagen" required> <br> <br> <br>
<input type="submit"  value="Enviar">
 <br><br>
          
    </form></center>
</body>
</html>