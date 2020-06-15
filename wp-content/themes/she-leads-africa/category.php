<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package She_Leads_Africa
 */

get_header();
?>

	<main id="primary" class="site-main main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


            <div class="entry-content">

                <section class="work-section">
                    <div class="tab-section" id="tab-section">
                        <div id="case" class="tabcontent">
                            <section class="main-cs-section">
                                <div class="cs-header">
                                    <h2 class="block-header sla-relative sla-overflow-h"><?php single_cat_title(); ?></h2>
                                </div>

                                <div class="sla-relative main-about about-half">

                                <?php
                                while ( have_posts() ) :
                                    the_post();

                                    get_template_part( 'template-parts/content', 'category' );

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    // if ( comments_open() || get_comments_number() ) :
                                    // 	comments_template();
                                    // endif;

                                endwhile; // End of the loop.
                                ?>

                                </div>
                            </section>
                        </div>
                    </div>
                </section>
	        </div><!-- .entry-content -->

	
        </article><!-- #post-<?php the_ID(); ?> -->


	</main><!-- #main -->

<?php
// get_sidebar();
get_footer(); 