<!DOCTYPE html PUBLIC 

<html>
<head>
    <title>Productos</title>
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

</style>
<script>
            function alerta(){
                            alert("Registrado"); 
                           }
            
        </script>
<body>
 <center>
    <div class="contenedor">
    <form  action="proceso_guardar_productos.php" method="post" enctype="multipart/form-data">
        <h1> Registro de productos </h1> <br><br>
            Nombre del producto: <input  name="nombre_producto" type="text"   placeholder="llenar" required> <br><br>
            Precio del producto: <input  name="precio_producto" type="number" placeholder="llenar" required> <br><br>
            Iva:                 <input  name="iva"             type="number" placeholder="llenar" required> <br><br>
            Stock:               <input  name="stock"           type="number" placeholder="llenar" required> <br><br>
            Insertar imagen del producto:     <input type="file" name="imagenes" required> <br> <br> <br>
    <input type="submit"  value="enviar">
 <br><br>
          
    </form></div></center>
</body>
</html>