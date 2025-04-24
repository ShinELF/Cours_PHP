<?php
$todos = [
	["id" => "fde33008-0d11-4256-b7d7-6ede9b6aff1b", "name" => "Apprendre le HTML", "done" => false],
	["id" => "13c028f5-5e79-46e7-a7e4-6f51ae388da9", "name" => "Apprendre le JavaScript", "done" => false],
	["id" => "fdb4179a-2f50-4f74-8dba-9a020e404535", "name" => "Apprendre le PHP", "done" => false],
	["id" => "34438feb-47f0-44f2-92bc-13176dcb77f5", "name" => "Coder, coder, coder", "done" => true],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once './includes/head.php' ?>
	<title>ToraTaTache</title>
</head>

<body>
	<div class="container">
		<?php require_once './includes/header.php' ?>
		<div class="content">
			<div class="todo-container">

				<h1>Mes Tâches</h1>

				<ul class="todo-list">
					<?php
					foreach ($todos as $index => $values) {
						if ($values['done'] == false) {
							echo '<li class="todo-item">
            <span class="todo-name">', $values['name'], '</span>
            <button class="btn btn-primary btn-small">Valider</button>
            <button class="btn btn-danger btn-small">Supprimer</button>';
						} else {
							echo '<li class="todo-item">
            <span class="todo-name low-opacity">', $values['name'], '</span>
            <button class="btn btn-primary btn-small">Annuler</button>
            <button class="btn btn-danger btn-small">Supprimer</button>';
						}
					}; ?>
					<li class="todo-item">
						<span class="todo-name">Faire la vaisselle</span>
						<button class="btn btn-primary btn-small">Valider</button>
						<button class="btn btn-danger btn-small">Supprimer</button>
					</li>
				</ul>
			</div>
		</div>
		<?php require_once './includes/footer.php' ?>
	</div>
</body>

</html>