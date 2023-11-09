<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/contact.css">
</head>
<body>
<?php include 'layouts/navbar.php'; ?>
<h1>Contact</h1>
<br><br><br><br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $opmerking = $_POST['opmerking'];

    $to = 'euer2017@gmail.com';
    $subject = 'Test';
    $message = "Name: $name\nEmail: $email\nOpmerking: $opmerking";
    $headers = 'From: euer2017@gmail.com';

    mail($to, $subject, $message, $headers);
}
?>

<form action="" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="opmerking">Opmerking:</label><br>
    <textarea id="opmerking" name="opmerking"></textarea><br>
    <input type="submit" value="Submit">
</form>
<?php include 'layouts/footer.php'; ?>
</body>
</html>