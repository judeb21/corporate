<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package She_Leads_Africa
 */

?>


                            <div class="main-about--half">

                                <div class="main-about--half-img">
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
                            