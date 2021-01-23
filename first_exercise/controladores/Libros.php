<?php
//LLAMAR AL MODELO
require_once("modelos/Libros.php");
//CREAR LA INSTANCIA
$libro = new Libros();
$datos = $libro->getLibros();
var_dump($datos);
?>