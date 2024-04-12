<?php
function profile_model()
{
?>

    <script type='module'>
        import {
            initializeApp
        } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js';
        import {
            getAuth,
            sendPasswordResetEmail
        } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js';
        import {
            deleteUser
        } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js';

        const firebaseConfig = {
            apiKey: "AIzaSyA4PmTzEru7hUfMOW5TnQ5jDl0FfaT-_DE",
            authDomain: "tradezusichen.firebaseapp.com",
            projectId: "tradezusichen",
            storageBucket: "tradezusichen.appspot.com",
            messagingSenderId: "291078705812",
            appId: "1:291078705812:web:d728665ea26da5f04d5a81",
            measurementId: "G-0J9HVDGQMQ"
        };

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

        window.addEventListener('DOMContentLoaded', (event) => {
            const deleteAccountButton = document.getElementById('deleteAccount');
            deleteAccountButton.addEventListener('click', () => {
                const user = auth.currentUser;
                if (user) {
                    deleteUser(user).then(() => {
                        alert('Account deleted successfully.');
                        window.location.href = '/Login';
                    }).catch((error) => {
                        alert('Failed to delete user account: ' + error.message);
                    });
                } else {
                    alert('No user logged in or user not loaded.');
                }
            });
        });
    </script>





<?php
}
?>