<?php 

require "conexion.php";


		
	$usuario=$_POST['usuario'];
	$password= $_POST['password'];
	$password1= $_POST['password1'];
	$indicio= $_POST['indicio'];
	$tipo = $_POST['select'];


	$sql="INSERT into usuarios (nombre,contrasena,confirmacion,indicio,rol) values ('$usuario','$password','$password1','$indicio','$tipo')";
	echo mysqli_query($conexion,$sql);



 ?>

