<html>
    <link rel="stylesheet" href="../VISTA/ESTILOS/estilos.css" />
<body>
     
    <form method="GET" action="../VISTA/Vista_buscarPaises.php">
    <strong>ciudad:</strong>     
    <input type="text" name="capitaln" size="20"><br><br>
    <input type="submit" value="buscar" name="buscar">
  </form> 
 <?php include '../Modelo/BD_buscarPaises.php';?>
</body>
</html>
 