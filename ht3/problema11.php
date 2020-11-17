<?php
    $num1 =$_GET['txtNum1'];
    $num2 =$_GET['txtNum2'];
    if ($num1==$num2) {
        echo "Los numeros ingresados son iguales";
    } else {
        if ($num1<$num2) {
            for ($i=$num1; $i <=$num2 ; $i++) { 
                echo $i;
                echo "<br>";
            }
        } else {            
            for ($i=$num2; $i <=$num1 ; $i++) { 
                echo $i;
                echo "<br>";
            }
        }        
    }
    
?>