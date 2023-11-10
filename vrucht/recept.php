<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/flexbox.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/recept.css">
    <?php include 'layouts/head.php'?>
</head>
<body>

<?php include 'layouts/navbar.php'; ?>
<?php include 'namen.php';?>

<h1>De nieuwste recepten</h1>

<div class="flex-container">

<div class="flex-item"><a href="recepten/recept1.php"><img src="img/img1.jpg" alt="img 9"></a><a href="recepten/recept1.php"><?php echo "$recept1"; ?> </a><br>
<p> 6-11-2023</p></div>

<div class="flex-item"><a href="recepten/recept2.php"><img src="img/img2.jpg" alt="img 9"></a><a href="recepten/recept2.php"><?php echo "$recept2"; ?> </a><br>
<p> 6-11-2023</p></div>

<div class="flex-item"><a href="recepten/recept3.php"><img src="img/img3.jpg" alt="img 9"></a><a href="recepten/recept3.php"><?php echo "$recept3"; ?> </a><br>
<p> 6-11-2023</p></div>

<div class="flex-item"><a href="recepten/recept4.php"><img src="img/img4.jpg" alt="img 9"></a><a href="recepten/recept4.php"><?php echo "$recept4"; ?> </a><br>
<p> 6-11-2023</p></div>

<div class="flex-item"><a href="recepten/recept5.php"><img src="img/img5.jpg" alt="img 9"></a><a href="recepten/recept5.php"><?php echo "$recept5"; ?> </a><br>
<p> 6-11-2023</p></div>

<div class="flex-item"><a href="recepten/recept6.php"><img src="img/img6.jpg" alt="img 9"></a><a href="recepten/recept6.php"><?php echo "$recept6"; ?> </a><br>
<p> 6-11-2023</p></div>

<div class="flex-item"><a href="recepten/recept7.php"><img src="img/img7.jpg" alt="img 9"></a><a href="recepten/recept7.php"><?php echo "$recept7"; ?> </a><br>
<p> 6-11-2023</p></div>

<div class="flex-item"><a href="recepten/recept8.php"><img src="img/img8.jpg" alt="img 9"></a><a href="recepten/recept8.php"><?php echo "$recept8"; ?> </a><br>
<p> 6-11-2023</p></div>

<?php include 'layouts/footer.php'; ?>



</body>
</html>

