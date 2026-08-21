<?php
/**
 * The header for the theme.
 *
 * @package Elite_Digital_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-eda-bg text-white font-sans antialiased' ); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="max-w-7xl mx-auto px-6 lg:px-8">
		<div class="flex items-center justify-between h-20">

			<!-- Logo -->
			<div class="flex items-center gap-2 shrink-0">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2 group">
						<span class="flex items-center justify-center w-9 h-9 rounded-lg bg-gradient-to-br from-eda-purple to-eda-pink shadow-glow-purple">
							<i data-lucide="hexagon" class="w-5 h-5 text-white"></i>
						</span>
						<span class="text-lg font-bold tracking-tight text-white">
							<?php bloginfo( 'name' ); ?>
						</span>
					</a>
				<?php endif; ?>
			</div>

			<!-- Primary nav (desktop) -->
			<nav class="hidden md:flex items-center" aria-label="<?php esc_attr_e( 'Primary', 'elite-digital-agency' ); ?>">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '<ul class="flex items-center gap-8">%3$s</ul>',
						'link_before'    => '<span class="text-sm font-medium text-eda-text-secondary hover:text-white transition-colors duration-300">',
						'link_after'     => '</span>',
					) );
				} else {
					eda_fallback_menu();
				}
				?>
			</nav>

			<!-- Mobile menu toggle -->
			<button
				type="button"
				id="mobile-menu-toggle"
				class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg border border-eda-border text-white"
				aria-label="<?php esc_attr_e( 'Toggle menu', 'elite-digital-agency' ); ?>"
				aria-expanded="false"
			>
				<i data-lucide="menu" class="w-5 h-5"></i>
			</button>
		</div>

		<!-- Mobile nav panel -->
		<div id="mobile-menu-panel" class="md:hidden hidden pb-6">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'items_wrap'     => '<ul class="flex flex-col gap-4">%3$s</ul>',
					'link_before'    => '<span class="block text-sm font-medium text-eda-text-secondary hover:text-white transition-colors duration-300">',
					'link_after'     => '</span>',
				) );
			} else {
				eda_fallback_menu();
			}
			?>
		</div>
	</div>
</header>

<script>
	( function () {
		var toggle = document.getElementById( 'mobile-menu-toggle' );
		var panel = document.getElementById( 'mobile-menu-panel' );
		if ( ! toggle || ! panel ) return;
		toggle.addEventListener( 'click', function () {
			var isOpen = ! panel.classList.contains( 'hidden' );
			panel.classList.toggle( 'hidden' );
			toggle.setAttribute( 'aria-expanded', String( ! isOpen ) );
		} );
	} )();
</script>
