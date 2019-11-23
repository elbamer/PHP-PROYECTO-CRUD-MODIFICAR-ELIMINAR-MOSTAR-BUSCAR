<?php

	include_once('datos.php');
	conectar();
	
	//elimina archivo real
	$id= $_REQUEST[id];

$rs = mysql_query("SELECT foto FROM n1 WHERE id=$id");

	list($foto) = mysql_fetch_row($rs);
		
	unlink("imagenes/".$foto);  
	unlink("imagenes/thumbs/thumb_".$foto);  
	
	
	//reasigna imagen por defecto
	$foto = 'default.gif';
		
	// elimina registro
	mysql_query("UPDATE n1 SET foto = '$foto' WHERE id=$id");
	
		
	desconectar();
  header("Location: novedad_actualizar.php?id=$id ");
?>