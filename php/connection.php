<?php

class Conexion{

	//Conexion a la base de datos con PDO
	
	public static function conectar()
	{
		try {
			$conexion = new PDO("mysql:host=localhost; dbname=dbvet","root","");
			//echo "conectado";
			return $conexion;

		} catch (PDOException $ex) {
			die($ex->getMessage());
		}
	}
}
//Conexion::conectar();
