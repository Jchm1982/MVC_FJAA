<?php
//LLAMAMOS AL MODELO
require_once("modelos/Libros.php");
//CREAR LA IINSTANCIA DE LIBROS
$libro = new Libros();
$datos = $libro->getLibros();
//Llamamos a la Vista
require_once("vistas/Libros.php");
?>
