<?php
//LLAMAMOS AL MODELO
require_once("modelos/Libros.php");
//CREAR LA IINSTANCIA DE LIBROS
$libro = new Libros();
$datos = $libro->getLibros();
var_dump($datos);
?>
