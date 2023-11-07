<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/flexbox.css">
</head>
<body>
<header class="header">
<img src="/img/logo.png" class="logo"alt="logo" >

    <nav class="navbar">
                <a href="home.html">Home</a>
                <a href="recept.php">Recepten</a>
                <a href="overons.html">Over Ons</a>
                <a href="contact.html">Contact</a>
    </nav>
</header>

<?php
include 'namen.php';
?>

<h1>De nieuwste recepten</h1>
<br><br><br>
<div class="flex-container">

<div class="flex-item"><img src="img/img9.jpg" alt="img 9"><a href="recepten/recept1.php"><?php echo "$recept1"; ?> </a><br>
<p> 6-11-2023</p></div>

<div class="flex-item"><img src="img/img10.jpg" alt="img 10"><a href="recepten/recept2.php"><?php echo "$recept2"; ?> </a><br>
<p>6-11-2023</p></div>

<div class="flex-item"><img src="img/img11.jpg" alt="img 11"><a href="recepten/recept3.php"><?php echo "$recept3"; ?> </a><br>
 <p>6-11-2023</p></div>

 <div class="flex-item"><img src="img/img4.jpg" alt="img 4"><a href="recepten/recept4.php"><?php echo "$recept4"; ?> </a><br>
<p>3-10-2023</p></div>

<div class="flex-item"><img src="img/img5.jpg" alt="img 5"><a href="recepten/recept5.php"><?php echo "$recept5"; ?> </a><br>
<p>3-10-2023</p></div>

<div class="flex-item"><img src="img/img6.jpg" alt="img 6"><a href="recepten/recept6.php"><?php echo "$recept6"; ?> </a><br>
<p>1-8-2023</p></div>

<div class="flex-item"><img src="img/img7.jpg" alt="img 7"><a href="recepten/recept7.php"><?php echo "$recept7"; ?> </a><br>
<p>1-8-2023</p></div>

<div class="flex-item"><img src="img/img8.jpg" alt="img 8"><a href="recepten/recept8.php"><?php echo "$recept8"; ?> </a><br>
<p>1-8-2023</p></div>
</div>


</body>
</html>

