<?php
/*
Template Name: About-us
*/
?>
<?php get_header(); ?>
<section class="section first-screen about-section-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-sec-l"></div>
                <div class="wr-content">
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-9">
                            <div class="wr-des">
                                <div class="first-screen-title">
                                    <p class="ttl"><?php the_field('title'); ?></p>
                                </div>
                                <div class="text">
                                    <?php the_field('text'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="wr-slider">
                                <div class="slider-common slider-stat">
                                	<?php

									if( have_rows('slides') ):

									    while ( have_rows('slides') ) : the_row(); ?>
										<?php $top = get_sub_field('top'); ?>
										<?php $bottom = get_sub_field('bottom'); ?>
								        <div class="slide-item">
	                                        <div class="stat-card">
	                                            <div class="slide-card">
	                                                <div class="ttl"><?php echo $top['number']; ?></div>
	                                                <div class="sub-text"><?php echo $top['text']; ?></div>
	                                            </div>
	                                            <div class="slide-card">
	                                                <div class="ttl"><?php echo $bottom['number']; ?></div>
	                                                <div class="sub-text"><?php echo $bottom['text']; ?></div>
	                                            </div>
	                                        </div>
	                                    </div>

										<?php 
									    endwhile;

									endif;

									?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section about-section-2">
    <div class="container">
    	<?php $vision = get_field('our_vision'); ?>
    	<?php $mission = get_field('our_mission'); ?>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="advantages-card">
                    <p class="h4"><?php echo $vision['title']; ?></p>
                    <p class="des"><?php echo $vision['description']; ?></p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="advantages-card">
                    <p class="h4"><?php echo $mission['title']; ?></p>
                    <p class="des"><?php echo $mission['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>






<section class="section about-section-4">
    <div class="container">
        <div class="row">
        <?php if( have_rows('team') ): ?>
            <?php while( have_rows('team') ): the_row(); 
            $row = get_row();
        ?>
            <div class="team-member col-12 row">
                <div class="col-12 col-md-4">
                    <div class="wr-img">
                        <div class="bg-sec" style="background: url(<?php echo wp_get_attachment_image_url( get_sub_field('image_after'), 'full') ?>);"></div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="text">
                        <?php the_sub_field('text_after'); ?>
                        <p class="sub"><?php the_sub_field('name'); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>
<br><br>
<?php get_footer(); ?>