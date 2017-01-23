<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>User Table</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<h1>Clients</h1>

	<table class="ui table">
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Crée le</th>
		</tr>
		<?php foreach($clients as $client): ?>
			<tr>
				<td><?=$client['client']->getId(); ?></td>
				<td><?= $client['client']->getEmail(); ?></td>
				<td><?= $client['client']->getCreatedAt(); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>