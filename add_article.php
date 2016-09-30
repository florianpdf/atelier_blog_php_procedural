<?php 

	include('includes/header.php'); 
	
?>

<!-- Formulaire d'ajout d'article -->

<div class="container">
	<div class="row">
		<h1 class="title">Ajouter un article</h1>
	</div>
	<div class="row">
		<form method="POST" action="add_article_post.php">
			<div class="form-group">
				<label>Titre</label>
				<input name="titre" type="text" placeholder="Titre de l'article">
			</div>
			<div class="form-group">
				<label>Contenu</label>
				<textarea name="content" class="form-control" rows="4"></textarea>
			</div>
			<button type="submit" class="btn btn-default">Envoyer</button>
		</form>
	</div>
</div>

<?php include('includes/footer.php'); ?>