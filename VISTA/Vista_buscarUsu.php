<html>
    <link rel="stylesheet" href="../VISTA/ESTILOS/estilos.css" />

<body>
    <form method="GET" action="../VISTA/Vista_buscarUsu.php">
    <strong>Usuario:</strong> 
    
    <input type="text" name="nombreUsuario" size="20"><br><br>
    <input type="submit" value="buscar" name="buscar">
  </form>
    <?php
  include '../Modelo/BD_buscarUsuario.php';?>
</body>
</html>

  