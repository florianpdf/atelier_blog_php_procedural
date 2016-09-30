<?php

	// On enregistre les valeurs reçu du formulaire
	// La fonction htmlspecialchars convertit les caractères spéciaux en entités HTML 
	$titre = htmlspecialchars($_POST['titre']);
	$content = htmlspecialchars($_POST['content']);

	// Connection base de donnée
	$bdd = new PDO('mysql:host=localhost;dbname=wild_blog;charset=utf8', 'root', 'root');

	// Requete permettant l'enregistrement des articles en base de donnée
	$req = $bdd->prepare('INSERT INTO articles (titre, contenu) VALUE (?, ?)');
	$req->execute(array($titre, $content));

	// On met fin à la requete
	$req->closeCursor();
	
	// Redirectement vers la page index
	// http://php.net/manual/fr/function.header.php
	header('Location: index.php');

?>