<?php
	require_once __DIR__ .'/../Data/Products.php';

	class ProductController {
		public function productTable() {
			$product = new Products();
			$legumes = $product->getLegumes();
			$vetements = $product->getVetements();
			require __DIR__ . '/../Views/productTable.php';
		}
	}

?>