<?php
    require '../Modelo/lib/BD_conexion.php';
  $query= "SELECT * FROM capital";
           $result = mysqli_query($conexion, $query);
           if(isset($_POST['cogerNombre'])){              
           $cogerNombre=($_POST['cogerNombre']);
           echo"Tu pais es  $cogerNombre";
           }    
           /*if(isset($_POST["perfil"])){              
           $perfil=($_POST['perfil']);
            if($_POST["perfil"]== 1){           
        $estructura="../VISTA/Images/". $_POST["cogerNombre"]."/";
    if(!mkdir($estructura,0777,true)){
        die("Fallo de crear cuarpeta");
      }}*/     
           
            // coge de la table capital
            $query = "SELECT * FROM capital";// hago la query
            $result = mysqli_query($conexion, $query);// meto en la variable result la conecion y la query
            echo "<select name='cogerNombre'>";
            while ($row = mysqli_fetch_array($result)) {//
                echo "<option value='" . $row["capitaln"] . "'>" . $row["capitaln"] . "</option>";
         
                }
            echo "</select>";
            ?> 
       
   <?php
        
     

