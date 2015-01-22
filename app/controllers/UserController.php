<?php  
	
	class UserController extends BaseController
	{
		public function __construc()
		{
			/***
			se verifica si esta logeado o a iniciado session 
			*/
			$this->beforeFilter('auth');
		}

		public function getIndex()
		{
			$users = DB::table('users')->get();
			return View::make('usuarios.users')->with('users', $users);
		}

		public function postCreate()
		{
			$reglas = array(
				'cedula' => 'required|max:10',
				'nombres' => 'required|max:45',
				'apellidos' => 'required|max:50',
				'ciudad' => 'required|max:60',
				'direccion' => 'required|max:190',
				'telefono' => 'required|max:9',
				'celular' => 'required|max:10',
				'correo' => 'required|max:190'
				);

			$validacion = Validator::make(Input::all(),$reglas);
			if ($validacion->fails()) 
			{
				# code...
				return Redirect::to('registroAdmin')->with('status','ok_create');
			}

			$usuario = new User;

			$usuario->cedula = Input::get('cedula');
			$usuario->nombres = Input::get('nombres');
			$usuario->apellidos = Input::get('apellidos');
			$usuario->ciudad = Input::get('ciudad');
			$usuario->direccion = Input::get('direccion');
			$usuario->telefono = Input::get('telefono');
			$usuario->celular = Input::get('celular');
			$usuario->correo = Input::get('correo');
			$usuario->password = Hash::make(Input::get('password'));

			$usuario->save();

			return Redirect::to('administrar')->with('status','ok_create');
		}

		public function getDelete($user_id)
		{
			$user = User::find($user_id);

			$user->delete();

			return Redirect::to('usuarios')->with('status','ok_delete');
		}

		public function postUpdate()
		{
			$user_id = Input::get('user');

			$user = User::find($user_id);

			$user->cedula = Input::get('cedula_edit');
			$user->nombres = Input::get('nombres_edit');
			$user->apellidos = Input::get('apellidos_edit');
			$user->ciudad = Input::get('ciudad_edit');
			$user->direccion = Input::get('direccion_edit');
			$user->telefono = Input::get('telefono_edit');
			$user->celular =  Input::get('celular_edit');
			$user->correo = Input::get('correo_edit');

			$user->save();

			return Redirect::to('usuarios')->with('status','ok_update');
		}



		public function postCreateUsers()
		{
			$reglas = array(
				'cedula' => 'required|max:10',
				'nombres' => 'required|max:45',
				'apellidos' => 'required|max:50',
				'ciudad' => 'required|max:60',
				'direccion' => 'required|max:190',
				'telefono' => 'required|max:9',
				'celular' => 'required|max:10',
				'correo' => 'required|max:190'
				);

			$validacion = Validator::make(Input::all(),$reglas);
			if ($validacion->fails()) 
			{
				# code...
				return Redirect::to('registroUsers')->with('status','no_create');
			}

			$usuario = new User;

			$usuario->cedula = Input::get('cedula');
			$usuario->nombres = Input::get('nombres');
			$usuario->apellidos = Input::get('apellidos');
			$usuario->ciudad = Input::get('ciudad');
			$usuario->direccion = Input::get('direccion');
			$usuario->telefono = Input::get('telefono');
			$usuario->celular = Input::get('celular');
			$usuario->correo = Input::get('correo');
			$usuario->password = Hash::make(Input::get('password'));

			$usuario->save();

			return Redirect::to('usuarios')->with('status','ok_create');
		}
	}

?>