<?php 
    $texto1 = $_GET['txtTexto1'];
    $texto2 = $_GET['txtTexto2'];
    if ((substr($texto1,0,1))==(substr($texto2,0,1))) {
        echo "Los dos texto empiezan con la misma letra";
    } else {
        echo 'Los dos texto no empiezan con la misma letra';
    }   
 ?>