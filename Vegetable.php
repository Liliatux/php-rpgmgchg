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

		public function setProductorName($newProductorName) {
			$this->productorName = $newProductorName;
		}

		public function setHarvestedAt($newHarvestedAt) {
			$this->harvestedAt = $newHarvestedAt;
		}

		public function isFresh() {
			if($this->getHarvestedAt < 24) {
				return true;
			}else {
				return false;
			}
		}

		public function __construct($newId, $newName, $newPrice, $newProductorName, $newHarvestedAt) {
			parent::__construct($newId, $newName, $newPrice);
			$this->setProductorName($newProductorName);
			$this->setHarvestedAt($newHarvestedAt);
		}
	}
?>