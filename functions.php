<?php
/**
 * SocialPulse360 — Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'SP360_VERSION', '2.0.0' );

function sp360_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'socialpulse360' ),
    ) );
}
add_action( 'after_setup_theme', 'sp360_theme_setup' );

function sp360_enqueue_assets() {
    wp_enqueue_style('sp360-google-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap', array(), null);
    wp_enqueue_script('sp360-tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    
    // إعدادات Tailwind لتناسب ألوان البراند
    $tailwind_config = "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sp-bg': '#0B0F17',
                        'sp-purple': '#A855F7',
                        'sp-pink': '#EC4899',
                    },
                },
            },
        };
    ";
    wp_add_inline_script( 'sp360-tailwind', $tailwind_config );
    wp_enqueue_style( 'sp360-style', get_stylesheet_uri(), array(), SP360_VERSION );
    wp_enqueue_script( 'sp360-lucide', 'https://unpkg.com/lucide@latest', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'sp360_enqueue_assets' );