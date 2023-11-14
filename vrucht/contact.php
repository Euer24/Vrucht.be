<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?> /public/css/contact.css">
    <title>Contact</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/head.php'?>
</head>
<body>
<?php  include $_SERVER['DOCUMENT_ROOT'] . '/public/functions/seo.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/navbar.php'; ?>
<h1>Contact</h1>

<?php  say(); ?>
<p>Wilt u contact opnememen met ons?</p>
<p class = "last-p">Vul dan AUB het formulier in.</p>

<form action="_send.php" method="post" id="contact-form">
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="opmerking">Opmerking:</label>
    <textarea id="opmerking" name="opmerking" required></textarea>
    <input type="submit" value="Submit">
</form>
<br><br><br>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>
</body>
</html>