<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panier Client</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<div>
		<h2>Panier du client <?= $users[0]->getId(); ?></h2>
		<?php $users[0]->buy($legumes[0]); ?>
		<table class="ui table">
			<tr>
				<th>Nom des produits</th>
				<th>Prix</th>
				<th>Total</th>
			</tr>
			<tr>
				<td><?= $legumes[0]->getName(); ?></td>
				<td><?= $legumes[0]->getPrice(); ?></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><?= $users[0]->getBillAmont(); ?> €</td>
			</tr>
		</table>
	</div>
	<br>
	<div>
		<h2>Panier du client <?= $users[1]->getId(); ?></h2>
		<?php 
			$users[1]->buy($legumes[1]); 
			$users[1]->buy($vetements[0]);
		?>
		<table class="ui table">
			<tr>
				<th>Nom des produits</th>
				<th>Prix</th>
				<th>Total</th>
			</tr>
			<tr>
				<td><?= $legumes[1]->getName(); ?></td>
				<td><?= $legumes[1]->getPrice(); ?></td>
				<td></td>
			</tr>
			<tr>
				<td><?= $vetements[0]->getName(); ?></td>
				<td><?= $vetements[0]->getPrice(); ?></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><?= $users[1]->getBillAmont(); ?> €</td>
			</tr>
		</table>
	</div>
</body>
</html>