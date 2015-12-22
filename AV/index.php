<?php
session_start();
require_once "include/bd.php";
// require_once "include/classes.php";

if ($_SESSION['usuario']=="") {
    header("Location: vistas/VistaLogin.php");

}else if(isset($_POST["login"])){
	$ctv = md5($_POST["ctv"]);
    $veri = BD::verifica($_POST["nombre"], $ctv);

    if($veri == "true"){
        $_SESSION["usuario"]=$_POST["nombre"];
        header("Location: vistas/VistaPrincipal.php");

    }else{
        header("Location: vistas/VistaLogin.php");
    }
	
}else{
	header("Location: vistas/VistaTerminadoE.php");
}
?>