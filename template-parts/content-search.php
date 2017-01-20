<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Angel_Angeles_2
 */

?>

<article id="post-<?php the_ID(); ?>" class="<?php echo join( ' ', get_post_class()) ?> clearfix post-item">
	
	<div class="archive-thumbnail-container">
		<?php 
		if ( has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink(); ?>">
				<div class="thumbnail" style="background: url('<?php echo the_post_thumbnail_url('large') ?>')">
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
	</div><!-- .entry-footer -->
</article><!-- #post-## -->
