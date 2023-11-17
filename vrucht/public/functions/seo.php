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
            'page_title' => 'Home | Een blog over vrucht recepten', 
            'meta' => [
                'title' => 'Home | Een blog over vrucht recepten',
                'description' => 'De Home pagina van Vrucht',
            ], 
        'open_graph' => [
            'og:description' => 'De Home pagina van Vrucht',
            'og:image' => 'http://vrucht.be/public/img/people1.jpg',
            'og:url' => 'http://vrucht.be',
        ], 
        'twitter' => [
            'twitter:card' => 'summary', 
            'twitter:title' => 'Home | Een blog over vrucht recepten',
            'twitter:description' => 'De Home pagina van Vrucht',
            'twitter:image' => 'http://vrucht.be/public/img/people1.jpg',
        ], 
    ],
    
    'recept' => [
        'page_title' => 'Recepten | Fruitshake | Mangosalade',
        'meta' => [
            'title' => 'Recepten | Fruitshake | Mangosalade',
            'keywords' => 'Recepten, fruit',
        ],
        'open_graph' => [
            'og:description' => 'Lekkeren fruit recepten',
            'og:image' => '/public/img/img1.jpg',
            'og:url' => 'http://vrucht.be/recept.php',
        ],

        'twitter' => [
            'twitter:card' => 'summary', 
            'twitter:title' => 'Recepten | Fruitshake | Mangosalade',
            'twitter:description' => 'De Recepten pagina van Vrucht',
            'twitter:image' => 'http://vrucht.be/public/img/img1.jpg',
        ], 
    ],

    'overons' => [
        'page_title' => 'Over-ons | Een Beetje informatie over ons',
        'meta' => [
            'title' => 'Over-ons | Een Beetje informatie over ons',
            'description' => 'Over-ons pagina van Vrucht',
        ],
        'open_graph' => [
            'og:description' => 'Recepten | Fruitshake | Mangosalade',
            'og:image' => '/public/img/people.1jpg',
        ],
        'twitter' => [
            'twitter:card' => 'summary', 
            'twitter:title' => 'Over-ons | Een Beetje informatie over ons',
            'twitter:description' => 'Over-ons pagina van Vrucht',
            'twitter:image' => 'http://vrucht.be/public/img/people1.jpg',
        ], 
    ],

    'contact' => [
        'page_title' => 'contact | Neem contact met ons op',
        'meta' => [
            'title' => 'contact | Neem contact met ons op',
            'description' => 'Neem contact met ons op',
        ],
        'open_graph' => [
            'og:description' => 'contact pagina description.',
            'og:image' => '/public/img/VRUCHT.svg',
        ],
        'twitter' => [
            'twitter:card' => 'summary', 
            'twitter:title' => 'contact | Neem contact met ons op',
            'twitter:description' => 'contact pagina van Vrucht',
            'twitter:image' => 'http://vrucht.be/public/img/people3.jpg',
        ], 
    ],
];

// de standaard meta data
$base_meta = [
    'page_title' => 'Vrucht | Lekkere recepten voor fruit',
    'meta' => [
        'title' => 'Lekkere fruit recepten',
        'description' => 'Een website over fruit',
    ],
    'open_graph' => [
        'og:title' => 'Vrucht | Lekkere recepten voor fruit',
        'og:description' => 'Vrucht | Lekkere recepten voor fruit',
        'og:image' => '/public/img/img1.jpg',
    ],
    'twitter' => [
        'twitter:card' => 'summary',
        'twitter:title' => 'Vrucht | Lekkere recepten voor fruit',
        'twitter:description' => 'Een website over fruit',
        'twitter:image' => 'http://vrucht.be/public/img/people3.jpg',
    ], 
];

// krijg de huildige pagina
$current_page = basename($_SERVER['PHP_SELF'], '.php');

//als de huildige pagina in de $meta_pages array, zit gebruik dan de juiste meta data
// Anders gebruitk hij de $base_meta array
$meta_data = isset($meta_pages[$current_page]) ? $meta_pages[$current_page] : $base_meta;