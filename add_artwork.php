<!-- inclusion du header du site -->
<?php require_once(__DIR__ . '/header.php'); ?>

<form action="submit_artwork.php" method="post">
    <div class='field-form'>
        <label for="title">Titre de l' oeuvre :</label>
        <input type="text" id="title" title="title" required>
    </div>

    <div class='field-form'>
        <label for="name">Nom de l'artiste :</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class='field-form'>
        <label for="description">Description de l'oeuvre :</label>
        <textarea id="story" name="story" rows="5" cols="33" required>Décrivez l'oeuvre ....
        </textarea>
    </div>

    <div class='field-form'>
        <label for="picture">Photo sde l'oeuvre</label>
        <input type="file" id="picture" name="picture" required />
    </div>

    <button type="submit">Envoyer</button>

</form>


<!-- inclusion du footer du site -->
<?php require_once(__DIR__ . '/footer.php'); ?>