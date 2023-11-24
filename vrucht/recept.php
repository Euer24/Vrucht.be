<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="stylesheet" href="/public/css/flexbox.css">
    <link rel="stylesheet" href="/public/css/recept.css">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/head.php'?>
</head>
<body>

<h1>De nieuwste recepten</h1>

<div class="flex-container">
    
    <div class="flex-item">
        <a href="/recepten/recept1">
            <img src="/public/img/img1.webp" alt="img 9">
        </a>
        <a href="/recepten/recept1" class="titel">
            Fruit shake
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>
    <div class="flex-item">
        <a href="/recepten/recept2">
            <img src="/public/img/img2.webp" alt="img 9">
        </a>
        <a href="/recepten/recept2" class="titel">
                 Passievrucht en Mango
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>
    <div class="flex-item">
        <a href="/recepten/recept3">
            <img src="/public/img/img3.webp" alt="img 9">
        </a>
        <a href="/recepten/recept3" class="titel">
             Bosbessen-Havermout Muffins
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>
    <div class="flex-item">
        <a href="/recepten/recept4">
            <img src="/public/img/img4.webp" alt="img 9">
        </a>
        <a href="/recepten/recept4" class="titel">
            Frisse Meloen-Munt Salade
        </a>
        <br>
        <p>
        21-10-2023
        </p>
    </div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>
</body>
</html>

