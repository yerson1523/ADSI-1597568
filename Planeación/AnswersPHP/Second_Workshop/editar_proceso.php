<?php





include ("conexion.php");

$_REQUEST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];

$query="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',telefono='$telefono' WHERE id='$id'" ;
$resultado= $conexion->query($query);

if ($resultado) {
    header ("location:visualizar.php");
    
}
else{
     echo "fallida";
}