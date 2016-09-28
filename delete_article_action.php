<?php

	$bdd = new PDO('mysql:host=localhost;dbname=wild_blog', 'root', 'root');

	$req = $bdd->prepare('DELETE FROM articles WHERE id = :id');
	$req->execute(array(
		'id' => $_GET['id']
		)
	);

	header('Location: index.php');