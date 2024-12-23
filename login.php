<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Informations d'identification de l'admin
    $admin_username = "admin";
    $admin_password = "435894";  // Utilisez un mot de passe haché dans une vraie application

    // Vérifiez si les identifiants sont corrects
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['loggedin'] = true; // Déclare l'utilisateur comme étant connecté
        header("Location: liste_rendezvous.php"); // Redirige vers la liste des rendez-vous après connexion
        exit();
    } else {
        echo "<p>Nom d'utilisateur ou mot de passe incorrect.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="style_liste_rendezvous.css">
</head>
<body>
    <div class="container">
        <h1>Connexion Admin</h1>
        <form method="post" action="login.php">
            <div>
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Connexion</button>
            </div>
        </form>
    </div>
</body>
</html>
