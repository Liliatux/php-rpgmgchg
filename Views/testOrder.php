<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panier Client</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<div>
		<h1>Client <?= $users[0]['user']->getId(); ?></h1>
		<?php $users[0]['user']->buy($legumes[0]['legume']); ?>
		<table class="ui table">
			<tr>
				<th>Nom des produits</th>
				<th>Prix</th>
			</tr>
			<tr>
				<td><?= $legumes[0]['legume']->getName(); ?></td>
				<td><?= $legumes[0]['legume']->getPrice(); ?></td>
			</tr>
		</table>
		<span>Total: <?= $users[0]['user']->getBillAmont(); ?> €</span>
	</div>
</body>
</html>