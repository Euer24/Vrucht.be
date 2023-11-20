<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/public/css/contact.css">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/head.php'?>
</head>

<body>
<h1>Contact</h1>

<p>Wilt u contact opnememen met ons?</p>
<p class = "last-p">Vul dan AUB het formulier in.</p>


<form action="/public/functions/_send.php" method="post" id="contact-form">
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="opmerking">Opmerking:</label>
    <textarea id="opmerking" name="opmerking" required></textarea>
    <input type="submit" value="Submit">
</form>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>
</body>
</html>