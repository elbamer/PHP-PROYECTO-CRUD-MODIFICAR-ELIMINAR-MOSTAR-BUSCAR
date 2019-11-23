<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="../VISTA//ESTILOS/estilos.css" />
</head>

<body>
  <div class="borrar">
    <h2>Indica elUsuario a borrar</h2>
      <?php   include '../Modelo/BD_eliminarUsuario.php';
    ?>

    <form action="../VISTA/Vista_eliminarUsu.php" method="GET" enctype="multipart/form-data" accept-charset="utf-8">
      <label>USUARIOS</label>
      <!--<a href="borrar.php"> <input type="text" name="id" required="" placeholder=" campo a borrar "/></a>-->
      <input type="text" name="idUsu" placeholder="id" />
      <input type="text" name="nombreUsuario" placeholder="nombreUsuario" />
      <input type="text" name="idPais" placeholder="isPais" />
      </div>
    
     <input class="enviar" type="submit" text="Enviar" />
    </form>
  
</body>

</html>
<!--Para enlazar copn los datos actuales
<h1><div align="center">Registro Borrado</div></h1>
<div align="center"><a href="mostrar.php">Visualizar el contenido de la base</a></div>
-->


  