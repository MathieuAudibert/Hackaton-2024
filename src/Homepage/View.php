<?php
// Inclure le fichier de connexion à la base de données
include('bdd.php');

// Fonction pour afficher la vue de la page d'accueil
function Home_View()
{
    // Inclure le header
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
    // Inclure le contenu du header
    header_view();
    ?>
    <main>

        <div class="slide-container">
            <?php
            // Se connecter à la base de données
            $pdo = connectionBDD();

            // Requête pour récupérer les annonces
            $sql = "SELECT nom_jeu, prix, images, descriptions, adresse FROM annonces";
            $stmt = $pdo->query($sql);

            // Afficher les annonces
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="custom-slider fade">
                    <a href="<?php echo $row['adresse']; ?>" target="_blank">
                        <img class="slide-img" src="<?php echo $row['images']; ?>" alt="<?php echo $row['nom_jeu']; ?>">
                    </a>
                </div>
            <?php
            }
            ?>
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
    </main>

</body>

</html>

<?php
}
?>
