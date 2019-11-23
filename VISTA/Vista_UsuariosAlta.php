<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="../VISTA/ESTILOS/styles.css" />
</head>
<body>
  <div class="formulario">Formulario alta Usuarios </div>
  <!--	<form action="formu_Movil_submit" method="get" accept-charset="utf-8">-->
  <!--<form action="?php echo $action;?>" method="post" enctype="multipart/form-data">-->
  <form action="../Modelo/BD_altaUsuarios.php" method="post" enctype="multipart/form-data">  
  <fieldset>
      <legend class="h2">Datos requeridos</legend>
      <label></label>
      <input type="text" name="nombreUsuario" placeholder="nombre " required="" />
       <!-- <input type="text" name="perfil" placeholder="perfil " required="" />-->
     <?php require '../Modelo/BD_OptionPaiese.php';  
                
              // for ($i = 0; $i < $result; $i++) {
              //      
            //  echo '<option value="'. $valor["capitaln"] .'">'.$valor["capitaln"].'</option>';               
          

echo "!Gracias¡  Hemos recibido correctamente sus datos.\n";?>   
     
      <input class="enviar" type="submit" text="Enviar" />

  <!-- //action=" ?php echo $action;?>">-->
    </fieldset>
  </form>   
</body>
</html>