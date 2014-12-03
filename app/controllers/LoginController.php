<?php
	class LoginController extends BaseController {

	public function showLogin() {
		return View::make('login');
	}
	public function doLogin() {
		return Redirect::to('/');
	}
}
?>