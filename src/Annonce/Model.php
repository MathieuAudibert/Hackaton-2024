<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

function createAnnonce($jeu, $prix, $description, $adresse, $image) {
    $dsn = "pgsql:host=dpg-coagp3779t8c73ehtqjg-a.frankfurt-postgres.render.com;dbname=tradezusichen;port=5432;";
    $username = "tradezusichen_user";
    $password = "TfrKbwVdysyKri88siTQi7bgJN3Nud1j";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = "INSERT INTO annonces(nom_jeu, prix, descriptions, adresse, images) VALUES (?, ?, ?, ?, ?)";
        $req = $pdo->prepare($requete);

        $req->execute([$jeu, $prix, $description, $adresse, $image]);
        header('Location: http://localhost:7777/');
        return true;
       
        exit();

    } catch (PDOException $e) {
        echo "Erreur de la base de données : " . $e->getMessage();
        return false;
    }
}
?>