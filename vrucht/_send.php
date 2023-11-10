<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require'phpmailer/src/Exception.php';
require'phpmailer/src/PHPMailer.php';
require'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $opmerking = $_POST['opmerking'];

    // kijkt of een van de velden leeg is
    if (empty($name) || empty($email) || empty($opmerking)) {
        echo 'Vul AUB alle velden in.';
        return;
    }

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gerritdeslak651@gmail.com';//vul hier je eigen email in
    $mail->Password = '';//password key
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress($email); 

    $mail->isHTML(true);
    $mail->Subject = 'Mail servertest';
    $mail->Body    = $opmerking;

    if(!$mail->send()) {
        echo 'De mail is niet verzonden.';//onsuccesvol bericht
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'De mail is verzonden';//succesvol bericht
    }
}
?>