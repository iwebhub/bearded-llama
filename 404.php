<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Bearded Llama
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				
				<div class="page-content">
                                       <center><h1 class="fourohfour">4oh4</h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'beardedllama' ); ?></p>

					<?php get_search_form(); ?><br><?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false,  'menu_class' => 'nav' ) ); ?></center>

					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>