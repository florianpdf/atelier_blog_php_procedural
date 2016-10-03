<?php

	// On fait appel à notre modele
	include_once('modeles/article_modele.php');

	$id_article = $_GET['id'];

	// On appel la fonction définie dans le modèle qui nous permet de supprimer un article
	delete_article($bdd, $id_article);

	// On récupère tous les articles
	$articles = get_articles($bdd);

	// On effectue du traitement sur les données (contrôleur)
	// Ici, on doit surtout sécuriser l'affichage
	foreach ($articles as $article) {
		$article['titre'] = htmlspecialchars($article['titre']);
		$article['contenu'] = htmlspecialchars($article['contenu']);
	}

	// On redirige vers la page d'accueil
	header('Location: index');  