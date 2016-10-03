<?php

// On crée une fonction qui nous récupère tous les articles, la fonction nous renvoie un tableau d'articles
function get_articles($bdd){
	$req = $bdd->query('SELECT * FROM articles ORDER BY id DESC');

	//fetchAll, nous permet de traiter et de convertir en array tout le resultat de la requète
	$articles = $req->fetchAll();
	return $articles;
}

function get_article($bdd, $id_article){
	$req = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
	$req->execute(array('id' => $id_article));

	$article = $req->fetch();
	return $article;
}

function add_article($bdd, $titre, $contenu){
	$req = $bdd->prepare('INSERT INTO articles (titre, contenu) VALUE (?, ?)');
	$req->execute(array($titre, $contenu));
}

function update_article($bdd, $titre, $contenu){
	$req_update = $bdd->prepare('UPDATE articles SET titre = :titre, contenu = :contenu WHERE id = :id');
	$req_update->execute(array(
		'titre' => $titre, 
		'contenu' => $contenu,
		'id' => $_GET['id']
		));
}

function delete_article($bdd, $id_article){
	$req = $bdd->prepare('DELETE FROM articles WHERE id = :id');
	$req->execute(array('id' => $id_article));
}