<?php 

	include('includes/header.php'); 
	
?>

<!-- Formulaire d'ajout de commentaire -->

<div class="container">
	<div class="row">
		<h1 class="title">Ajouter un commentaire</h1>
	</div>
	<div class="row">
		<form method="POST" action="add_comment_post.php">
			<div class="form-group">
				<label>Titre</label>
				<input name="titre_comment" type="text" placeholder="Titre de l'article">
			</div>
			<div class="form-group">
				<label>Contenu</label>
				<textarea name="content_comment" class="form-control" rows="4"></textarea>
			</div>
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
			<button type="submit" class="btn btn-default">Ajouter le commentaire</button>
		</form>
	</div>
</div>

<?php include('includes/footer.php'); ?>