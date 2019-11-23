

<?php
require '../Modelo/lib/BD_conexion.php';
		
	$Id= $_POST['Id'];
      	

        
       $consulta="DELETE FROM fotos WHERE Id=$Id";
      
    $resultados=mysqli_query($conexion,$consulta); 
  
   
  mysqli_close($conexion);


header("location:eliminarPais.php",TRUE,301);
?>
