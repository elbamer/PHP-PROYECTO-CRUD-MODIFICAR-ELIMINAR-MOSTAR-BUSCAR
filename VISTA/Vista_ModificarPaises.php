<html>
<head>
  <title>title</title>
  <link rel="stylesheet" href="./ESTILOS/estilos.css" />
</head>
<body>
  <div id="containerUpdate">
    <h2>paises </h2>     
   <!--  <form method="POST" <?"$action=">>-->
             <!--<form action="../VISTA/Vista_ModificarPaises.php" method="GET" enctype="multipart/form-data" accept-charset="utf-8">-->

             <form action="../Modelo/BD_modificarPaises.php" method="GET" enctype="multipart/form-data" accept-charset="utf-8">
         <?php    require '../Modelo/lib/BD_conexion.php'; 
      include '../Modelo/BD_modificarPaises.php';   
      $consulta = "SELECT * FROM capital";
      $result = mysqli_query($conexion, $consulta); 
     
          if ($result) {
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='3'>";
          echo "<tr>";
                  echo "<th>capital</th>";
          echo "<th>id</th>";
          echo "</tr>";
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td hidden>".'<input name="idalu[]" value="'.$row['id'].'"/>'."</td>";            
            echo "<td>" . '<input name="arrayId[' . $row['id'] . ']" value="' . $row['id'] . '"/>' . "</td>";
            echo "<td>" . '<input name="arrayNombre[' . $row['id'] . ']"  value="' . $row['capitaln'] . '"/>' . "</td>";
                        echo "</tr>";
          }
        }
      }
      echo "</table>";
     echo' <input type="submit" name="actualizar" value="actualizar" />'
         ?>
       
       
        <?php   
       
        $consulta = "SELECT * FROM capital";
      $result = mysqli_query($conexion, $consulta); 
   
     $actualizar = filter_input(INPUT_POST, 'actualizar');
    if (isset($actualizar)) {         
        foreach ($_POST['idalu'] as $ids) {
        $editId=mysqli_real_escape_string($conexion, $_POST['arrayId'][$ids]);

        $editNom = mysqli_real_escape_string($conexion, $_POST['arrayNombre'][$ids]); 
         
    }}
  
    ?>
       