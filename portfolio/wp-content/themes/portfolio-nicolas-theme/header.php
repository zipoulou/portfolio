<?php
/**
 * Header Template
 *
 * @package Portfolio_Nicolas
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation -->
<nav class="navbar">
    <div class="nav-container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">N<span class="logo-dot">.</span>G</a>
        <ul class="nav-links">
            <li><a href="#accueil"><?php esc_html_e( 'Accueil', 'portfolio-nicolas' ); ?></a></li>
            <li><a href="#parcours"><?php esc_html_e( 'Parcours', 'portfolio-nicolas' ); ?></a></li>
            <li><a href="#competences"><?php esc_html_e( 'Compétences', 'portfolio-nicolas' ); ?></a></li>
            <li><a href="#projets"><?php esc_html_e( 'Projets', 'portfolio-nicolas' ); ?></a></li>
            <li><a href="#contact"><?php esc_html_e( 'Contact', 'portfolio-nicolas' ); ?></a></li>
        </ul>
        <button class="mobile-menu-btn" aria-label="<?php esc_attr_e( 'Menu', 'portfolio-nicolas' ); ?>">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
