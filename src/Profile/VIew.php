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
    <link rel="shortcut icon" href="#" type="image/x-icon">
</head>
<body>
    <?php header_view(); ?>
    <main>
        <button id='forgotpasslabel' style='cursor:pointer'>Forgot password</button>
    </main>
</body>
<script type='module'>
    import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js';
    import { getAuth, sendPasswordResetEmail } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js';

    // Configuration Firebase
    const firebaseConfig = {
        apiKey: "AIzaSyA4PmTzEru7hUfMOW5TnQ5jDl0FfaT-_DE",
        authDomain: "tradezusichen.firebaseapp.com",
        projectId: "tradezusichen",
        storageBucket: "tradezusichen.appspot.com",
        messagingSenderId: "291078705812",
        appId: "1:291078705812:web:d728665ea26da5f04d5a81",
        measurementId: "G-0J9HVDGQMQ"
    };

    // Initialisation de Firebase
    const app = initializeApp(firebaseConfig);
    const auth = getAuth();

    const ForgotPassLabel = document.getElementById("forgotpasslabel");

    const ForgotPassword = () => {
        const emailInput = prompt("Please enter your email:");
        if (emailInput) {
            sendPasswordResetEmail(auth, emailInput)
            .then(() => {
                alert('Email sent');
            })
            .catch((error) => {
                console.error(error.code);
            });
        }
    };

    ForgotPassLabel.addEventListener('click', ForgotPassword);
</script>
</html>
<?php
}
?>
        