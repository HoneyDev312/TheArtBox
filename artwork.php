<?php
require_once(__DIR__ . '/artworks.php');

$artworkID = $_GET["id"];
$a = NULL;
foreach ($artworks as $artwork) {
    if ($artwork["id"] === (int) $artworkID) {
        $a = $artwork;
    }
};
?>

<!-- inclusion du header du site -->
<?php require_once(__DIR__ . '/header.php'); ?>

<main>


    <article id="detail-artwork">
        <div id="img-artwork">
            <img src=<?php echo $a["imgSrc"] ?> alt=<?php echo $a["title"] ?>>
        </div>
        <div id="content-artwork">
            <h1><?php echo $a["title"] ?></h1>
            <p class="description"><?php echo $a["artist"] ?></p>
            <p class="description-complete">
                <?php echo $a["description"] ?>
            </p>
        </div>
    </article>


</main>

<!-- inclusion du footer du site -->
<?php require_once(__DIR__ . '/footer.php'); ?>