<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package She_Leads_Africa
 */

?> 
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36"  href="<?php bloginfo('template_directory');?>/assets/favicon/android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48"  href="<?php bloginfo('template_directory');?>/assets/favicon/android-icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72"  href="<?php bloginfo('template_directory');?>/assets/favicon/android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96"  href="<?php bloginfo('template_directory');?>/assets/favicon/android-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144"  href="<?php bloginfo('template_directory');?>/assets/favicon/android-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory');?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory');?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="prefetch" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="prefetch" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<nav>
        <div class="header-group" role=banner>
            <div id="navigation">
                <div class="main-nav" role="navigation">
                    <div class="main-nav__logo">
                        <?php
							the_custom_logo();
						?>
                    </div>
                    <div class="main-nav__list">
                        <?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
                        <div class="hamburger hamburger--minus">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</nav>
	<div class="mobile-menu__class fade ic-block ic-modal" id="nav-modal" tabindex="-1" role="dialog">
        <div class="mobile-modal" role="document">
            <div class="mobile-content">
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
            </div>
        </div>
    </div>
