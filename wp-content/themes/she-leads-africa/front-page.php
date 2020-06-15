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
 * @package She_Leads_Africa
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_front_page() ) :
				?>
				<!-- <header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header> -->

                <header id="site-header">
                    <div class="hero-banner sla-relative hero-home-banner">
                        <div class="hero-banner-img sla-fit">
                            <img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                            <!-- <img class="sla-fit" src="http://localhost:8888/sla/wp-content/uploads/2020/05/home-banner.png" alt="Home banner image"> -->
                        </div>
                        <div class="hero-banner-header sla-absolute">
                            <h1>#1 digital media company to reach and engage the largest community of Africa’s millennial women.</h1>
                            <h2>We give leading brands like yours access, engagement and insights to our growing community of smart & ambitious women across Africa.</h2>
                            <a href="http://localhost:8888/sla/contact/" class="button sla-relative">
                                <span>Work With Us</span>
                                <span class="sla-relative sla-overflow-h arrow-icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M-4.2046e-06 9L-4.11718e-06 7L12 7L6.5 1.5L7.92 0.0799977L15.84 8L7.92 15.92L6.5 14.5L12 9L-4.2046e-06 9Z" fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                        </div> 
                    </div>
                </header>

				<?php
            endif; ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                <!-- Who we are section -->
                <section class="main-section">
                    <div class="sla-relative main-about main-about--home">
                        <div class="main-about--img">
                            <img src="http://localhost:8888/sla/wp-content/uploads/2020/05/Kamala_Harris_with_women_-_Feb_2020-1.png" alt="">
                        </div>
                        <div class="main-about--content">
                            <h2 class="block-header sla-relative sla-overflow-h">Who we are</h2>
                            <p>She Leads Africa is the top leading digital brand for women looking to achieve their professional, business and life goals.</p>
                            <p> We help women of African descent build the businesses and careers of their dreams. We have a community of 700,000 engaged and upwardly mobile middle income, urban, technology enabled women who are looking for advice and guidance on how to live their best lives. </p>
                            <a href="http://localhost:8888/sla/about/" class="button sla-relative">
                                <span>Find Out More</span>
                                <span class="sla-relative sla-overflow-h arrow-icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M-4.2046e-06 9L-4.11718e-06 7L12 7L6.5 1.5L7.92 0.0799977L15.84 8L7.92 15.92L6.5 14.5L12 9L-4.2046e-06 9Z" fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </section>
                <div class="divider"></div>
                <section class="main-cs-section">
                    <div class="cs-header">
                        <h2 class="block-header sla-relative sla-overflow-h">Case Study</h2>
                    </div>

                    <?php 
                        // The Query
                        $the_query = new WP_Query( 'cat=6&posts_per_page=2' );  
                        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="sla-relative main-about main-cs">
                        <div class="main-about--img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="main-about--content">
                            <h2 class="sla-relative sla-overflow-h main-cs-heading"><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button sla-relative">
                                <span>Learn More</span>
                                <span class="sla-relative sla-overflow-h arrow-icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M-4.2046e-06 9L-4.11718e-06 7L12 7L6.5 1.5L7.92 0.0799977L15.84 8L7.92 15.92L6.5 14.5L12 9L-4.2046e-06 9Z" fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <?php endwhile; 
                        wp_reset_postdata(); 
                    ?>

                    <div class="cs-button">
                        <a href="http://localhost:8888/sla/works" class="button sla-relative">
                            <span>View Our Works</span>
                            <span class="sla-relative sla-overflow-h arrow-icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-4.2046e-06 9L-4.11718e-06 7L12 7L6.5 1.5L7.92 0.0799977L15.84 8L7.92 15.92L6.5 14.5L12 9L-4.2046e-06 9Z" fill="white"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </section>

                <section class="main-ct">
                    <div class="ct-list sla-relative sla-overflow-h">
                        <div class="ct-list-header">
                            <h2 class="block-header sla-relative sla-overflow-h">Testimonials</h2>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="ct-list-content swiper-slide">
                                    <p> @UnitedCap Nice brand collaboration by the way. @SheLeadsAfrica knows how to communicate with us African girls. They speak our language - Dzithe </p>
                                </div>

                                <div class="ct-list-content swiper-slide">
                                    <p> I love what @SheLeadsAfrica is doing for women in business in Africa. Makes me smile when y'all pop-up on my timeline. - Ibukun </p>
                                </div>

                                <div class="ct-list-content swiper-slide">
                                    <p> So grateful to @SheLeadsAfrica for their trust. It's an amazing competition organized by brilliant women & a talented team. It was fabulous!  - Nour </p>
                                </div>

                                <div class="ct-list-content swiper-slide">
                                    <p> Taking a moment to appreciate the gem that is @SheLeadsAfrica!! I'm learning so much from the website - Ngozi </p>
                                </div>
                            </div>
                        </div>

                        <div class="ct-arrow-left sla-absolute swiper-button-prev">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d)">
                                    <circle cx="40" cy="38" r="28" fill="white"></circle>
                                </g>
                                <path d="M44.774 44.4259L38.362 37.9999L44.774 31.5739L42.8 29.5999L34.4 37.9999L42.8 46.3999L44.774 44.4259Z" fill="black"></path>
                                <defs>
                                    <filter id="filter0_d" x="0" y="0" width="80" height="80" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                    <feOffset dy="2"></feOffset>
                                    <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                    </filter>
                                </defs>
                            </svg>                              
                        </div>
                        <div class="ct-arrow-right sla-absolute swiper-button-next">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d)">
                                    <circle cx="40" cy="38" r="28" fill="white"></circle>
                                </g>
                                <path d="M35.226 44.4259L41.638 37.9999L35.226 31.5739L37.2 29.5999L45.6 37.9999L37.2 46.3999L35.226 44.4259Z" fill="black"></path>
                                <defs>
                                    <filter id="filter0_d" x="0" y="0" width="80" height="80" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                    <feOffset dy="2"></feOffset>
                                    <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </section>

                <section class="main-partners">
                    <div class="main-partners-header">
                        <h2 class="block-header black sla-relative sla-overflow-h">Our Brand &amp; Partners</h2>
                    </div>
                    <div class="main-partners-content">
                        <div class="brand-partners">
                            <figure>
                                <img src="http://localhost:8888/sla/wp-content/uploads/2020/05/sheamoisture.png" height="80" alt="SLA sheamoisture logo">
                            </figure>
                        </div>

                        <div class="brand-partners">
                            <figure>
                                <img style="width:50%;" src="http://localhost:8888/sla/wp-content/uploads/2020/05/intel_rgb.png" height="80" alt="SLA intel logo">
                            </figure>
                        </div>

                        <div class="brand-partners">
                            <figure>
                                <img src="http://localhost:8888/sla/wp-content/uploads/2020/05/FBNQuest-logo.png" alt="SLA FBNQuest logo">
                            </figure>
                        </div>
                            
                        <div class="brand-partners">
                            <figure>
                                <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/Oxfam.png" alt="SLA Oxfam logo">
                            </figure>
                        </div>

                        <div class="brand-partners">
                            <figure>
                                <img src="<?php bloginfo('template_directory');?>/assets/img/logo/facebook-logo-preview.png" alt="facebook logo SLA">
                            </figure>
                        </div>

                        <div class="brand-partners">
                            <figure>
                                <img style="width: 60%;" src="<?php bloginfo('template_directory');?>/assets/img/logo/google.png" alt="SLA google logo">
                            </figure>
                        </div>

                        <div class="brand-partners">
                            <figure>
                                <img src="<?php bloginfo('template_directory');?>/assets/img/logo/Standard_Chartered.png" alt="Standard chartered logo">
                            </figure>
                        </div>

                        <div class="brand-partners">
                            <figure>
                                <img style="width: 50%;" src="<?php bloginfo('template_directory');?>/assets/img/logo/ARM.png" alt="ARM logo SLA">
                            </figure>
                        </div>

                        <div class="brand-partners">
                            <figure>
                                <img style="width: 50%;" src="<?php bloginfo('template_directory');?>/assets/img/logo/Molped-logo.png" alt="SLA molped logo">
                            </figure>
                        </div>

                        <div class="brand-partners">
                            <figure>
                                <img src="<?php bloginfo('template_directory');?>/assets/img/logo/clinique.png" alt="clinique logo">
                            </figure>
                        </div>
                    </div>
                </section>

            </article><!-- #post-<?php the_ID(); ?> -->

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer(); 
?>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>