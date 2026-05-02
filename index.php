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
$get_template_directory_uri = get_stylesheet_directory_uri();

get_header();
?>
    <!-- Main -->
    <main class="main">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <div class="section-title">
                            <h1 class="title">Landing page title</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();