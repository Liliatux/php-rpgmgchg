<?php
	require 'Controllers/ProductController.php';
	require 'Controllers/UserController.php';
	require 'Controllers/CartController.php';

	if(!isset($_GET['page'])){
		(new UserController())->userTable();
		(new ProductController())->productTable();
		(new CartController())->testOrder();
	}

?>