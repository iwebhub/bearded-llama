<?php
/**
 * The template for displaying search forms in Bearded Llama
 *
 * @package Bearded Llama
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>

		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'beardedllama' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">


</form>
