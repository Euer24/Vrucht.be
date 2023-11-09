<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/slider.css">
    <link rel="stylesheet" href="/css/home.css">
    <style>
      footer {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    background-color: rgb(206, 58, 14);
    color: white;
    padding: 10px;
    height: 120px;
    padding-left: 20px; 
    margin-top: auto; 
}
footer a {
    display: block; 
    color: white;
    margin: 8px 0;
    padding: 5px 3;
    text-decoration: none;
    margin-left:20px;
}

.footer-images {
    display: flex;
    justify-content: space-between;
    height: auto;
    margin-right: 60px;
    margin-top: 80px;
}

.footer-images a img {
    width: 30px; 
    height: 30px;
    display: flex;
}

footer img.logo {
    width: 40px; 
    margin-right: 800px;
}
/* einde Footer */
    </style>
</head>
<body>
    
<?php include 'layouts/navbar.php'; ?>

<h1>Home</h1>

<div class="slideshow-container">


  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img/img9.jpg" style="width:100%" >
    <div class="text">Fruit smoothie</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/img10.jpg" style="width:100%">
    <div class="text">fruit salade</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/img11.jpg" style="width:100%">
    <div class="text">fruit spies</div>
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
    <button class="receptKnop" href="recept.php">Bekijk Recept</button>
</div>

<h2>Welkom bij Vrucht</h2>

<p>je vindt hier lekkere, snelle en echt makkelijke recepten voor elke dag. Wij laten zien dat je elke dag lekker kan eten en dat dit helemaal niet ingewikkeld hoeft te zijn. Met een handvol ingrediënten kan je al snel iets lekkers maken. En met een kleine twist maken we van iets simpels graag iets bijzonders. Aan de slag!</p>

<br><br><br><br><br><br><br><br>

<footer>
    <img class="logo" src="img/logo.png" alt="Logo"> 
    <ul>
        <a href="home.php">Home</a>
        <a href="recept.php">Recepten</a>
        <a href="overons.php">Overons</a>
        <a href="contact.php">Contact</a>
    </ul>
    <div class="footer-images">
        <a href="#"><img src="img/instagram.jpg" alt="instagram"></a>
        <a href="#"><img src="img/facebook.png" alt="facebook"></a>
        <a href="#"><img src="img/twitter.png" alt="twitter.png"></a>
    </div>
</footer>





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
</html>