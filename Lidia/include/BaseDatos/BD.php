<?php 

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv=""; 
	const bd="ggg";

	public static function conect(){
		$dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		$dwes->set_charset("utf8");
		return $dwes;
	}

	// public static function festivos(){
		
	// }

}
 ?>