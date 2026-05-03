<?php
/*
Template Name: Principle
*/
?>
<?php get_header(); ?>

<section class="section first-screen faq-section-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-sec-l"></div>
                <div class="wr-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="wr-des">
                                <div class="first-screen-title">
                                    <p class="ttl"><?php the_field('title'); ?></p>
                                </div>
                                <div class="text">
                                    <p><?php the_field('text'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(!empty(get_field('title_main')) && !empty(get_field('main'))) { ?>
    <section class="section faq-section-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="bg-title">
                            <span>.</span>
                            <p>the general principles of the Agile Method</p>
                        </div>
                        <p class="h3"><span>.</span><?php the_field('title_main'); ?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text">
                        <?php the_field('main'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<section class="section faq-section-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <div class="bg-title">
                        <span>.</span>
                        <p>the general principles of the Agile Method</p>
                    </div>
                    <p class="h3"><span>.</span><?php the_field('title_second'); ?></p>
                </div>
            </div>
            <div class="col-12">
                <div class="text">
                    <?php the_field('second'); ?>
                </div>
            </div>
            <div class="col-12">
                <div class="wr-scheme-steps">
                    <div class="list-step">
                        <div class="step-item step-item-1">
                            <div class="num">1</div>
                            <div class="wr-text">
                                <div class="ttl">PLAN</div>
                                <div class="sub">Discover & Define</div>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shape.svg">
                        </div>
                        <div class="step-item step-item-2">
                            <div class="num">2</div>
                            <div class="wr-text">
                                <div class="ttl">DESIGN</div>
                                <div class="sub">Create Visuals</div>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shape.svg">
                        </div>
                        <div class="step-item step-item-3">
                            <div class="num">3</div>
                            <div class="wr-text">
                                <div class="ttl">BUILD</div>
                                <div class="sub">Develop & Construct</div>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shape.svg">
                        </div>
                        <div class="step-item step-item-4">
                            <div class="num">4</div>
                            <div class="wr-text">
                                <div class="ttl">BETA</div>
                                <div class="sub">Test & train</div>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shape.svg">
                        </div>
                        <div class="step-item step-item-5">
                            <div class="num">5</div>
                            <div class="wr-text">
                                <div class="ttl">LAUNCH</div>
                                <div class="sub">Optimize & Go Live</div>
                            </div>
                        </div>
                        <div class="step-item step-item-6">
                            <div class="num">6</div>
                            <div class="wr-text">
                                <div class="ttl">Support</div>
                                <div class="sub">Monitor, Evaluate & Refine</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="text">
                    <p><?php the_field('text_after'); ?></p>
                </div>
            </div>
            <div class="col-12">
            	<?php

				if( have_rows('info') ):

				    while ( have_rows('info') ) : the_row(); ?>
				    	<div class="advantages-card">
		                    <p class="h4"><?php the_sub_field('title'); ?></p>
		                    <div class="text">
		                        <?php the_sub_field('content'); ?>
		                    </div>
		                </div>
				    
				    <?php 

				    endwhile;

				endif;

				?>
                
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .wr-scheme-steps:before {
        top: 92px;
        left: 104px;
        width: 298px;
        background: url(<?php echo get_template_directory_uri(); ?>/images/grey.png) left 0 no-repeat;
        background-size: cover
    }

    .wr-scheme-steps:after {
        top: 96px;
        right: 105px;
        width: 343px;
        background: url(<?php echo get_template_directory_uri(); ?>/images/red.png) right 0 no-repeat;
        background-size: cover
    }
</style>
<?php get_footer(); ?>