<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<div class="ui two columns centered grid">
		<div class="ui column">
			<h1>Commande client</h1>
			<form action="/" methode="post" class="ui form">
				<h4 class="ui dividing header">Choix client</h4>
				<div class="field">
					<select name="user" id="user" class="ui fluid dropdown">
						<option value="0">Clients</option>
					<?php foreach($users as $user): ?>
						<option value="<?= $user->getId(); ?>"><?= $user->getId(); ?></option>
					<?php endforeach; ?>
					</select>
				</div>
				<h4 class="ui dividing header">Choix produits</h4>
				<div class="three fields">
					<div class="field">
						<select name="product1" id="product1">
							<option value="0">Produit 1</option>
						<?php foreach($legumes as $legume): ?>
							<option value="<?= $legume->getId(); ?>"><?= $legume->getName(); ?></option>
						<?php endforeach; ?>
						<?php foreach($vetements as $vetement): ?>
							<option value="<?= $vetement->getId(); ?>"><?= $vetement->getName(); ?></option>
						<?php endforeach; ?>
						</select>
					</div>
					<div class="field">
						<select name="product2" id="product2">
							<option value="0">Produit 2</option>
						<?php foreach($legumes as $legume): ?>
							<option value="<?= $legume->getId(); ?>"><?= $legume->getName(); ?></option>
						<?php endforeach; ?>
						<?php foreach($vetements as $vetement): ?>
							<option value="<?= $vetement->getId(); ?>"><?= $vetement->getName(); ?></option>
						<?php endforeach; ?>
						</select>
					</div>
					<div class="field">
						<select name="product3" id="product3">
							<option value="0">Produit 3</option>
						<?php foreach($legumes as $legume): ?>
							<option value="<?= $legume->getId(); ?>"><?= $legume->getName(); ?></option>
						<?php endforeach; ?>
						<?php foreach($vetements as $vetement): ?>
							<option value="<?= $vetement->getId(); ?>"><?= $vetement->getName(); ?></option>
						<?php endforeach; ?>
						</select>	
					</div>
				</div>
				<input type="submit" value="Envoyer la commande" class="ui violet button">
			</form>
		<?php var_dump($_POST['user']); ?>
		</div>
	</div>
</body>
</html>