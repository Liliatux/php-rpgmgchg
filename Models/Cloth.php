<?php
	require_once 'Product.php';
	
	class Cloth extends Product {
		private $brand;

		public function try() {

		}

		public function getBrand() {
			return $this->brand;
		}

		public function setBrand($newBrand) {
			$this->brand = $newBrand;
		}

		public function __construct($newId, $newName, $newPrice, $newBrand) {
			parent::__construct($newId, $newName, $newPrice);
			$this->setBrand($newBrand);
		}
	}
?>