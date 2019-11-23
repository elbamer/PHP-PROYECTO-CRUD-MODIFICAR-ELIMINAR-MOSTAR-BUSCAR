<?php
require "../Modelo/lib/BD_conexion.php";
$sql = "SELECT * FROM capital";
    $result = mysqli_query($conexion, $sql);
    ?>