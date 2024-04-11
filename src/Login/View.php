<?php
    function Login_View(){
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
    <div class="login-container">
        <h2>Connexion</h2>
        <form action="#" method="post" id='login-form'>
            <input class="email-form" id='email-form' type="text" name="email" placeholder="Email" required><br>
            <input class="password-form" id='password-form'type="password" name="password" placeholder="Mot de passe" required><br>
            <button class="button-submit" type="submit" class="login-button">Connexion</button>
        </form>
        <a href="#" class="forgot-password" id='forgotpasslabel'>Mot de passe oublié ?</a><br>
        <a href="/Register" class="no-account">Vous n'avez pas encore de Compte ? Créez-en un.</a>
    </div>
    </main>

</body>

</html>

<?php 
}
?>