<?php
/*
Template Name: FAQ
*/
?>
<?php get_header(); ?>
<section class="section first-screen search-section-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-sec-l"></div>
                <div class="wr-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="wr-des">
                                <div class="first-screen-title">
                                    <p class="ttl">How can we help you?</p>
                                </div>
                                <div class="wr-form">
                                    <form class="form-search" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="post-date-filter">
                                        <div class="wr-search">
                                            <input type="search" class="form-control" placeholder="" id="search-field">

                                            <button class="search-btn"><i class="fas fa-search"></i></button>
                                        </div>
                                        <ul class="codyshop-ajax-search"></ul>
                                        <small id="passwordHelpBlock" class="form-text text-muted">You can also browse the topics below to find what you are looking for.</small>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section search-section-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <div class="bg-title">
                        <span>.</span>
                        <p>frequently asked questions</p>
                    </div>
                    <p class="h3"><span>.</span>frequently asked questions</p>
                </div>
            </div>
        </div>
        <div class="row pt-box">
        	<?php $terms = get_terms(array('taxonomy' => 'faq_categories')); ?>

        	<?php foreach ($terms as $term) { ?>
				
				<?php $posts = get_posts(array('posts_per_page' => -1, 'post_type' => 'post_faq', 'tax_query' => array('relation' => 'AND', array('taxonomy' => 'faq_categories', 'terms' => $term->term_id, 'field' => 'id', 'operator' => 'IN')))); ?>
				
	            <div class="col-12 col-lg-4">
	                <div class="advantages-card">
	                    <p class="h4"><?php echo $term->name; ?></p>
	                    <div class="des">
	                        <ul class="list-link">
	                        	<?php foreach ($posts as $post) { ?>
		                            <li><a href="<?php the_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></li>
	                            <?php } ?>
	                        </ul>
	                    </div>
	                </div>
	            </div>

            <?php } ?>

        </div>
    </div>
</section>

<?php get_footer('faq'); ?>