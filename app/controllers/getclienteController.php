<?php

class getclienteController extends BaseController {
    public function postData()
    {
    	/**
    	*metodo en el que se obtienen los datos del participante 
    	*y se envian a la interfaz con la ayuda de ==>json
    	*/
	   $cliente_id = Input::get('cliente');
  
       $cliente = Cliente::find($cliente_id);

        $data = array(
				'success' => true,
				'id' => $cliente->id,
				'cedula' => $cliente->cedula,
				'nombre' => $cliente->nombres,
				'apellido' => $cliente->apellidos,
				'ciudad' => $cliente->ciudad,
				'direccion' => $cliente->direccion,
				'telefono' => $cliente->telefono,
				'celular' => $cliente->celular,
				'correo' => $cliente->correo
				);
        
        return Response::json($data);
		
    }
}
?>