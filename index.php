<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="./VISTA/ESTILOS/estilos.css" />
</head>

<body>

  <h2>Acceso como Administrador</h2>
  usuario ELBA password 1234


  <form action="./Modelo/comprueba_login.php" method="POST">
    <!--// LA PAGINA DONDE SE COMPROBARA EL LOGIN nos redirije
                                                               cuando pulse el boton de enviar y el metodo que vamos a utilizar  -->
    <input type="text" name="login" placeholder="usuario" class="input-100" required>
    <input type="password" name="password" placeholder="Contraseña" class="input-48" required>
    <input type="submit" name="enviar" value="LOGIN" class="btn-enviar">
  </form>
  <p>problemas para accede pincha-><a href="./VISTA/VISTAmenu.php"> aqui</a></p>
  <?php

  ?>
</body>

</html>
