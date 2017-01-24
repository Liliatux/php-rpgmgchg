<?php
	require 'Controllers/ProductController.php';
	require 'Controllers/UserController.php';
	require 'Controllers/CartController.php';
	require 'Controllers/ShoppingController.php';

	if(isset($_GET['page'])){
		(new UserController())->userTable();
		(new ProductController())->productTable();
		(new CartController())->cart();
	} else {
		(new ShoppingController())->shopping();
	}

?>