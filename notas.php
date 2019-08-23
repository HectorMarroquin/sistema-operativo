<?php

session_start();
require 'conexion.php';
	
$id = $_SESSION['id'];
$opcion = $_POST['Tipo'];
$nombre = $_POST['NombreDeNotas'];
$texto = $_POST['textoDeNotas'];
$idNota = $_POST['idNota'];

if($opcion == "Guardar"){
	
	$consulta = mysqli_query($conexion,"INSERT INTO notas(nombre, texto, usuarios_id) VALUES ('$nombre', '$texto','$id');");

			echo "<script>window.history.go(-1);</script>";
	
}
if($opcion == "Editar"){
	
	$consulta = mysqli_query($conexion,"UPDATE notas SET  texto = '$texto' WHERE id = $idNota;");
	
	echo '<script>alert("Registro Modificado...actualizando Sistema.")</script> ';
			echo "<script>window.history.go(-1);</script>";
}
if($opcion == "Eliminar"){
	
	$consulta = mysqli_query($conexion,"DELETE from notas WHERE id = $idNota;");
	
	echo '<script>alert("Registro eliminado...actualizando Sistema.")</script> ';
			echo "<script>window.history.go(-1);</script>";
}
?>