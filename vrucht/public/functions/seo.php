<?php
function load_meta_conten($page_name) {
    $meta = [
        'contact' => [
            'meta' => [
                'title' => 'Contact',
                'description' => 'De contact pagina',
            ],
            'og' => [
                'title' => 'Contact pagina',
                'description' => 'Contact pagina vrucht.be',
                'image' => 'og_image'
            ],
        ],
        
    ];

}




function load_meta_content() {
    $page_name = $_SERVER['REQUEST_URI'];
    if ($page_name == "/" || $page_name == "/index.php") {
        ?>
            <meta name="keywords" content="Fruit, Blog, recepten, Fruitrecepten">
            <meta name="description" content="De homepagina van vrucht">
            <title>Home</title>
        <?php
        }

    if ($page_name == "/recept.php") {
        ?>
            <meta name="keywords" content="Fruit, Blog, recepten, Fruitrecepten">
            <meta name="description" content="Lekker recepten voor fruit gerechten">
            <title>Recepten</title>
        <?php
        }
    
    if ($page_name == "/overons.php") {
        ?>
            <meta name="keywords" content="Fruit, Blog, recepten, Fruitrecepten">
            <meta name="description" content="Over ons pagina">
            <title>Over ons</title>
        <?php
        }
}