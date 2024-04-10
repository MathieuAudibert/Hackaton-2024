<?php
function header_view(){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include './Style.css'?>
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
                <li> <a href='/Annonces'> Creer une annonce </a></li>
                <li>A propos</li>
            </ul>
        </section>

        <section class='header_right'>
            <ul>
                <li class='loginIcon'> <a href='/Login'><img src='https://i.ibb.co/hfkwtfm/enter.png' alt='Login'></a> </li>
                <li> <a href='/Register'><img src='https://i.ibb.co/r3RjCKv/add-user.png' alt='register'></a> </li>
            </ul>
        </section>
    </header>
</body>
</html>

<?php
}
?>