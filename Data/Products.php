<?php
	require __DIR__ .'/../Models/Vegetable.php';
	require __DIR__ .'/../Models/Cloth.php';

	// Prix en centimes
	
	class Products {
		private $legumes;
		private $vetements;

		public function __construct() {
			$this->legumes = [
				new Vegetable('1', 'carotte', '120', 'Jean-Michel Crapeau', date('d/m/Y', time())),
				new Vegetable('2', 'salade', '230', 'Lamasticot', date('d/m/Y', time()))
			];

			$this->vetements = [
				new Cloth('3', 'gant', '104', 'lolita'),
				new Cloth('4', 'echarpe', '155', 'lempika'),
				new Cloth('5', 'bonnet', '93', 'pikachu')
			];
		}

		public function getLegumes() {
			return $this->legumes;
		}
		
		public function getVetements() {
			return $this->vetements;
		}
	}
?>