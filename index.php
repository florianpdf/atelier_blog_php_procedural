<!-- Contrôleur global du blog / Point d'entré -->

<?php

// include_once est similaire à include, cependant il permet de vérifier que l'inclusion n'est effectué qu'une fois au sein de la page, contrairement à include
include_once('modeles/connexion_bdd.php');


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleurs/show_articles.php');
}