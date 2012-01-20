<?php
/**
 * The template for displaying the front page.
 *
 * @package WordPress
 * @subpackage OneTwoThreeFour
 * @since OneTwoThreeFour 0.1
 */
?>

<?php get_header(); ?>

		<div class="grid_8"> <!-- BEGIN OF LEFT SIDEBAR -->
			<div id="quickinfo">
				<h4><?php echo mf_get_menu_name('menu-2') ?></h4>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'container' => '', 'menu_class' => '') ); ?>
			</div>
		</div> <!-- END OF LEFT SIDEBAR -->

		<div class="grid_16">
			<div id="announcement">
				<h4>Announcements</h4>
					<table>
				        <thead>
				                <tr>
				                        <th class="even date">DATE</th>
				                        <th class="even title">TITLE</th>
				                </tr>
				        </thead>
				        <tbody>
				                <?php query_posts('post_type=announcement&post_status=publish,future&posts_per_page=8');?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<?php if ($flag % 2 != 0) { ?> 
									<tr>
									<td class="even"><?php the_time('jS F Y'); ?></td>
									<td class="even"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
									</tr>
									<?php } else { ?>
									<tr>
									<td><?php the_time('jS F Y'); ?></td>
									<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
									</tr>
									<?php } ?>
									<?php $flag++; ?>
								<?php endwhile; else: echo '<tr><td colspan="2">No announcement has been made.</td></tr>'; endif; ?>
				        </tbody>
				</table>
				<p class="more"><a href="?post_type=announcement">More announcements >></a></p>
			</div>
		</div>

		<div style="clear: both; height:10px;"></div>

		<div class="grid_6">
			<div class="four">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/funding.jpg" alt="architecture" width="175" height="100" />
				<h4><?php echo mf_get_menu_name('menu-3') ?></h4>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-3', 'container' => '', 'menu_class' => 'four_menu' ) ); ?>
			</div>
		</div>

		<div class="grid_6">
			<div class="four">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/admin.jpg" alt="woman_greenhouse" width="175" height="100" />
				<h4><?php echo mf_get_menu_name('menu-4') ?></h4>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-4', 'container' => '', 'menu_class' => 'four_menu') ); ?>
			</div>
		</div>

		<div class="grid_6">
			<div class="four">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/mascot.jpg" alt="man_studying_jar" width="175" height="100" />
				<h4><?php echo mf_get_menu_name('menu-5') ?></h4>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-5', 'container' => '', 'menu_class' => 'four_menu') ); ?>
			</div>
		</div>

		<div class="grid_6">
			<div class="four">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/admin.jpg" alt="researchers_lab" width="175" height="100" />
				<h4><?php echo mf_get_menu_name('menu-6') ?></h4>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-6', 'container' => '', 'menu_class' => 'four_menu') ); ?>
			</div>
		</div>	

		<div style="clear: both; height: 10px;"></div>

		<div class="grid_8">
			<div class="three">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		</div>
	
		<div class="grid_8">
			<div class="three">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
		</div>
	
		<div class="grid_8">
			<div class="three">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		</div>


<?php get_footer(); ?>