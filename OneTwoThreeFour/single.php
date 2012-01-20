<?php
/**
 * The template for displaying a single post.
 *
 * @package WordPress
 * @subpackage OneTwoThreeFour
 * @since OneTwoThreeFour 0.1
 */
?>

		<?php get_header();?>

		<?php get_sidebar(); ?>
		<div class="grid_17">
			<div id="content" role="main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="announcement">					
				<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="small">Posted by: <?php the_author(); ?> on <?php the_time('jS F Y') ?></p>
				<?php the_content(); ?>
				</div>
				<?php endwhile; else: endif; ?>
			</div>
		</div>
		<?php get_footer();?>