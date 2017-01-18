<?php
	require 'Product.php';

	class Vegetable extends Product {
		private $productorName;
		public $harvestedAt = 6;
		public function isFresh() {
			if($this->harvestedAt < 24) {
				return true;
			}else {
				return false;
			}
		}
	}
?>