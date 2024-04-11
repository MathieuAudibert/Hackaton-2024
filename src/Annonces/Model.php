<?php

function createAnnonce($jeu, $prix, $description, $adresse, $image) {
    $dsn = "pgsql:host=dpg-coagp3779t8c73ehtqjg-a.frankfurt-postgres.render.com;dbname=tradezusichen;port=5432;";
    $username = "tradezusichen_user";
    $password = "TfrKbwVdysyKri88siTQi7bgJN3Nud1j";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $requete = "INSERT INTO annonces(nom_jeu, prix, image, description, adresse, vendeur) VALUES (?, ?, ?, ?, ?, 1)";
        $req = $pdo->prepare($requete);
        $resultat = $req->execute([$jeu, $prix, $description, $adresse, $image]);

        return $resultat;

    } catch (PDOException $e) {
        echo "Erreur de la base de données : " . $e->getMessage();
        return false;
    }
}
?>