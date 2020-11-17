<?php 
	$texto= $_GET['txtTexto'];
	$num = $_GET['txtNumero'];

	if (strlen($texto)==$num) {
		echo "La logitud del texto es igual al numero ingresado";
	} else {
		if (strlen($texto)>$num) {
			echo "La logitud del texto es mayor al numero ingresado";
		} else {
			echo "La logitud del texto es menor al numero ingresado";
		}
		
	}
	
 ?>