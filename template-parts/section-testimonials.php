<?php
$cards = [
    [
        'title' => '“A terrific piece of praise”',
        'img' => 'avatar-1.png',
        'name' => 'Name 1',
        'description' => 'Description 1',
    ],
    [
        'title' => '“A fantastic bit of feedback”',
        'img' => 'avatar-2.png',
        'name' => 'Name 2',
        'description' => 'Description 2',
    ],
    [
        'title' => '“A genuinely glowing review”',
        'img' => 'avatar-3.png',
        'name' => 'Name 3',
        'description' => 'Description 3',
    ],
];
?>

<section class="section-testimonils py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-title">Heading</h1>
                <p class="mt-2 mb-5 mb-lg-0 text-secondary">Subheading to introduce testimonials</p>
            </div>
        </div>
        <div class="row pt-lg-3 mt-lg-3 reviews-row">
            <?php foreach ($cards as $card): ?>
                <div class="col-lg-4">
                    <div class="card shadow has-scale">
                        <div class="card-body">
                            <h5 class="card-title fw-medium mb-5">
                                <?php echo esc_html($card['title']); ?>
                            </h5>

                            <div class="d-flex gap-3">
                                <picture>
                                    <img 
                                        class="rounded-3 w-100" 
                                        src="<?php echo get_template_directory_uri() . '/images/' . $card['img']; ?>" 
                                        alt="<?php echo esc_attr($card['name']); ?>" 
                                    />
                                </picture>

                                <div>
                                    <div class="name">
                                        <?php echo esc_html($card['name']); ?>
                                    </div>
                                    <div class="description text-secondary">
                                        <?php echo esc_html($card['description']); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
    </div>
</section>