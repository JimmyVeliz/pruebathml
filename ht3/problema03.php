<?php 
	$num = $_GET['txtNumero'];
	if ($num == 0) {
		echo "<br>";
		echo"El numero ".$num." es neutro";		
	} else {
		if (($num % 2 )==0) {
			echo "El numero ".$num." es par";
		} else {
			echo "El numero ".$num." es impar";
		}
		
	}
	
 ?>