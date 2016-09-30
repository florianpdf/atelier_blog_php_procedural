<?php

	// Connection base de donnée
	$bdd = new PDO('mysql:host=localhost;dbname=wild_blog', 'root', 'root');

	// Requete permettant la suppression de l'articles
	// On spécifie l'id de l'article afin de supprimer un article précis
	$req = $bdd->prepare('DELETE FROM articles WHERE id = :id');
	$req->execute(array(
		'id' => $_GET['id']
		)
	);

	// On met fin à la requete
	$req->closeCursor();
	
	// Redirection vers la page d'accueil
	header('Location: index.php');