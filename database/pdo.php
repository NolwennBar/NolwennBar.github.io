<?php

try {

    // Connexion à la base de données via PDO
    $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=u442817679_portfolio', 'u442817679_nolwennbar', 'NBmysq05+');

    // Gestion de l'exception en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $exception) {

    // Affiche le message d'erreur
    echo $exception->getMessage();

    // Stop le code
    exit();
}