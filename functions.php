<?php
/**
 * Diziti Theme Functions
 *
 * @package Diziti
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'DIZITI_VERSION', '1.0.0' );
define( 'DIZITI_DIR', get_template_directory() );
define( 'DIZITI_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function diziti_setup() {
    // Add title tag support
    add_theme_support( 'title-tag' );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'diziti' ),
        'footer'    => __( 'Footer Menu', 'diziti' ),
    ) );

    // Content width
    if ( ! isset( $content_width ) ) {
        $content_width = 1200;
    }
}
add_action( 'after_setup_theme', 'diziti_setup' );

/**
 * Enqueue Styles & Scripts
 */
function diziti_enqueue_assets() {
    // Google Fonts: Inter + Plus Jakarta Sans
    wp_enqueue_style(
        'diziti-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Font Awesome 6
    wp_enqueue_style(
        'diziti-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Bootstrap 5 CSS
    wp_enqueue_style(
        'diziti-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Theme stylesheet
    wp_enqueue_style(
        'diziti-style',
        get_stylesheet_uri(),
        array( 'diziti-bootstrap', 'diziti-google-fonts', 'diziti-fontawesome' ),
        DIZITI_VERSION
    );

    // Bootstrap 5 JS Bundle
    wp_enqueue_script(
        'diziti-bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

    // Theme custom JS
    wp_enqueue_script(
        'diziti-main-js',
        DIZITI_URI . '/assets/js/main.js',
        array(),
        DIZITI_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'diziti_enqueue_assets' );

/**
 * Preload critical fonts for performance
 */
function diziti_preload_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link rel="preconnect" href="https://cdnjs.cloudflare.com">' . "\n";
}
add_action( 'wp_head', 'diziti_preload_fonts', 1 );

/**
 * Add SEO meta tags
 */
function diziti_seo_meta() {
    if ( is_front_page() ) {
        echo '<meta name="description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '">' . "\n";
        echo '<meta name="robots" content="index, follow">' . "\n";
        echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . esc_url( home_url( '/' ) ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'diziti_seo_meta' );

/**
 * Custom Walker for the primary navigation
 */
class Diziti_Nav_Walker extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        // No wrapping li needed for our flat nav structure
    }

    public function start_lvl( &$output, $depth = 0, $args = null ) {}
    public function end_lvl( &$output, $depth = 0, $args = null ) {}
}

/**
 * Remove WordPress emoji scripts for performance
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Remove unnecessary head tags for cleaner output
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
