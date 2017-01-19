<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Angel_Angeles_2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<!-- This is a static home page -->
		<div class="front-page">
			<section id="introduction">
				<div class="wrapper">
					<h1 class="catch-text">Complex stuff simplified</h1>
					<p class="intro-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempora magnam sapiente quod itaque fuga praesentium? Vel qui vero, consequuntur natus similique fugiat, est voluptate distinctio quaerat ad iusto non maiores molestiae deserunt, rem repellendus quam ex! Sint ducimus iste aut a impedit odio fugiat minima quia optio nam magni quisquam labore magnam fugit doloremque adipisci nihil natus odit vitae reprehenderit totam nobis ab, quos sequi, nostrum. Hic alias rerum magnam voluptas tempore?
					</p>
				</div>
				<div class="wrapper-big">
					<div class="row icons">
						<div class="column item large-3 small-6">
							<div class="intro-icon">
								<i class="fa fa-paint-brush" aria-hidden="true"></i>
							</div>
							<h2>Lorem Ipsum</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eaque impedit debitis!</p>
						</div>
						<div class="column item large-3 small-6">
							<div class="intro-icon">
								<i class="fa fa-code" aria-hidden="true"></i>
							</div>
							<h2>Lorem Ipsum</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eaque impedit debitis!</p>
						</div>
						<div class="column item large-3 small-6">
							<div class="intro-icon">
								<i class="fa fa-music" aria-hidden="true"></i>
							</div>
							<h2>Lorem Ipsum</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eaque impedit debitis!</p>
						</div>
						<div class="column item large-3 small-6">
							<div class="intro-icon">
								<i class="fa fa-gamepad" aria-hidden="true"></i>
							</div>
							<h2>Lorem Ipsum</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eaque impedit debitis!</p>
						</div>
					</div>
				</div>
			</section>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
