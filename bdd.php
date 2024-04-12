<?php

function connectionBDD()
{
    $dsn = "pgsql:host=dpg-coagp3779t8c73ehtqjg-a.frankfurt-postgres.render.com;dbname=tradezusichen;port=5432;";
    $username = "tradezusichen_user";
    $password = "TfrKbwVdysyKri88siTQi7bgJN3Nud1j";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Connection error: " . $e->getMessage());
    }
}

function searchGamesByName($gameName)
{
    $pdo = connectionBDD();

    try {
        $stmt = $pdo->prepare("SELECT * FROM annonces WHERE nom_jeu ILIKE :nom_jeu");
        $gameName = '%' . $gameName . '%';
        $stmt->bindParam(':nom_jeu', $gameName);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
}
