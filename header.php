<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-[#0B0F17] text-white antialiased' ); ?>>

<header class="site-header fixed top-0 w-full z-[1000] border-b border-white/5 bg-[#0B0F17]/80 backdrop-blur-md">
	<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
		<!-- Logo -->
		<a href="<?php echo home_url(); ?>" class="flex items-center gap-2 no-underline">
			<div class="w-10 h-10 bg-gradient-to-tr from-sp-purple to-sp-pink rounded-xl flex items-center justify-center font-black italic text-white shadow-lg">S</div>
			<span class="text-white font-black text-2xl tracking-tighter italic">SocialPulse<span class="text-sp-purple">360</span></span>
		</a>

		<!-- Desktop Menu (Horizontal) -->
		<nav class="hidden md:flex items-center gap-10">
			<a href="<?php echo home_url(); ?>" class="text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">Home</a>
			<a href="#services" class="text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">Services</a>
			<a href="#about" class="text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">About us</a>
			<a href="#faq" class="text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">FAQ</a>
			<a href="#contact" class="text-sm font-bold text-gray-400 hover:text-white transition uppercase tracking-widest no-underline">Contact us</a>
		</nav>

		<!-- Mobile Button -->
		<button id="mobile-toggle" class="md:hidden text-white"><i data-lucide="menu"></i></button>
	</div>
</header>