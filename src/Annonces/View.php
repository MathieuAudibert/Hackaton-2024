<?php
function Annonces_view(){
    include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une annonce - Tradezusichen</title>
</head>
<body>
    <?php 
        header_view();
    ?>

    <div class="annonces-container">
        <h2>Créer une annonce</h2>
        <form action="#" method="post">
            <input type="text" name="nom_jeu" placeholder="Nom du Jeu" required><br>
            <input type="number" name="prix" placeholder="Prix de mise en vente (en €)" required><br>
            <input type="text" name="description" placeholder="Description du jeu" required><br>
            <input type="text" name="adresse" placeholder="Adresse de la vente" required><br>
            <input type="text" name="image" placeholder="Url de l'image du jeu" required><br>
            <button type="submit" name="Validation_annonce">Créer l'annonce</button>
        </form>
    </div>
</body>
</html>


<?php 
}
?>