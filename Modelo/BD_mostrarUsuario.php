<?php
require '../Modelo/lib/BD_conexion.php';   

    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($conexion, $sql);
  /*  if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='2'>";
            echo "<tr>";
            echo "<th>id</th>";
            echo "<th>Usuario</th>";  
            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['idUsu'] . "</td>";
                echo "<td>" . $row['nombreUsuario'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }*/
    ?>
    