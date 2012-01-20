<?php
/*
Template Name: Announcement
*/
?>

<?php get_header(); ?>

<div class="grid_7">
	<div id="sidebar">
		<h4>Filter Announcements by</h4>
	</div>
</div>

<div class="grid_17">
	<div id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
			<?php endwhile; else: endif; ?>

				<?php query_posts('cat=127&post_status=publish,future');?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="announcement">					
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="small">Posted by: <?php the_author(); ?> on <?php the_time('jS F Y') ?></p>
				<p><?php the_content(); ?>
				</div>
				<?php endwhile; else: endif; ?>
	</div><!-- #content -->
</div><!-- close grid_17 -->

<?php get_footer(); ?>
