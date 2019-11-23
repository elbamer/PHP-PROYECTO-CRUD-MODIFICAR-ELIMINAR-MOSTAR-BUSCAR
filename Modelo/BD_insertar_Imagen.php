<?php 
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamano_imagen=$_FILES['imagen']['size'];
$titulo=$_REQUEST['titulo'];
echo " tamaño". $_FILES['imagen']['size'];
if($tamano_imagen<=1000000){
    if($tipo_imagen=='image/jpeg'||$tipo_imagen=="image/jpg"||$tipo_imagen=="image/png"||$tipo_imagen=="image/gif"){
//Ruta de la carpeta destino
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'../fotos';
        // dos parametro 
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
}else{
    echo "solo imagenes formato jpge,jpg,png";
    }
    }else{
    echo 'El tamaño es demasiado grande';
} require '../Modelo/lib/BD_conexion.php';
          //  $IdFoto= $_POST["IdFoto"];  
          	
$consulta="INSERT INTO FOTOS (foto,titulo)VALUES ('$nombre_imagen','$titulo')"; 
 if($resultados=mysqli_query($conexion,$consulta));    
 //$sql="update TABLA SET FOTO ='$nombre_imagen' WHERE CODIGO=01'"    

//header("location:../Control/CONT_Modificar_Fotos.php",TRUE,301);

    echo "La foto se ha subido con éxito";
?>
