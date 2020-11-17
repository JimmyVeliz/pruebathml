<?php
    $num1 = $_GET['txtNum1'];
    $num2 = $_GET['txtNum2'];
    $num3 = $_GET['txtNum3'];
    if (($num1==$num2)and($num1==$num3) and($num2==$num3)) {
        echo "Los tres numeros son iguales";
    } else {
        if (($num1>=$num2) and ($num1>=$num3)) {
            echo 'El numero mayor es: '.$num1;
        } else {
            if (($num2>=$num1) and ($num2>=$num3)) {
                echo 'El numero mayor es: '.$num2;
            } else {
                echo 'El numero mayor es: '.$num3;
            }        
        }
        echo "<br>";
        if (($num3<=$num2) and ($num3<=$num1)) {
            echo 'El numero menor es: '.$num3;
        } else {
            if (($num2<=$num1) and ($num2<=$num3)) {
                echo 'El numero menor es: '.$num2;
            } else {
                echo 'El numero menor es: '.$num1;   
            }        
        }
    }    
?>