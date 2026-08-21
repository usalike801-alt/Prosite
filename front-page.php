<?php get_header(); ?>

<main id="home">
	<!-- HERO SECTION -->
	<section class="relative pt-48 pb-32 px-6 lg:px-8 overflow-hidden">
		<div class="max-w-5xl mx-auto text-center animate-fade-up">
			<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass-panel mb-8">
				<span class="w-1.5 h-1.5 rounded-full bg-sp-purple animate-pulse"></span>
				<span class="text-xs font-medium text-gray-400 uppercase tracking-widest">Instant US & UK Delivery Active</span>
			</div>

			<h1 class="text-5xl md:text-8xl font-black tracking-tighter leading-[1.05] text-white">
				Scale Your Presence <br>
				<span class="text-gradient italic">Instantly & Organically.</span>
			</h1>

			<p class="mt-8 text-lg text-gray-400 max-w-2xl mx-auto leading-relaxed font-light">
				The ultimate growth infrastructure for US & UK enterprise agencies. High-retention social signals delivered within <span class="text-white font-bold underline decoration-sp-purple">0-6 hours</span>.
			</p>

			<div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-6">
				<a href="#pricing" class="sp-btn px-10 py-5 text-lg shadow-[0_20px_50px_rgba(168,85,247,0.3)]">
					Deploy Growth Now
				</a>
				<a href="#services" class="text-white font-bold hover:text-sp-purple transition-colors">Explore Services →</a>
			</div>
		</div>
		<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full bg-sp-purple/10 blur-[120px] pointer-events-none"></div>
	</section>

	<!-- PRICING SIMULATOR -->
	<section id="pricing" class="px-6 lg:px-8 py-24 bg-white/[0.01]">
		<div class="max-w-4xl mx-auto">
			<div class="text-center mb-16">
				<h2 class="text-4xl font-bold text-white tracking-tight">Simulate Your <span class="text-gradient italic">Growth Strategy</span></h2>
				<p class="mt-4 text-gray-400">Drag the slider to model your package between 100 and 50,000 units.</p>
			</div>

			<div class="glass-panel rounded-[40px] p-8 md:p-16 border-white/10">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
					<div>
						<p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 mb-2 font-bold">Growth Units / month</p>
						<p class="text-4xl font-black text-white mb-10"><span id="units-value">1,000</span> <span class="text-sm text-gray-600 italic">Followers</span></p>

						<p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 mb-2 font-bold">Estimated Investment</p>
						<p class="text-6xl font-black text-white italic tracking-tighter">
							<span id="price-value">$8.00</span>
						</p>
					</div>

					<div class="space-y-8">
						<input type="range" id="units-slider" class="units-slider" min="100" max="50000" step="100" value="1000">
						<div class="flex justify-between text-[10px] text-gray-600 font-bold">
							<span>MIN: 100</span>
							<span>MAX: 50,000</span>
						</div>
						<button class="sp-btn w-full py-5 text-xl italic uppercase font-black">Order Now</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('units-slider');
    const unitsVal = document.getElementById('units-value');
    const priceVal = document.getElementById('price-value');

    slider.oninput = function() {
        const val = parseInt(this.value);
        unitsVal.innerHTML = val.toLocaleString();
        const price = (val * 0.008).toFixed(2);
        priceVal.innerHTML = '$' + price;
    };
});
</script>

<?php get_footer(); ?>