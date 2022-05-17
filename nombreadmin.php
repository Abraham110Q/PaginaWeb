<?php  
    require 'base.php';
    include('validacion.php');
    if($usuario) {
        header("Location: mostrarimagenes.php");
    }
    $id = $_SESSION ['usuario'];
    $sql = "SELECT idAdmin, nombre, apellidop, apellidom, contraseña FROM admin WHERE idAdmin = '$usuario'";
    $res = $conex->query($sql);
    $row = $res->fetch_assoc();
    $nombre= $row['usuario']; ?>