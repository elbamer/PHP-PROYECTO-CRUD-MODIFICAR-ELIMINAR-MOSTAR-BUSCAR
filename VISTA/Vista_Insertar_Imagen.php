
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../CONTROL/CONTROL_insertarImagen.php" method="post" enctype="multipart/form-data"><!-- Archivo vamos a pasar una imgen archivo debe ser POST--> 
       <!-- metodo POST-->
        <table BORDER="2">
        <label>Imagen </label></td>
        <tr>
            <td>
                
            <td><input type="text" name="titulo" size="50" required="">Indica un tiutlo</input> </td>  </tr>
            <td><input type="file" id="imagen"  name="imagen"  size="20"></input> </td>  </tr>
        <tr> <td colspan="2" style="text-align: center">         
        
        <input type="submit" value="Enviar Imagen" > </td></tr></table>

 
  

     
        </form>
        
  
         <input type='submit' value='volver'onclick="location='../VISTA/VISTAmenu.php'" >
      <?php  
    include '../Modelo/BD_insertar_Imagen.php'; ?>
    </body>
</html>

