<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configuration SMTP
    $mail->isSMTP();
    $mail->SMTPDebug = 0; // 2Affiche les logs SMTP pour déboguer // 0Désactiver les logs SMTP pour un usage en production
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'douniarzzimou@gmail.com';
    $mail->Password   = 'gxppvyojrqpwsheq'; // ou mot de passe d'application
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    // Désactiver la vérification SSL temporairement
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    // Récupération des données du formulaire
    $nom = isset($_POST['nom']) && !empty($_POST['nom']) ? htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8') : 'Anonyme';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : 'email_inconnu@example.com';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : 'Message par défaut';

   
     // Paramètres de l'e-mail
     $mail->setFrom('douniarzzimou@gmail.com', 'PneumoConsult'); // Adresse et nom de l'expéditeur
     $mail->addAddress('douniarzzimou@gmail.com', 'PneumoConsult'); // Adresse de destination
     $mail->addReplyTo($email, $nom); // L'e-mail de réponse
     $mail->Subject = 'Nouveau message depuis PneumoConsult';

     // Corps du message
    $mail->Body = "Vous avez reçu un nouveau message :\n\n" .
    "Nom : $nom\n" .
    "Email : $email\n" .
    "Message :\n$message";


    // Envoyer l'e-mail
    $mail->send();
    echo 'E-mail envoyé avec succès.';
} catch (Exception $e) {
    echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
}
?>
