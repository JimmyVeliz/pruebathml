<?php
    $num = $_GET['txtNum'];
    $con=0;
    for ($i=2; $i <$num ; $i++) { 
        if (($num%$i)==0) {            
            $con++;
        }               
    }
    if ($con==0) {
        echo "Es numero Primo"."<br>";
    } else {
        echo "NO es numero Primo"."<br>";
    }
?>