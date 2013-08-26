<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Bearded Llama
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
                      <div class="container">
<br><br><br><br>
			<?php do_action( 'beardedllama_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'beardedllama' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'beardedllama' ), 'WordPress' ); ?></a>	<?php printf( __( 'and %1$s by %2$s.', 'beardedllama' ), '<a href="http://mario-borna-mjertan.from.hr/beardedllama">Bearded Llama</a>', '<a href="http://mario-borna-mjertan.from.hr" rel="designer">Mario Borna Mjertan</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/base.js"></script>
<?php wp_footer(); ?>

</body>
</html>