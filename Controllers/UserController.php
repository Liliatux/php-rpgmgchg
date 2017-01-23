<?php 
	require __DIR__ .'/../Models/Users.php';

	class UserController {
		public function userTable() {
			$user = new Users();
			$clients = $user->getClients();
			require __DIR__ .'/../Views/userTable.php';
		}
	}

?>