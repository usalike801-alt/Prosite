/**
 * Elite Digital Agency — Front-end interactivity
 * Handles: header transparent-to-solid scroll effect, pricing simulator.
 */
(function () {
	'use strict';

	/* ------------------------------------------------------------------
	 * Header scroll effect
	 * ------------------------------------------------------------------ */
	function initHeaderScroll() {
		var header = document.querySelector( '.site-header' );
		if ( ! header ) return;

		var THRESHOLD = 40;

		function onScroll() {
			if ( window.scrollY > THRESHOLD ) {
				header.classList.add( 'is-scrolled' );
			} else {
				header.classList.remove( 'is-scrolled' );
			}
		}

		onScroll();
		window.addEventListener( 'scroll', onScroll, { passive: true } );
	}

	/* ------------------------------------------------------------------
	 * Pricing simulator
	 * ------------------------------------------------------------------ */
	function initPricingSimulator() {
		var slider = document.getElementById( 'units-slider' );
		if ( ! slider ) return;

		var unitsLabel = document.getElementById( 'units-value' );
		var priceLabel = document.getElementById( 'price-value' );
		var RATE_PER_1000 = 8; // $8 per 1000 Resource Units.

		function formatUnits( value ) {
			return Number( value ).toLocaleString( 'en-US' );
		}

		function formatPrice( value ) {
			return value.toLocaleString( 'en-US', {
				minimumFractionDigits: 2,
				maximumFractionDigits: 2,
			} );
		}

		function update() {
			var units = parseInt( slider.value, 10 );
			var price = ( units / 1000 ) * RATE_PER_1000;

			if ( unitsLabel ) unitsLabel.textContent = formatUnits( units );
			if ( priceLabel ) priceLabel.textContent = '$' + formatPrice( price );

			// Update the filled portion of the track for a nicer visual.
			var min = parseInt( slider.min, 10 ) || 0;
			var max = parseInt( slider.max, 10 ) || 100;
			var percent = ( ( units - min ) / ( max - min ) ) * 100;
			slider.style.background =
				'linear-gradient(90deg, #A855F7 0%, #EC4899 ' + percent + '%, rgba(255,255,255,0.08) ' + percent + '%)';
		}

		slider.addEventListener( 'input', update );
		update(); // Initialize on load.
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		initHeaderScroll();
		initPricingSimulator();
	} );
})();
