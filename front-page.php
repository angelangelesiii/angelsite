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
								<div class="yellow-hover"></div>
								<i class="fa fa-paint-brush" aria-hidden="true"></i>
							</div>
							<h2>Design</h2>
							<p>Art runs deep in the blood and it manifests in my works. I believe through simple yet focused design I can make UI/UX that simply works. I use Adobe Photoshop as my design weapon.</p>
						</div>
						<div class="column item large-3 small-6">
							<div class="intro-icon">
								<div class="yellow-hover"></div>
								<i class="fa fa-code" aria-hidden="true"></i>
							</div>
							<h2>Code</h2>
							<p>Coding is what brought me to web design. I love building new things and coding enabled me to realize my imaginations with my design skills. Sublime Text 3 is my editor of choice.</p>
						</div>
						<div class="column item large-3 small-6">
							<div class="intro-icon">
								<div class="yellow-hover"></div>
								<i class="fa fa-music" aria-hidden="true"></i>
							</div>
							<h2>Melodize</h2>
							<p>I learned the guitar when I was 14 and now I'm creating music with my friends. I'm a producer by hobby and in my sleep. I use Presonus Studio One 3 Pro to make music</p>
						</div>
						<div class="column item large-3 small-6">
							<div class="intro-icon">
								<div class="yellow-hover"></div>
								<i class="fa fa-gamepad" aria-hidden="true"></i>
							</div>
							<h2>Game</h2>
							<p>I like playing games and it helped me develop my brain. Those improvements greatly helped me in my design, coding and English grammar. Let's play Heroes of the Storm someday.</p>
						</div>
					</div>
				</div>
			</section>

			<section id="works">
				<div class="wrapper-big">
					<h1 class="section-title">Latest Works</h1>
					<div id="workshook"></div>
					<div class="posts row small-up-2 large-up-3 collapse">
						<?php 
						wp_reset_postdata();
						$worksArray = array(
							'category_name'			=> 'works',
							'post_type'				=> 'post',
							'posts_per_page'		=> '6',
							'ignore_sticky_posts'	=> true

							);
						$worksQuery = new WP_Query($worksArray);
						if ($worksQuery->have_posts()) {

							while ($worksQuery->have_posts()) {
								$worksQuery->the_post();
						?>
						
						
						<div class="card column column-block">
							<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { ?>
								<div class="thumbnail have-thumbnail" style="background: url('<?php echo the_post_thumbnail_url('large') ?>')">
							<?php } else { ?>
								<div class="thumbnail no-thumbnail" style="background: url('<?php echo get_template_directory_uri().'/img/bg/logothumb.png' ?>')">
							<?php } ?>
									<div class="content">
										<h2><?php the_title(); ?></h2>
									</div>
								</div>
							</a>
						</div>
						

						<?php
							}

						} else {
							// FALLBACK
						}
						wp_reset_postdata();
						?>
					</div>
				</div>
			</section>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
