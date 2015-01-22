@include('includes.header_cliente')
	
	
	<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>

 <script type="text/javascript" src="js/validacion/validacion_clienteData.js"></script>

	<div class="container well">
		<div class="row">
			<div class="col-xs-12">
				<h3>Registrece por favor:</h3>
			</div>
			<br><br>
			<form class="form-horizontal" id="clienteData" name="clienteData" action="registrarCliente" method="post" onsubmit="return validarformulario();">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Cédula:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="cedula" id="cedula" placeholder="Tu cédula" onkeypress="return solonumeros(event)" requered autofocus >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Nombres:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="nombres" id="nombre" placeholder="Tus nombres" onkeypress="return sololetras(event)">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Apellidos:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="apellidos" id="apellido" placeholder="Tus apellidos" onkeypress="return sololetras(event)">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Ciudad:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="ciudad" id="ciudad" placeholder="Tu ciudad" onkeypress="return sololetras(event)">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Dirección:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="direccion" id="direccion" placeholder="Tu dirección" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Teléfono:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" name="telefono" id="telefono" placeholder="Tu teléfono" onkeypress="return solonumeros(event)">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Celular:
					</label>
					<div class="input-group col-sm-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
						<input class="form-control" type="text" name="celular" id="celular" placeholder="Tu celular" onkeypress="return solonumeros(event)">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup" id="tel">
						Email:
					</label>
					<div class="input-group col-sm-3">
						<span class="input-group-addon">@</span>
						<input class="form-control" type="text" name="correo" id="correo" placeholder="Tu email">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Password:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="password" name="password" id="nombre" placeholder="Una contraseña">
					</div>
				</div>

				<br />

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
					</label>
					<div class="col-sm-4">
						<button class="btn btn-primary btn-lg" type="submit" onclick="validarformulario();">
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

	

@include('includes.footer')