<?php 

	// On enregistre les valeurs reçu du formulaire
	// La fonction htmlspecialchars convertit les caractères spéciaux en entités HTML 
	$titre = htmlspecialchars($_POST['titre_update']);
	$content = htmlspecialchars($_POST['content_update']);

	// Connection base de donnée
	$bdd = new PDO('mysql:host=localhost;dbname=wild_blog;charset=utf8', 'root', 'root');

	// Requete permettant la modification d'un article
	// On utilise la fonction SQL update qui nous permet de mettre à jour un élèment en base de donnée
	// On spécifie l'id de l'article à modifier
	$req_update = $bdd->prepare('UPDATE articles SET titre = :titre, contenu = :contenu WHERE id = :id');
	$req_update->execute(array(
		'titre' => $titre, 
		'contenu' => $content,
		'id' => $_GET['id']
		));

	// On met fin à la requete
	$req_update->closeCursor();

	// On redirige vers index
	header('Location: index.php');

?>