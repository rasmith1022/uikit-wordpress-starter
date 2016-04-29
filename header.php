<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootsmooth-wordpress-uikit
 * 
 * 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo('description'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text uk-hidden" href="#main"><?php esc_html_e( 'Skip to content', 'bootsmooth-wordpress-uikit' ); ?></a>
	
	<nav id="site-navigation" class="uk-navbar" role="navigation">
		<a class="uk-navbar-brand uk-hidden-small" href="/"><?php bloginfo(); ?></a>
		<?php wp_nav_menu( array( 'menu_id' => 'primary-menu', 'menu_class'=> 'uk-navbar-nav uk-hidden-small' ) ); ?>
		<div class="uk-navbar-content uk-hidden-small uk-navbar-flip">
            <form class="uk-form uk-margin-remove uk-display-inline-block" action="/" method="get">
            	<div class="uk-form-icon">
			        <i class="uk-icon-search"></i>
			        <input type="text" name="s" id="search" placeholder="Search here..." value="<?php the_search_query(); ?>" />
    			</div>
            </form>
        </div>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
	</nav><!-- #site-navigation -->
	<div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
        	<?php wp_nav_menu( array( 'menu_id' => 'primary-menu', 'menu_class'=> 'uk-nav uk-nav-offcanvas' ) ); ?>
        	<hr>
        	<div class="uk-panel">
        		<p class="uk-h3">Search</p>
        		<?php get_search_form(); ?>
        	</div>
        </div>
    </div>
	<!-- header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>

	</header> -->

