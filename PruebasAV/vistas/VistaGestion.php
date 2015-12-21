<?php
require_once "header.php"; 
?>

<div class="text-center">
	
	<div id='contenido' class='row responsive'>
		<table id='table' class="table table-hover">
			<thead>
				<tr>
					<h1>Introduce los datos del nuevo empleado</h1>
					<hr>
				</tr>
			</thead>
			<tbody>
				<hr>
				<form action="index.php" method="POST" role="form">
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Tipo de empleado</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<select  name="tabla" id="input" class="form-control" >
								<option value="0"> ---- Seleccione acción ---- </option>
								<option value="empleoficina">Empleado de oficina</option>
								<option value="emplealmacen">Empleado de almacen</option>
							</select>
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Nombre</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text"  name="nombre"  class="form-control" required placeholder="Nombre">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Usuario</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text"  name="usuario"  class="form-control" required placeholder="<?php echo $_SESSION["usuario"]; ?>">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>DNI</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text" required name="dni" class="form-control"  placeholder="DNI">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>1º Apellido</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text"  name="apellido1" class="form-control"  required placeholder="1º apellido">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>2º Apellido </h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text"  name="apellido2" class="form-control"  required placeholder="2º Apellido">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Localidad de trabajo</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<input type="text" name="localidad"  class="form-control" required placeholder="Localidad de trabajo">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Telefono de contacto</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

							<input type="text"  name="movil"  class="form-control" required placeholder="Telefono de contacto">

						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Saldo de dias de vacaciones</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
							<input type="text" name="vacas" class="form-control"  required placeholder="Saldo inicial de vacaciones">
						</div>
					</div>
				</tr>
				<tr>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<h3>Comentarios</h3>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
							<input type="text" name="coment"  class="form-control" placeholder="Comentarios">
						</div>
					</div>
				</tr>
				<hr>
				<div class="row">
					<button type="submit" name="altaE" class="btn btn-success">CREAR</button>
					<button type="submit" name="cancelar" class="btn btn-danger"/>Cancelar</button>
				</div>
			</form>

			<?php 
			include_once "pie.php";
			?>