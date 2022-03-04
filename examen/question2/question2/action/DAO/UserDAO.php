<?php

class UserDAO {

	/**
	 * Fonction qui retourne true si l'authentification est valide
	 * et false si elle est invalide.
	 */
	public static function authenticate($username, $password) {
		$success = false;
	
		$adminUsers = file_get_contents("db/user.txt");
		$adminUsers = explode("\n", $adminUsers);
		
		foreach ($adminUsers as $user) {
			$data = explode(":", $user);

			if ($username === $data[0] && $password === $data[1]) {
				$success = true;
			}
		}
		
		return $success;
	}

	public static function addFail($username){
		file_put_contents("db/failed.txt",$username."\n",FILE_APPEND);
	}

	public static function isUserBanned($username){
		$count =0;
		$list = file_get_contents("db/failed.txt");
		$Users = explode("\n", $list);

		foreach($Users as $user){
			if($user == $username){
				$count++;
			}
		}
		return $count >=5;
	}
	
}