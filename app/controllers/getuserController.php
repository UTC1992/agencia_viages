<?php

class getuserController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   $user_id = Input::get('user');
  
       $user = User::find($user_id);

        $data = array(
				'success' => true,
				'id' => $user->id,
				'cedula' => $user->cedula,
				'nombres' => $user->nombres,
				'apellidos' => $user->apellidos,
				'ciudad' => $user->ciudad,
				'direccion' => $user->direccion,
				'telefono' => $user->telefono,
				'celular' => $user->celular,
				'correo' => $user->correo
				);
        
        return Response::json($data);
		
    }
}
?>