<?php
	require_once 'Product.php';

	class Vegetable extends Product {
		private $productorName;
		
		private $harvestedAt;
		
		public function getProductorName() {
			return $this->productorName;
		}

		public function getHarvestedAt() {
			return $this->harvestedAt;
		}

		public function setProductorName() {
			$this->productorName = 'Jean-Michel Crapeau';
		}

		public function setHarvestedAt() {
			$this->harvestedAt = date('d/m/Y', mktime(0, 0, 0, 7, 1, 2000));
		}

		public function isFresh() {
			if($this->getHarvestedAt < 24) {
				return true;
			}else {
				return false;
			}
		}
	}
?>