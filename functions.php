<?php 

include 'configACF.php';
include 'configCPT-UI.php';

add_theme_support('title-tag');
add_theme_support('menus');

function my_theme_enqueue_styles() {
    // Utilisez get_template_directory_uri() pour obtenir le chemin vers le dossier de votre thème
    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_fonts() {
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',array(), null );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_fonts');

// Logo
function my_theme_setup() {
    // Support des logos personnalisés
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    // Enregistrer le menu de navigation
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

// Barre Nav
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

//Couleur Titre
function mytheme_customize_register($wp_customize) {
    // Ajouter une section pour les titres
    $wp_customize->add_section('header_titles_section', array(
        'title' => __('Couleurs des titres de l\'en-tête', 'mytheme'),
        'priority' => 30,
    ));

    // Ajouter un paramètre pour la couleur du titre principal
    $wp_customize->add_setting('header_title_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));

    // Ajouter un contrôle de couleur pour le titre principal
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_title_color_control', array(
        'label' => __('Couleur du titre principal', 'mytheme'),
        'section' => 'header_titles_section',
        'settings' => 'header_title_color',
    )));

    // Ajouter un paramètre pour la couleur du sous-titre
    $wp_customize->add_setting('header_subtitle_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));

    // Ajouter un contrôle de couleur pour le sous-titre
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_subtitle_color_control', array(
        'label' => __('Couleur du sous-titre', 'mytheme'),
        'section' => 'header_titles_section',
        'settings' => 'header_subtitle_color',
    )));
}
add_action('customize_register', 'mytheme_customize_register');

function mytheme_customize_css() {
    ?>
    <style type="text/css">
        .homeHeaderContainer__title_main {
            color: <?php echo get_theme_mod('header_title_color', '#000000'); ?>;
        }
        .homeHeaderContainer__title_subtitle {
            color: <?php echo get_theme_mod('header_subtitle_color', '#000000'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'mytheme_customize_css');