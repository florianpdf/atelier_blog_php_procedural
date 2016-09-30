<?php

	// On enregistre les valeurs reçu du formulaire
	// La fonction htmlspecialchars convertit les caractères spéciaux en entités HTML 
	$titre = htmlspecialchars($_POST['titre_comment']);
	$content = htmlspecialchars($_POST['content_comment']);
	$id_article = $_POST['id'];

	// Connection base de donnée
	$bdd = new PDO('mysql:host=localhost;dbname=wild_blog;charset=utf8', 'root', 'root');

	// Requete permettant l'enregistrement des commentaire en base de donnée
	// On spécifie l'id de l'article afin d'associer le commentaires à un article précis
	$req = $bdd->prepare('INSERT INTO commentaires (titre, contenu, id_article) VALUE (?, ?, ?)');
	$req->execute(array($titre, $content, $id_article));

	// On met fin à la requete
	$req->closeCursor();

	// Redirectement vers la page index
	header('Location: index.php');

?>