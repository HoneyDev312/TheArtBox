<?php
require_once(__DIR__ . '/oeuvres.php');
?>

<!-- inclusion du header du site -->
<?php require_once(__DIR__ . '/header.php'); ?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="img/clark-van-der-beken.png" alt="Dodomu">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $artworks[0]["title"]; ?></h1>
            <p class="description">Mia Tozerski</p>
            <p class="description-complete">
                Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu ("domicile" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu'elle partage, ayant elle-même dû quitter son foyer. L'œuvre évoque le drapeau liquéfié d'une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d'émotion est le symbole d'un événement qui marquera l'Histoire. Cette peinture à l'acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes.
            </p>
        </div>
    </article>
</main>

<!-- inclusion du footer du site -->
<?php require_once(__DIR__ . '/footer.php'); ?>