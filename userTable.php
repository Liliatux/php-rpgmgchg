<?php
	$users = require('Users.php');
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
			<td>ID</td>
			<td>Email</td>
			<td>Crée le</td>
		</tr>
		<?php foreach($users as $user): ?>
			<tr><td><?=$user->getId(); ?></td>
			<td><?= $user->getEmail(); ?></td>
			<td><?= $user->getCreatedAt(); ?></td></tr>
		<?php endforeach; ?>
	</table>
</body>
</html>