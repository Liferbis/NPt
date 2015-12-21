<?php 
	
	$l= $_SESSION['username'];

    if( $l=="j.martinez" || $l=="f.novoa" || $l== "c.garcia" || $l=="e.garcia" || $l=="l.fernandez"){
		include_once "header.php";
		?>
<div class="text-center">
	<form action="index.php" method="POST" role="form">
		<div class="row ">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Selecciona el empleado</h3>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<select  name="empleado" id="input" class="form-control" >
					<option  value=" "> -- Seleciona un empleado -- </option>
					<?php 
						foreach ($empleados as $emple) { ?>
						<option  value="<?php echo $emple->codigo; ?>">
							<?php echo $emple->nombre." ".$emple->apellido1." ".$emple->apellido2; ?>
						</option>
						<?php 
					}
					?>		
				</select>
			</div>
		</div>
<?php 
	}else{
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vacaciones</title>
		<link href="include/estilo.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<!-- <link href="estil.css" rel="stylesheet"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class='text-center'>Genera su solicitud de vacaciones</h1><br>
		<div class="text-center">
		<form action="index.php" method="POST" role="form">

			<div class="row ">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Empleado</h3>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3> 
						<?php 
							foreach ($empleados as $emple) { 
						?>
					 	<input type="hidden" name="empleado"value="<?php echo $emple->codigo; ?>">
						<?php 
								echo $emple->nombre." ".$emple->apellido1." ".$emple->apellido2; 
							}
						?>		
					</h3>
				</div>
			</div>
<?php 

	}
?>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Fecha Inicio</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<input type="date" name="fechaI" class="form-control" placeholder="dd/mm/aaaa">
			<p>
				Medio Dia
				<input type="checkbox" name="medio1" value="0.5">
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Fecha Fin</h3>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<input type="date" name="fechaF" class="form-control" placeholder="dd/mm/aaaa">
			<p>
				Medio Dia
				<input type="checkbox" name="medio2" value="0.5">
			</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Tipo:</h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<select name="tipe" id="input" class="form-control" >
				<option>-- Selecciona Tipo --</option>
				<option value="vacaciones">Vacaciones</option>
				<option value="PerRe">Permiso Retribuido</option>
				<option value="PerNoRe">Permiso no retribuido</option>
			</select>
		</div>
	</div> 
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h3>Comentario: </h3>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<textarea class="form-control" name="comentario" rows="3">
			</textarea><br>
		</div>
	</div> 
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<input type="submit" name="word" value="GENERAR SOLICITUD" class="btn btn-success"/>
		<input type="submit" name="canc" value="Cancelar" class="btn btn-danger"/>
	</div>
</form>					
</div>
<?php 
require_once "pie.php";
?>