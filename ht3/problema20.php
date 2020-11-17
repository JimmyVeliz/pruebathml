<?php
    $n1 = $_GET['txtN1'];
    $n2 = $_GET['txtN2'];
    while (($n1 % $n2) !=0) {
        $n3= $n2;
        $n2= $n1 % $n2;
        $n1= $n3;
        echo $n1."<br>";
        echo $n2."<br>";
        echo $n3."<br>";
    }
?>