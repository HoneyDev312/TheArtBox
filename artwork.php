<?php
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/database.php');


$id_error = NULL;

if (isset($_GET["id"])) {
    $artworkID = (int) $_GET["id"];
    try {
        // Ecriture de la requête
        $sqlQuery = 'SELECT * FROM artworks WHERE artwork_id = :artwork_id';

        // Préparation
        $getArtwork = $mysqlClient->prepare($sqlQuery);
        // Exécution
        $getArtwork->execute([
            'artwork_id' => $artworkID
        ]);
        // Fetch
        $artwork = $getArtwork->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // ⚠️ En prod on log plutôt que d'afficher
        echo "Erreur SQL : " . $e->getMessage();
        exit;
    }
} else {
    $id_error = !isset($_GET["id"]);
}

$url_error = $id_error || empty($artwork)

?>

<!-- inclusion du header du site -->
<?php require_once(__DIR__ . '/header.php'); ?>

<main>
    <?php if ($url_error) : ?>
        <div class="error-container">
            <h3>Désolé, une erreur est survenue, veuillez retourner à la page d'acceuil</h3>
            <a href="index.php" class="default-btn">ACCUEIL</a>
        </div>
    <?php else : ?>
        <article id="detail-artwork">
            <div id="img-artwork">
                <img src=<?php echo $artwork["url"] ?> alt=<?php echo $artwork["title"] ?>>
            </div>
            <div id="content-artwork">
                <h1><?php echo $artwork["title"] ?></h1>
                <p class="description"><?php echo $artwork["artist"] ?></p>
                <p class="description-complete">
                    <?php echo $artwork["description"] ?>
                </p>
            </div>
        </article>

    <?php endif ?>
</main>

<!-- inclusion du footer du site -->
<?php require_once(__DIR__ . '/footer.php'); ?>