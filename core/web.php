<?php

final class WEB{
	public static function GETMETA(){
		$conexion = CONEXION::CONNECT();
		$query = $conexion->query("SELECT meta_name, meta_value FROM web_meta WHERE hidden = false");

		if($query){
			$WEB;
			while ($meta = $query->fetch_assoc()) {
				$WEB[$meta["meta_name"]] = $meta["meta_value"];
			}
			$GLOBALS["_WEB"] = $WEB;
		}
		$conexion->close();
	}
}

?>