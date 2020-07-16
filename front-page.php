<?php
    get_header();
    global $cfs
?>    
<section class="c-hero" style="background: url('<?php echo $cfs->get('hero_achtergrond', 5); ?>') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;"
>
    <div class="c-banner u-vertical-align--middle">
        <h2 class="hero__title"><?php echo $cfs->get('hero_titel', 5); ?></h2><br>
        <div class="hero__buttons" style="display: flex; justify-content: center; align-items: center;">
            <a class="c-button" href="<?php echo $cfs->get('hero_button_2_link', 5); ?>"><?php echo $cfs->get('hero_button_1_titel', 5); ?></a>
            <a class="u-margin-left--lg" style="margin-bottom: 0; text-decoration: none;" href="<?php echo $cfs->get('hero_button_2_link', 5); ?>"><?php echo $cfs->get('hero_button_2_titel', 5); ?></a>
        </div>
    </div>
</section>
<section id="diensten" style="background-color: #17253E;">
    <div class="container" style="margin-top: 0px; margin-bottom: 0px; padding-top: 40px;  padding-bottom: 40px;">
        <div class="row">
            <div class="col-lg-12 u-horizontal-align--center">
                <h2 style="color: white;">Onze diensten</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="c-service">
                    <img class="service__icon" src="<?php echo $cfs->get('eerste_dienst_icoon', 5); ?>" alt="" width="40" height="40">
                    <p class="service__text"><?php echo $cfs->get('eerste_dienst_titel', 5); ?></p>
                </div>
                <div class="c-service">
                    <img class="service__icon" src="<?php echo $cfs->get('tweede_dienst_icoon', 5); ?>" alt="" width="40" height="40">
                    <p class="service__text"><?php echo $cfs->get('tweede_dienst_titel', 5); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="c-service">
                    <img class="service__icon" src="<?php echo $cfs->get('derde_dienst_icoon', 5); ?>" alt="" width="40" height="40">
                    <p class="service__text"><?php echo $cfs->get('derde_dienst_titel', 5); ?></p>
                    <?php 
                        $services = $cfs->get('extra_diensten');
                        foreach ($services as $service) {
                    ?>
                        <p class="service__text text--extra"><?php echo $service["dienst"]; ?></p>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="c-service">
                    <img class="service__icon" src="<?php echo $cfs->get('vierde_dienst_icoon', 5); ?>" alt="" width="40" height="40">
                    <p class="service__text"><?php echo $cfs->get('vierde_dienst_titel', 5); ?></p>
                </div>
                <div class="c-service">
                    <img class="service__icon" src="<?php echo $cfs->get('vijfde_dienst_icoon', 5); ?>" alt="" width="40" height="40">
                    <p class="service__text"><?php echo $cfs->get('vijfde_dienst_titel', 5); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="overons">
    <div class="container" style="margin-bottom: 0; margin-top: 0;  padding-top: 40px;  padding-bottom: 40px;">
        <div class="row align--center">
            <div class="col-lg-6 col-md-6 u-horizontal-align--left">
                <h2 class="u-margin-bottom--md"><?php echo $cfs->get('about_us_titel', 5); ?></h2>
                <p class="overons__text u-text-justify"><?php echo $cfs->get('about_us_tekst', 5); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 u-horizontal-align--left">
                <img class="overons__image u-vertical-align--middle" src="<?php echo $cfs->get('about_us_afbeelding', 5); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section id="contact" class="c-contact" style="background-color: #17253E;">
    <div class="container" style="margin-bottom: 0; margin-top: 0;  padding-top: 40px;  padding-bottom: 40px;">
        <div class="row">
            <div class="col-lg-12 col-md-12 u-horizontal-align--center" style="color: white;">
                <h2 class="u-margin-bottom--sm"><?php echo $cfs->get('contact_titel', 5); ?></h2>
                <div class="u-margin-bottom--lg"><?php echo $cfs->get('contact_ondertitel', 5); ?></div>
                <div class="u-horizontal-align--center" style="display: flex; justify-content: center; align-items: center;">
                    <?php echo do_shortcode("[contact-form-7 id='20' title='Contact']"); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer(); 
?>