<?php
require_once(__DIR__ . '/oeuvres.php');

$oeuvreID = $_GET["id"];
$o = NULL;
foreach ($oeuvres as $oeuvre) {
    if ($oeuvre["id"] === (int) $oeuvreID) {
        $o = $oeuvre;
    }
};
?>

<!-- inclusion du header du site -->
<?php require_once(__DIR__ . '/header.php'); ?>

<main>


    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src=<?php echo $o["imgSrc"] ?> alt=<?php echo $o["title"] ?>>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $o["title"] ?></h1>
            <p class="description"><?php echo $o["artist"] ?></p>
            <p class="description-complete">
                <?php echo $o["description"] ?>
            </p>
        </div>
    </article>


</main>

<!-- inclusion du footer du site -->
<?php require_once(__DIR__ . '/footer.php'); ?>