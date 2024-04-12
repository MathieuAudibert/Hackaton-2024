<?php
function profile_model() {
    ?>

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

    const ForgotPassLabel = document.getElementById("forgotpasslabel2");

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





<?php
}
?>