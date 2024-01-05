<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/public/css/swiper.css">

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/head.php'?>
</head>
<body>

<div class="swiper my-swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="/public/img/home1.webp" alt="slider-image1">
      <div class="slide-container">
        <a href=" /recepten/Fruitsmoothies">Fruitsmoothies</a>
        <p>Voor een gezonde start.</p>
        <a href="/recepten/Fruitsmoothies"><button type="button">bekijk</button></a>
      </div>
    </div>

    <div class="swiper-slide">
      <img src="/public/img/home2.webp" alt="slider-image2">
      <div class="slide-container">
        <a href="/recepten/Cheesecake">Cheesecake</a>
        <p>Zoet en goed!</p>
        <a href="/recepten/Cheesecake"><button type="button">bekijk</button></a>
      </div>
    </div>

    <div class="swiper-slide">
      <img src="/public/img/home3.webp" alt="slider-image3">
      <div class="slide-container">
        <a href="/recepten/Muffins">Muffins</a>
        <p>Een lekker tussendoortje.</p>
        <a href="/recepten/Muffins"><button type="button">bekijk</button></a>
      </div>
    </div>
  </div>

  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>

  <!-- <div class="swiper-pagination"></div>

  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <div class="swiper-scrollbar"></div> -->

<h2>Welkom bij Vrucht</h2>

<p>je vindt hier lekkere, snelle en echt makkelijke recepten voor elke dag. Wij laten zien dat je elke dag lekker kan eten en dat dit helemaal niet ingewikkeld hoeft te zijn. Met een handvol ingrediënten kan je al snel iets lekkers maken. En met een kleine twist maken we van iets simpels graag iets bijzonders. Aan de slag!</p>

<div class="receptKnopContainer">
    <a class="receptKnop" href="/recept">Bekijk Recepten</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
var mySwiper = new Swiper('.my-swiper', {
  // Optional parameters
  direction: 'horizontal',
  
  loop: true,
    autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },

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
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});
</script>
</body>
<?php include  $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>

</html>