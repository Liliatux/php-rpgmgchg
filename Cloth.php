<?php
	require_once 'Product.php';
	
	class Cloth extends Product {
		private $brand;

		public function try() {

		}

		public function getBrand() {
			return $this->brand;
		}

		public function setBrand() {
			$this->brand = 'lolita';
		}
	}
?>