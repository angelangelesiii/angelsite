<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Angel_Angeles_2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="single-post-page">
				<?php while ( have_posts() ) : the_post(); ?>
				
				<!-- START -->
				<?php if (has_post_thumbnail()) { ?>
				<header class="single-header" style="background: url('<?php echo the_post_thumbnail_url() ?>')">
					<div class="header-overlay"></div>
					<div class="wrapper">
						<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="back">&lsaquo; Back to blog posts</a>
				<?php } else { ?>
				<header class="single-header" style="background: url('<?php echo get_template_directory_uri().'/img/bg/crumpled-paper.jpg' ?>')">
					<div class="wrapper">
						<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="back">&lsaquo; Back to blog posts</a>
				<?php } ?>
						<h1><?php echo the_title(); ?></h1>
					</div>
				</header>
				<div class="wrapper">
					<div class="the-content">
						<?php the_content(); ?>
					</div>
				
				
				
				<?php 
					the_post_navigation();
				
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				
				endwhile; // End of the loop.
				?>

				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
