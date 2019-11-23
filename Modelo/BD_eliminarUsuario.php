  <?php
    require '../Modelo/lib/BD_conexion.php';
    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($conexion, $sql);
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr>";
         echo "<th>Id</th>";
        echo "<th>nombreUsuario</th>";
         echo "<th>Pais</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
           echo "<td>" . $row['idUsu'] . "</td>";
          echo "<td>" . $row['nombreUsuario'] . "</td>";
            echo "<td>" . $row['idPais'] . "</td>";
          echo "</tr>";
        }

        echo "</table>";
        // Free result set
        mysqli_free_result($result);
      } else {
        echo "No encontrado.";
      }
    } else {
      echo "ERROR:  $sql. " . mysqli_error($conexion);
    }
    ?>
      
    <?php     //delete     //Creamos la sentencia SQL y la ejecutamos
    $idUsu = filter_input(INPUT_GET, 'idUsu');
    //$capitaln = $_GET['capitaln']; 
    $nombreUsuario= filter_input(INPUT_GET, 'nombreUsuario');
        $idPais= filter_input(INPUT_GET, 'idPais');

    echo $nombreUsuario;
    echo  $idUsu;

    $query = "delete from usuario where idUsu = '$idUsu' and nombreUsuario='$nombreUsuario'";
    
    $result2 = mysqli_query($conexion, $query);

    echo "<p>El registro ha sido eliminado con exito.$idUsu</p>";


    ?>

 