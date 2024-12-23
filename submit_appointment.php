<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pneumoconsult"; // Remplacez par le nom de votre base de données

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $heure = $_POST['time'];

    $sql = "INSERT INTO rendezvous (name, email, date, heure) VALUES ('$name', '$email', '$date', '$heure')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Rendez-vous enregistré avec succès"]);
    } else {
        echo json_encode(["success" => false, "message" => "Erreur : " . $sql . "<br>" . $conn->error]);
    }

    $conn->close();
}
?>
