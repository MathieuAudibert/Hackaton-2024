<?php

session_start();
function header_view() {
    $userIsLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include './Style.css'; ?>
    </style>
</head>
<body>
    <header>
        <section class='header_left'>
            <img src="https://i.ibb.co/QQTGL08/logo.png" alt="Logo Site">
            <h1> <a href='/'>Tradezusichen</a></h1>
        </section>
        <section class='header_center'>
            <ul>
                <li>Produits</li>
                <li> <a href='/Create'>Creer une annonce </a></li>
                <li>A propos</li>
            </ul>
        </section>

        <?php if ($userIsLoggedIn): ?>
            <section class='header_right'>
                <ul>
                    <li class='userIcon'> <a href='/Profile'><img src='https://i.ibb.co/user-icon.png' alt='Profile'></a> </li>
                    <li> <a href='/Logout'><img src='https://i.ibb.co/mtGpPJy/se-deconnecter-1.png' alt='Logout'></a> </li>
                </ul>
            </section>
        <?php else: ?>
            <section class='header_right'>
                <ul>
                    <li class='loginIcon'> <a href='/Login'><img src='https://i.ibb.co/hfkwtfm/enter.png' alt='Login'></a> </li>
                    <li> <a href='/Register'><img src='https://i.ibb.co/r3RjCKv/add-user.png' alt='register'></a> </li>
                </ul>
            </section>
        <?php endif; ?>
    </header>
</body>
</html>

<?php
}
?>
