<?php
	require 'Controllers/ProductController.php';
	require 'Controllers/UserController.php';

	if(!isset($_GET['page'])){
		(new UserController())->userTable();
		(new ProductController())->productTable();
	}

?>