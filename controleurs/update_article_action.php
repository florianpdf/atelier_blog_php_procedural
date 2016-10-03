<?php

// On fait appel à notre modele
include_once('modeles/article_modele.php');

// La condition permet de vérifier si le formulaire est à envoyer ou à afficher, si $_POST est vide, cela veut dire que l'utilisateur n'a pas encore saisi d'information, donc le formulaire doit etre affiché
if (empty($_POST)){

	// On récupère l'article ciblé grâce à son id et a la fonction définit dans le modèle
	$id_article = $_GET['id'];
	$article = get_article($bdd, $id_article);

	// On renvoie la vue du formulaire de modification
	include_once('vues/update_article_vue.php');
}
else{
var_dump($_POST);
	// On récupère les informations du formulaire
	$titre = $_POST['titre_update'];
	$contenu = $_POST['contenu_update'];

	// On les ajoute à la base de donnée grace à la fonction définit dans notre modèle
	update_article($bdd, $titre, $contenu);

	// On redirige vers la page d'accueil
	header('Location: index');  
}