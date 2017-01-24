<?php
	require_once __DIR__ .'/../Models/Client.php';


	class Users {
		private $users;

		public function __construct() {
			$this->users = [
			   	new Client('1', 'za22@truc.com', date('d/m/Y', mktime(0, 0, 0, 7, 1, 2000))),
			  	new Client('2', 'tess02@muche.com', date('d/m/Y', mktime(0, 0, 0, 9, 11, 2001)))	
			];
		}

		public function getUsers() {
			return $this->users;
		}
	}
?>
