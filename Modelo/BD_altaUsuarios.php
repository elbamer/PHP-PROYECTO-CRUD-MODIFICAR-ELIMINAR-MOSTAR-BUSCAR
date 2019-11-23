<?php
              require '../Modelo/lib/BD_conexion.php';
                  //include '../Modelo/BD_OptionPaiese.php';          
 $cogerNombre=filter_input(INPUT_POST,'cogerNombre');
$nombreUsuario = filter_input(INPUT_POST, 'nombreUsuario');// meto en la variable lo que me pasa por post
echo "$cogerNombre";
$consulta = "INSERT INTO usuario (nombreUsuario,idPais) VALUES('$nombreUsuario','$cogerNombre')";
mysqli_query($conexion, $consulta) or die("<h3>Error al insertar en la tabla </h3>");

echo "----------------" . $consulta . "--";

$sqli = "select * from usuario where nombreUsuario='$nombreUsuario'";

$result = $conexion->query($sqli);
$row = $result->fetch_assoc();

//echo "!Gracias¡  Hemos recibido correctamente sus datos.\n";

?>
    