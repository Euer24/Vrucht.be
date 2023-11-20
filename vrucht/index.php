<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/public/css/slider.css">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/head.php'?>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade" style="background-image: url('/public/img/home1_50.webp'); background-size: cover; background-position: center;">
    <a href="/recepten/recept1" class="text">
        <div class="text-container">
            Fruit Smoothie
            <p class="slide-text">Voor een gezonde start van de dag!</p>
            </div>
            <button class="slide-button">Bekijk</button>
    </a>
</div>
<div class="mySlides fade" style="background-image: url('/public/img/home2_50.webp'); background-size: cover; background-position: center;">
    <a href="/recepten/recept1" class="text">
        <div class="text-container">
            Fruit ijsblokjes
            <p class="slide-text">Lekker wanneer het warm is.</p>
            </div>
            <button class="slide-button">Bekijk</button>
    </a>
</div>
<div class="mySlides fade" style="background-image: url('/public/img/home3_50.webp'); background-size: cover; background-position: center;">
    <a href="/recepten/recept1" class="text">
        <div class="text-container">
            Mango Salade
            <p class="slide-text">Goed voor je lichaam.</p>
            </div>
            <button class="slide-button">Bekijk</button>
    </a>
</div>



  <p class="prev" onclick="plusSlides(-1)">&#10094;</p>
  <p class="next" onclick="plusSlides(1)">&#10095;</p>
</div>
<br>

<!-- de 3 cirkels -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<h2>Welkom bij Vrucht</h2>

<p>je vindt hier lekkere, snelle en echt makkelijke recepten voor elke dag. Wij laten zien dat je elke dag lekker kan eten en dat dit helemaal niet ingewikkeld hoeft te zijn. Met een handvol ingrediënten kan je al snel iets lekkers maken. En met een kleine twist maken we van iets simpels graag iets bijzonders. Aan de slag!</p>

<div class="receptKnopContainer">
    <a class="receptKnop" href="/recept">Bekijk Recepten</a>
</div>

</body>
<script>
    let slideIndex = 1;
      showSlides(slideIndex);

// volgende/vorige controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<?php include  $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>
</html>