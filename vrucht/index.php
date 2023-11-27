<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/public/css/swiper.css">
    
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/head.php'?>
   
</head>
<body>

<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

<!-- Rest of your HTML code -->

<h2>Welkom bij Vrucht</h2>

<p>je vindt hier lekkere, snelle en echt makkelijke recepten voor elke dag. Wij laten zien dat je elke dag lekker kan eten en dat dit helemaal niet ingewikkeld hoeft te zijn. Met een handvol ingrediënten kan je al snel iets lekkers maken. En met een kleine twist maken we van iets simpels graag iets bijzonders. Aan de slag!</p>

<div class="receptKnopContainer">
    <a class="receptKnop" href="/recept">Bekijk Recepten</a>
</div>


</body>
<?php include  $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>
</html>