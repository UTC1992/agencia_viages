@include('includes.header')

    <div>
        <ul class="breadcrumb">
            <li>
                <a class="btn btn-primary btn-ln" href="#">Inicio</a>
            </li>
            <li>
                <a class="btn btn-primary btn-ln" href="#">Usuarios</a>
            </li>
            <li><a class="btn btn-primary btn-ln" href="registroUsers">
                            <i class="glyphicon glyphicon-plus"></i><span>Registrar</span></a>
            </li>
        </ul>
    </div>


    <div class="row">
    <div class="box col-md-12">

<!--mensaje de confirmacion de eliminacion de usuario-->
    <?php $status=Session::get('status'); ?>
    @if($status=='ok_create')
    <div class="alert alert-success fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El usuario a sido creado correctamente
    </div>
    @endif
    @if($status=='ok_delete')
    <div class="alert alert-success fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El usuario a sido eliminado correctamente
    </div>
    @endif
    @if($status=='ok_update')
    <div class="alert alert-info fade in">
        <button class="close" data-dismiss="alert" type="button">x</button>
        <i class="fa fa-check-square"></i>El usuario a sido actualizado  correctamente
    </div>
    @endif
<!--end mensaje de eliminacion-->
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Empleados</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
        </div>
    </div>
    <div class="box-content">

    @if($users)
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
        @foreach($users as $user)
        <td class="center">{{$user->id}}</td>
        <td class="center">{{$user->cedula}}</td>
        <td class="center">{{$user->nombres}}</td>
        <td class="center">{{$user->apellidos}}</td>
        <td class="center">{{$user->ciudad}}</td>
        <td class="center">{{$user->direccion}}</td>
        <td class="center">{{$user->telefono}}</td>
        <td class="center">{{$user->celular}}</td>
        <td class="center">{{$user->correo}}</td>
        <td class="center">{{$user->created_at}}</td>
        <!--<td class="center">
            <span class="label-success label label-default">Active</span>
        </td>
        -->
        <td class="center">
            <button class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                {{HTML::link('#Edit','Editar',array('class'=>'edit','id'=>$user->id,'data-toggle'=>'modal','title'=>$user->nombres))}}
            </button>
            <a class="btn btn-danger" href="<?=URL::to('eliminarUsers');?>/{{$user->id}}">
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
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-pencil"></i>Editar datos del Participante 
        </h4>
      </div>
      <div class="modal-body">
            
            <!--formulario inicio-->
        
            <div class="row">
            <form id="formEdit"  action="actualizarUser" method="post">
        <label>Ingrese los siguientes datos:</label>
        <br>

        <table>
            <tr>
                <td><label>Cédula:</label></td>
                <td><input type="text" name="cedula_edit" value="" placeholder="Tu cédula"></td>
            </tr>
            <tr>
                <td><label>Nombre:</label></td>
                <td><input type="text" name="nombres_edit" value="" placeholder="Tu nombre"></td>
            </tr>
            <tr>
                <td><label>Apellido:</label></td>
                <td><input type="text" name="apellidos_edit" value="" placeholder="Tu Apellido"></td>
            </tr>
            <tr>
                <td><label>Ciudad:</label></td>
                <td><input type="text" name="ciudad_edit" value="" placeholder="Tu ciudad"></td>
            </tr>
            <tr>
                <td><label>Dirección:</label></td>
                <td><input type="text" name="direccion_edit" value="" placeholder="Tu Dirección"></td>
            </tr>
            <tr>
                <td><label>Teléfono:</label></td>
                <td><input type="text" name="telefono_edit" value="" placeholder="Tu teléfono"></td>
            </tr>
            <tr>
                <td><label>Celular:</label></td>
                <td><input type="text" name="celular_edit" value="" placeholder="Tu celular"></td>
            </tr>
            <tr>
                <td><label>Correo:</label></td>
                <td><input type="text" name="correo_edit" value="" placeholder="Tu correo"></td>
            </tr>
        </table>
    

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
<input id="val" type="hidden" name="user" class="input-block-level" value="" >
<!--script para obtener datos y presentarlos en un modal-->
<script>
$(document).ready(function() {
  
  $('.edit').click(function() {
  
    $('[name=user]').val($(this).attr ('id'));
    
    var faction = "<?php echo URL::to('user/getuser/data'); ?>";
    
    var fdata = $('#val').serialize();
     $('#load').show();
    $.post(faction, fdata, function(json) {
        if (json.success) {
            $('#formEdit input[name="cliente_id"]').val(json.id);
            $('#formEdit input[name="cedula_edit"]').val(json.cedula);
            $('#formEdit input[name="nombres_edit"]').val(json.nombres);
            $('#formEdit input[name="apellidos_edit"]').val(json.apellidos);
            $('#formEdit input[name="ciudad_edit"]').val(json.ciudad);
            $('#formEdit input[name="direccion_edit"]').val(json.direccion);
            $('#formEdit input[name="telefono_edit"]').val(json.telefono);
            $('#formEdit input[name="celular_edit"]').val(json.celular);
            $('#formEdit input[name="correo_edit"]').val(json.correo);

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
