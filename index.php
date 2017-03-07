<!-- Contrôleur global du blog / Controlleur frontal / Point d'entré -->

<?php

// include_once est similaire à include, cependant il permet de vérifier que l'inclusion n'est effectué qu'une fois au sein de la page, contrairement à include
include_once('modeles/connexion_bdd.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleurs/show_articles_action.php');
}
elseif ($_GET['section'] == 'add')
{
    include_once('controleurs/add_articles_action.php');
}
elseif ($_GET['section'] == 'delete')
{
    include_once('controleurs/delete_article_action.php');
}
elseif ($_GET['section'] == 'update')
{
    include_once('controleurs/update_article_action.php');
}
else
{
	echo "error";
}
