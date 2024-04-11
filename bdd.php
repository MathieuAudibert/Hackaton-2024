<?php

function connectionBDD(){

$dsn = "pgsql:host=dpg-coagp3779t8c73ehtqjg-a.frankfurt-postgres.render.com;dbname=tradezusichen;port=5432;";

$username = "tradezusichen_user";
$password = "TfrKbwVdysyKri88siTQi7bgJN3Nud1j";

    try {
    $pdo = new PDO($dsn, $username, $password);
    echo 'Connecté a la BDD!';
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}}
?>