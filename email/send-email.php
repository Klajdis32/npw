<?php

require __DIR__ . "/vendor/autoload.php";

$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "beabeastgr@gmail.com";
$mail->Password = "ccin alwe xohl wfcu";

$mail->setFrom($email, $name); // Έχεις ξεχάσει να ορίσεις την μεταβλητή $name
$mail->addAddress("beabeastgr@gmail.com", "Klajdi Cami");

// Στον τίτλο του email προσθέτουμε το πεδίο Subject
$mail->Subject = "$subject";

// Στο κείμενο του email προσθέτουμε τα πεδία Message
$mail->Body = "Email: $email\nSubject: $subject\nMessage:\n$message";

try {
    $mail->send();
    header("Location: /NewPersonalWebsite/contact.php?success=Το μήνυμα στάλθηκε με επιτυχία! Θα λάβετε μια απάντηση το συντομότερο δυνατό.");
} catch (Exception $e) {
    header("Location: /NewPersonalWebsite/contact.php?error=Το μήνυμα δεν στάλθηκε, κάτι πήγε στραβά!");
}