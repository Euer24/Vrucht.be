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
        <a href="/recepten/Fruitsmoothies">
            <img src="/public/img/img1.webp" alt="img 9">
        </a>
        <a href="/recepten/Fruitsmoothies" class="titel">
            Fruit Smoothies
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>
    <div class="flex-item">
        <a href="/recepten/Cheesecake">
            <img src="/public/img/img2.webp" alt="img 9">
        </a>
        <a href="/recepten/Cheesecake" class="titel">
                 Cheesecake
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>
    <div class="flex-item">
        <a href="/recepten/Muffins">
            <img src="/public/img/img3.webp" alt="img 9">
        </a>
        <a href="/recepten/Muffins" class="titel">
             Bosbessen-Havermout Muffins
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>
    <div class="flex-item">
        <a href="/recepten/Salade">
            <img src="/public/img/img4.webp" alt="img 9">
        </a>
        <a href="/recepten/Salade" class="titel">
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

