<?php 
session_start();
require "conexion.php";

	$id =  $_SESSION['id'];   
	$nombre = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$confirmacion = $_POST['confirmacion'];
	$indicio = $_POST['indicio'];
	$rol = $_POST['rol'];
		
		  
      $modificar = "UPDATE usuarios SET nombre='$nombre', contrasena='$contrasena',confirmacion='$confirmacion', indicio='$indicio' WHERE id =$id";
        
 		mysqli_query($conexion,$modificar);

 		mysqli_close($conexion);

 ?>

