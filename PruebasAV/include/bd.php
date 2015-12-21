<?php

//////////////////////////////////////////////////////////////
//////////// Esta es la clase baseDeDatos ////////////////////
//////////////////////////////////////////////////////////////
//////////// aqui se encuentran todos los metodos  ///////////
//////////// que hacen referencia a la base de datos /////////
/////////////se aconseja que si no sabes no toques ///////////
//////////////////////////////////////////////////////////////

require_once "classes.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="f437f93010bb5762af6c6bcf4ae28442"; 
	const bd="vacaciones";

	public static function conect(){
		$dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		$dwes->set_charset("utf8");
		return $dwes;
	}

	public static function registro($sesion, $usuario, $ctv, $dni){

		$dwes = BD::conect();

		$tabla=BD::sesiones($sesion);

		$cons="INSERT INTO usuarios (usuario, ctv, tabla, dni) VALUES ('$usuario', '$ctv', '$tabla', '$dni');";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return "false";
		}else{
			$dwes->close();
			return "true";
		}
	}


	public static function nuevoEmpleado($sesion, $dni, $nombre, $apellido1, $apellido2, $localidad, $movil, $saldo, $comentarios, $tabla, $usuario){
		
		$dwes = BD::conect();
		$verifica="false";

		
		$a="SELECT * FROM $tabla";

		$res = $dwes->query($a);

		$n = $res->num_rows;


		if($tabla=="empleoficina"){
			$codigo="eo".($n+1);

		}else if($tabla=="emplealmacen"){
			$codigo="ea".($n+1);

		}

		$cons="INSERT INTO $tabla (codigo, dni, nombre, apellido1, apellido2,  localidad, movil, comentarios, saldo, usuario) VALUES ('$codigo','$dni','$nombre', '$apellido1', '$apellido2',  '$localidad', '$movil',  '$comentarios', '$saldo', '$usuario')";
		//echo $cons;

		$resultado = $dwes->query($cons);

		if(!$resultado){
			$dwes->close();
			return $verifica;
		}else{
			$dwes->close();
			$verifica="true";
			return $verifica;
		}
	}

	public static function dias($cEmpleado, $fechaI, $fechaF, $diasN, $diasL, $tipo, $comentario, $sesion){

		$dwes=BD::conect();

		$dwes->autocommit(false);

		//echo $_SESSION["usuario"];

		$tabla=BD::sesiones($_SESSION["usuario"]);

		//echo $tabla."-".$cEmpleado;
		$empleado=BD::DameEmpleado($_SESSION["usuario"], $cEmpleado);

		foreach ($empleado as $emple) {
			$nombre=$emple->nombre;
			$apellido1=$emple->apellido1;
			$apellido2=$emple->apellido2;
			$saldo=$emple->saldo;
			$coment=$emple->comentarios;
		}

		$hoy=date("Y-m-d H:i:s");
		$saldo= $saldo-$diasL;
		$coment=$coment."**--**".$hoy.": Vacaciones->".$comentario;

		if(empty($tipo)){
			return "true";
		}else{
			if($tipo=="vacaciones"){
				$saldo= $saldo-$diasL;
				$aux = "'Si', '-', '-', '-', '-'";
			}else if($tipo=="PerRe"){
				$aux = "'-', 'Si', '-', '-', '-'";
			}else if($tipo=="PerNoRe"){	
				$aux = "'-', '-', 'Si', '-', '-'";
			}else if($tipo=="bec"){
				$aux = "'-', '-', '-', 'Si', '-'";
			}else if($tipo=="bal"){
				$aux = "'-', '-', '-', '-', 'Si'";
			}	
		}

		$c="INSERT INTO `vacaciones`.`dias` (`cod_dias`, `cod_empleado`, `nombre`, `apellido1`, `apellido2`, `FechaInicio`, `FechaFin`, `dias_Natu`, `dias_lab`, `aumentoDias`, `SALDO_DIAS`, `vacaciones`, `PerRetri`, `PerNoRetri`, `Bec`, `Bal`, `Comentarios`, `user_login`, `hoy`) VALUES (NULL, '$cEmpleado', '$nombre', '$apellido1', '$apellido2', '$fechaI', '$fechaF', '$diasN', '$diasL', '-', '$saldo'," + $aux + $comentario + ", '$sesion', '$hoy');";
		
		$r1 = $dwes->query($c);
 
?>