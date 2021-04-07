<?php
$tel = "0049 670 120 449 26";
$callto = str_replace(' ', '', $tel);
;?>

<section class="bottom"  style="background-image: url('<?php echo get_template_directory_uri();?>/images/footer.png');" id="contact">
    <div class="bottom__background"></div>

    <div class="bottom__container">
        <div class="bottom__left">
        <h4>Need advice?</h4>
        <h3>Get in touch with our experts!</h3>
        <div class="contact">
            <?php echo do_shortcode('[contact-form-7 id="7" title="Contactform"]');?>
        </div>
        <p>or call <a href="tel:<?php echo $callto;?>" class="button__animated"><img src="<?php echo get_template_directory_uri();?>/images/phone.svg" width="20px" alt="phone" /> <?php echo $tel;?></a></p>
        </div>
        <div class="bottom__right">
            <img src="<?php echo get_template_directory_uri();?>/images/person.png" width="300px" alt="Guy" />
        </div>
    </div>

</section>
<div class="bottom__bar">
<div class="bottom__bar--container">
<a href="https://www.possehl.de/en/data-protection/" target="_blank" rel="noopener noreferrer">Privacystatement</a>
</div>
</div>