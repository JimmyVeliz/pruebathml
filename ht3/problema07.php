<?php
    $cad = $_GET['txtCadena'];
    if ('S'==strtoupper(substr($cad,strlen($cad)-1,strlen($cad)))) {
        echo 'La cadena de texto termina en s';
    } else {
        echo 'La cadena de texto no termina en s';
    }    
?>