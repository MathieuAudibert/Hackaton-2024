<?php
function apropos_view()
{
    include('header.php');
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Propos - Tradezusichen</title>
    </head>

    <body>
        <?php header_view(); ?>
        <div class="mid_apropos">
            <h1 class="apropos_h1"> A propos</h1>
            <p class="apropos_p"> Nous sommes 5 étudiants en 2ème année a l'Efrei.
                Nous devions réaliser ce projet en 3jours en vue d'une soutenance lors du 4ème jour.
            </p>
            <br>
            <br>

            <div class="apropos_mail">
                <p>Contact:</p>
                lucien.jeammet@efrei.net
                <br>
                romeo.agostino@efrei.net
                <br>
                andrija.tomic@efrei.net
                <br>
                ismael.genet@efrei.net
                <br>
                mathieu.audibert@efrei.net
            </div>
            </main>
        </div>
    </body>

    </html>

<?php
}
?>