<?php 
	// ***********************************
session_start();

$usuario = $_SESSION['nombre'];

$tx = $_POST["texto"];
//$tx = "datos.txt";
// esta parte es para poder obtener el contenido del txt que queremos leer
$mostrar = file_get_contents("notas/$usuario/$tx.doc"); 
//Para mostrarlo en pantalla con ayuda de ajax.
echo nl2br($mostrar);
 ?>