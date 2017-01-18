<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Angel_Angeles_2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="menu-overlay menu-closed"></div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'angelangeles2' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>

				<!-- Home page display -->
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<section id="front-page-section" class="page-span">
					<div class="parallax-container">
						<div class="parallax-bg"></div>
					</div>
					<div class="overlay">
						<div class="container">
							<h2><?php echo bloginfo('description')?></h2>
							<a href="#" class="btn-large">Know me better</a>
						</div>
						<nav id="site-nav" class="main-nav">
							<div class="nav-wrapper">
								<a href="/" class="home-button">
									<img src="<?php echo get_template_directory_uri().'/img/logo/logotrans.png' ?>" alt="">
									<!-- <img class="hoverlogo" src="<?php echo get_template_directory_uri().'/img/logo/logoopaque.png' ?>" alt=""> -->
								</a>

								<a href="http://www.zimitmedia.com" class="menu-btn-left"><img src="<?php echo get_template_directory_uri().'/img/logo/zimitlogo.png' ?>" alt="Zimit Media Team"></a>

								<a href="javascript:void(0)" class="menu-btn-right" id="menu-toggle-button"><i class="material-icons md-36" id="menu-button-main">menu</i></a>
							</div>

							<!-- MENU MAIN -->
							
						</nav>
					</div>
				</section>
				<!-- End Home page display -->

			<?php else : ?>

				<!-- Other page display -->
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<!-- End Other page display -->

			<?php endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-pane-container closed">
				<div id="menu-pane">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
