<?php
class db{
	public static function conexion(){
		//Conectar a la BD
		$conn = new mysqli("localhost","root","root","mvc") or die("Error al abrir la Base de Datos");
		$conn->query("SET NAMES 'utf8'");
		return $conn;
	}
}
?>