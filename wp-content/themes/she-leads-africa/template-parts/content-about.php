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
            <div class="hero-banner sla-relative hero-about-banner">
                <div class="hero-banner-img sla-fit">
                    <img class="sla-fit" src="http://localhost:8888/sla/wp-content/uploads/2020/06/1.png" alt="About banner image">
                </div>
                <div class="hero-banner-header sla-absolute">
                    <h1>About Us</h1>
                    <h2>Global leading brands trust us to reach, engage and gain insights on smart & ambitious women across Africa.</h2>
                </div> 
            </div>
        </header>

        <section class="work-section">
            <div class="tab-section" id="tab-section">
                <div class="tab-header" id="tab-header">
                    <button class="tablinks" onclick="work(event, 'brand')" id="defaultOpen">SLA</button>
                    <button class="tablinks" onclick="work(event, 'case')">In The News</button>
                    <button class="tablinks" onclick="work(event, 'press')">Press Room</button>
                </div>
                <div id="brand" class="tabcontent">
                    <div class="sla-numbers">
                        <div class="sla-sla-numbers-header">
                            <h2 class="block-header sla-relative sla-overflow-h">She Leads Africa</h2>
                        </div>
                        <div class="ct-list-content full-with-s">
                            <p> We are a digital brand and lifestyle company! Our superpower is connecting smart young African women with the brands and resources to help them live their best professional lives. 
                                Whether it’s climbing the corporate ladder, starting a business or exploring life’s passions, SLA creates digital content and in person experiences for 700K+ African women globally.
                            </p>
                        </div>
                    </div>
                    <div class="sla-values">
                        <div class="sla-values-header">
                            <h2 class="block-header sla-relative sla-overflow-h">Our Values</h2>
                        </div>
                        <div class="ct-values-content">
                            <div class="ct-values-content__div">
                                <p>We are committed to helping smart and ambitious young African women live their best lives</p>
                            </div>
                            <div class="ct-values-content__div">
                                <p>We promote and uplift local talent by proactively identifying promising African experts and practitioners and providing them a platform to grow</p>
                            </div>
                            <div class="ct-values-content__div">
                                <p>We deliver the best career and business content focused on our community</p>
                            </div>
                        </div>
                    </div>

                    <section class="main-section mt-t">
                        <div class="sla-relative main-about about-p-sec">
                            <div class="main-about--img">
                                <img src="http://localhost:8888/sla/wp-content/uploads/2020/06/our-company-scaled.jpg" alt="">
                            </div>
                            <div class="main-about--content">
                                <h2 class="block-header sla-relative sla-overflow-h">Our Company</h2>
                                <p>Through our digital content and events, we provide the largest platform of world-class opportunities for African women to network, 
                                   learn and acquire tools, products and services to enable them to advance in their careers and business aspirations.
                                </p>
                                <p>We’re great at connecting with African women while gaining the insights on what they love.
                                   Now that you know about us, how would you like to work with us?
                                </p>
								<p>
									Now that you know about us, how would you like to work with us? 
								</p>
                                <a href="#" class="button sla-relative">
                                    <span>Partner With Us</span>
                                    <span class="sla-relative sla-overflow-h arrow-icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M-4.2046e-06 9L-4.11718e-06 7L12 7L6.5 1.5L7.92 0.0799977L15.84 8L7.92 15.92L6.5 14.5L12 9L-4.2046e-06 9Z" fill="white"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </section>

                    <div class="founders">
                        <div class="founders-header">
                            <h2 class="block-header sla-relative sla-overflow-h">Our Founders</h2>
                        </div>
                        <div class="founder-container">
                            <div class="founder-column1">
                                <div class="founder-column1__img sla-relative sla-overflow-h">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/Yasmin-Co-Founder.jpg" alt="Yasmin Co-founder SLA">
                                </div>
                                <div class="founder-column1__content">
                                    <h1>Yasmin Belo-Osagie</h1>
                                    <h2>Co-Founder</h2>
                                </div>
                            </div>
                            <div class="founder-column1">
                                <div class="founder-column1__img">
                                    <img src="<?php bloginfo('template_directory');?>/assets/img/Afua-cofounder.png" alt="Afua Co-founder SLA">
                                </div>
                                <div class="founder-column1__content">
                                    <h1>Afua Osei</h1>
                                    <h2>Co-Founder</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-section">
                        <div class="timeline-section__header">
                            <h2 class="block-header sla-relative sla-overflow-h">Unique Dates & Accomplishments</h2>
                        </div>

                        <ul class="timeline">

                            <?php 
                                // The Query
                                $the_query = new WP_Query( 'cat=7&order=ASC' );  
                                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                          
                            <!-- Item-->
                            <li>
                                <div class="<?php echo($the_query->current_post % 2 == 0 ? 'direction-l js--fadeInLeft' : 'direction-r js--fadeInRight'); ?>">
                                    <div class="flag-wrapper">
                                        <span class="hexa"></span>
                                        <span class="time-wrapper"><span class="time"><?php the_excerpt(); ?></span></span>
                                    </div>
                                    <div class="desc">
                                        <h1><?php the_title(); ?></h1>
                                        <picture>
                                            <?php the_post_thumbnail(); ?>
                                        </picture>
                                        <h2><?php the_content(); ?></h2>
                                    </div>
                                </div>
                            </li>
                            
                            <?php endwhile; 
                                wp_reset_postdata(); 
                            ?>

                        </ul>
                    </div>
                    
                </div>
                <div id="case" class="tabcontent">
                    <section class="main-cs-section">
                        <div class="cs-header">
                            <h2 class="block-header sla-relative sla-overflow-h">In The News</h2>
                        </div>

                        <?php $catquery = new WP_Query( 'cat=5' ); ?>

                        <div class="sla-relative main-about about-half">

                            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

                            <div class="main-about--half">

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
                <div id="press" class="tabcontent">
                    <section class="main-cs-section">
                        <div class="cs-header">
                            <h2 class="block-header sla-relative sla-overflow-h">Press Release</h2>
                        </div>

                        <?php $catquery = new WP_Query( 'cat=8&posts_per_page=6' ); ?>

                        <div class="sla-relative main-about about-half">

                            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

                            <div class="main-about--half press-img">

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

                            <div class="cs-button mt-0">
                                <a href="http://localhost:8888/sla/category/press/" class="button sla-relative">
                                    <span>View More</span>
                                    <span class="sla-relative sla-overflow-h arrow-icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M-4.2046e-06 9L-4.11718e-06 7L12 7L6.5 1.5L7.92 0.0799977L15.84 8L7.92 15.92L6.5 14.5L12 9L-4.2046e-06 9Z" fill="white"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            
                        </div>
                    </section>

                    <section class="main-cs-section">
                        <div class="cs-header">
                            <h2 class="block-header sla-relative sla-overflow-h">Media Center</h2>
                        </div>

                        <?php $catquery = new WP_Query( 'cat=9' ); ?>

                        <div class="sla-relative main-about about-half">

                            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

                            <div class="main-about--media_center">

                                <?php the_content(); ?>

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
