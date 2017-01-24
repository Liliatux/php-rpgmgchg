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
		<?php foreach($users as $user): ?>
			<tr>
				<td><?=$user['user']->getId(); ?></td>
				<td><?= $user['user']->getEmail(); ?></td>
				<td><?= $user['user']->getCreatedAt(); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>