@include('includes.header')

<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>

 <script type="text/javascript" src="js/validacion/validacion_avionData.js"></script>
	<div class="container well">
		<div class="row">
			<div class="col-xs-12">
				<h3>Registre los aviones:</h3>
			</div>
			<br><br>
			<form class="form-horizontal" id="avionData" name="avionData" action="registrarAvion" method="post" onsubmit="return validarformulario();">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Descripción:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="descripcion" id="descripcion" onkeypress="return sololetras(event);" placeholder="Descripción del avion"  requered autofocus >
					</div>
				</div>
								
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Tipo:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="tipo" id="tipo" placeholder="Tipo" onkeypress="return sololetras(event);" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Placa:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="placa" id="placa" placeholder="Placa del avión"  >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
					</label>
					<div class="col-sm-4">
						<button class="btn btn-primary btn-lg" type="submit" onclick="validarformulario();">
							<span class="glyphicon glyphicon-floppy-saved"></span>
							Guardar
						</button>
						<a href="aviones" class="btn btn-danger btn-lg" type="button" >
							<span class="glyphicon glyphicon-remove-circle"></span>
							Cancelar
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>



@include('includes.footer')