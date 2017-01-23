<?php 
	require __DIR__ .'/../Models/Users.php';

	class UserController {
		public function home() {
			$user = new Users();
			require __DIR__ .'/../Views/userTable.php';
		}
	}

?>