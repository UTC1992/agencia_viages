<?php 

	class AvionController extends BaseController
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
			$aviones = DB::table('aviones')->get();
			return View::make('aviones.avion')->with('aviones',$aviones);
		}

		public function postCreate()
		{
			$reglas = array(
				'descripcion' => 'required|max:290',
				'tipo' => 'required|max:45',
				'placa' =>'required|max:60'
				);

			$validacion = Validator::make(Input::all(),$reglas);
			if ($validacion->fails()) 
			{
				# code...
				return Redirect::to('registroAvion')->with('status','no_create');
			}

			$avion = new Avion;
			$avion->descripcion = Input::get('descripcion');
			$avion->tipo = Input::get('tipo');
			$avion->placa = Input::get('placa');

			$avion->save();

			return Redirect::to('aviones')->with('status','ok_create');
		}

		public function getDelete($avion_id)
		{
			$avion = Avion::find($avion_id);
			$avion->delete();

			return Redirect::to('aviones')->with('status','ok_delete');
		}

		public function postUpdate()
		{
			$avion_id = Input::get('avion');
			$avion = Avion::find($avion_id);

			$avion->descripcion = Input::get('descripcion_edit');
			$avion->tipo = Input::get('tipo_edit');
			$avion->placa = Input::get('placa_edit');

			$avion->save();

			return Redirect::to('aviones')->with('status','ok_update');
		}
	}

 ?>