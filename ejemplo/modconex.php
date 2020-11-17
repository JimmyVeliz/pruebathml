<?php
    $servidor = "localhost";
    $usuario = "root";
    $contra="";
    $bd="bd2019efem";
    $cadenaConexion= mysqli_connect($servidor,$usuario,$contra,$bd);
    if (!$cadenaConexion) {
        echo "Error en conexion";
    } else {
        echo "conexion con exito";
    }
    
?>