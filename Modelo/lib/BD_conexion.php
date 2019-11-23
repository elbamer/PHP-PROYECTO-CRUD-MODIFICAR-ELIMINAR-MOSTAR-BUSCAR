<?php

require "conexion.php"; 
$conexion = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD)
         or die ("No se puede conectar con el servidor");

   // Seleccionar base de datos
      $conexion->select_db(DB_NOMBRE)
         or die ("No se puede seleccionar la base de datos");
