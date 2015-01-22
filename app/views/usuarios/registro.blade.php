@include('includes.header')

<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>

<script type="text/javascript" src="js/validacion/validacion_usersData.js"></script>
<body>
	<div>
		<div class="row">
			<center>
			<div class="col-xs-12">
				<h2>Registro de Usuarios</h2>
			</div>
			</center>
			<br><br>
			<form class="form-horizontal" id="userdata" name="userdata" action="registrarUser" method="post" onsubmit="return validarformulario();">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Cédula:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="cedula" id="cedula" placeholder="cédula" onkeypress="return solonumeros(event);">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Nombres:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="nombres" id="nombre" placeholder="nombres" onkeypress="return sololetras(event);">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Apellidos:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="apellidos" id="apellido" placeholder="apellidos" onkeypress="return sololetras(event);">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Ciudad:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="ciudad" id="ciudad" placeholder="ciudad" onkeypress="return sololetras(event);">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Dirección:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="direccion" id="direccion" placeholder="dirección">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Teléfono:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" name="telefono" id="formGroup" placeholder="teléfono" onkeypress="return solonumeros(event);">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Celular:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" name="celular" id="formGroup" placeholder="celular" onkeypress="return solonumeros(event);">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Email:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon">@</span>
						<input class="form-control" type="email" name="correo" id="formGroup" placeholder="email">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Password:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="password" name="password" id="password" placeholder="contraseña">
					</div>
				</div>

				<br />

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
					</label>
					<div class="col-sm-4">
						<button class="btn btn-success btn-lg" type="submit" onclick="validarformulario();">
							<span class="glyphicon glyphicon-floppy-saved"></span>
							Guardar
						</button>
						<a href="usuarios" class="btn btn-danger btn-lg" type="button">
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

@include('includes.footer')