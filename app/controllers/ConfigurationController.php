<?php

class ConfigurationController extends BaseController {

	public function setRemoteDataSource($host, $username, $password, $database) {
		//implement this
	}
	public function getRemoteDataSourceInfomation(){
		$array = array('host' => 'hostname',
					   'username' => 'username',
					   'database' => 'db');

		//do not return passwords
	}
	public function createNewUser($userinfomation) {
		/*
			table fields
			------------
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('password', 60);
			$table->index('username');
		*/

		//TODO: Add data validation
		User::create(
			array('username' => $userinfomation['username'], 
							 'first_name' => $userinfomation['first_name'],
							 'last_name' => $userinfomation['last_name'],
							 'password' => Hash::make($userinfomation['password']))
			);
	}
	public function editUserConfiguration($userid, $newConfiguration){
		//TODO implement access levels : admin and user

		$user = User::find($userid);

		$user->username = isset($newConfiguration['username']) ? $newConfiguration['username'] : $user->username;
		$user->first_name = isset($newConfiguration['first_name']) ? $newConfiguration['first_name'] : $user->username;
		$user->last_name = isset($newConfiguration['last_name']) ? $newConfiguration['last_name'] : $user->username;
		$user->password = isset($newConfiguration['password']) ? Hash::make($newConfiguration['password']) : $user->username;
	}
	
}

?>