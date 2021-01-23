<?php
class db{
	public static function conexion(){
		$conn = new mysqli("localhost","root","root","mvc") or die("Error al Abrir la BD");
		$conn->query("SET NAMES 'utf8'");
		return $conn;
	}
}

?>