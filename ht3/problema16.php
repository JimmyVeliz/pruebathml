<?php
    $num=$_GET['txtNum'];
    for ($i=1; $i <=10 ; $i++) { 
        echo $num." X ".$i." = ".$num*$i;
        echo"<br>";
    }
?>