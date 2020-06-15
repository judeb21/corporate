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

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer(); 

?>

<script>

    'use strict';

    var controller = new ScrollMagic.Controller();

    var scene = new ScrollMagic.Scene({
    duration: "100%",
    triggerElement: ".community-header",
    triggerHook: "-20%"
    })
    .addTo(controller)

    .on("enter", function () {
        $('.community-bts-20-years').addClass('active');
    })

    .on("leave", function () {
        $('.community-bts-20-years').addClass('active');
    });

</script>

<script>
    function work(evt, workType) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(workType).style.display = "block";
        evt.currentTarget.className += " active";
    }
        
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>