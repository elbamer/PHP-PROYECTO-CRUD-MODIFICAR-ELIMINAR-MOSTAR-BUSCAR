<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../VISTA/ESTILOS/estilos.css" />
</head>
<body>
    <div class="datos">
        <h2>Base de datos actualizada</h2>
    
       </div>
<?php
    include '../Modelo/BD_mostrarUsuario.php';
    
      if ($result) {
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
    }?></body></html>