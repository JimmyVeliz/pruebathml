<?php
    $num= $_GET['txtNum'];
    if ($num==0) {
        echo "El número es neutro";
    } else {
        if ($num>0) {
            echo "El número es positivo";
        } else {
            echo "El número es negativo";
        }
        
    }
    
?>