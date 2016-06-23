<?php 
/**
 *	conexion.php
 *	modify the conexion host, username, pass and database  
 */


final class CONEXION{
	/*	Host Variables */

	private static $host = "localhost";
	private static $username = "root";
	private static $pass = "";
	private static $database = "sc_db";

	/**
	 *
	 *	Start the code - Dont Modify
	 *
	 */

	public static function CONNECT(){
		//get the backtrace
		$back = debug_backtrace();
		$conexion;
		if(dirname($back[0]["file"]) == DIR_CORE || 
			dirname($back[0]["file"]) == DIR_CORE."\addons"){
			//only creates the connection if it is called from the "core" folder;
			//this prevents the "theme" directly access the connection;
			$conexion = new mysqli(
				CONEXION::$host,
				CONEXION::$username,
				CONEXION::$pass,
				CONEXION::$database);
			if($conexion->connect_error){
				die ("Problemas al conectar :" . 
					$conexion->connect_error);
			}
		}else{
			die ("Warning : The file " . $back[0]["file"] . " attempted to access the connection without permission.");
		}
		return $conexion;
	}

}

 ?>