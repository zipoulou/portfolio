<?php
/**
 * Portfolio Nicolas Galzy - Functions
 *
 * @package Portfolio_Nicolas
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Sécurité : empêcher l'accès direct
}

/**
 * Configuration du thème
 */
function portfolio_nicolas_setup() {
    // Support du titre dans l'en-tête
    add_theme_support( 'title-tag' );

    // Support des images à la une
    add_theme_support( 'post-thumbnails' );

    // Support du logo personnalisé
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Support HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Enregistrement du menu de navigation
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'portfolio-nicolas' ),
        'footer'  => __( 'Menu Footer', 'portfolio-nicolas' ),
    ) );
}
add_action( 'after_setup_theme', 'portfolio_nicolas_setup' );

/**
 * Enqueue des styles et scripts
 */
function portfolio_nicolas_enqueue_assets() {
    // Google Fonts - Sora et Space Mono
    wp_enqueue_style(
        'portfolio-nicolas-google-fonts',
        'https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&family=Space+Mono:wght@400;700&display=swap',
        array(),
        null
    );

    // Style principal du thème (obligatoire pour WordPress)
    wp_enqueue_style(
        'portfolio-nicolas-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // CSS personnalisé
    wp_enqueue_style(
        'portfolio-nicolas-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array( 'portfolio-nicolas-google-fonts' ),
        '1.0.0'
    );

    // JavaScript personnalisé
    wp_enqueue_script(
        'portfolio-nicolas-scripts',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0.0',
        true // Charger dans le footer
    );
}
add_action( 'wp_enqueue_scripts', 'portfolio_nicolas_enqueue_assets' );

/**
 * Fonction helper pour obtenir l'URL des assets
 */
function portfolio_nicolas_asset_url( $path ) {
    return get_template_directory_uri() . '/assets/' . $path;
}

/**
 * Désactiver la barre d'admin en front-end pour les visiteurs (optionnel)
 */
if ( ! current_user_can( 'manage_options' ) ) {
    add_filter( 'show_admin_bar', '__return_false' );
}

/**
 * Ajouter des classes personnalisées au body
 */
function portfolio_nicolas_body_classes( $classes ) {
    // Ajouter une classe pour la page d'accueil
    if ( is_front_page() ) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter( 'body_class', 'portfolio_nicolas_body_classes' );

/**
 * Personnaliser l'excerpt
 */
function portfolio_nicolas_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'portfolio_nicolas_excerpt_length' );

function portfolio_nicolas_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'portfolio_nicolas_excerpt_more' );
