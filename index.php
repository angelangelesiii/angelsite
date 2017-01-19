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

		<div class="wrapper">
			<?php 
			if ( is_home() ) {
				echo "<h2 class=\"blogtitle\">- Blog -</h2>";
				echo "<div class=\"divider\"></div>";
			}
			?>
			<div style="height: 40px;"></div>
			<?php
				if ( have_posts() ) :
				
					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
				
					<?php
					endif;
				
					/* Start the Loop */
					while ( have_posts() ) : the_post();
					?>
				
						<article id="post-<?php the_ID(); ?>" class="<?php echo join( ' ', get_post_class()) ?> clearfix">

							<div class="archive-thumbnail-container">
								<?php 
								if ( has_post_thumbnail() ) { ?>
									<a href="<?php the_permalink(); ?>">
										<div class="thumbnail" style="background: url('<?php echo the_post_thumbnail_url() ?>')">
										</div>
									</a>
								<?php } else { ?>	
									<a href="<?php the_permalink(); ?>">
										<div class="thumbnail no-thumbnail">
											<span class="thumbnail-text"><?php echo the_title(); ?></span>
											<div class="invisible-cover"></div>
										</div>
									</a>
								<?php } ?>
							</div>

							<div class="archive-article-container">
								<header class="entry-header">
									<a href="<?php echo the_permalink(); ?>"><h2><?php echo the_title(); ?></h2></a>
								</header>
								<div class="entry-content">
									<?php the_excerpt(); ?>
								</div>
							</div>

						</article>

					<?php
					endwhile;
				
					the_posts_navigation();
				
				else :
				
					get_template_part( 'template-parts/content', 'none' );
				
				endif; ?>
				<div class="divider"></div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
