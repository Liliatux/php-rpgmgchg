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
		<tr><?php foreach($users as $user): ?>
			<td><?= $users->$id; ?></td>
			<td><?= $users->$email; ?></td>
			<td><?= $users->$createdAt; ?></td>
		<?php endforeach; ?></tr>
	</table>
</body>
</html>