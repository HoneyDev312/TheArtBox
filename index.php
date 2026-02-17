<?php require_once(__DIR__ . '/oeuvres.php'); ?>

<!-- inclusion du header du site -->
<?php require_once(__DIR__ . '/header.php'); ?>

<main>
    <div id="liste-oeuvres">

        <!-- Boucle sur le tableau des oeuvres pour factoriser l'affichage -->
        <?php foreach ($oeuvres as $oeuvre) : ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $oeuvre["id"] ?>">
                    <img src=<?php echo $oeuvre["imgSrc"] ?> alt=<?php echo $oeuvre["title"] ?>>
                    <h2><?php echo $oeuvre["title"] ?></h2>
                    <p class="description"><?php echo $oeuvre["artist"] ?></p>
                </a>
            </article>
        <?php endforeach ?>


    </div>
</main>


<!-- inclusion du footer du site -->
<?php require_once(__DIR__ . '/footer.php'); ?>;