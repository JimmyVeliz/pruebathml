<?php 
	$Num1 = $_POST['txtNum1'];
	$Num2 = $_POST['txtNum2'];
	$Num3 = $_POST['txtNum3'];
	$Num4 = $_POST['txtNum4'];
	$Num5 = $_POST['txtNum5'];
	$Promedio= ($Num1+$Num2+$Num3+$Num4+$Num5)/5;
	echo "<table width=\"25%\" border=\"1\">";
			echo"<tr>";
				echo "<td width=\"50%\">";echo"valor 1</td>";
				echo "<td width=\"50%\"> $Num1</td>";
			echo"</tr>";
			echo"<tr>";
				echo "<td>";echo"valor 2</td>";
				echo "<td> $Num2</td>";
			echo"</tr>";
			echo"<tr>";
				echo "<td>";echo"valor 3</td>";
				echo "<td> $Num3</td>";
			echo"</tr>";
			echo"<tr>";
				echo "<td>";echo"valor 4</td>";
				echo "<td> $Num4</td>";
			echo"</tr>";
			echo"<tr>";
				echo "<td>";echo"valor 5</td>";
				echo "<td> $Num5</td>";
			echo"</tr>";
			echo"<tr>";
				echo "<td>";echo"Promedio</td>";
				echo "<td> $Promedio</td>";
			echo"</tr>";
	echo"</table>";
	for ($i=2; $i <= ($Num1+$Num2+$Num3+$Num4+$Num5) ; $i++) { 		
		if (($i%2)==0) {
			echo $i;
			echo "<br>";
		}

	}
	

 ?>