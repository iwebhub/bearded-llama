<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Bearded Llama
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript">
	function unhideSearch(id) {
		document.getElementById(id).style.display = 'block';
                document.getElementById('header').style.display = 'none';
	}
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
<div class="header">
<div class="container">
	<header id="masthead" class="site-header" role="banner">

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logo" rel="home"><?php bloginfo( 'name' ); ?></a>
<a class="navdrop"></a>





<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false,  'menu_class' => 'nav' ) ); ?>


</header><!-- #masthead -->
</div></div>
	<div id="content" class="site-content">
