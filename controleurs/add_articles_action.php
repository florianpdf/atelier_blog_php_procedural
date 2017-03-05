<?php

// On fait appel à notre modele
include_once('modeles/article_modele.php');

// La condition permet de vérifier si le formulaire est à envoyer ou à afficher, si $_POST est vide, cela veut dire que l'utilisateur n'a pas encore saisi d'information, donc le formulaire doit etre affiché
if (empty($_POST)){

	// On renvoie la vue du formulaire d'ajout
	include_once('vues/add_article_vue.php');
}
else{

	// On récupère les informations du formulaire
	$titre = $_POST['titre'];
	$contenu = $_POST['contenu'];

	// On les ajoute à la base de donnée grace à la fonction définit dans notre modèle
	add_article($bdd, $titre, $contenu);

	// On redirige vers la page d'accueil
	header('Location: index.php');  
}
