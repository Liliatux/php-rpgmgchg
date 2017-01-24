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
				<td><?= $legume->getId(); ?></td>
				<td><?= $legume->getName(); ?></td>
				<td><?= $legume->getPrice(); ?></td>
				<td><?= $legume->getProductorName(); ?></td>
				<td><?= $legume->getHarvestedAt();?></td>
				<td><?= (method_exists($legume, 'getBrand')) ? $legume->getBrand() : null; ?></td>
			</tr>
		<?php endforeach; ?>
		<?php foreach($vetements as $vetement): ?>
			<tr>
				<td><?= $vetement->getId(); ?></td>
				<td><?= $vetement->getName(); ?></td>
				<td><?= $vetement->getPrice(); ?></td>
				<td><?= (method_exists($vetement, 'getProductorName')) ? $vetement->getProductorName() : null; ?></td>
				<td><?= (method_exists($vetement, 'getHarvestedAt')) ? $vetement->getHarvestedAt() : null; ?></td>
				<td><?= $vetement->getBrand();?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>