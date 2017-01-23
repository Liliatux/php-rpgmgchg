<?php
	require_once __DIR__ .'/Client.php';


	class Users {
		$clients;

		public function __construct() {
			$this->clients = [
			   	$client = new Client('1', 'za22@truc.com', date('d/m/Y', mktime(0, 0, 0, 7, 1, 2000)));
			  	$client = new Client('2', 'tess02@muche.com', date('d/m/Y', mktime(0, 0, 0, 9, 11, 2001)));	
			];
		}

		public function getCLients() {
			return $this->clients;
		}
	}
?>
