<?php
    include 'modconex.php';
    $codigo=$_POST['txtCodigo'];
    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];
    $telefono=$_POST['txtTelefono'];
    echo "<br>";
    $sql = "insert into empleados values($codigo,'$apellido','$nombre',$telefono)";
    echo "$sql";
    $ejecutar = mysqli_query($cadenaConexion,$sql);
    echo "<br>";
    if (!$ejecutar) {
        echo "Error al guardar datos";
    } else {
        echo "Datos almacenados con éxito";
    }
    echo "<br>";
    echo "<br>";
    $sqlSelect ="select * from empleados";
    $ejecutarSelect = mysqli_query($cadenaConexion,$sqlSelect);
    $no=0;
    while ($resultado= mysqli_fetch_array($ejecutarSelect)) {
        $no++;
        echo "<br>";echo "<br>";
        echo "Registro No. ".$no."\n";
        echo "Codigo: ".$resultado['codigo']."\n";
        echo "Nombre: ".$resultado['nombre']."\n";
        echo "Apellido: ".$resultado['apellido']."\n";
        echo "Telefono: ".$resultado['telefono']."\n";    
    };
    
    
    
?>