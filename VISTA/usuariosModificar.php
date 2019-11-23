<?php
include 'datosConexion.php';
$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD);


if (mysqli_connect_errno()){
    die("Fallo de conexión %s/n".mysqli_connect_error());}

$conexion->select_db(DB_NOMBRE);

$sql="INSERT INTO usuarios_pass (ID,USUARIOS,PASSWORD) VALUES (ID,USUARIOS,PASSWORD)";
$sentencia=$conexion->prepare($sql);
foreach($_POST as $pais){   
    $sentencia->bind_param("s", $pais);
    $sentencia->execute();
}
/*$sql="INSERT INTO usuario (NomUsuario) VALUES (?)";
$sentencia=$conexion->prepare($sql);
foreach($_POST as $usua){
    $sentencia->bind_param("s", $usua);
    $sentencia->execute();
}*/
header("Location: dato.php");//Me redirecciona al index
?>