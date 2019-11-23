
 <?php
require '../Modelo/lib/BD_conexion.php';
  $capitaln = filter_input(INPUT_GET, 'capitaln');  
    if($capitaln){
  $query = "SELECT id from capital WHERE capitaln='$capitaln'";
  $result2 = mysqli_query($conexion, $query);
  $row_cnt = $result2->num_rows;
  
  if ($row_cnt>0) { 
      while ($row = mysqli_fetch_array($result2)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
//          echo "<td>" . $row['capitaln'] . "</td>";
          echo "</tr>";
     }
    echo "<p>Registro encontrado.$capitaln.id</p>";
  } else {
    echo "<p>Registro NOOO encontrado</p>"; 
  }
}
else{
   echo "<p>Introduce una capital</p>"; 
}
  ?>

