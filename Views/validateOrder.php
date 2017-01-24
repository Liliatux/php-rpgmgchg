<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Récapitulatif de la commande</title>
</head>
<body>
	<div>
		<h2>Récapitulatif de commande du client: <?= $_POST['user']; ?></h2>
		<table class="ui table">
			<tr>
				<th>Nom des produits</th>
				<th>Prix</th>
				<th>Total</th>
			</tr>
			<tr>
				<td><?= $_POST['product1'] ?></td>
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
</body>
</html>