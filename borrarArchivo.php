<?php

session_start();

$user = $_SESSION['nombre'];
$narch = $_POST['eliminararchivo'];

unlink("notas/$user/$narch.doc");

?>