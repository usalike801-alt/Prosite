<?php
/**
 * Elite Digital Agency — Theme Functions
 *
 * @package Elite_Digital_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'EDA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function eda_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 40,
		'width'       => 140,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'elite-digital-agency' ),
		'footer'  => __( 'Footer Navigation', 'elite-digital-agency' ),
	) );
}
add_action( 'after_setup_theme', 'eda_theme_setup' );

/**
 * Enqueue styles and scripts.
 *
 * - Tailwind CSS via CDN (utility classes for rapid, consistent UI work)
 * - Google Fonts: Inter
 * - Lucide Icons (via CDN) for a crisp, consistent icon set
 * - Theme's own style.css for design tokens / custom CSS not covered by Tailwind
 */
function eda_enqueue_assets() {

	// Google Fonts — Inter.
	wp_enqueue_style(
		'eda-google-font-inter',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
		array(),
		null
	);

	// Tailwind CSS via CDN (Play CDN — fine for prototypes / university projects;
	// for production, swap for a compiled Tailwind build).
	wp_enqueue_script(
		'eda-tailwind-cdn',
		'https://cdn.tailwindcss.com',
		array(),
		null,
		false // Load in head so Tailwind config runs before the page renders.
	);

	// Inline Tailwind config — extend with our design tokens so Tailwind
	// utility classes (e.g. bg-eda-bg, text-eda-purple) match style.css.
	$tailwind_config = "
		tailwind.config = {
			darkMode: 'class',
			theme: {
				extend: {
					colors: {
						'eda-bg': '#0B0F17',
						'eda-bg-elevated': '#10141F',
						'eda-purple': '#A855F7',
						'eda-pink': '#EC4899',
						'eda-text-secondary': '#9BA1B0',
						'eda-text-muted': '#5C6377',
						'eda-border': 'rgba(255,255,255,0.08)',
					},
					fontFamily: {
						sans: ['Inter', 'sans-serif'],
					},
					boxShadow: {
						'glow-purple': '0 0 40px rgba(168, 85, 247, 0.35)',
						'glow-pink': '0 0 40px rgba(236, 72, 153, 0.25)',
					},
				},
			},
		};
	";
	wp_add_inline_script( 'eda-tailwind-cdn', $tailwind_config );

	// Theme's own stylesheet — design tokens, glass panels, slider styling, etc.
	wp_enqueue_style(
		'eda-style',
		get_stylesheet_uri(),
		array(),
		EDA_VERSION
	);

	// Lucide Icons — lightweight icon library, initialized via lucide.createIcons().
	wp_enqueue_script(
		'eda-lucide-icons',
		'https://unpkg.com/lucide@latest/dist/umd/lucide.js',
		array(),
		null,
		true
	);
	wp_add_inline_script( 'eda-lucide-icons', 'window.addEventListener("DOMContentLoaded", function () { if (window.lucide) { lucide.createIcons(); } });' );

	// Theme's own front-end interactivity (header scroll effect, pricing slider).
	wp_enqueue_script(
		'eda-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		EDA_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'eda_enqueue_assets' );

/**
 * Fallback menu for the primary nav when no menu is assigned in
 * Appearance > Menus, so the theme still looks complete out of the box.
 */
function eda_fallback_menu() {
	echo '<ul class="flex items-center gap-8">';
	$items = array(
		'#home'    => __( 'Home', 'elite-digital-agency' ),
		'#services' => __( 'Services', 'elite-digital-agency' ),
		'#about'   => __( 'About us', 'elite-digital-agency' ),
		'#faq'     => __( 'FAQ', 'elite-digital-agency' ),
		'#contact' => __( 'Contact us', 'elite-digital-agency' ),
	);
	foreach ( $items as $href => $label ) {
		printf(
			'<li><a href="%1$s" class="text-sm font-medium text-eda-text-secondary hover:text-white transition-colors duration-300">%2$s</a></li>',
			esc_url( $href ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

/**
 * Widget areas (footer columns).
 */
function eda_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Column', 'elite-digital-agency' ),
		'id'            => 'footer-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="text-sm font-semibold text-white mb-4">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'eda_widgets_init' );
