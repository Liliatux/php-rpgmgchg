<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Table</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<h1>Produits</h1>
	
	<table class="ui table">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Nom du producteur</th>
			<th>Date de création</th>
			<th>Marque</th>
		</tr>
		<?php foreach($legumes as $legume): ?>
			<tr>
				<td><?= $legume['legume']->getId(); ?></td>
				<td><?= $legume['legume']->getName(); ?></td>
				<td><?= $legume['legume']->getPrice(); ?></td>
				<td><?= $legume['legume']->getProductorName(); ?></td>
				<td><?= $legume['legume']->getHarvestedAt();?></td>
				<td><?= (method_exists($legume, 'getBrand')) ? $legume['legume']->getBrand() : null; ?></td>
			</tr>
		<?php endforeach; ?>
		<?php foreach($vetements as $vetement): ?>
			<tr>
				<td><?= $vetement['vetement']->getId(); ?></td>
				<td><?= $vetement['vetement']->getName(); ?></td>
				<td><?= $vetement['vetement']->getPrice(); ?></td>
				<td><?= (method_exists($vetement, 'getProductorName')) ? $vetement['vetement']->getProductorName() : null; ?></td>
				<td><?= (method_exists($vetement, 'getHarvestedAt')) ? $vetement['vetement']->getHarvestedAt() : null; ?></td>
				<td><?= $vetement['vetement']->getBrand();?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>