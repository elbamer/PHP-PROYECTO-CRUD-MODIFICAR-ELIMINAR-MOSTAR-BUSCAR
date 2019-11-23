<?php
//$link = mysqli_connect("localhost", "elba", "liayan686") or die('No se puede conectar:' . mysqli_error());
//$db = mysqli_select_db($link, "usuarios1") or die('No se pudo seleccionar la base de datos');
require '../Modelo/lib/BD_conexion.php';
// $capitaln=$_POST['capitaln'];
// $nombreUsuario = $_POST['capitaln'];
$capitaln = filter_input(INPUT_POST, 'capitaln');

$consulta = "INSERT INTO capital (capitaln) VALUES('$capitaln')";
echo "----------------" . $consulta . "--";

mysqli_query($conexion, $consulta) or die("<h3>Error al insertar en la tabla </h3>");
$sqli = "select * from capital where capitaln='$capitaln'";
$result = $conexion->query($sqli);
$row = $result->fetch_assoc();

echo "!Gracias¡  Hemos recibido correctamente sus datos.\n";

?>

