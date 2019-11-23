


<?php
      require '../Modelo/lib/BD_conexion.php';  
    $sql = "SELECT * FROM capital";
    $result = mysqli_query($conexion, $sql);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr>";
         echo "<th>id</th>";
        echo "<th>capitaln</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
           echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['capitaln'] . "</td>";
          echo "</tr>";
        }
        echo "</table>";
      
        mysqli_free_result($result);
      } else {
        echo "No encontrado.";
      }
    } else {
      echo "ERROR:  $sql. " . mysqli_error($conexion);
    }
     $id = filter_input(INPUT_GET, 'id');
   
    $capitaln = filter_input(INPUT_GET, 'capitaln');
    echo $capitaln;
    echo  $id;
    $query = "delete from capital where id = '$id' and capitaln='$capitaln'";
    $result2 = mysqli_query($conexion, $query);   
    echo "<p>El registro ha sido eliminado con exito.$id </p>";
    ?>
