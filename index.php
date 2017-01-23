<?php
	require 'Controllers/ProductController.php';

	if(!isset($_GET['page'])){
		(new ProductController())->productTable();
	}

?>