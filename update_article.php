<?php 

	include('includes/header.php'); 

	// Connection base de donnée
	$bdd = new PDO('mysql:host=localhost;dbname=wild_blog;charset=utf8', 'root', 'root');

	// Requete permettant de récupérer un article précis en précisant l'id de ce dernier
	// Cette requête nous permet de renseigner les valeur dans les inputs du formulaire
	$result = $bdd->prepare('SELECT id, titre, contenu FROM articles WHERE id = :id');
	$result->execute(array(
		'id' => $_GET['id']
		)
	);

	// On extrait les données grace au fetch, etant donnée que l'on récupère un seul article (chaque article est rendu unique grâce à son id), on a pas besoin de faire une boucle
	$donnee = $result->fetch();
	
?>

<!-- Formulaire de modification d'article -->
<div class="container">
	<div class="row">
		<h1 class="title">Modifier l'article</h1>
	</div>
	<div class="row">
		<form method="POST" action="update_article_action.php?id=<?php echo $donnee['id']; ?>">
			<div class="form-group">
				<label>Titre</label>
				<input name="titre_update" type="text" value="<?php echo $donnee['titre']; ?>" placeholder="Titre de l'article">
			</div>
			<div class="form-group">
				<label>Contenu</label>
				<textarea name="content_update" class="form-control" rows="4"><?php echo $donnee['contenu']; ?></textarea>
			</div>
			<button type="submit" class="btn btn-default">Modifier</button>
		</form>
	</div>
</div>

<?php include('includes/footer.php'); ?>