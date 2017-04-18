<?php 
class Conexion{
	public function get_conexion(){
		$user="root";		//usuario de la base de datos
		$pass="";   //contraseña del uauario
		$host="localhost";  //nombre del host
		$db="bdingenieria";  //nombre de la base de datos
		$conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
		return $conexion;
	}
	
 }
?>
