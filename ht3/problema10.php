<?php
    $Nom= $_GET['txtNombre'];
    $Num= $_GET['txtNumero'];
    echo $Nom;
    echo '<br>';
    echo '<br>';
    for ($i=1; $i <=$Num ; $i++) { 
        echo $i;
        echo "<br>";
    }
?>