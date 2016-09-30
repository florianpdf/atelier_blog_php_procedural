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

			// Connection à la BDD via l'objet PDO (Php Data Objects)
			$bdd = new PDO('mysql:host=localhost;dbname=wild_blog;charset=utf8', 'root', 'root');

			// Requête permettant de recupérer tous les articles
			$result = $bdd->query('SELECT * FROM articles ORDER BY id DESC');

			// Preparation de la requete qui nous permettra e recupérer les commentaires par articles
			$comment_result = $bdd->prepare('SELECT * FROM commentaires WHERE id_article = :id_article');

			// Boucle nous permettant d'extraire le resultat de la requete pour recupérer les articles
			// La fonction renvoie sous forme de tableau la dernière de la Requête
			// Afin de recupérer toutes les lignes, on fait une boucle et stock toutes les lignes dans la variable donne
			while($donnee = $result->fetch()){

				// On execute la requete des commentaires en lui injectant la valeur id_article
				$comment_result->execute(array('id_article' => $donnee['id']));

				// On compte le nombre de ligne dans le résultat de la requete, cela nous permet de determiner le nombre de commentaire saisi
				$nb_comment = $comment_result->rowCount();

				echo "<div class=\"articles\">";
				echo "<h3 class=\"title_article\">" . $donnee['titre'] . "</h3><p>" . $donnee['contenu'] . "</p>";

				// On vérifie qu'il y a au moin un commentaire, sinon on affiche rien
				if ($nb_comment > 0){
					echo "<div class=\"comment\">";
					echo "<h4 class=\"title_comment\">" . $nb_comment . " Commentaires</h4>";

					// Boucle nous permettant d'extraire le resultat de la requete pour recupérer les commentaires
					// La fonction renvoie sous forme de tableau la dernière de la Requête
					// Afin de recupérer toutes les lignes, on fait une boucle et stock toutes les lignes dans la variable donne
					while ($comm = $comment_result->fetch()) {
						echo "<h5>" . $comm['titre'] . "</h5>";
						echo "<p>" . $comm['contenu'] . "</p>";
					}
					echo "</div>";
				}

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