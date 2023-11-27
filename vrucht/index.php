<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/public/css/swiper.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/public/css/swiper.css">

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/head.php'?>
   
</head>
<body>

<!-- Slider main container -->
<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
    <a href="/recepten/Fruitsmoothies"></a>
    <img src="/public/img/home1.webp" alt="slider-image1">
    <div>Slide 1</div>
    </div>

    <div class="swiper-slide">
    <a href="/recepten/Cheesecake"></a>
    <img src="/public/img/home2.webp" alt="slider-image2">
    <div>Slide 2</div>
    </div>

    <div class="swiper-slide">
    <a href="/recepten/muffins"></a>
    <img src="/public/img/home3.webp" alt="slider-image3">
    <div>Slide 3</div>
  </div>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

<h2>Welkom bij Vrucht</h2>

<p>je vindt hier lekkere, snelle en echt makkelijke recepten voor elke dag. Wij laten zien dat je elke dag lekker kan eten en dat dit helemaal niet ingewikkeld hoeft te zijn. Met een handvol ingrediënten kan je al snel iets lekkers maken. En met een kleine twist maken we van iets simpels graag iets bijzonders. Aan de slag!</p>

<div class="receptKnopContainer">
    <a class="receptKnop" href="/recept">Bekijk Recepten</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>
</body>
<?php include  $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>
</html>