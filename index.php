<?php
/**
 * Fallback template (required by WordPress theme structure).
 * Displays a simple dark-mode post/page list for any route not covered
 * by a more specific template (front-page.php handles the homepage).
 *
 * @package Elite_Digital_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="max-w-4xl mx-auto px-6 lg:px-8 pt-40 pb-24">
	<?php if ( have_posts() ) : ?>
		<div class="space-y-10">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class( 'glass-panel rounded-2xl p-8' ); ?>>
					<h2 class="text-2xl font-bold text-white mb-3">
						<a href="<?php the_permalink(); ?>" class="hover:text-gradient"><?php the_title(); ?></a>
					</h2>
					<div class="text-sm text-eda-text-secondary leading-relaxed">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		</div>

		<div class="mt-12 flex justify-center">
			<?php the_posts_pagination(); ?>
		</div>
	<?php else : ?>
		<p class="text-eda-text-secondary text-center"><?php esc_html_e( 'Nothing found.', 'elite-digital-agency' ); ?></p>
	<?php endif; ?>
</main>

<?php
get_footer();
