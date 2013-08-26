<?php
/**
 * The Bearded Llama sidebar
 *
 * @package Bearded Llama
 */
?>
<div class="container">
		<div id="secondary" class="widget-area" role="complementary">
<?php do_action( 'before_sidebar' ); ?>
<?php if ( ! dynamic_sidebar( 'fwbl' ) ) : ?>

<div class="four columns widget">
<?php get_search_form(); ?>
</div>

<div class="four columns widget">
<h5 class="widget-title"><?php _e( 'Archives', '_s' ); ?></h5>
<ul>
<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
</ul>
</div>

<div class="four columns widget">
<h5 class="widget-title"><?php _e( 'Meta', '_s' ); ?></h5>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
</ul>
</div>

<?php endif; // end sidebar widget area ?>
</div><!-- #secondary -->
</div> <!-- .container -->