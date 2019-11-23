<html>
    <head>
        <title>title</title>
    </head>
    <body>        
        <!-- antes que se muestr cualquier informacion, web ,etc** ponemos una especie de filtro para que solo vean este contenido los 
        usuarios logados-->
        <?php        
        session_start();
        if(!isset($_SESSION["usuario"])){// si no hay nada , redirigimos a login 
            header("location:index.php");            
        }
                ?>
        <p>Bienvenido usuarios registrados</p>
        <?php
        echo "hola  ". $_SESSION["usuario"] . "<br>";
        ?>        
    </body>
</html>

C