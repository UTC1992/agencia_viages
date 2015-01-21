<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
	<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>
</head>
<body>
	<div class="container well">
		<div class="row">
			<div class="col-xs-12">
				<h2>Registro de Usuarios</h2>
			</div>
			<br><br>
			<form class="form-horizontal" id="adminData" name="adminData" action="registrarAdmin" method="post" >

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Cédula:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="cedula" id="formGroup" placeholder="Tu cédula" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Nombres:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="nombres" id="formGroup" placeholder="Tus nombres">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Apellidos:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="apellidos" id="formGroup" placeholder="Tus apellidos">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Ciudad:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="ciudad" id="formGroup" placeholder="Tu ciudad">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Dirección:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="direccion" id="formGroup" placeholder="Tu dirección">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Teléfono:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" name="telefono" id="formGroup" placeholder="Tu teléfono">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Celular:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" name="celular" id="formGroup" placeholder="Tu celular">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Email:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon">@</span>
						<input class="form-control" type="text" name="correo" id="formGroup" placeholder="Tu email">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Password:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="password" id="formGroup" placeholder="Una contraseña">
					</div>
				</div>

				<br />

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
					</label>
					<div class="col-sm-4">
						<button class="btn btn-success btn-lg" type="submit">
							<span class="glyphicon glyphicon-floppy-saved"></span>
							Guardar
						</button>
						<a href="/" class="btn btn-danger btn-lg" type="button" >
							<span class="glyphicon glyphicon-remove-circle"></span>
							Cancelar
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	

	<script type="js/jquery-1.11.1.min.js"></script>
	<script type="js/bootstrap.js"></script>
</body>
</html>