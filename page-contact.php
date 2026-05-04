<?php
/*
Template Name: Contact Page
*/
get_header();
?>
    <!-- Main -->
    <main class="main pt-3 pb-5 py-lg-5">
        <section class="section-contact pb-0 pb-lg-4 my-lg-5">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row">
                    <div class="col-12 col-lg-6">
                        <div class="mt-4 pt-3 mt-lg-0 pt-lg-0 text-center text-lg-start">
                            <h1 class="display-3 section-title">Contact us</h1>
                            <p class="fs-4 mt-4 text-secondary">Subheading for description or instructions</p>
                        </div>
                        <div class="mt-3 pt-3">
                            <?php get_template_part('template-parts/_partials/form-contact'); ?>
                        </div>

                    </div>
                    <div class="col-12 offset-lg-1 col-lg-5">
                        <picture>
                            <img class="rounded-3 w-100" src="<?php echo get_template_directory_uri(); ?>/images/contact-img.png" alt="Contact image" />
                        </picture>

                    </div>
                </div>
            </div>
        </section>

       
        
    </main>

<?php
get_footer();