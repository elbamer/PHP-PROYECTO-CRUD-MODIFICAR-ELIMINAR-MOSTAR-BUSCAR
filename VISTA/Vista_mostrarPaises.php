<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../VISTA/ESTILOS/estilos.css" />
</head>
<body>
    <div class="datos">
        <h2>Base de datos Paises actualizada</h2>    
    <?php
   //require '../Modelo/lib/BD_conexion.php';
    //   $capitaln =$_POST['capitaln'];
  //  $sql = "SELECT * FROM capital";
   // $result = mysqli_query($conexion, $sql);
    include '../Modelo/BD_mostrarPaises.php';
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='2'>";
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
        }
    }
    ?>
    <?php
    ?>
    </div></body></html>