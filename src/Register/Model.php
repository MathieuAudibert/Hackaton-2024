<?php 
function register_model(){
?>
<script type="module" src="C:\Cours\B2\Hackaton\Hackaton-2024\src\firebase.js"></script>
<script type="module">
import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js';
import { getAuth, createUserWithEmailAndPassword } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js';

const firebaseConfig = {
    apiKey: "AIzaSyA4PmTzEru7hUfMOW5TnQ5jDl0FfaT-_DE",.$_ENV["TOKEN.apiKey"]
    authDomain: "tradezusichen.firebaseapp.com",
    projectId: "tradezusichen",
    storageBucket: "tradezusichen.appspot.com",
    messagingSenderId: "291078705812",
    appId: "1:291078705812:web:d728665ea26da5f04d5a81",
    measurementId: "G-0J9HVDGQMQ"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth();
export { auth, createUserWithEmailAndPassword };

        
        document.getElementById('register-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const email = document.getElementById('register-email').value;
            const password = document.getElementById('register-password').value;

            createUserWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    console.log("inscription good")
                    window.location.href = '/Login'; 
                })
                .catch((error) => {
                    console.error("Erreur d'inscription: ", error);
                });
        });
        </script>



<?php 


}?>