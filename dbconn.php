<?php
// Informations pour se connecter à la base de données
$db_host = "localhost";
$db_name = "name_table(exple db_garage)";
$db_user = "root";
$db_password = "root";

try {
    // Créer la connexion à la base de données avec PDO
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Définir le jeu de caractères 
    $conn->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message d'erreur et arrêter l'exécution du script
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
