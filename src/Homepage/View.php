<?php
function Home_View()
{
    include('header.php');
    require_once('Getannonces.php');


    $annonces = [];
    if (isset($_POST['search']) && !empty($_POST['nom_jeu'])) {
        $nom_jeu = '%' . $_POST['nom_jeu'] . '%';
        $annonces = searchGamesByName($nom_jeu);
    } else {
        $annonces = getAnnoncesFromDatabase();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tradezusichen</title>
        <link rel="shortcut icon" href="#" type="image/x-icon">
    </head>

    <body>
        <?php
        header_view();
        ?>
        <main>

            <div class="slide-container">
                <div class="custom-slider fade">
                    <a href="https://www.instant-gaming.com/fr/" target="_blank">
                        <img class="slide-img" src="https://images.alphacoders.com/134/1343294.jpeg" alt="Assasin">
                    </a>
                </div>
                <div class="custom-slider fade">
                    <a href="https://www.instant-gaming.com/fr/" target="_blank">
                        <img class="slide-img" src="https://wallpapercave.com/wp/wp1809630.jpg" alt="Battlefield">
                    </a>
                </div>
                <div class="custom-slider fade">
                    <a href="https://www.instant-gaming.com/fr/" target="_blank">
                        <img class="slide-img" src="https://getwallpapers.com/wallpaper/full/f/4/2/1297151-bo2-wallpaper-1920x1080-ios.jpg" alt="Dark Souls">
                    </a>
                </div>
                <div class="custom-slider fade">
                    <a href="https://www.instant-gaming.com/fr/" target="_blank">
                        <img class="slide-img" src="https://images.alphacoders.com/135/1353166.png" alt="Ghost Recon">
                    </a>
                </div>
                <div class="custom-slider fade">
                    <a href="https://www.instant-gaming.com/fr/" target="_blank">
                        <img class="slide-img" src="https://wallpapers.com/images/hd/fortnite-save-the-world-mode-apocalypse-hd-2q39ddatw7avor08.jpg" alt="GTA">
                    </a>
                </div>

                <div class="custom-slider fade">
                    <a href="https://www.instant-gaming.com/fr/" target="_blank">
                        <img class="slide-img" src="https://steamuserimages-a.akamaihd.net/ugc/2185995445883870512/1415A42383F673D3E4A210153AEB0BB2A25BD3DD/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt="Minecraft">
                    </a>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div class="slide-dot">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
            </div>

            <div class="top-games">
                <h1>Jeux du moment</h1>
            </div>

            <div class="searchbar">
                <form method="post">
                    <input type="text" name="nom_jeu" placeholder="Rechercher un jeu" required>
                    <button type="submit" name="search">Recherche</button>
                </form>
            </div>

            <div class='card-container'>
                <?php
                if (!empty($annonces)) {
                    foreach ($annonces as $annonce) {
                        echo "<div class='annonce'>";
                        echo "<h2>Nom du Jeu: " . htmlspecialchars($annonce['nom_jeu']) . "</h2>";
                        echo "<p>Descriptions: " . htmlspecialchars($annonce['descriptions']) . "</p>";
                        echo "<p>Adresse: " . htmlspecialchars($annonce['adresse']) . "</p>";
                        echo "<img src='" . htmlspecialchars($annonce['images']) . "' alt='" . htmlspecialchars($annonce['nom_jeu']) . "'>";
                        echo "<p>Prix: " . htmlspecialchars($annonce['prix']) . "€</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No games found.</p>";
                }
                ?>
            </div>
        </main>

    </body>

    </html>

<?php
}

?>