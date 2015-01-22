@include('includes.header')
<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>

 <script type="text/javascript" src="js/validacion/validacion_aerolineaData.js"></script>
	<div class="container well">
		<div class="row">
			<div class="col-xs-12">
				<h3>Registre las aerolíneas:</h3>
			</div>
			<br><br>
			<form class="form-horizontal" id="aerolineaData" name="aerolineaData" action="registrarAerolinea" method="post" onsubmit="return validarformulario();">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Nombre de aerolínea:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="nombre" id="nombre" placeholder="nombre" onkeypress="return sololetras(event)" requered autofocus >
					</div>
				</div>
								
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Ruc:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="ruc" id="ruc" placeholder="RUC" onkeypress="return solonumeros(event)" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
					</label>
					<div class="col-sm-4">
						<button class="btn btn-primary btn-lg" type="submit" onclick="validarformulario();" >
							<span class="glyphicon glyphicon-floppy-saved"></span>
							Guardar
						</button>
						<a href="aerolineas" class="btn btn-danger btn-lg" type="button" >
							<span class="glyphicon glyphicon-remove-circle"></span>
							Cancelar
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>

@include('includes.footer')