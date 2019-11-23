<html>

<head>
          <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./ESTILOS/estilos.css" />
    </head>

    <body>
        <div id="containermenu">
            <tr>
                </td>
            </tr>
            <h2>Elige una opcion</h2>


            <!-- <foreach ($nombreciudad as $persona) : ?>  -->
            <td></td>
            <td></td>
            <!--  php $persona del array ->id-->
            <h2>Usuarios</h2>
            <tr>
                <td> <a href="../Control/CONTROL_eliminarUsuario.php">   <input type="button" name="eliminar" value="eliminar" class="btn-enviar"></a> </td>
                <td> <a href="../Control/CONTROL_altaUsuario.php"><input type="button" name="insertar" value="insertar" class="btn-enviar"></a> </td>
                <td><a href="../Control/CONTROL_mostrarUsuario.php"> <input type="submit" name="mostrar" value="mostrar" class="btn-enviar"></a> </td>
                <td><a href="../Control/CONTROL_buscarUsuario.php"> <input type="button" name="buscar" value="buscar" class="btn-enviar"></a> </td>
                <td> <a href="../Control/CONTROL_UsuUpdate.php"><input type="button" name="modificar" value="modificar" class="input-100" required></a> </td>
                            <tr>
                <!--  < endforeach; ?>-->
                <h2>Pais</h2>
            <tr>
                <td> <a href="../Control/CONTROL_BorrarPaises.php"> <input type="button" name="eliminar" value="eliminar" class="btn-enviar"></a> </td>
                <td><a href="../Control/CONTROL_insertarPaises.php"> <input type="button" name="insertar" value="insertar" class="btn-enviar"></a> </td>
                <td><a href="../Control/CONTROL_mostrarPaises.php"> <input type="submit" name="mostrar" value="mostrar" class="btn-enviar"> </a></td>
                <td><a href="../Control/CONTROL_buscarPaises.php"> <input type="button" name="buscar" value="buscar" class="btn-enviar"></a> </td>
                <td> <a href="../Control/CONTROL_modificarPaises.php"> <input type="submit" name="modificar" value="modificar" class="btn-enviar"></a> </td>
            </tr>
            <h2>Imagen</h2>
            <tr>
                <td> <input type="button" name="eliminar" value="eliminar" class="btn-enviar"> </td>
                <td> <a href="../Control/CONTROL_insertarImagen.php"><input type="button" name="insertar" value="insertar" class="btn-enviar"></a> </td>
                <td> <input type="submit" name="mostrar" value="mostrar" class="btn-enviar"> </td>
                <td> <input type="button" name="buscar" value="buscar" class="btn-enviar"></td>
                <td> <input type="button" name="modificar" value="modificar" class="input-100" required> </td>
                <h2>Album</h2>
            </tr>
            <tr>
                <td> <input type="button" name="eliminar" value="eliminar" class="btn-enviar"> </td>
                <td> <input type="button" name="insertar" value="insertar" class="btn-enviar"> </td>
                <td> <input type="submit" name="mostrar" value="mostrar" class="btn-enviar"> </td>
                <td> <input type="button" name="buscar" value="buscar" class="btn-enviar"> </td>
                <td> <input type="button" name="modificar" value="modificar" class="input-100" required> </td>
                <div>
                </div>
            </tr>
        
    </body>

    </html>