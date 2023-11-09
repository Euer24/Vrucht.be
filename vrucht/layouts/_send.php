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

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gerritdeslak651@gmail.com';
    $mail->Password = 'jekj rtnh mnhr kkue';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress('gerritdeslak651@gmail.com'); 

    $mail->isHTML(true);
    $mail->Subject = 'Contact form submission';
    $mail->Body    = $opmerking;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}

?>