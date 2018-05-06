<?php

include ("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

$query="INSERT INTO usuarios(nombre,apellido,telefono) VALUES('$nombre','$apellido','$telefono')";
$resultado= $conexion->query($query);

if ($resultado) {
    header ("location:visualizar.php");
    
}
else{
     echo "fallida";
}
