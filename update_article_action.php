<?php 

	$titre = htmlspecialchars($_POST['titre_update']);
	$content = htmlspecialchars($_POST['content_update']);

	$bdd = new PDO('mysql:host=localhost;dbname=wild_blog;charset=utf8', 'root', 'root');

	$req_update = $bdd->prepare('UPDATE articles SET titre = :titre, contenu = :contenu WHERE id = :id');
	$req_update->execute(array(
		'titre' => $titre, 
		'contenu' => $content,
		'id' => $_GET['id']
		));

	$req_update->closeCursor();

	header('Location: index.php');

?>