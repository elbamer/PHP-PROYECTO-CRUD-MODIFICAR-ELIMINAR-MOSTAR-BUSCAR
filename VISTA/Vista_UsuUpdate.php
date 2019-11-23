<html>
<head>
  <title>title</title>
  <link rel="stylesheet" href="../VISTA/ESTILOS/estilos.css" />
</head>
<body>
    
  <div id="containerUpdate">
    <h2> sssss</h2>
    <form method="POST" action="../Modelo/BD_UsuUpdate.php">
  <!-- <form method="POST" $action="?php echo $action;?>"> -->   
  
<!--  <form method="POST" <?$action=">">-->

      <?php
    require '../Modelo/lib/BD_conexion.php'; 
      $sql = "SELECT * FROM usuario";
      $result = mysqli_query($conexion, $sql);
      if ($result) {
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='3'>";
          echo "<tr>";
                    echo "<th>nombreUsuario</th>";
          echo "<th>id</th>";
          echo "</tr>";
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td hidden>".'<input name="idalu[]" value="'.$row['idUsu'].'"/>'."</td>";
          
            echo "<td>" . '<input name="arrayId[' . $row['idUsu'] . ']" value="' . $row['idUsu'] . '"/>' . "</td>";
            echo "<td>" . '<input name="arrayNombre[' . $row['idUsu'] . ']"  value="' . $row['nombreUsuario'] . '"/>' . "</td>";
            
          }
        }
      }
      echo "</table>";       
   ?>
        <input type="submit" name="actualizar" value="ACTUALIZAR"></>
    
    </form>
    
  </div>
</body>

</html>