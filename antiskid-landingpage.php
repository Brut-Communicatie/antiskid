<?php 

//Template name: Landingpage

get_header();?>

<div class="banner">
    <div class="banner__background"></div>
    <div class="banner__container">
        <div class="banner__heading">
            <h1>Get a grip on your </br> turnover with Antiskid®</h1>
            <a href="#" class="button__orange">Apply for a free consultation</a>
            <p>or call <a href="#" class="button__animated">0031 1234 5678</a></p>
        </div>
        <div class="banner__image">
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

<?php get_footer();?>