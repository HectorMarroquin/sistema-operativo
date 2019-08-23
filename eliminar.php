<?php
require "conexion.php";


$id = $_POST['id'];


$sql = "DELETE FROM usuarios WHERE id = '$id'";

		mysqli_query($conexion,$sql);
 		mysqli_close($conexion);
?>

