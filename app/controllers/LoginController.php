<?php  
	class LoginController extends BaseController
	{
		public function login()
		{
			$loginData = array(
				'correo' => Input::get('correo'),
				'password' => Input::get('password') 
				);
			if(Auth::attempt($loginData))
			{
				return Redirect::to('indexAdmin');
			}
			else
			{
				return Redirect::to('administrar')->with('login_errors',true);
			}
			return Redirect::to('indexAdmin');
		}

		public function getLogout()
		{
			//Auth::logout();
			return Redirect::to('/');
		}
	}
?>