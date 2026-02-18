<?php
session_start();

require_once(__DIR__ . '/databaseconnect.php');

$artwork_title = htmlspecialchars(trim($_POST['title'] ?? ''));
$artwork_artist = htmlspecialchars(trim($_POST['artist'] ?? ''));
$artwork_url = htmlspecialchars(trim($_POST['url'] ?? ''));
$artwork_description = htmlspecialchars(trim($_POST['description'] ?? ''));
$errors = [];

$_SESSION['FORM_ANSWERS'] = [
    "title" => $artwork_title,
    "artist" => $artwork_artist,
    "url" => $artwork_url,
    "description" => $artwork_description
];

if (empty($artwork_title)) {
    $errors[] =  "Le titre n'est pas valide";
}

if (empty($artwork_artist)) {
    $errors[] = "Le nom de l'artiste n'est pas valide";
}

if (!filter_var($artwork_url, FILTER_VALIDATE_URL)) {
    $errors[] =  "Le lien doit être une URL valide (https://...).";
}

if (mb_strlen($artwork_description) < 3) {
    $errors[] = "La description n'est pas valide";
}

if (!empty($errors)) {
    $_SESSION['FORM_ERRORS'] = $errors;
    header('Location: add_artwork.php', true, 303);
    exit;
}


try {
    // Ecriture de la requête
    $sqlQuery = 'INSERT INTO artworks (title, artist, url, description) VALUES (:title, :artist, :url, :description)';

    // Préparation
    $createArtwork = $mysqlClient->prepare($sqlQuery);

    // Exécution ! La recette est maintenant en base de données
    $createArtwork->execute([
        'title' => $artwork_title,
        'artist' => $artwork_artist,
        'url' => $artwork_url,
        'description' => $artwork_description,
    ]);

    // recharge la page recette
    header('Location: artwork.php?id=' . $mysqlClient->lastInsertId());
    unset($_SESSION['FORM_ERRORS']);
    unset($_SESSION['FORM_ANSWERS']);

    exit;
} catch (PDOException $e) {
    // ⚠️ En prod on log plutôt que d'afficher
    echo "Erreur SQL : " . $e->getMessage();
    exit;
}
