<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package She_Leads_Africa
 */

get_header();
?>

	<main id="primary" class="site-main">

		<header id="site-header">
			<div class="hero-banner sla-relative hero-error-banner">
				<div class="hero-banner-header sla-absolute">
					<h1>404 Page not found</h1>
					<h2>The page you are looking for no longer exists or the link might be broken</h2>
					<a href="/" class="button sla-relative">
						<span>Go Back Home</span>
						<span class="sla-relative sla-overflow-h arrow-icon">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M-4.2046e-06 9L-4.11718e-06 7L12 7L6.5 1.5L7.92 0.0799977L15.84 8L7.92 15.92L6.5 14.5L12 9L-4.2046e-06 9Z" fill="white"/>
							</svg>
						</span>
					</a>
				</div> 
			</div>
		</header>

	</main><!-- #main -->

<?php
get_footer();
