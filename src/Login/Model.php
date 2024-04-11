<?php
function login_model() {
    ?>

<script type="module" src="C:\Cours\B2\Hackaton\Hackaton-2024\src\firebase.js"></script>
    <script type='module'>

        import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js';
import { getAuth, signInWithEmailAndPassword , sendPasswordResetEmail } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js';
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
    export {auth, signInWithEmailAndPassword, sendPasswordResetEmail };



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

    document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email-form').value;
    const password = document.getElementById('password-form').value;

    signInWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
        console.log("Connexion réussie");
        <?php 
    $_SESSION['user_logged_in'] = true;
    ?>
        window.location.href = '/'; 
    })
    .catch((error) => {
        console.error("Erreur de connexion: ", error);
    });
});
    </script>
    <?php
}
?>
