<?php 
	
	class VueloController extends BaseController
	{
		public function __construc()
		{

		}

		public function getIndex()
		{
			$vuelos = DB::table('vuelos')->get();
			$aviones = DB::table('aviones')->lists('id','descripcion');
			return View::make('vuelos.vuelo')->with('vuelos', $vuelos)->with('aviones',$aviones);
		}

		public function postCreate()
		{
			$reglas = array(
				'numero' => 'required|max:10',
				'fecha' => 'required|max:45',
				'hora_salida' => 'required|max:50',
				'hora_llegada' => 'required|max:60',
				'origen' => 'required|max:45',
				'destino' => 'required|max:45',
				'puerta_embarque' => 'required|max:15',
				'aerolinea_id' => 'required|max:10',
				'avion_id' => 'required|max:10'
				);

			$validacion = Validator::make(Input::all(),$reglas);
			if ($validacion->fails()) 
			{
				# code...
				return Redirect::to('registroVuelo')->with('status','ok_create');
			}

			$vuelo = new Vuelo;

			$vuelo->numero = Input::get('numero');
			$vuelo->fecha = Input::get('fecha');
			$vuelo->hora_salida = Input::get('hora_salida');
			$vuelo->hora_llegada = Input::get('hora_llegada');
			$vuelo->origen = Input::get('origen');
			$vuelo->destino = Input::get('destino');
			$vuelo->puerta_embarque = Input::get('puerta_embarque');

			$dato1 = Input::get('aerolinea_id');
			$aerolineas = DB::table('aerolineas')->where('nombre',$dato1)->first();
			$vuelo->aerolinea_id = $aerolineas->id;
							
			$dato2 = Input::get('avion_id');
			$aviones = DB::table('aviones')->where('descripcion',$dato2)->first();
			$vuelo->avion_id = $aviones->id;


			$vuelo->save();

			return Redirect::to('vuelos')->with('status','ok_create');
		}

		public function getDelete($vuelo_id)
		{
			$vuelo = Vuelo::find($vuelo_id);

			$vuelo->delete();

			return Redirect::to('vuelos')->with('status','ok_delete');
		}

		public function postUpdate()
		{
			$vuelo_id = Input::get('vuelo');

			$vuelo = Vuelo::find($vuelo_id);

			$vuelo->numero = Input::get('numero_edit');
			$vuelo->fecha = Input::get('fecha_edit');
			$vuelo->hora_salida = Input::get('hora_salida_edit');
			$vuelo->hora_llegada = Input::get('hora_llegada_edit');
			$vuelo->origen = Input::get('origen_edit');
			$vuelo->destino = Input::get('destino_edit');
			$vuelo->puerta_embarque = Input::get('puerta_embarque_edit');

			$dato1 = Input::get('aerolinea_id_edit');
			$aerolineas = DB::table('aerolineas')->where('nombre',$dato1)->first();
			$vuelo->aerolinea_id = $aerolineas->id;
							
			$dato2 = Input::get('avion_id_edit');
			$aviones = DB::table('aviones')->where('descripcion',$dato2)->first();
			$vuelo->avion_id = $aviones->id;

			$vuelo->save();

			return Redirect::to('vuelos')->with('status','ok_update');

		}
	}

 ?>