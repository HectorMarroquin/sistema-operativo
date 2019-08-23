<?php

session_start();
$usuario = $_SESSION['nombre'];
$buscar = $_POST['buscar'];
	
foreach (glob("notas/$usuario/$buscar*.doc") as $nombre_fichero) {
    #echo "<p>$nombre_fichero</p>";
    
    $nombre = basename($nombre_fichero,".doc");
    echo "<input type='submit' value='$nombre_fichero' id='$nombre' style='width: 224px'>";
    echo "<br>";
}	
?>
