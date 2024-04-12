<?php

function product_view()
{
    require_once('Model.php');
    include('header.php');

    $annonces = product_model();

?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produits - Tradezusichen</title>
    </head>

    <body>
        <?php header_view(); ?>
        <main>
            <div class='card-container'>
                <?php
                if (!empty($annonces)) {
                    foreach ($annonces as $annonce) {
                        echo "<div class='annonce'>";
                        echo "<h2>Nom du Jeu: " . htmlspecialchars($annonce['nom_jeu']) . "</h2>";
                        echo "<p>Description: " . htmlspecialchars($annonce['descriptions']) . "</p>";
                        echo "<p>Adresse: " . htmlspecialchars($annonce['adresse']) . "</p>";
                        echo "<img src='" . htmlspecialchars($annonce['images']) . "' alt='" . htmlspecialchars($annonce['nom_jeu']) . "'>";
                        echo "<p>Prix: " . htmlspecialchars($annonce['prix']) . "€</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Aucun jeu trouvé.</p>";
                }
                ?>
            </div>
        </main>
    </body>

    </html>
<?php
}
?>