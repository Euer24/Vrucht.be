<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/contact.css">
    <?php include 'layouts/head.php'?>
</head>
<body>
<?php include 'layouts/navbar.php'; ?>
<h1>Contact</h1>

<p>Wilt u contact opnememen met ons?</p>
<p class = "last-p">Vul dan AUB het formulier in.</p>

<form action="_send.php" method="post" id="contact-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="opmerking">Opmerking:</label>
    <textarea id="opmerking" name="opmerking"></textarea>
    <input type="submit" value="Submit">
</form>

<?php include 'layouts/footer.php'; ?>
</body>
</html>