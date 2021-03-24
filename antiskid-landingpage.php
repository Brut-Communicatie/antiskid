<?php 

//Template name: Landingpage
$tel = "0049 670 120 449 26";
$callto = str_replace(' ', '', $tel);

get_header();?>

<div class="banner">
    <div class="banner__background" style="background-image: url('<?php echo get_template_directory_uri();?>/images/header.jpg');"></div>
    <div class="banner__container">
        <div class="banner__heading">
            <h1>Get a grip</br> on your turnover</h1>
            <a href="#contact" class="button__orange">Apply for a free consultation</a>
            <p>or call <a href="tel:<?php echo $callto;?>" class="button__animated"><img src="<?php echo get_template_directory_uri();?>/images/phone.svg" width="20px" alt="phone" /><?php echo $tel;?></a></p>
        </div>
        <div class="banner__image">
        <img src="<?php echo get_template_directory_uri();?>/images/wiel.png" width="500px" alt="Wiel" />
        </div>
    </div>
</div>

<div class="content">
    <div class="content__container">
        <div class="content__left">
            <?php get_template_part('content/intro', 'left');?>
        </div>
        <div class="content__right">
            <?php get_template_part('content/intro', 'right');?>
        </div>
    </div>
</div>

<?php get_template_part('content/bar', 'usp');?>

<?php get_template_part('content/bar', 'bottom');?>

<?php get_footer();?>