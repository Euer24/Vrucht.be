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
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?> recepten/recept1.php">
            <img src="/public/img/img1.jpg" alt="img 9">
        </a>
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?> recepten/recept1" class="titel">
            <?php echo "$recept1"; ?>
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>

    <div class="flex-item">
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?> recepten/recept2.php">
            <img src="/public/img/img2.jpg" alt="img 9">
        </a>
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?> recepten/recept2" class="titel">
            <?php echo "$recept2"; ?>
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>


    <div class="flex-item">
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?> recepten/recept3.php">
            <img src="/public/img/img3.jpg" alt="img 9">
        </a>
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?> recepten/recept3" class="titel">
            <?php echo "$recept3"; ?>
        </a>
        <br>
        <p>
             6-11-2023
        </p>
    </div>

    <div class="flex-item">
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?> recepten/recept4.php">
            <img src="/public/img/img4.jpg" alt="img 9">
        </a>
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?> recepten/recept4" class="titel">
            <?php echo "$recept4"; ?>
        </a>
        <br>
        <p>
        21-10-2023
        </p>
    </div>

    <div class="flex-item">
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?> recepten/recept5.php">
            <img src="/public/img/img5.jpg" alt="img 9">
        </a>
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?> recepten/recept5" class="titel">
            <?php echo "$recept5"; ?>
        </a>
        <br>
        <p>
        6-10-2023
        </p>
    </div>

    <div class="flex-item">
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?> recepten/recept6.php">
            <img src="/public/img/img6.jpg" alt="img 9">
        </a>
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?> recepten/recept6" class="titel">
            <?php echo "$recept6"; ?>
        </a>
        <br>
        <p>
        6-10-2023
        </p>
    </div>

    <div class="flex-item">
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?> recepten/recept7.php">
            <img src="/public/img/img7.jpg" alt="img 9">
        </a>
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?> recepten/recept7" class="titel">
            <?php echo "$recept7"; ?>
        </a>
        <br>
        <p>
        6-10-2023
        </p>
    </div>

    <div class="flex-item">
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?> recepten/recept8.php">
            <img src="/public/img/img8.jpg" alt="img 9">
        </a>
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?> recepten/recept8" class="titel">
            <?php echo "$recept8"; ?>
        </a>
        <br>
        <p>
        6-10-2023
        </p>
    </div>


    


<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>

</body>
</html>

