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
		</tr>
		<?php foreach($products as $product): ?>
			<tr>
				<td><?= $product->getId(); ?></td>
				<td><?= $product->getName(); ?></td>
				<td><?= $product->getPrice(); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>