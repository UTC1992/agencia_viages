@include('includes.header')

<div>
        <ul class="breadcrumb">
            <li>
                <a class="btn btn-primary btn-ln" href="#">Inicio</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="aviones">Aviones</a>
            </li>
            <li><a class="btn btn-primary btn-ln" href="registroAvion">
                            <i class="glyphicon glyphicon-plus"></i><span>Registrar</span></a>
            </li>
            
        </ul>
    </div>
    
    <style type="text/css">
        #tel{
            margin-right: 16px;
        }
    </style>

    <div class="row">
    <div class="box col-md-12">

<!--mensaje de confirmacion de eliminacion de usuario-->
    <?php $status=Session::get('status'); ?>
    @if($status=='ok_create')
    <div class="alert alert-success fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El cliente a sido creado correctamente
    </div>
    @endif
    @if($status=='ok_delete')
    <div class="alert alert-success fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El cliente a sido eliminado correctamente
    </div>
    @endif
    @if($status=='ok_update')
    <div class="alert alert-info fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El cliente a sido actualizado  correctamente
    </div>
    @endif
<!--end mensaje de eliminacion-->
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Clientes de la agencia</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
        </div>
    </div>
    <div class="box-content">

    @if($aviones)
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Descripción</th>
        <th>Tipo</th>
        <th>Placa</th>
        <th>Fecha de creación</th>
        <th>Operaciones</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <!-- $partisipantes es una variable enviada desde del controlador con with-->
        
        <!--asignamos a un bucle de array $partisipantes a partisipant-->
        @foreach($aviones as $avion)
        <td class="center">{{$avion->id}}</td>
        <td class="center">{{$avion->descripcion}}</td>
        <td class="center">{{$avion->tipo}}</td>
        <td class="center">{{$avion->placa}}</td>
        <td class="center">{{$avion->created_at}}</td>
        <!--<td class="center">
            <span class="label-success label label-default">Active</span>
        </td>
        -->
        <td class="center">
            <button class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                {{HTML::link('#Edit','Editar',array('class'=>'edit','id'=>$avion->id,'data-toggle'=>'modal','title'=>$avion->placa))}}
            </button>
            <a class="btn btn-danger" href="<?=URL::to('eliminarAvion'); ?>/{{$avion->id}}">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    @endforeach
    @else
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>No existen registros por el momento
    </div>
    @endif
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

<div>
<!-- Inicio Modal para actualizar o editar datos -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-pencil"></i>Editar datos del Cliente 
        </h4>
      </div>
      <div class="modal-body">
            
    <!--formulario inicio-->
        
        <div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3>Registre los aviones:</h3>
			</div>
			<br><br>
			<form class="form-horizontal" id="avionData" name="avionData" action="actualizarAvion" method="post" onsubmit="return validarformulario();">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Descripción:
					</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="descripcion_edit" id="descripcion" placeholder="Descripción del avion"  requered autofocus >
					</div>
				</div>
								
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Tipo:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="tipo_edit" id="tipo" placeholder="Tipo"  >
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="formGroup">
						Placa:
					</label>
					<div class="col-sm-2">
						<input class="form-control" type="text" name="placa_edit" id="placa" placeholder="Placa del avión"  >
					</div>
				</div>


		</div>
	</div>


    <!--formulario fin-->
      </div>
      <div class="modal-footer">
        <h4 class="loadingDatos"><span id="load"> 
        <img class='cargandoEditar' src="{{ asset('img/loading-icons/loading3.gif')}}"> Cargando...</span></h4>
        <button class="btn btn-primary btn-ln" type="submit">
                <span class="glyphicon glyphicon-floppy-saved"></span>
                            Guardar
        </button>
        <a href="#"><button type="button" class="btn btn-default btn-ln" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove-circle"></span>
                            Cancelar
        </button>
        </a>

      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<!--se optiene el ide en este input-->
<input id="val" type="hidden" name="avion" class="input-block-level" value="" >
<!--script para obtener datos y presentarlos en un modal-->

<script>
$(document).ready(function() {
  
  $('.edit').click(function() {
  
    $('[name=avion]').val($(this).attr ('id'));
    
    var faction = "<?php echo URL::to('avion/getavion/data'); ?>";
    
    var fdata = $('#val').serialize();
     $('#load').show();
    $.post(faction, fdata, function(json) {
        if (json.success) {
            $('#avionData input[name="avion_id"]').val(json.id);
            $('#avionData input[name="descripcion_edit"]').val(json.descripcion);
            $('#avionData input[name="tipo_edit"]').val(json.tipo);
            $('#avionData input[name="placa_edit"]').val(json.placa);

            $('#load').hide();
            
        } else {
            $('#errorMessage').html(json.message);
            $('#errorMessage').show();
        }
    });
    
  });
 
});
</script>


@include('includes.footer')