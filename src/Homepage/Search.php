<?php

// Inclure ce fichier dans 'Search.php'

function searchGamesByName($gameName) {
    $host = 'localhost';  // L'adresse du serveur de base de données
    $dbname = 'ma_base_de_donnees';  // Le nom de votre base de données
    $username = 'mon_utilisateur';  // Votre nom d'utilisateur pour la base de données
    $password = 'mon_mot_de_passe';  // Votre mot de passe pour la base de données

    try {
        // Création d'une nouvelle instance de PDO pour la connexion à la base de données
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Définition du mode d'erreur PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparation de la requête SQL
        $stmt = $conn->prepare("SELECT * FROM jeux WHERE nom_jeu LIKE :gameName");
        // Liaison du paramètre :gameName à la variable $gameName
        $stmt->bindParam(':gameName', $gameName);
        // Exécution de la requête
        $stmt->execute();

        // Récupération des résultats
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
        return [];  // Retourner un tableau vide en cas d'erreur
    }
}
