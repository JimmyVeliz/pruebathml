<?php
    $cad = $_GET['txtCad'];
    $a = 0;
    $e = 0;
    $i = 0;
    $o = 0;
    $u = 0;
    for ($x=0; $x < strlen($cad) ; $x++) { 
        if ((strtoupper(substr($cad,$x,1)))=="A") {
            $a++;
        }
        if ((strtoupper(substr($cad,$x,1)))=="E") {
            $e++;
        }
        if ((strtoupper(substr($cad,$x,1)))=="I") {
            $i++;
        }
        if ((strtoupper(substr($cad,$x,1)))=="O") {
            $o++;
        }
        if ((strtoupper(substr($cad,$x,1)))=="U") {
            $u++;            
        }
    }
    echo "El texto ".$cad." posee las siguientes vocales"."<br>";
    /* echo "La cantidad de vocales que tiene este texto es de ".($a+$e+$i+$o+$u)."<br><br>"; */
    echo "a, A = ".$a."<br>";
    echo "e, E = ".$e."<br>";
    echo "i, I = ".$i."<br>";
    echo "o, O = ".$o."<br>";
    echo "u, U = ".$u."<br>";
?>