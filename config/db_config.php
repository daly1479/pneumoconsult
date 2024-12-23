<?php
$host = 'localhost';
$dbname = 'pneumoconsult'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur par défaut pour XAMPP
$password = ''; // Mot de passe par défaut pour XAMPP

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
