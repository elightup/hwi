<?php // @codingStandardsIgnoreLine
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HWI
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<a href="<?= esc_url( home_url() );?>">
					<img class="logo-main" src="<?= esc_url( get_template_directory_uri() );?>/images/logo.svg" alt="">
					<img class="logo-hover" src="<?= esc_url( get_template_directory_uri() );?>/images/logo-hover.svg" alt="">
					<span><?php bloginfo( 'name' ); ?></span>
				</a>
			</div><!-- .site-branding -->
			<?php
				get_template_part( 'template-parts/header/menu' );
			?>
		</div>
	</header><!-- #masthead -->
