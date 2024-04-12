<?php
function Home_View()
{
    include('header.php');
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
                        <img class="slide-img" src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/items/682990/795736da70d07171558b191837d649ce78f85a2a.jpg" alt="GTA">
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
            <div class='card-container'>
                <?php
                // Appel à la fonction pour récupérer les annonces depuis la base de données
                $annonces = getAnnoncesFromDatabase();

                foreach ($annonces as $annonce) {
                ?>
                    <div class="annonce">
                        <h2><?php echo $annonce['nom_jeux']; ?></h2>
                        <p><?php echo $annonce['description']; ?></p>
                        <img src="<?php echo $annonce['image']; ?>" alt="<?php echo $annonce['nom_jeux']; ?>">
                        <p>Prix : <?php echo $annonce['prix']; ?></p>
                    </div>
                <?php
                }
                ?>

            </div>
        </main>

    </body>

    </html>

<?php
}
function getAnnoncesFromDatabase()
{
    // Connexion à la base de données
    $dsn = "pgsql:host=dpg-coagp3779t8c73ehtqjg-a.frankfurt-postgres.render.com;dbname=tradezusichen;port=5432;";
    $username = "tradezusichen_user";
    $password = "TfrKbwVdysyKri88siTQi7bgJN3Nud1j";

    try {
        $pdo = new PDO($dsn, $username, $password);

        // Exécution de la requête SQL pour récupérer les annonces
        $query = "SELECT * FROM annonces";
        $stmt = $pdo->query($query);

        // Récupération des résultats
        $annonces = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $annonces;
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        return array(); // Retourne un tableau vide en cas d'erreur
    }
}
?>