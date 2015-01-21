<?php 
	
	class getavionController extends BaseController
	{
		public function postData()
		{
			$avion_id = Input::get('avion');
			$avion = Avion::find($avion_id);

			 $data = array(
				'success' => true,
				'id' => $avion->id,
				'descripcion' => $avion->descripcion,
				'tipo' => $avion->tipo,
				'placa' => $avion->placa
				);
        
        return Response::json($data);

		}
	}
 ?>