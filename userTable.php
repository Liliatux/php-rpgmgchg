<?php
	$users = require('users.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>User Table</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Crée le</th>
		</tr>
		<?php foreach($users as $user): ?>
			<tr>
				<td><?=$user->getId(); ?></td>
				<td><?= $user->getEmail(); ?></td>
				<td><?= $user->getCreatedAt(); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>