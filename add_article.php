<?php 

	include('includes/header.php'); 

	// Code php pour ajout commentaire en BDD

?>

<div class="container">
	<div class="row">
		<h1 class="title">Ajouter un article</h1>
	</div>
	<div class="row">
		<form>
			<div class="form-group">
				<label>Titre</label>
				<input type="text" placeholder="Titre de l'article">
			</div>
			<div class="form-group">
				<label>Contenu</label>
				<textarea class="form-control" rows="4"></textarea>
			</div>
			<button type="submit" class="btn btn-default">Envoyer</button>
		</form>
	</div>
</div>

<?php include('includes/footer.php'); ?>