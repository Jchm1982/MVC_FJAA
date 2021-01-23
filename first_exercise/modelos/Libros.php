<?php

/*
MODELO LIBROS
*/
class Libros{
	private $db;
	private $libros;

	function __construct(){
		$this->db = db::conexion();
		$this->libros = array();
	}

	public function getLibros(){
		$consulta = $this->db->query("SELECT * FROM libros");
		//CREAMOS UN ARREGLO DE ARREGLOS ASOCIADOS
		while($filas = $consulta->fetch_assoc()){
			$this->libros[] = $filas;
		}
		return $this->libros;
	}
}

?>