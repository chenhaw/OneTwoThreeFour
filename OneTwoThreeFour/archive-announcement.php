<?php
/**
 * The template for displaying the archive of announcements.
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
<?php
if ( is_post_type_archive() ) {
    ?>
    <h2><?php post_type_archive_title(); ?></h2>
    <?php
}
?>
<table>
    <thead>
            <tr>
                    <th class="even date">DATE</th>
                    <th class="even title">TITLE</th>
            </tr>
    </thead>
    <tbody>
            <?php query_posts('post_type=announcement&post_status=publish,future');?>
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
</div>
</div>

<?php
get_footer();
?>
