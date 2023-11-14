<?php
function load_meta_content($page_name) {
    $meta = [
        'contact' => [
            'meta' => [
                'title' => 'Contact pagina',
                'description' => 'Neem contact op om een suggestie te geven voor een nieuwe recept',
            ],
            'og' => [
                'title' => 'og title',
                'description' => 'og description',
                'image' => 'og_image'
            ],
        ],
       
    ];

    if (array_key_exists($page_name, $meta)) {
        return $meta[$page_name];
    } else {
        // De standaard meta content
        return [
            'meta' => [
                'title' => 'vrucht.be',
                'description' => 'De vrucht.be website',
            ],
            'og' => [
                'title' => 'Default og title',
                'description' => 'Default og description',
                'image' => 'Default og image'
            ],
        ];
    }
}