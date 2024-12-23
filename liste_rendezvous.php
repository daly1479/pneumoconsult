<?php
session_start();

// Vérifiez si l'utilisateur est connecté en tant qu'administrateur
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si non connecté, redirigez vers la page de connexion
    header("Location: login.php");
    exit();
}

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pneumoconsult"; // Remplacez par le nom de votre base de données

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

$sql = "SELECT name, email, date, heure FROM rendezvous";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Rendez-vous</title>
    <link rel="stylesheet" href="style_liste_rendezvous.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/pneumologue-icon.png" alt="Pneumologue Logo" class="logo-icon">
            <span>Pneumo</span>Consult
        </div>
        <ul class="menu">
            <a href="index.html">Accueil</a>
            <a href="index.html#services">Services</a>
            <a href="index.html#comment ça marche ?">Comment ça marche ?</a>
            <a href="Prenez Rendez-Vous.html">Prenez Rendez-Vous</a>
            <a href="login.php">Liste des Rendez-Vous</a>
            <a href="logout.php">Déconnexion</a> <!-- Ajout d'un lien pour se déconnecter -->
        </ul>
        
    </header>
    <section class="appointment-list">
        <h1>Liste des Rendez-vous</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Heure</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["name"]. "</td>
                            <td>" . $row["email"]. "</td>
                            <td>" . $row["date"]. "</td>
                            <td>" . $row["heure"]. "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Aucun rendez-vous trouvé</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Réutilisez votre footer existant -->
        </div>
        <div class="footer-bottom">
            &copy; 2024 PneumoConsult | Tous droits réservés
        </div>
    </footer>
</body>
</html>
