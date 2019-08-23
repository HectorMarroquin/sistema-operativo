<?php

session_start();

$ruta = $_SESSION['nombre'];

$nombre = $_POST['nombre'];
$tx = $_POST["texto"];

$ar=fopen("notas/$ruta/$nombre.doc","w") or
die("Problemas en la creacion");
fputs($ar,$tx);
fclose($ar);
echo "Los datos se cargaron correctamente.";

?>