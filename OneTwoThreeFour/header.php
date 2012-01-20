<?php
/**
 * The template for displaying the header.
 *
 * @package WordPress
 * @subpackage OneTwoThreeFour
 * @since OneTwoThreeFour 0.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body>
	<div id="wrapper" class="container_24">
		<div id="banner" class="grid_24"></div>
		<div class="grid_24">
			<div id="navigation">
				<?php wp_nav_menu( array( 'menu' => 'menu-1','theme_location' => 'menu-1', 'menu_id' => false) ); ?>
			</div>
		<div style="clear: both;"></div>
		</div>

		<div style="clear: both;"></div>
		