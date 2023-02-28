<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

//Image en plein largeur
add_theme_support('align-wide');

//Créé l'onglet wordpress menu et ajoute les deux menu du tableau
register_nav_menus(array(
    'main' => 'Menu principal',
    'footer' => 'Bas de page'
));



function chrisaz_register_assets()
{

    // Déclarer jQuery
    // wp_enqueue_script('jquery');

    wp_enqueue_script(
        'chrisaz',
        get_template_directory_uri() . '/js/chrisaz.js',
        array('jquery'),
        '1.0',
        true
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style(
        'main',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'chrisaz_register_assets');
