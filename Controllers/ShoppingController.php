<?php
	require_once __DIR__ .'/../Data/Products.php';
	require_once __DIR__ .'/../Data/Users.php';

	class ShoppingController {
		public function shopping() {
			$user = new Users();
			$product = new Products();
			
			$legumes = $product->getLegumes();
			$vetements = $product->getVetements();
			$users = $user->getUsers();

			require __DIR__ .'/../Views/shopping.php';
		}
	}
?>