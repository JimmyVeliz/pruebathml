<?php
    $filas = $_GET['txtFilas'];
   echo "<table border =3 width=100%>";   
    for ($i=1; $i <= $filas; $i++) { 
        if (($i%2)==0) {
            echo "<tr bgcolor= blue>";
                for ($j=1; $j <=3 ; $j++) { 
                    echo"<td height=20px></td>";
                }        
            echo"</tr>";
        } else {
            echo "<tr bgcolor= green>";
                for ($j=1; $j <=3 ; $j++) { 
                    echo"<td height=20px></td>";
                }        
            echo"</tr>";
        }               
    }    
    
   echo "</table>";
?>