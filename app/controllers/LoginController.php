<?php
	class LoginController extends BaseController {

	public function showLogin() {
		return View::make('login');
	}
	public function doLogin() {
		$validiator = Validator::make(Input::all(), array('username' => 'required|min:3', 'password' => 'required|alphaNum|min:3'));

		if($validiator->fails())
			return Redirect::to('login')->withErrors($validiator)->withInput(Input::except('password'));
		
		$userdata = array('username' => Input::get('username'), 
						  'password' => Input::get('password'));

		
		if(Auth::attempt($userdata, true))
		{
			Log::info('Register successfull for '.$userdata['username']." ".$userdata['password'] );
			return Redirect::to('/');	
		}	
		else
		{
			Log::info('Register failed for '.$userdata['username']." ".$userdata['password'] );
			return View::make('login');
		}
		
	}
	public function doLogout()
	{
		if(Auth::check()){
			Auth::logout();
			return Redirect::to('/');
		}
	}
}
?>