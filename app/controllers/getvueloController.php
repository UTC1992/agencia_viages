<?php

class getvueloController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   	$vuelo_id = Input::get('vuelo');
  
       	$vuelo = Vuelo::find($vuelo_id);

		$aerolineas = DB::table('aerolineas')->where('id',$vuelo->aerolinea_id)->first();
		//$vuelo->aerolinea_id = $aerolineas->nombre;
		$aviones = DB::table('aviones')->where('id',$vuelo->avion_id)->first();


        $data = array(
				'success' => true,
				'id' => $vuelo->id,
				'numero' => $vuelo->numero,
				'fecha' => $vuelo->fecha,
				'hora_salida' => $vuelo->hora_salida,
				'hora_llegada' => $vuelo->hora_llegada,
				'origen' => $vuelo->origen,
				'destino' => $vuelo->destino,
				'puerta_embarque' => $vuelo->puerta_embarque,
				'aerolinea_id' => $aerolineas->nombre,
				'avion_id' => $aviones->descripcion
				);
        
        return Response::json($data);
		
    }
}
?>