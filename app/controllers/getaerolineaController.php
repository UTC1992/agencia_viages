<?php 
	
	class getaerolineaController extends BaseController
	{
		public function postData()
		{
			$aerolinea_id = Input::get('aerolinea');
			$aerolinea = Aerolinea::find($aerolinea_id);

			 $data = array(
				'success' => true,
				'id' => $aerolinea->id,
				'nombre' => $aerolinea->nombre,
				'ruc' => $aerolinea->ruc
				);
        
        return Response::json($data);

		}
	}
 ?>