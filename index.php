<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package megatheme
 */

get_header();
?>
    <!-- Main -->
    <main class="main">
        <section class="section-hero pb-5 py-lg-5 pb-lg-4 my-lg-5">
            <div class="container">
                <div class="row pt-lg-4 pt-2">
                    <div class="col-12">
                        <div class="text-center">
                            <h1 class="display-3 ls-1 section-title">Landing page title</h1>
                            <p class="mt-4 text-secondary">And a subheading describing your site, too</p>
                            <button class="btn btn-primary mt-4">Send form</button>
                        </div>
                        <div class="mt-5 pt-lg-5">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/hero-mobile.png" media="(max-width: 768px)" />
                                <img class="rounded-3 w-100" src="<?php echo get_template_directory_uri(); ?>/images/hero-desktop.png" alt="Main image" />
                            </picture>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section-testimonials'); ?>
        
    </main>

<?php
get_footer();