<?php
	require __DIR__ .'/../Models/Vegetable.php';
	require __DIR__ .'/../Models/Cloth.php';

	// Prix en centimes
	
	class Products {
		private $legumes;
		private $vetements;

		public function __construct() {
			$this->legumes = [
				['legume' => new Vegetable('1', 'carotte', '120', 'Jean-Michel Crapeau', date('d/m/Y', time()))],
				['legume' => new Vegetable('2', 'salade', '230', 'Lamasticot', date('d/m/Y', time()))]
			];

			$this->vetements = [
				['vetement' => new Cloth('3', 'gant', '104', 'lolita')],
				['vetement' => new Cloth('4', 'echarpe', '155', 'lempika')],
				['vetement' => new Cloth('5', 'bonnet', '93', 'pikachu')]
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