<?php
session_start();
?>

<!-- inclusion du header du site -->
<?php require_once(__DIR__ . '/header.php'); ?>


<?php if (!empty($_SESSION['FORM_ERRORS'])) : ?>
    <div class="error-container">

        <?php foreach ($_SESSION['FORM_ERRORS'] as $error) : ?>
            <h3><?= htmlspecialchars($error) ?></h3>
        <?php endforeach; ?>

        <a href="add_artwork.php" class="default-btn">RETOUR AU FORMULAIRE</a>
    </div>

    <?php unset($_SESSION['FORM_ERRORS']); ?>
<?php else: ?>
    <form action="submit_artwork.php" method="post">

        <div class='field-form'>
            <label for="title">Titre de l' oeuvre :</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($_SESSION['FORM_ANSWERS']["title"] ?? '') ?>">
        </div>

        <div class='field-form'>
            <label for="artist">Nom de l'artiste :</label>
            <input type="text" id="artist" name="artist" value="<?php echo htmlspecialchars($_SESSION['FORM_ANSWERS']["artist"] ?? '') ?>">
        </div>

        <div class='field-form'>
            <label for="url">URL de l'image</label>
            <input type="url" name="url" id="url" value="<?php echo htmlspecialchars($_SESSION['FORM_ANSWERS']["url"] ?? '') ?>">
        </div>

        <div class='field-form'>
            <label for="description">Description de l'oeuvre :</label>
            <textarea id="description" name="description" placeholder="Décrivez l'oeuvre ....">
                <?php echo htmlspecialchars($_SESSION['FORM_ANSWERS']["description"] ?? '') ?>
            </textarea>
        </div>

        <button type="submit" class="default-btn">Envoyer</button>

    </form>
<?php endif; ?>




<!-- inclusion du footer du site -->
<?php require_once(__DIR__ . '/footer.php'); ?>