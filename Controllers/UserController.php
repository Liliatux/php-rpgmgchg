<?php 
	require_once __DIR__ .'/../Data/Users.php';

	class UserController {
		public function userTable() {
			$user = new Users();
			$users = $user->getUsers();
			require __DIR__ .'/../Views/userTable.php';
		}
	}

?>