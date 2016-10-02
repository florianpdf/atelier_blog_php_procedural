<?php

// On fait appel à notre modele
include_once('modeles/article_modele.php');

// On appel la fonction définie dans le modèle qui nous permet de récupérer tous les articles
$articles = get_articles($bdd);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach ($articles as $article) {
	$article['titre'] = htmlspecialchars($article['titre']);
	$article['contenu'] = htmlspecialchars($article['contenu']);
}

// On affiche la page (vue)
include_once('vues/show_articles.php');