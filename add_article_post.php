<?php

	$titre = htmlspecialchars($_POST['titre']);
	$content = htmlspecialchars($_POST['content']);

	$bdd = new PDO('mysql:host=localhost;dbname=wild_blog;charset=utf8', 'root', 'root');

	$req = $bdd->prepare('INSERT INTO articles (titre, contenu) VALUE (?, ?)');
	$req->execute(array($titre, $content));

	header('Location: index.php');

?>