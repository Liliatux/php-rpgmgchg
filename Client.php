<?php
	require 'User.php';

	class Client extends User {
		private $billAmont;
		private $cart = [];

		public function getBillAmont() {

		}
		public function getCart() {

		}

		//Facture augmente du prix du produit
		public function setBillAmont($product) {

		}

		//un tableau de Product, panier avec des produits
		public function setCart() {
			
		}

		//Ajoute un produit au panier du client
		public function addProductToCart($product) {

		}
		// Prend en paramètre un objet de classe Product
		public function buy($product) {
			$this->addProductToCart($product);
			$this->setBillAmont($product);
		}
	}
?>
