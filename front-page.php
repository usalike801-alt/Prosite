<?php
/**
 * Front page template.
 *
 * @package Elite_Digital_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="home">

	<!-- ==========================================================
	     HERO
	     ========================================================== -->
	<section class="relative pt-48 pb-32 px-6 lg:px-8 overflow-hidden">
		<div class="max-w-5xl mx-auto text-center animate-fade-up">

			<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass-panel mb-8">
				<span class="w-1.5 h-1.5 rounded-full bg-eda-purple shadow-glow-purple"></span>
				<span class="text-xs font-medium text-eda-text-secondary"><?php esc_html_e( 'Placeholder — Now supporting multi-region deployments', 'elite-digital-agency' ); ?></span>
			</div>

			<h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.05] text-white">
				<?php esc_html_e( 'Digital Infrastructure,', 'elite-digital-agency' ); ?>
				<br>
				<span class="text-gradient"><?php esc_html_e( 'Engineered for Scale.', 'elite-digital-agency' ); ?></span>
			</h1>

			<p class="mt-6 text-lg text-eda-text-secondary max-w-2xl mx-auto leading-relaxed">
				<?php esc_html_e( 'Placeholder copy: we design, migrate, and manage cloud-native infrastructure for teams that cannot afford downtime. Provision resources on demand and pay only for what you use.', 'elite-digital-agency' ); ?>
			</p>

			<div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
				<a href="#pricing" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-br from-eda-purple to-eda-pink text-white text-sm font-semibold shadow-glow-purple hover:opacity-90 transition-opacity duration-300">
					<?php esc_html_e( 'Estimate your cost', 'elite-digital-agency' ); ?>
					<i data-lucide="arrow-right" class="w-4 h-4"></i>
				</a>
				<a href="#services" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg glass-panel text-sm font-semibold text-white hover:border-eda-purple transition-colors duration-300">
					<?php esc_html_e( 'Explore services', 'elite-digital-agency' ); ?>
				</a>
			</div>
		</div>

		<!-- Ambient glow orb -->
		<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full bg-eda-purple/10 blur-[120px] pointer-events-none"></div>
	</section>

	<!-- ==========================================================
	     PRICING SIMULATOR
	     ========================================================== -->
	<section id="pricing" class="px-6 lg:px-8 py-24">
		<div class="max-w-4xl mx-auto">

			<div class="text-center mb-12">
				<h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">
					<?php esc_html_e( 'Simulate your monthly cost', 'elite-digital-agency' ); ?>
				</h2>
				<p class="mt-3 text-eda-text-secondary max-w-xl mx-auto">
					<?php esc_html_e( 'Placeholder copy: drag the slider to model usage between 100 and 50,000 Resource Units — billed at $8 per 1,000 units.', 'elite-digital-agency' ); ?>
				</p>
			</div>

			<div class="glass-panel rounded-3xl p-8 md:p-12 shadow-glow-purple/10">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

					<!-- Live values -->
					<div>
						<p class="text-xs uppercase tracking-widest text-eda-text-muted mb-2">
							<?php esc_html_e( 'Resource Units / month', 'elite-digital-agency' ); ?>
						</p>
						<p class="text-3xl font-bold text-white mb-8">
							<span id="units-value">8,000</span>
						</p>

						<p class="text-xs uppercase tracking-widest text-eda-text-muted mb-2">
							<?php esc_html_e( 'Estimated price / month', 'elite-digital-agency' ); ?>
						</p>
						<p class="text-5xl font-extrabold text-gradient">
							<span id="price-value">$64.00</span>
						</p>
					</div>

					<!-- Slider -->
					<div>
						<label for="units-slider" class="sr-only"><?php esc_html_e( 'Resource Units', 'elite-digital-agency' ); ?></label>
						<input
							type="range"
							id="units-slider"
							class="units-slider"
							min="100"
							max="50000"
							step="100"
							value="8000"
							aria-describedby="units-value price-value"
						>
						<div class="flex justify-between text-xs text-eda-text-muted mt-3">
							<span>100</span>
							<span>50,000</span>
						</div>

						<div class="mt-8 flex items-start gap-3 p-4 rounded-xl bg-eda-bg-elevated border border-eda-border">
							<i data-lucide="info" class="w-4 h-4 text-eda-purple shrink-0 mt-0.5"></i>
							<p class="text-xs text-eda-text-secondary leading-relaxed">
								<?php esc_html_e( 'Placeholder note: rate shown is a flat $8 per 1,000 Resource Units. Volume discounts and enterprise pricing available on request.', 'elite-digital-agency' ); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================================
	     SERVICES GRID
	     ========================================================== -->
	<section id="services" class="px-6 lg:px-8 py-24">
		<div class="max-w-6xl mx-auto">

			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">
					<?php esc_html_e( 'Core Solutions', 'elite-digital-agency' ); ?>
				</h2>
				<p class="mt-3 text-eda-text-secondary max-w-xl mx-auto">
					<?php esc_html_e( 'Placeholder copy: a small set of services, done exceptionally well.', 'elite-digital-agency' ); ?>
				</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
				<?php
				$services = array(
					array(
						'icon'  => 'database',
						'title' => __( 'Data Management', 'elite-digital-agency' ),
						'desc'  => __( 'Placeholder copy: centralized, versioned, and encrypted data pipelines with automated backups and audit trails.', 'elite-digital-agency' ),
					),
					array(
						'icon'  => 'plug-zap',
						'title' => __( 'API Integration', 'elite-digital-agency' ),
						'desc'  => __( 'Placeholder copy: connect internal systems and third-party services through resilient, well-documented API layers.', 'elite-digital-agency' ),
					),
					array(
						'icon'  => 'trending-up',
						'title' => __( 'Network Growth', 'elite-digital-agency' ),
						'desc'  => __( 'Placeholder copy: elastic network architecture that scales with demand across multiple regions.', 'elite-digital-agency' ),
					),
				);

				foreach ( $services as $service ) :
					?>
					<div class="glow-hover glass-panel rounded-2xl p-8">
						<div class="flex items-center justify-center w-12 h-12 rounded-xl bg-gradient-to-br from-eda-purple/20 to-eda-pink/20 border border-eda-border mb-6">
							<i data-lucide="<?php echo esc_attr( $service['icon'] ); ?>" class="w-6 h-6 text-eda-purple"></i>
						</div>
						<h3 class="text-lg font-semibold text-white mb-3"><?php echo esc_html( $service['title'] ); ?></h3>
						<p class="text-sm text-eda-text-secondary leading-relaxed"><?php echo esc_html( $service['desc'] ); ?></p>
						<a href="#contact" class="inline-flex items-center gap-1.5 mt-6 text-sm font-medium text-eda-purple hover:gap-2.5 transition-all duration-300">
							<?php esc_html_e( 'Learn more', 'elite-digital-agency' ); ?>
							<i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ==========================================================
	     ABOUT (anchor target for nav)
	     ========================================================== -->
	<section id="about" class="px-6 lg:px-8 py-24">
		<div class="max-w-4xl mx-auto glass-panel rounded-3xl p-10 md:p-16 text-center">
			<h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight mb-4">
				<?php esc_html_e( 'About us', 'elite-digital-agency' ); ?>
			</h2>
			<p class="text-eda-text-secondary max-w-2xl mx-auto leading-relaxed">
				<?php esc_html_e( 'Placeholder copy: we are a small team of infrastructure engineers who believe cloud tooling should feel simple, transparent, and fast — no matter how much scale you throw at it.', 'elite-digital-agency' ); ?>
			</p>
		</div>
	</section>

	<!-- ==========================================================
	     FAQ (anchor target for nav)
	     ========================================================== -->
	<section id="faq" class="px-6 lg:px-8 py-24">
		<div class="max-w-3xl mx-auto">
			<h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight text-center mb-12">
				<?php esc_html_e( 'Frequently asked questions', 'elite-digital-agency' ); ?>
			</h2>

			<div class="space-y-4">
				<?php
				$faqs = array(
					array(
						'q' => __( 'What counts as a Resource Unit?', 'elite-digital-agency' ),
						'a' => __( 'Placeholder answer: a Resource Unit is a normalized measure of compute, storage, and bandwidth consumption used for simplified billing.', 'elite-digital-agency' ),
					),
					array(
						'q' => __( 'Can I change plans at any time?', 'elite-digital-agency' ),
						'a' => __( 'Placeholder answer: yes, usage is metered continuously and billed monthly with no long-term lock-in.', 'elite-digital-agency' ),
					),
					array(
						'q' => __( 'Do you offer enterprise support?', 'elite-digital-agency' ),
						'a' => __( 'Placeholder answer: yes, dedicated support and custom SLAs are available for high-volume accounts.', 'elite-digital-agency' ),
					),
				);
				foreach ( $faqs as $faq ) :
					?>
					<details class="glass-panel rounded-2xl p-6 group">
						<summary class="flex items-center justify-between cursor-pointer list-none">
							<span class="text-sm md:text-base font-medium text-white"><?php echo esc_html( $faq['q'] ); ?></span>
							<i data-lucide="chevron-down" class="w-4 h-4 text-eda-text-muted transition-transform duration-300 group-open:rotate-180"></i>
						</summary>
						<p class="mt-4 text-sm text-eda-text-secondary leading-relaxed"><?php echo esc_html( $faq['a'] ); ?></p>
					</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ==========================================================
	     CONTACT (anchor target for nav)
	     ========================================================== -->
	<section id="contact" class="px-6 lg:px-8 py-24">
		<div class="max-w-3xl mx-auto text-center glass-panel rounded-3xl p-10 md:p-16">
			<h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight mb-4">
				<?php esc_html_e( 'Contact us', 'elite-digital-agency' ); ?>
			</h2>
			<p class="text-eda-text-secondary max-w-xl mx-auto mb-8">
				<?php esc_html_e( 'Placeholder copy: tell us about your infrastructure needs and we will get back to you within one business day.', 'elite-digital-agency' ); ?>
			</p>
			<a href="mailto:hello@example.com" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gradient-to-br from-eda-purple to-eda-pink text-white text-sm font-semibold shadow-glow-purple hover:opacity-90 transition-opacity duration-300">
				<?php esc_html_e( 'Get in touch', 'elite-digital-agency' ); ?>
				<i data-lucide="mail" class="w-4 h-4"></i>
			</a>
		</div>
	</section>

</main>

<?php
get_footer();
