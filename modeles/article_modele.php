<?php

// On crée une fonction qui nous récupère tous les articles, la fonction nous renvoie un tableau d'articles
function get_articles($bdd){
	
	$req = $bdd->query('SELECT * FROM articles ORDER BY id DESC');

	//fetchAll, nous permet de traiter et de convertir en array tout le resultat de la requète
	$articles = $req->fetchAll();

	return $articles;
}