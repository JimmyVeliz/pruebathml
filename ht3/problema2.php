<?php
	/*$nom= $_GET['txtCurso']*/
    $n1 = $_GET['txtNum1'];
    $n2 = $_GET['txtNum2'];
    $n3 = $_GET['txtNum3'];
    $n4 = $_GET['txtNum4'];
    $promedio =  ($n1+ $n2 +$n3+$n4) /4;
    echo(round($promedio));     	
    echo "<br>"; 
    
    if (round($promedio) >= 70) {
    	echo "gano"."\n";    
    } else{
    	echo "string";
    	echo "perdio";
    	echo "<br>"; 
    	echo "le faltaron ". (280 - ($n1+ $n2 +$n3+$n4). " puntos");
    }
?>