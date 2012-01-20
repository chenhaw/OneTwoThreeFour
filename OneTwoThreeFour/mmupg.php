<?php
/*
Template Name: Postgraduate
*/
?>

<?php get_header(); ?>

<div class="grid_7">
	<div id="sidebar">
		<?php md_list_pages('include_tree=366&title_li='); ?>
	</div>
</div>

<div class="grid_17">
	<div id="content" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="post">
				<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
					<div class="entrytext">
						<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					</div>
			</div>
		<?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div><!-- #content -->
</div><!-- close grid_17 -->



<?php get_footer(); ?>
