<?php 
	
	class AerolineaController extends BaseController
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
			$aerolineas = DB::table('aerolineas')->get();
			return View::make('aerolineas.aerolinea')->with('aerolineas',$aerolineas);
		}

		public function postCreate()
		{
			$reglas = array(
				'nombre' => 'required|max:50',
				'ruc' => 'required|max:12' 
				);

			$validacion = Validator::make(Input::all(),$reglas);
			if ($validacion->fails()) 
			{
				# code...
				return Redirect::to('registroAerolinea')->with('status','no_create');
			}

			$aerolinea = new Aerolinea;
			$aerolinea->nombre = Input::get('nombre');
			$aerolinea->ruc  = Input::get('ruc');

			$aerolinea->save();

			return Redirect::to('aerolineas')->with('status','ok_create');

		}

		public function getDelete($aerolinea_id)
		{
			$aerolinea = Aerolinea::find($aerolinea_id);
			$aerolinea->delete();

			return Redirect::to('aerolineas')->with('status','ok_delete');
		}

		public function postUpdate()
		{
			$aerolinea_id = Input::get('aerolinea');
			$aerolinea = Aerolinea::find($aerolinea_id);

			$aerolinea->nombre = Input::get('nombre_edit');
			$aerolinea->ruc = Input::get('ruc_edit');

			$aerolinea->save();
			return Redirect::to('aerolineas')->with('ststua','ok_update');

		}
	}

 ?>