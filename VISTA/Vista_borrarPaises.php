<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="" />
</head>
<body>
  <div class="borrar">
    <h2>Indica el pais a borrar</h2>
    <form action="../VISTA/Vista_borrarPaises.php" method="GET" enctype="multipart/form-data" accept-charset="utf-8">
      <label>Paises</label>
      <!--<a href="borrar.php"> <input type="text" name="id" required="" placeholder=" campo a borrar "/></a>-->
      <input type="text" name="id" placeholder="id" />
      <input type="text" name="capitaln" placeholder="capital" />
      <input class="enviar" type="submit" text="Enviar" />
    </form>
   
    <?php
     include '../Modelo/BD_borrar.php';
   
    ?>
  </div>
</body>

</html>
<!--Para enlazar copn los datos actuales
<h1><div align="center">Registro Borrado</div></h1>
<div align="center"><a href="mostrar.php">Visualizar el contenido de la base</a></div>
-->