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

			// La vue reçoit du controller le tableau avec tous nos articles, on a plus qu'a les afficher un à un grâce à une boucle
			foreach ($articles as $article){
				echo "<div class=\"articles\">";
				echo "<h3 class=\"title_article\">" . $article['titre'] . "</h3><p>" . $article['contenu'] . "</p>";

				echo "<a class=\"btn btn-default\" href=\"index.php?section=delete&id=" . $article['id'] . "\">Supprimer l'article</a>";
				echo "<a class=\"btn btn-default\" href=\"index.php?section=update&id=" . $article['id'] . "\">Modifier l'article</a>";
				echo "<a class=\"btn btn-default\" href=\"add_comment.php?id=" . $article['id'] . "\">Ajouter un commentaire</a></div>";
			}
			
		?>
	</div>

	<div class="row_button row">
		<a class="add_button btn btn-default" href="index.php?section=add">Ajouter un article</a>
	</div>
</div>

<?php include('includes/footer.php'); ?>