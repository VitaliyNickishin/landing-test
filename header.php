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
    <header class="header py-5">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<div class="d-flex justify-content-between w-100">
					<a class="navbar-brand fw-medium" href="#">Site name</a>

					<!-- Burger -->
					<button class="navbar-toggler" type="button"
						data-bs-toggle="offcanvas"
						data-bs-target="#mobileMenu"
						aria-controls="mobileMenu">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- Offcanvas -->
					<div class="offcanvas offcanvas-lg offcanvas-start" tabindex="-1" id="mobileMenu">
					
						<div class="offcanvas-header mt-5">
							<h5 class="offcanvas-title fw-medium">Site name</h5>
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
						</div>

						<div class="offcanvas-body ms-lg-auto text-center mt-lg-0 mt-4">
							<div class="navbar-nav align-items-center">
							<a class="nav-link active" href="#">Page</a>
							<a class="nav-link" href="#">Page</a>
							<a class="nav-link" href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact us</a>
							</div>

							<button class="btn btn-primary ms-lg-4 mt-lg-0 mt-5">Send form</button>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

