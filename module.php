<?php
// config.php - Connexion à la base de données

$host = 'localhost';
$dbname = 'dahira_muqtafina';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Activer la gestion des erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Message d'erreur propre
    die("Erreur critique de connexion au serveur : " . $e->getMessage());
}
?>