<?php require_once(__DIR__ . '/artworks.php'); ?>

<!-- inclusion du header du site -->
<?php require_once(__DIR__ . '/header.php'); ?>

<main>
    <div id="liste-artworks">

        <!-- Boucle sur le tableau des artworks pour factoriser l'affichage -->
        <?php foreach ($artworks as $artwork) : ?>
            <article class="artwork">
                <a href="artwork.php?id=<?php echo $artwork["id"] ?>">
                    <img src=<?php echo $artwork["imgSrc"] ?> alt=<?php echo $artwork["title"] ?>>
                    <h2><?php echo $artwork["title"] ?></h2>
                    <p class="description"><?php echo $artwork["artist"] ?></p>
                </a>
            </article>
        <?php endforeach ?>


    </div>
</main>


<!-- inclusion du footer du site -->
<?php require_once(__DIR__ . '/footer.php'); ?>