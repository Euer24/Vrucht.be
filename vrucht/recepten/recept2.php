<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fruit ijs</title>
    <link rel="stylesheet" href="../css/flexbox.css">
    <link rel="stylesheet" href="../css/fruit.css">
    <?php include '../layouts/head.php'; ?>
    
</head>
<body>
<?php include '../namen.php'; ?>
<?php include '../layouts/recept-navbar.php'; ?>s

<a href="../recept.php" class="button">Ga Terug</a>

<div class="recept-container">
    <div class="image-text-container">
        <img src="../img/img2.jpg">
        <p>Mmm, een heerlijke Mangosmoothie met amandelmelk en framboos. Extra romig door de banaan die er ook in zit.</p>
    </div>

        <div class="colum">

        <h1> <?php echo "$recept2"; ?></h1>

        <h2>ingrediënten</h2>
        
        <p>Handje diepvries mango - Handje diepvries framboos</p>
        
        <p>Handje diepvries bramen - 200ml haverdrank</p>

        <h3>Bereiding</h3>
        <p class="bereiding">Laat het fruit ca. 5 min. ontdooien. Pers ondertussen de perssinaasappels uit. Snijd de bananen in stukjes. Pureer al het fruit, het sinaasappelsap en de yoghurt in een blender of in een hoge kom met een staafmixer. Verdeel de smoothie over hoge glazen. Steek er rietjes in en serveer direct.</p>
        </div>
    </div>
    
   
        <?php include '../layouts/hamburger.php' ?>
   
</body>
</html>