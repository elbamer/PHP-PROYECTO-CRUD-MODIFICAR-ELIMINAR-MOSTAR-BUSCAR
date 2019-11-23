    

<?php
    // && !empty($_POST['idgpo']) && !empty($_POST['idalumno'])) {        
    $actualizar = filter_input(INPUT_POST, 'actualizar');
    if (isset($actualizar)) { // && !empty($_POST['id']) && !empty($_POST['capitaln'])) {
        
        foreach ($_POST['idalu'] as $ids) {

        $conexion = mysqli_connect("localhost", "elba", "liayan686") or die('No se puede conectar:' . mysqli_error());
        $db = mysqli_select_db($conexion, "usuarios1") or die('No se pudo seleccionar la base de datos');
        // $editId= mysqli_real_escape_string($_GET,['arrayId'][$ids]);
        //$editId = addslashes('arrayId'[$ids]);
        $editId=mysqli_real_escape_string($conexion, $_POST['arrayId'][$ids]);


//        $editNom = addslashes('arrayNombre'[$ids]);
        $editNom = mysqli_real_escape_string($conexion, $_POST['arrayNombre'][$ids]);
        //$sql = "SELECT * FROM capital WHERE id='$editId' && capitaln='$editNom";

        $actualizar = $conexion->query("UPDATE capital SET capitaln='$editNom' WHERE id='$editId'");
        //echo "entra.$editNom.$editId";
//        if ($actualizar == true) {
//          echo "Se ha actualizado ";
//          // echo "entra.".$editNom.$editId; 
//          echo "funciona! <a href='mostrar1.php'> Clip aqui</a>";
//        } else {
//          echo "Vaya no funciona";
//        }   
      }
       echo "funciona! <a href='../VISTA/Vista_mostrarPaises.php'> Clip aqui</a>";
  
      header('location:mostrar1.php');
    }
    ?>
     
 

