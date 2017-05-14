<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage sergeinacio
 * @since Serge Inacio 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400' rel='stylesheet' type='text/css'>
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type='text/css'>
<script src="../<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script src="../<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- NAVIGATION -->
	<header class="navigation" role="banner">
	  <div class="navigation-wrapper">

		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if(get_theme_mod('site_logo')) {
				echo '<img src="'. get_theme_mod('site_logo') . '" alt="'.get_bloginfo( 'name' ).'">';
			} else { ?>
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
			<?php } ?>
		</a>

			<a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
		    <nav role="navigation">

		      <?php
			      $menu_defaults = array( 'theme_location' => 'top-nav', 'container' => '', 'menu_id' => 'js-navigation-menu', 'menu_class' => 'navigation-menu show',);
			      	if (has_nav_menu('top-nav')) {
				       wp_nav_menu($menu_defaults);
				    }
		      ?>
		    </nav>
			</div>
		</header>



			<div class="clearfix"></div>
		</div>
	</header><!-- #masthead -->
	<section class="container" id="hero">
		<div class="hero-container">
			<div class="test">
				<div class="bl-border"></div>
					<h1>SERGEINACIO</h1>
				<div class="tr-border"></div>
			</div>
		</div>
	</section>

	<div id="main" class="site-main">
