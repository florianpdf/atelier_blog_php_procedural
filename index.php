<?php 

	include('includes/header.php'); 

?>

<div class="container">
	<div class="row">
		<h1 class="title">Bienvenue sur mon blog</h1>
	</div>
	<div class="row">
		<h2 class="title">Liste des articles</h2>

		<?php

			$bdd = new PDO('mysql:host=localhost;dbname=wild_blog;charset=utf8', 'root', 'root');

			$result = $bdd->query('SELECT * FROM articles ORDER BY id DESC');

			while($donnee = $result->fetch()){
				echo "<div class=\"articles\"><h3>" . $donnee['titre'] . "</h3><p>" . $donnee['contenu'] . "</p>";
				echo "<a class=\"btn btn-default\" href=\"delete_article_action.php?id=" . $donnee['id'] . "\">Supprimer l'article</a>";
				echo "<a class=\"btn btn-default\" href=\"update_article.php?id=" . $donnee['id'] . "\">Modifier l'article</a>";
				echo "<a class=\"btn btn-default\" href=\"add_comment.php?id=" . $donnee['id'] . "\">Ajouter un commentaire</a></div>";
			}

			$result->closeCursor();
		?>

	</div>

	<div class="row_button row">
		<a class="add_button btn btn-default" href="add_article.php">Ajouter un article</a>
	</div>
</div>

<?php include('includes/footer.php'); ?>