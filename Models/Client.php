<?php
	require_once __DIR__.'/User.php';

	class Client extends User {
		private $billAmont;
		private $cart= [];

		public function getBillAmont() {
			return $this->billAmont;
		}
		public function getCart() {
			return $this->cart;
		}

		//Facture augmente du prix du produit
		public function setBillAmont($product) {
			$this->billAmont = $this->billAmont+$product->getPrice();
		}

		//Ajoute un produit au panier du client
		public function addProductToCart($product) {
			array_push($this->cart, $product);
		}
		// Prend en paramètre un objet de classe Product
		public function buy($product) {
			$this->addProductToCart($product);
			$this->setBillAmont($product);
		}
	}
?>
