<?php

/*

require '../Modelo/lib/BD_conexion.php';

 $consulta="SELECT FOTO FROM FOTOS WHERE IdFoto=8";
 $resultado = mysqli_fetch_array($conexion,$consulta);*/

require '../Modelo/lib/BD_conexion.php';

        
      $consulta = "SELECT * FROM FOTOS";
  
        $resultado = mysqli_query($conexion, $consulta);
        
      
 ?>