<?php

require_once(__DIR__ . '/databaseconnect.php');

try {
    // Ecriture de la requête
    $sqlQuery = 'SELECT * FROM artworks ';

    // Préparation
    $getAllArtworks = $mysqlClient->prepare($sqlQuery);
    // Exécution
    $getAllArtworks->execute();
    // Fetch
    $artworks = $getAllArtworks->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // ⚠️ En prod on log plutôt que d'afficher
    echo "Erreur SQL : " . $e->getMessage();
    exit;
}
