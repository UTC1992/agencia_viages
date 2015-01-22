@include('includes.header')
	<style type="text/css">
		#tel{
			margin-right: 16px;
		}
	</style>

 <script type="text/javascript" src="js/validacion/validacion_vuelosData.js"></script>
	<div class="container">
		<div class="row">
			<center>
			<div class="col-xs-12">
				<h2>Registrar Vuelo</h2>
			</div>
			</center>
			<br><br>
			<form class="form-horizontal" id="vueloData" name="vueloData" action="registrarVuelo" method="post" onsubmit="return validarformulario();">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Número:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="numero" id="numero" placeholder="Número de vuelo" onkeypress="return solonumeros(event);" requered autofocus >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Fecha:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="fecha" id="fecha" placeholder="año-mes-dia" >
						
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Hora de Salida:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="hora_salida" id="hora_salida" placeholder="hora-min-seg" >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Hora de Llegada:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="hora_llegada" id="hora_llegada" placeholder="hora-min-seg" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Origen:
					</label>
					<div class="col-sm-2">
						<select class="form-control" name="origen" id="origen" onkeypress="return sololetras(event);">
							<option>Seleccione</option>
							<option>Latacunga</option>
							<option>Ambato</option>
							<option>Quito</option>
							<option>Guayaquil</option>
							<option>Cuenca</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Destino:
					</label>
					<div class="col-sm-2">
						<select class="form-control" name="destino" id="destino" onkeypress="return sololetras(event);">
							<option>Seleccione</option>
							<option>Latacunga</option>
							<option>Ambato</option>
							<option>Quito</option>
							<option>Guayaquil</option>
							<option>Cuenca</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Puerta de embarque:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="puerta_embarque" id="puerta_embarque" placeholder="Embarque" >
					</div>
				</div>
		
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Aerolínea:
					</label>
					<?php 
						$aerolineas=DB::table('aerolineas')->get();		
					 ?>
					<div class="col-sm-2">
							@if($aerolineas)
						<select class="form-control" name="aerolinea_id" id='aerolinea_id'>
							<option>Seleccione</option>
							@foreach($aerolineas as $aerolinea)
							<option>{{$aerolinea->nombre}}</option>
							@endforeach
							@else
						<select class="form-control" disabled>
							<option>No datos</option>
							@endif
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Avión:
					</label>
					<?php 
						$aviones=DB::table('aviones')->get();		
					 ?>
					<div class="col-sm-2">
							@if($aviones)
						<select class="form-control" name="avion_id" id="avion_id" >
							<option>Seleccione</option>
							@foreach($aviones as $avion)
							<option>{{$avion->descripcion}}</option>
							@endforeach
							@else
						<select class="form-control" disabled>
							<option>No datos</option>
							@endif
						</select>
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
							<a href="vuelos" class="btn btn-danger btn-lg" type="button" >
								<span class="glyphicon glyphicon-remove-circle"></span>
								Cancelar
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>

	

@include('includes.footer')