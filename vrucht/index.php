<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/slider.css">
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    
<?php include 'layouts/navbar.php'; ?>

<h1>Home</h1>

<div class="slideshow-container">


<div class="mySlides fade" style="background-image: url('img/home1.jpg'); background-size: cover; background-position: center;">
    <a href="/recepten/recept1" class="text">Fruit smoothie</a>
</div>

<div class="mySlides fade" style="background-image: url('img/home2.jpg'); background-size: cover; background-position: center;">
<a href="/recepten/recept2" class="text">Fruit blokjes</a>
</div>

<div class="mySlides fade" style="background-image: url('img/home3.jpg'); background-size: cover; background-position: center;">
<a href="/recepten/recept3" class="text">mango salade</a>
</div>

  
  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- de 3 cirkels -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="receptKnopContainer">
    <a class="receptKnop" href="recept.php">Bekijk Recept</a>
</div>

<h2>Welkom bij Vrucht</h2>

<p>je vindt hier lekkere, snelle en echt makkelijke recepten voor elke dag. Wij laten zien dat je elke dag lekker kan eten en dat dit helemaal niet ingewikkeld hoeft te zijn. Met een handvol ingrediënten kan je al snel iets lekkers maken. En met een kleine twist maken we van iets simpels graag iets bijzonders. Aan de slag!</p>



<?php include 'layouts/footer.php'; ?>


</body>
<script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
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
<?php include 'layouts/hamburger.php'; ?>
</html>