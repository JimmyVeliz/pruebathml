<?php
    $num= $_GET['txtNum'];
    if ($num>= 6) {
        for ($i=6; $i <=$num ; $i++) { 
            if (($i%3)==0) {
                echo $i;
                echo "<br>";  
            }           
        }
    }     
?>