<?php 

	require "conexion.php";

	$id =  $_POST['id'];   
	$texto = $_POST['texto'];
	$columna = $_POST['columna'];

		
		  
      $modificar = "UPDATE usuarios SET $columna = '$texto' WHERE id = $id";
        
 		mysqli_query($conexion,$modificar);

 		mysqli_close($conexion);

 ?>
