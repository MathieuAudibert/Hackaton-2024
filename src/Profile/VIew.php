<?php
function profile_view(){
    include('header.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradezusichen</title>
    <link rel="style" href="">
    <link rel="shortcut icon" href="#" type="image/x-icon">
</head>
<body>
    <?php header_view(); ?>
    <main>
    <div class="profile-container">
            <h2>Profil</h2>
            <div class="profile-details">
                <p>Nom d'utilisateur: [Nom d'utilisateur]</p>
                <p>Email: [Email de l'utilisateur]</p>
            </div>
            <a href="/EditProfile" class="edit-profile-link">Modifier le profil</a>
            <a href="/Logout" class="logout-link">Déconnexion</a>
            <button id='forgotpasslabel2' style='cursor:pointer'>Forgot password</button>

        </div>







    </main>
</body>

</html>
<?php
}
?>
        