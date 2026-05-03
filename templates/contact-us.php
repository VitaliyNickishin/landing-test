<?php
/*
Template Name: Contact-us
*/
?>
<?php get_header(); ?>

<section class="section first-screen contact-section-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-sec-l"></div>
                <div class="wr-content">
                    <div class="row">
                        <div class="col-12 col-xl-7">
                            <div class="wr-des">
                                <div class="first-screen-title">
                                    <p class="ttl"><?php the_field('title'); ?></p>
                                </div>
                                <div class="text">
                                    <p><?php the_field('text'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-11 col-xl-5">
                            <div class="wr-des wr-des-form">
                                <p class="h3">Contact Us Today</p>
                                <div class="wr-form">
                                     <?php echo do_shortcode('[contact-form-7 id="5" title="Footer form"]'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7">
                            <div class="wr-des">
                                <div class="wr-direct">
                                    <p class="ttl">Direct Contact:</p>
                                    <ul class="list-contact">
                                        <li><a class="ico-link-2" href="tg://resolve?domain=<?php the_field('telegram', 'option');?>"><?php the_field('telegram', 'option');?></a></li>
                                        <li><a class="ico-link-1" href="mailto:<?php the_field('email', 'option');?>"><?php the_field('email', 'option');?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>