<?php
/**
 * The template for displaying the page.
 *
 * @package WordPress
 * @subpackage OneTwoThreeFour
 * @since OneTwoThreeFour 0.1
 */
?>

<?php
get_header();

get_sidebar();
?>
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
	<div style="clear:both;"></div>
	 <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php

get_footer();

?>