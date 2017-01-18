<?php
	class Product {
		private $id;
		private $name;
		private $price;

		public function getId() {
			return $this->id;
		}

		public function getName() {
			return $this->name;
		}

		public function getPrice() {
			return $this->price;
		}

		public function setId($newId) {
			$this->id = $newId;
		}

		public function setName($newName) {
			$this->name = $newName;
		}

		public function setPrice($newPrice) {
			$this->price = $newPrice.'€';
		}

		public function __construct($newId, $newName, $newPrice) {
			$this->setId($newId);
			$this->setName($newName);
			$this->setPrice($newPrice);
		}
	}
?>