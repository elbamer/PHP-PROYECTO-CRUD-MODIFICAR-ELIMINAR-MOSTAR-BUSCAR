
<html>
    <head>
        <title>title</title>
       <link rel="stylesheet" href="../VISTA/ESTILOS/estilos.css" />
  
    </head>
    <body>        
        <?php
          require '../Modelo/BD_mostrar_Foto.php'; 
      //  $sql= mysqli_query("SELECT * FROM FOTOS ");
          while ($fila=mysqli_fetch_array($resultado)) {
              echo $fila['titulo']."<br>";
          
		echo' <img src=".$fila["/fotos/imagen"]>';
		//echo '$carpeta_destino = $fila["imagen"]'; 
	}
?>		

    
   
    </div>
</body>
</html>





 