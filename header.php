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
<meta name="google-site-verification" content="NqniWGYxgx97WDBTbRbub7XzoKv5V8kEle4R1BPGFVg" />
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
			if ( is_front_page() ) : ?>

				<!-- Home page display -->
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<section id="front-page-section" class="page-span">
					<div class="parallax-container">
						<div class="parallax-bg"></div>
					</div>
					<div class="overlay">
						<div class="container">
							<h2><span style="color: #FFC600">/</span>i am ANGEL</h2>
							<span class="subtext">Artist &nbsp;&nbsp;&bull;&nbsp;&nbsp; Web Developer and Designer &nbsp;&nbsp;&bull;&nbsp;&nbsp; Musician</span>
							<a href="javascript:void(0)" class="btn-large" id="intro-btn">
								<div class="cube">
									<div class="original-face">
										<span>Know more</span>
									</div>
									<div class="hover-face">
										<span>Let's go!</span>
									</div>
								</div>
							</a>
						</div>
						<nav id="site-nav" class="main-nav front-page">
							<div class="nav-wrapper">
								<a href="<?php echo home_url(); ?>" class="home-button">
									<img src="<?php echo get_template_directory_uri().'/img/logo/logotrans.png' ?>" alt="">
									<img class="hoverlogo" src="<?php echo get_template_directory_uri().'/img/logo/logotranshover.png' ?>" alt="">
								</a>

								<a href="http://www.zimitmedia.com" class="menu-btn-left">
									<img class=" original"src="<?php echo get_template_directory_uri().'/img/logo/zimitlogo.png' ?>" alt="Zimit Media Team">
									<img class="hover" src="<?php echo get_template_directory_uri().'/img/logo/zimitlogo-colored.png' ?>" alt="Zimit Media Team">
								</a>

								<a href="javascript:void(0)" class="menu-btn-right" id="menu-toggle-button"><i class="material-icons md-36" id="menu-button-main">menu</i></a>
							</div>

							<!-- MENU MAIN -->
							
						</nav>
					</div>
				</section>
				<!-- End Home page display -->

			<?php else : ?>
				<nav id="site-nav" class="main-nav not-front-page">
					<div class="nav-wrapper">
						<a href="<?php echo home_url(); ?>" class="home-button">
							<img src="<?php echo get_template_directory_uri().'/img/logo/logotrans.png' ?>" alt="">
							<img class="hoverlogo" src="<?php echo get_template_directory_uri().'/img/logo/logotranshover.png' ?>" alt="">
						</a>

						<a href="http://www.zimitmedia.com" class="menu-btn-left">
							<img class=" original"src="<?php echo get_template_directory_uri().'/img/logo/zimitlogo.png' ?>" alt="Zimit Media Team">
							<img class="hover" src="<?php echo get_template_directory_uri().'/img/logo/zimitlogo-colored.png' ?>" alt="Zimit Media Team">
						</a>

						<a href="javascript:void(0)" class="menu-btn-right" id="menu-toggle-button"><i class="material-icons md-36" id="menu-button-main">menu</i></a>
					</div>

					<!-- MENU MAIN -->
					
				</nav>
				<div class="nav-spacer"></div>
			<?php endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-pane-container closed">
				<div id="menu-pane">
					<section class="main-menu-side">
						<div class="top-bar">
							<i class="material-icons">close</i>
						</div>

						<!-- search -->
						<form role="search" method="get" id="menusearchform" class="searchform" action="<?php echo home_url(); ?>">
							<div>
								<label class="screen-reader-text" for="s">Search for:</label>
								<input type="text" value="" name="s" id="s" placeholder="Search anything..." />
								<input type="submit" id="searchsubmit" value="Search" />
							</div>
						</form>

						<!-- MENU -->
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
					</section>
					<section class="sidebar">
						<?php get_sidebar(); ?>
					</section>
				</div>
			</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
