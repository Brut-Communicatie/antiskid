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
$tel = "0049 670 120 449 26";
$callto = str_replace(' ', '', $tel);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-BF5KWS6NKY"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-BF5KWS6NKY');
	</script>
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
				<a href="https://www.linkedin.com/company/possehl-spezialbau-gmbh" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri();?>/images/linkedin-brands.svg" width="30px" alt="LinkedIn" /></a>
				<a href="tel:<?php echo $callto;?>" class="button__animated"><img src="<?php echo get_template_directory_uri();?>/images/phone.svg" width="20px" alt="phone" /><?php echo $tel;?></a>
				<a class="button__orange" href="#contact">Contact</a>
			</div>
		</div>
	</div>
	</header><!-- #masthead -->
