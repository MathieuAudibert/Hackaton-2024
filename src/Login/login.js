import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js';
import { getAuth, signInWithEmailAndPassword } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js';
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
    export {auth, signInWithEmailAndPassword};

    document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email-form').value;
    const password = document.getElementById('password-form').value;

    signInWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
        console.log("Connexion réussie");
        window.location.href = '/'; 
    })
    .catch((error) => {
        console.error("Erreur de connexion: ", error);
    });
});