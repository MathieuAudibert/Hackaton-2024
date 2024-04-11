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
<?php header_view(); ?>
    
    <div class="register-container" id='register-container'>
        <h2>Inscription</h2>
        <form id="register-form">
            <input type="email" id='register-email' placeholder="Adresse email" required><br>
            <input type="password" id='register-password' placeholder="Mot de passe" required><br>
            <input type="nom" id='register-nom' placeholder="nom" required><br>
            <input type="prenom" id='register-prenom' placeholder="prenom" required><br>
            <input type="adresse" id='register-adresse' placeholder="Adresse" required><br>
            <input type="Tel" id='register-tel' placeholder="tel" required><br>
            <button type="submit">S'inscrire</button>
        </form>

        <a href="/Login" class="login-link">Déjà membre ? Connectez-vous ici</a>
    </div>

</body>
</html>

<?php 
}
?>