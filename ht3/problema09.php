<?php
    $cad1 = $_GET['txtCad1'];
    $cad2 = $_GET['txtCad2'];
    $cad3 = $_GET['txtCad3'];
    $cad4 = $_GET['txtCad4'];
    $cad5 = $_GET['txtCad5'];
    $conCad = $cad1.$cad2.$cad3.$cad4.$cad5;
    $pro = round(strlen($conCad)/5);

    if ((strtoupper(substr($conCad,$pro-1,1))=="A") or (strtoupper(substr($conCad,$pro-1,1))=="E") or (strtoupper(substr($conCad,$pro-1,1))=="I") or (strtoupper(substr($conCad,$pro-1,1))=="O") or (strtoupper(substr($conCad,$pro-1,1))=="U")) {
        echo substr($conCad,$pro-1,1)." Es una vocal";
    } else {
        echo substr($conCad,$pro-1,1)." No es una vocal";
    }
    
?>