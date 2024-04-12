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
        echo "Erreur de connexion : " . $e->getMessage();
        return null;
    }
}

function createUserInDatabase($email, $nom, $prenom, $tel)
{
    $pdo = connectionBDD();

    if ($pdo) {
        try {
            $query = "INSERT INTO users (email, nom, prenom, tel) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($query);
            if ($stmt->execute([$email, $nom, $prenom, $tel])) {
                echo "Utilisateur enregistré dans la base de données avec succès!";
                return true;
            } else {
                echo "Erreur lors de l'insertion dans la base de données.";
                return false;
            }
        } catch (PDOException $e) {
            echo "Erreur PDO : " . $e->getMessage();
            return false;
        }
    } else {
        echo "Problème de connexion à la base de données.";
        return false;
    }
}
