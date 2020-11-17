<?php
    $cad = $_GET['txtCad'];
    for ($i=0; $i < strlen($cad) ; $i++) { 
        echo substr($cad,$i,1);
        echo "<br>";
    }
?>