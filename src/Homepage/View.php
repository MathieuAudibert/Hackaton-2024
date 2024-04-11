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
        </main>

    </body>
    <script>
        // Définir l'index de la diapositive actuelle
        var slideIndex = 1;

        // Afficher la première diapositive au chargement de la page
        showSlides(slideIndex);

        // Fonction pour passer à la diapositive suivante ou précédente
        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        // Fonction pour passer à une diapositive spécifique
        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        // Fonction principale pour afficher les diapositives
        function showSlides(n) {
            var i;

            // Récupérer toutes les diapositives et les points (dots) dans le document
            var slides = document.getElementsByClassName("custom-slider");
            var dots = document.getElementsByClassName("dot");

            // Si l'index de la diapositive dépasse le nombre total de diapositives, revenir à la première
            if (n > slides.length) {
                slideIndex = 1;
            }

            // Si l'index de la diapositive est inférieur à 1, passer à la dernière diapositive
            if (n < 1) {
                slideIndex = slides.length;
            }

            // Masquer toutes les diapositives
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // Retirer la classe "active" de tous les points
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            // Afficher la diapositive actuelle et marquer le point comme "actif"
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    </html>

<?php
}
?>