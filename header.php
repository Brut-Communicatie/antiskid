<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Antiskid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'antiskid' ); ?></a>

	<header id="masthead" class="header">
	<div class="header__top">
		<div class="header__top--logo">
			<img src="<?php echo get_template_directory_uri();?>/images/logo.png" width="100px" alt="Logo" />
		</div>
	</div>
	<div class="header__main">
		<div class="header__container">
			<div class="header__main--nav">	
				<a href="#" class="button__animated">0031 1234 5678</a>
				<a class="button__orange" href="#">Contact</a>
			</div>
		</div>
	</div>
	</header><!-- #masthead -->
