<?php
/**
 * The footer for the theme.
 *
 * @package Elite_Digital_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

	<footer class="relative border-t border-eda-border mt-32">
		<div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
			<div class="grid grid-cols-1 md:grid-cols-4 gap-12">

				<!-- Brand column -->
				<div class="md:col-span-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2 mb-4">
						<span class="flex items-center justify-center w-9 h-9 rounded-lg bg-gradient-to-br from-eda-purple to-eda-pink">
							<i data-lucide="hexagon" class="w-5 h-5 text-white"></i>
						</span>
						<span class="text-lg font-bold tracking-tight text-white"><?php bloginfo( 'name' ); ?></span>
					</a>
					<p class="text-sm text-eda-text-secondary max-w-sm leading-relaxed">
						<?php esc_html_e( 'Placeholder description: enterprise-grade digital infrastructure, cloud solutions, and API tooling built for teams that scale.', 'elite-digital-agency' ); ?>
					</p>

					<!-- Social links -->
					<div class="flex items-center gap-3 mt-6">
						<?php
						$socials = array(
							'twitter'  => 'twitter',
							'linkedin' => 'linkedin',
							'github'   => 'github',
						);
						foreach ( $socials as $slug => $icon ) :
							?>
							<a href="#" class="flex items-center justify-center w-9 h-9 rounded-full border border-eda-border text-eda-text-secondary hover:text-white hover:border-eda-purple transition-colors duration-300" aria-label="<?php echo esc_attr( ucfirst( $slug ) ); ?>">
								<i data-lucide="<?php echo esc_attr( $icon ); ?>" class="w-4 h-4"></i>
							</a>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Footer nav column -->
				<div>
					<h3 class="text-sm font-semibold text-white mb-4"><?php esc_html_e( 'Navigate', 'elite-digital-agency' ); ?></h3>
					<?php
					if ( has_nav_menu( 'footer' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'container'      => false,
							'items_wrap'     => '<ul class="flex flex-col gap-3">%3$s</ul>',
							'link_before'    => '<span class="text-sm text-eda-text-secondary hover:text-white transition-colors duration-300">',
							'link_after'     => '</span>',
						) );
					} else {
						?>
						<ul class="flex flex-col gap-3">
							<li><a href="#home" class="text-sm text-eda-text-secondary hover:text-white transition-colors duration-300"><?php esc_html_e( 'Home', 'elite-digital-agency' ); ?></a></li>
							<li><a href="#services" class="text-sm text-eda-text-secondary hover:text-white transition-colors duration-300"><?php esc_html_e( 'Services', 'elite-digital-agency' ); ?></a></li>
							<li><a href="#about" class="text-sm text-eda-text-secondary hover:text-white transition-colors duration-300"><?php esc_html_e( 'About us', 'elite-digital-agency' ); ?></a></li>
							<li><a href="#faq" class="text-sm text-eda-text-secondary hover:text-white transition-colors duration-300"><?php esc_html_e( 'FAQ', 'elite-digital-agency' ); ?></a></li>
						</ul>
						<?php
					}
					?>
				</div>

				<!-- Widget / contact column -->
				<div>
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php else : ?>
						<h3 class="text-sm font-semibold text-white mb-4"><?php esc_html_e( 'Contact us', 'elite-digital-agency' ); ?></h3>
						<ul class="flex flex-col gap-3">
							<li class="text-sm text-eda-text-secondary">hello@example.com</li>
							<li class="text-sm text-eda-text-secondary">+1 (555) 010-2024</li>
						</ul>
					<?php endif; ?>
				</div>
			</div>

			<!-- Bottom bar -->
			<div class="mt-16 pt-8 border-t border-eda-border flex flex-col md:flex-row items-center justify-between gap-4">
				<p class="text-xs text-eda-text-muted">
					&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'elite-digital-agency' ); ?>
				</p>
				<div class="flex items-center gap-6">
					<a href="#" class="text-xs text-eda-text-muted hover:text-white transition-colors duration-300"><?php esc_html_e( 'Privacy Policy', 'elite-digital-agency' ); ?></a>
					<a href="#" class="text-xs text-eda-text-muted hover:text-white transition-colors duration-300"><?php esc_html_e( 'Terms of Service', 'elite-digital-agency' ); ?></a>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
