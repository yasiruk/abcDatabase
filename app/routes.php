<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
use \CommodityAnalysis;

//blade content tags altration for Angular JS

Blade::setContentTags('<%', '%>'); 		
Blade::setEscapedContentTags('<%%', '%%>');


Route::get('/', function()
{
	if(Auth::check()){
		Log::info('authorized...');
		return View::make('home')->with('name', array('username' => Auth::user()->username, 'first_name' => Auth::user()->first_name));
	}
	else
		return View::make('home');
});

Route::get('login', array('uses' => 'LoginController@showLogin'));

Route::post('login', array('uses' => 'LoginController@doLogin'));

Route::get('users', function() {
	$users = User::all();

	return View::make('users')->with("users", $users);

});

Route::get('logout', array('uses' => 'LoginController@doLogout'));

Route::get('controlpanel', array('uses' => 'ControlPanelController@show'));

Route::get('hello', function() {
	
	return CommodityAnalyser::identifyCommodity("test");
	
});

Route::get('browse', function() {
	return View::make('browse');
});
Route::get('json/browse', function() {
	return BL::paginate(9)->toJson();
});