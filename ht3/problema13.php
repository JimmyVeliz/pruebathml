<?php
    $num1 = $_GET['txtNum1'];
    $num2 = $_GET['txtNum2'];
    if ($num1==$num2) {
        echo "Los números son iguales, tiene que se diferentes";
        echo "<br>";
    } else {
        if (abs($num2 - $num1)>=5) {
            if ($num1<$num2) {
                for ($i=$num1; $i <=$num2 ; $i=$i + 5) { 
                    echo $i;
                    echo "<br>";
                }
            } else {
                for ($i=$num2; $i <=$num1 ; $i=$i + 5) { 
                    echo $i;
                    echo "<br>";
                }
            }
        } else {
            echo "Tiene que tener una minima diferencia de 5 entre los números ingresados";
        }                
    }   
?>