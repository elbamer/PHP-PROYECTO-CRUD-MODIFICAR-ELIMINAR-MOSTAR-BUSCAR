
<!DOCTYPE html>
<?php


include ("../Modelo/BD_Lista_Fotos.php");
//$sql = "SELECT * FROM fotos ";
//$result = mysqli_query($conexion, $sql);
?>

<html>
<head>
<meta charset="utf-8">
<title>Visualizar tus fotos</title>


</head>
<body bgcolor="#bed7c0"><br>

<hr>
        
<div class="main">
<h1>Mostrando imagen almacenada en MySQL</h1>
  <div class="panel panel-primary">
    <div class="panel-body">
        <?php
        
        while ($data = mysqli_fetch_array($result)) {
            echo '<img src="' . $data['Ruta'] . '" width="200px" height="200px">';
        }
        ?>     
 	  </div> 
    </div>
 </div>
 <!--<input type='submit' value='volver'onclick="location='../Control/CONT_Index.php'" >-->
</body>
</html>
