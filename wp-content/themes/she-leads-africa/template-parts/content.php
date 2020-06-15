<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package She_Leads_Africa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header">

		<?php she_leads_africa_post_thumbnail(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content post-body">

		<?php 
			if ( 'post' === get_post_type() ) :
		?>
			<div class="entry-meta">
				<?php
				she_leads_africa_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<h2><?php the_title(); ?></h2>

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'she-leads-africa' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
