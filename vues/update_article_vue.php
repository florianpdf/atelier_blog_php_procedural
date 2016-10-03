<?php include('vues/includes/header.php'); ?>

<!-- Formulaire de modification d'article -->
<div class="container">
	<div class="row">
		<h1 class="title">Modifier l'article</h1>
	</div>
	<div class="row">
		<form method="POST" action="index.php?section=update&id=<?php echo $article['id']; ?>">
			<div class="form-group">
				<label>Titre</label>
				<input name="titre_update" type="text" value="<?php echo $article['titre']; ?>" placeholder="Titre de l'article">
			</div>
			<div class="form-group">
				<label>Contenu</label>
				<textarea name="contenu_update" class="form-control" rows="4"><?php echo $article['contenu']; ?></textarea>
			</div>
			<button type="submit" class="btn btn-default">Modifier</button>
		</form>
	</div>
</div>

<?php include('vues/includes/footer.php'); ?>
