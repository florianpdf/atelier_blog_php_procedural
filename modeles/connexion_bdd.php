<?php

// Connection base de donnée
// Permet de renvoyer les message d'erreur sql
try {
    $bdd = new PDO('mysql:host=localhost;dbname=wild_blog', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}