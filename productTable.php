<?php 
	$products = require 'products.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Table</title>
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Nom du producteur</th>
			<th>Date de création</th>
			<th>Marque</th>
		</tr>
		<?php foreach($products as $product): ?>
			<tr>
				<td><?= $product->getId(); ?></td>
				<td><?= $product->getName(); ?></td>
				<td><?= $product->getPrice(); ?></td>
				<td><?= (method_exists($product, 'getProductorName')) ? $product->getProductorName() : null; ?></td>
				<td><?= (method_exists($product, 'getHarvestedAt')) ? $product->getHarvestedAt() : null; ?></td>
				<td><?= (method_exists($product, 'getBrand')) ? $product->getBrand() : null; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>