<?php  

	class ClienteController extends BaseController
	{
		public function __contruc()
		{
			/***
			se verifica si esta logeado o a iniciado session 
			*/
			$this->beforeFilter('auth');
		}

		public function getIndex()
		{
			$clientes = DB::table('clientes')->get();
			//echo "hola clientes";
			return View::make('clientes.cliente')->with('clientes', $clientes);
		}
		public function postCreate()
		{

			$reglas = array(
				'cedula' => 'required|max:10',
				'nombres' => 'required|max:45',
				'apellidos' =>'required|max:60',
				'ciudad' => 'required|max:50',
				'direccion' => 'required|max:200',
				'telefono' => 'required|max:9',
				'celular' => 'required|max:10',
				'correo' => 'required|max:100'
				);
			$validacion = Validator::make(Input::all(),$reglas);
			if ($validacion->fails()) 
			{
				# code...
				return Redirect::to('registroCliente')->with('status','no_create');
			}


			$cliente = new Cliente;
			$cliente->cedula = Input::get('cedula');
			$cliente->nombres = Input::get('nombres');
			$cliente->apellidos = Input::get('apellidos');
			$cliente->ciudad = Input::get('ciudad');
			$cliente->direccion = Input::get('direccion');
			$cliente->telefono = Input::get('telefono');
			$cliente->celular = Input::get('celular');
			$cliente->correo = Input::get('correo');
			$cliente->password = Hash::make(Input::get('password'));

			$cliente->save();

			return Redirect::to('/')->with('status','ok_create');
		}

		public function getDelete($cliente_id)
		{
			$cliente = Cliente::find($cliente_id);

			$cliente->delete();

			return Redirect::to('clientes')->with('status','ok_delete');
		}

		public function postUpdate()
		{
			$cliente_id = Input::get('cliente');

			$cliente = Cliente::find($cliente_id);

			$cliente->cedula = Input::get('cedula_edit');
			$cliente->nombres = Input::get('nombres_edit');
			$cliente->apellidos = Input::get('apellidos_edit');
			$cliente->ciudad = Input::get('ciudad_edit');
			$cliente->direccion = Input::get('direccion_edit');
			$cliente->telefono = Input::get('telefono_edit');
			$cliente->celular =  Input::get('celular_edit');
			$cliente->correo = Input::get('correo_edit');

			$cliente->save();

			return Redirect::to('clientes')->with('status','ok_update');
		}
	}

?>