<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package She_Leads_Africa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
        <header id="site-header">
            <div class="hero-banner sla-relative hero-works-banner">
                <div class="hero-banner-img sla-fit">
                    <img class="sla-fit" src="<?php bloginfo('template_directory');?>/assets/img/work-banner.png" alt="About banner image">
                </div>
                <div class="hero-banner-header sla-absolute">
                    <h1>Our Work / Reputation</h1>
                    <h2>Global brands have trusted us to deliver value to our unique audience.</h2>
                </div> 
            </div>
        </header>

        <section class="work-section">
            <div class="tab-section" id="tab-section">
                <div class="tab-header" id="tab-header">
                    <button class="tablinks" onclick="work(event, 'brand')" id="defaultOpen">BRAND / PARTNERS</button>
                    <button class="tablinks" onclick="work(event, 'case')">CASE STUDIES</button>
                </div>
                <div id="brand" class="tabcontent">
                    <div class="sla-numbers">
                        <div class="sla-sla-numbers-header">
                            <h2 class="block-header sla-relative sla-overflow-h">Brand / Partners</h2>
                        </div>
                        <div class="ct-list-content full-with-s">
                            <p> With our unique audience, 200+ brands across the globe trust SLA to develop compelling and results driven content strategies to achieve their marketing goals.
                                We have a strong reputation in bridging the gap between innovative companies and ambitious women globally, with our novel marketing, development and research strategies.
                            </p>
                        </div>
                        <div class="sla-by-numbers">
                            <div class="sla-number__box">
                                <span>
                                    50 +                               
                                </span>
                                <p>Brands</p>
                            </div>
                            <div class="sla-number__box">
                                <span>
                                    172
                                </span>
                                <p>Testimonials</p>
                            </div>
                            <div class="sla-number__box">
                                <span>
                                    5
                                </span>
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>

                    <section class="work-brand__section">
                        <div class="work-pictures">
                            <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/DSC_2517-scaled.jpg" alt="SLA farouz partnership">
                            <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/DSC_0025-scaled.jpg" alt="Molped SLA partnership">
                            <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/20190928_183336-scaled.jpg" alt="">
                            <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/0G7A2447.jpg" alt="SLA global citizen">
                            <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/0G7A2336.jpg" alt="SLA Glade partnership">
                            <img src="http://localhost:8888/sla/wp-content/uploads/2020/05/Highlight3.png" alt="">
                        </div>
                    </section>

                    <section class="main-partners mt-5">
                        <div class="main-partners-header">
                            <h2 class="block-header black sla-relative sla-overflow-h">Our Brand & Partners</h2>
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
                                    <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/Oxfam.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/logo/facebook-logo-preview.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width: 60%;" src="<?php bloginfo('template_directory');?>/assets/img/logo/google.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/logo/Standard_Chartered.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width: 50%;" src="<?php bloginfo('template_directory');?>/assets/img/logo/ARM.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width: 50%;" src="<?php bloginfo('template_directory');?>/assets/img/logo/Molped-logo.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width: 35%" src="http://localhost:8888/sla/wp-content/uploads/2020/05/DL-LOGO_Plan.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/Women-will.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/Maybelline-Logo.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width: 50%;" src="http://localhost:8888/sla/wp-content/uploads/2020/06/samsung-logo-png-samsung-blocked-black-logo-1024.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width: 50%;" src="http://localhost:8888/sla/wp-content/uploads/2020/06/glade-logo.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width: 30%;" src="http://localhost:8888/sla/wp-content/uploads/2020/06/Unileverlog.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width:50%;" src="http://localhost:8888/sla/wp-content/uploads/2020/06/nestle-logo-png-image-transparent-background-nestle-removebg-preview.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width:60%;" src="http://localhost:8888/sla/wp-content/uploads/2020/06/rsz_south-african-airways-logo-wordmark.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width:60%;" src="http://localhost:8888/sla/wp-content/uploads/2020/06/alat.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width:60%;" src="http://localhost:8888/sla/wp-content/uploads/2020/06/fsdh_asset.png" alt="">
                                </figure>
                            </div>

                            <div class="brand-partners">
                                <figure>
                                    <img style="width:50%;" src="http://localhost:8888/sla/wp-content/uploads/2020/06/7UP_LOGO-removebg-preview.png" alt="">
                                </figure>
                            </div>

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
                    
                </div>
                <div id="case" class="tabcontent">
                    <section class="main-cs-section">
                        <div class="cs-header">
                            <h2 class="block-header sla-relative sla-overflow-h">Case Study</h2>
                        </div>

                        <?php $catquery = new WP_Query( 'cat=6' ); ?>

                        <div class="sla-relative main-about about-half">

                            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

                            <div class="main-about--half works-img">

                                <div class="main-about--half-img">
                                    <!-- <img src="<?php bloginfo('template_directory');?>/assets/img/absolutvision.png" alt="half"> -->
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( '<img> </img>'); ?>
                                    </a>
                                </div>

                                <div class="main-about--half-content">
                                    <!-- <span class="date"><?php the_date(); ?></span> -->
                                    <span class="title"><?php the_title(); ?></span>
                                    <span class="sub-title"><a href="<?php the_permalink(); ?>">Read More</a></span>
                                </div>

                            </div>

                            <?php endwhile;
                                wp_reset_postdata();
                            ?>
                            
                        </div>
                    </section>
                </div>
            </div>
        </section>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
