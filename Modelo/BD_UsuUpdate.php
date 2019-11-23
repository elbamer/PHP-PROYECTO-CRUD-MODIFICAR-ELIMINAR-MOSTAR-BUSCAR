
    <?php   
    require '../Modelo/lib/BD_conexion.php';
    $actualizar = filter_input(INPUT_POST, 'actualizar');
    
    if (isset($actualizar)) { // && !empty($_POST['id']) && !empty($_POST['capitaln'])) {        
        foreach ($_POST['idalu'] as $ids) {              
        $editId=mysqli_real_escape_string($conexion, $_POST['arrayId'][$ids]);
        $editNom = mysqli_real_escape_string($conexion, $_POST['arrayNombre'][$ids]);  
        $actualizar = $conexion->query("UPDATE usuario SET nombreUsuario='$editNom' WHERE idUsu='$editId'");
            }        
//  header('location:mostrarUsuario.php');
      echo "funciona! Mira los datos actualizados ". " <a href='../VISTA/mostrarUsuario.php'> aqui</a>";
   
    }  
   // header("location:../CONTROL/CONTROL_UsuUpdate.php",TRUE,301);   
    ?>


  

    
   

