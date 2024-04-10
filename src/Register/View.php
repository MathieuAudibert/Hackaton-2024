<?php
function register_view(){
    include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Tradezusichen</title>
</head>
<body>
<?php 
        header_view();
    ?>

    <div class="register-container">
        <h2>Inscription</h2>
        <form action="#" method="post">
        <input type="email" name="email" placeholder="Adresse email" required><br>
            <input type="text" name="nom" placeholder="Nom" required><br>
            <input type="text" name="prenom" placeholder="Prénom" required><br>
            <input type="tel" name="tel" placeholder="Numéro de téléphone" required><br>
            <input type="password" name="password" placeholder="Mot de passe" required><br>
            <button type="submit">S'inscrire</button>
        </form>
        <a href="/Login" class="login-link">Déjà membre ? Connectez-vous ici</a>
    </div>
</body>
</html>


<?php 
}
?>