<?php

	require 'Vegetable.php';
	require 'Cloth.php';

	$legume1 = new Vegetable('1', 'carotte', 1.2);
	$legume2 = new Vegetable('2', 'salade', 2.3);
	$vetement1 = new Cloth('3', 'gant', 10.4);
	$vetement2 = new Cloth('4', 'echarpe', 15.5);
	$vetement3 = new Cloth('5', 'bonnet', 9.3);

	return [
		$legume1,
		$legume2,
		$vetement1,
		$vetement2,
		$vetement3
	]
?>