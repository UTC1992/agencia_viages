@include('includes.header')

    <div>
        <ul class="breadcrumb">
            <li>
                <a class="btn btn-primary btn-ln" href="#">Inicio</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="#">Clientes</a>
            </li>
            <!--
            <li><a class="btn btn-primary btn-ln" href="registro">
                            <i class="glyphicon glyphicon-plus"></i><span>Registrar</span></a>
            </li>
            -->
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

    @if($clientes)
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Cédula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Ciudad</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Fecha Registro</th>
        <th>Operaciones</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <!-- $partisipantes es una variable enviada desde del controlador con with-->
        
        <!--asignamos a un bucle de array $partisipantes a partisipant-->
        @foreach($clientes as $cliente)
        <td class="center">{{$cliente->id}}</td>
        <td class="center">{{$cliente->cedula}}</td>
        <td class="center">{{$cliente->nombres}}</td>
        <td class="center">{{$cliente->apellidos}}</td>
        <td class="center">{{$cliente->ciudad}}</td>
        <td class="center">{{$cliente->direccion}}</td>
        <td class="center">{{$cliente->telefono}}</td>
        <td class="center">{{$cliente->celular}}</td>
        <td class="center">{{$cliente->correo}}</td>
        <td class="center">{{$cliente->created_at}}</td>
        <!--<td class="center">
            <span class="label-success label label-default">Active</span>
        </td>
        -->
        <td class="center">
            <button class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                {{HTML::link('#Edit','Editar',array('class'=>'edit','id'=>$cliente->id,'data-toggle'=>'modal','title'=>$cliente->nombres))}}
            </button>
            <a class="btn btn-danger" href="<?=URL::to('eliminarCliente');?>/{{$cliente->id}}">
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
            <br><br>
            <form class="form-horizontal" id="clienteData" name="clienteData" action="actualizarCliente" method="post" >

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="formGroup">
                                Cédula:
                            </label>
                            <div class="col-sm-2">
                                <input class="form-control" type="text" name="cedula_edit" id="cedula" placeholder="Tu cédula"  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="formGroup">
                                Nombres:
                            </label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="nombres_edit" id="nombres" placeholder="Tus nombres" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="formGroup">
                                Apellidos:
                            </label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="apellidos_edit" id="apellidos" placeholder="Tus apellidos" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="formGroup">
                                Ciudad:
                            </label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="ciudad_edit" id="ciudad" placeholder="Tu ciudad" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="formGroup">
                                Dirección:
                            </label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="direccion_edit" id="direccion" placeholder="Tu dirección" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="formGroup" id="tel">
                                Teléfono:
                            </label>
                            <div class="input-group col-sm-2">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                <input class="form-control" type="text" name="telefono_edit" id="telefono" placeholder="Tu teléfono" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="formGroup" id="tel">
                                Celular:
                            </label>
                            <div class="input-group col-sm-2">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                <input class="form-control" type="text" name="celular_edit" id="celular" placeholder="Tu celular" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="formGroup" id="tel">
                                Email:
                            </label>
                            <div class="input-group col-sm-2">
                                <span class="input-group-addon">@</span>
                                <input class="form-control" type="text" name="correo_edit" id="correo" placeholder="Tu email">
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
<input id="val" type="hidden" name="cliente" class="input-block-level" value="" >
<!--script para obtener datos y presentarlos en un modal-->
<script>
$(document).ready(function() {
  
  $('.edit').click(function() {
  
    $('[name=cliente]').val($(this).attr ('id'));
    
    var faction = "<?php echo URL::to('cliente/getcliente/data'); ?>";
    
    var fdata = $('#val').serialize();
     $('#load').show();
    $.post(faction, fdata, function(json) {
        if (json.success) {
            $('#clienteData input[name="cliente_id"]').val(json.id);
            $('#clienteData input[name="cedula_edit"]').val(json.cedula);
            $('#clienteData input[name="nombres_edit"]').val(json.nombre);
            $('#clienteData input[name="apellidos_edit"]').val(json.apellido);
            $('#clienteData input[name="ciudad_edit"]').val(json.ciudad);
            $('#clienteData input[name="direccion_edit"]').val(json.direccion);
            $('#clienteData input[name="telefono_edit"]').val(json.telefono);
            $('#clienteData input[name="celular_edit"]').val(json.celular);
            $('#clienteData input[name="correo_edit"]').val(json.correo);

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
