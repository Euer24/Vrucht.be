<?php
/*
    The SEO for this site works as following

    For every page you would like to have custom meta content for do the following
    Add the file name - the .php suffix to the $meta_pages array below following the format projected down below

    'file_name' => [
        'page_title' => '', <-- Wil prefix the browser tab with "${value} | Middag vloerverwarming"
        'meta' => [],         <-- For any meta tag you want where the key is the name and the value the content
        'open_graph' => [], <-- For any OG tag you want where the key is the property and the value the content
    ]

    If there is no key for a given file name the $base_meta array is used

    zorg ervoor dat ik geen functie gebruik in de seo maar in de head en zoek de paginas niet gebaseerd op de url maar op de naam van de pagina
    /overons.php is geeltelijk goede vorbeeld
*/


$meta_pages = [
    'index' => [
        'page_title' => 'Home|Een blog over vrucht recepten', 
        'meta' => [
            'description' => 'De Home pagina van Vrucht',
            'keywords' => 'home, fruit',
        ], 
        'open_graph' => [
            'og:title' => 'Home',
            'og:description' => 'Home pagina description.',
            'og:image' => '/public/img/VRUCHT.svg',
            'og:url' => 'http://vrucht.be',
        ], 
    ],

    'recept' => [
        'page_title' => 'Recepten',
        'meta' => [
            'description' => 'De Recepten pagina van Vrucht',
            'keywords' => 'Recepten, fruit',
        ],
        'open_graph' => [
            'og:title' => 'Recepten',
            'og:description' => 'Recept pagina description.',
            'og:image' => '/public/img/img1.jpg',
            'og:url' => 'http://vrucht.be/recept.php',
        ],
    ],

    'overons' => [
        'page_title' => 'Over-ons',
        'meta' => [
            'description' => 'Over-ons pagina van Vrucht',
            'keywords' => 'Over-ons, fruit',
        ],
        'open_graph' => [
            'og:title' => 'Over-ons',
            'og:description' => 'Over-ons pagina description.',
            'og:image' => '/public/img/people.1jpg',
        ],
    ],

    'contact' => [
        'page_title' => 'contact',
        'meta' => [
            'description' => 'contact pagina van Vrucht',
            'keywords' => 'contact, fruit',
        ],
        'open_graph' => [
            'og:title' => 'contact',
            'og:description' => 'contact pagina description.',
            'og:image' => '/public/img/VRUCHT.svg',
        ],
    ],
];


// de standaard meta data
$base_meta = [
    'page_title' => 'Vrucht',
    'meta' => [
        'description' => 'Een website over fruit',
        'keywords' => 'fruit, gezond',
    ],
    'open_graph' => [
        'og:title' => 'Vrucht',
        'og:description' => 'Een website over fruit.',
        'og:image' => '/public/img/VRUCHT.svg'
    ],
];

// krijg de huildige pagina
$current_page = basename($_SERVER['PHP_SELF'], '.php');

//als de huildige pagina in de $meta_pages array, zit gebruik dan de juiste meta data
// Anders gebruitk hij de $base_meta array
$meta_data = isset($meta_pages[$current_page]) ? $meta_pages[$current_page] : $base_meta;