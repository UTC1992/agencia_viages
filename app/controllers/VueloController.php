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

		}

		public function getDelete($vuelo_id)
		{

		}

		public function postUpdate()
		{

		}
	}

 ?>