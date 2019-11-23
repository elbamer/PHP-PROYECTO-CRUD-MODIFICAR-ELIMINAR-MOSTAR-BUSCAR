<?php
require '../Modelo/lib/BD_conexion.php';
  $nombreUsuario = filter_input(INPUT_GET, 'nombreUsuario');
 
if($nombreUsuario){
  $query = "SELECT idUsu from usuario WHERE nombreUsuario='$nombreUsuario'";
  $result2 = mysqli_query($conexion, $query);
  $row_cnt = $result2->num_rows;
  
  if ($row_cnt>0) { 
      while ($row = mysqli_fetch_array($result2)) {
          echo "<tr>";
          echo "<td>" . $row['idUsu'] . "</td>";
//          echo "<td>" . $row['capitaln'] . "</td>";
          echo "</tr>";
     }
    echo "<p>Registro encontrado.$nombreUsuario</p>";
  } else {
    echo "<p>Registro NOOO encontrado</p>"; 
  }
}
else{
   echo "<p>Introduce una Usuario a buscar</p>"; 
}
  ?>

