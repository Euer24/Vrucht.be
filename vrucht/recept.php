<!DOCTYPE html>
<html lang="en"> 
<head>
    <link rel="stylesheet" href="/public/css/flexbox.css">
    <link rel="stylesheet" href="/public/css/recept.css">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/head.php'?>
</head>
<body>

<h1>De nieuwste recepten</h1>

<section>
    <div class="container">
        <div class="row row-lg-4 m-4">
            <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch">
                <div class="card text-center">
                    <div class="img-container bg-image" style="background-image: url('/public/img/img1.webp');">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Fruit smoothies</h5>
                        <p class="card-text">Dit is een test.</p>
                        <a href="/recepten/Fruitsmoothies" class="btn btn-primary mt-auto">Bekijk recept</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch">
                <div class="card text-center">
                    <div class="img-container bg-image" style="background-image: url('/public/img/img2.webp');">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Cheesecake</h5>
                        <p class="card-text">Dit is een test.</p>
                        <a href="/recepten/Cheesecake" class="btn btn-primary mt-auto">Bekijk recept</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch">
                <div class="card text-center">
                    <div class="img-container bg-image" style="background-image: url('/public/img/img3.webp');">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Bosbessen-Muffins</h5>
                        <p class="card-text">Dit is een test.</p>
                        <a href="/recepten/Muffins" class="btn btn-primary mt-auto">Bekijk recept</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-3 d-flex align-items-stretch">
                <div class="card text-center">
                    <div class="img-container bg-image" style="background-image: url('/public/img/img4.webp');">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Meloen-Salade</h5>
                        <p class="card-text">Dit is een test.</p>
                        <a href="/recepten/Salade" class="btn btn-primary mt-auto">Bekijk recept</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/footer.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/layouts/hamburger.php'; ?>

</body>
</html>

