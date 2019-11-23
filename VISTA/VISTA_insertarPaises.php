<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="estilos.css" />
</head>

<body>
  <div class="formulario">Formulario alta paises </div>
  <!--	<form action="formu_Movil_submit" method="get" accept-charset="utf-8">-->
  <form action="../VISTA/VISTA_insertarPaises.php" method="post" enctype="multipart/form-data">
      
    <fieldset>
      <legend class="h2">Introduce el pais a dar de alta</legend>
      <label></label>
      <input class="tama-formu" type="text" name="capitaln" placeholder=" capital " />

      <input class="enviar" type="submit" text="Enviar" />
    </fieldset>
  </form><?php
  include '../Modelo/BD_insertarPaises.php';?>
</body>

</html>
