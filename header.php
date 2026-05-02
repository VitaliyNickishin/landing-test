<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
    <header class="header">
			<div class="container">
				<div class="header-inner">
					<a href="/" class="logo">
						<img src="./theme/img/logo.svg" alt="logo">
					</a>
					<nav class="nav">
						<ul>
							<li class="mobile-menu">
								<button class="burger close" type="button"><span></span></button>
							</li>
							<li><a href="#services">Services</a></li>
							<li><a href="#work-process">Work process</a></li>
							<!-- <li><a href="#contact-us">Contact us</a></li> -->
							<li><a href="#cases">Cases</a></li>
							<li><a href="#testiomonials">Testimonials</a></li>
							<li><a href="#leadereship">Leadership</a></li>
						</ul>
						<button type="button" class="button openmodal">Contact now</button>
						<button class="burger" type="button"><span></span></button>
					</nav>
				</div>
			</div>
		</header>

