<?php 
    get_header();
?>
    <div class="archive__banner">
        <div class="row" style="margin-top: 0px;">
            <div class="col-lg-12 u-horizontal-align--center">
                <section class="c-banner" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center fixed; background-size: cover;">
                    <h2 style="color: white;"><?php echo single_post_title() ?></h2>
                </section>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align--center u-margin-bottom--lg">
            <div class="col-lg-6">
                <button type="button" class="car-slider__previous"><img src="https://xleasecars.jkwebsites.nl/wp-content/uploads/2020/02/arrow-left.png" alt="arrow slider left"></button>
                <div id="car-slider">
                    <?php 
                        $images = get_field('afbeeldingen');
                        if($images): 
                            foreach($images as $image ):
                    ?>
                        <img class="slider__item" src="<?php echo esc_url($image['url']); ?>" alt="">
                    <?php 
                            endforeach;
                        endif; 
                    ?>
                </div>
                <button type="button" class="car-slider__next"><img src="https://xleasecars.jkwebsites.nl/wp-content/uploads/2020/02/arrow-right.png" alt="arrow slider right"></button>
            </div>
            <div class="col-lg-6 col-lg-push-1">
                <h2 class="single__title"><?php echo single_post_title() ?></h2>
                <p class="single__price"><?php echo get_field('prijs'); ?></p>
                <?php 
                    if(have_rows('aflevering')): while(have_rows('aflevering')): the_row(); 
                ?>
                    <p><?php echo get_sub_field('titel') ?></p>
                    <ul class="single__usps">
                        <?php 
                            if(have_rows('items')): while(have_rows('items')): the_row(); 
                        ?>
                            <li>✓ <?php echo get_sub_field('item') ?></li>
                        <?php
                            endwhile; endif; 
                        ?>
                    </ul>
                <?php
                    endwhile; endif; 
                ?>
                <?php
                    $contact_button = get_field('contact_button');	
                    if($contact_button): while(have_rows('contact_button')): the_row(); 
                ?>
                    <a class="c-button u-margin-top--lg u-margin-right--lg" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('titel'); ?></a>
                <?php
                    endwhile; endif; 
                ?>
            </div>
        </div>
        <div class="row u-margin-bottom--lg">
            <div class="col-lg-12">
                <div class="c-car-overview">
                    <div class="car-overview__item">  
                        <h3 class="item__title">Tellerstand</h3>
                        <p class="item__value"><?php echo get_field('tellerstand'); ?></p>
                    </div>
                    <div class="car-overview__item car-overview__item--middle">  
                        <h3 class="item__title">Prijs</h3>
                        <p class="item__value"><?php echo get_field('prijs'); ?></p>
                    </div>  
                    <div class="car-overview__item">
                        <h3 class="item__title">Aantal pk</h3>
                        <p class="item__value"><?php echo get_field('aantal_pk'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="u-margin-bottom--lg">Over het model</h2>
                <p><?php echo get_field('beschrijving'); ?></p>
            </div>
        </div>
    </div>
    <section class="c-banner" style="background: url('<?php echo get_field('achtergrond_specificaties', 'option')['url']; ?>')">
        <h2>Specificaties</h2>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="u-margin-bottom--md">Samenvatting</h2>
                <?php 
                    if(have_rows('samenvatting')): while(have_rows('samenvatting')): the_row(); 
                        if(have_rows('eigenschappen')): while(have_rows('eigenschappen')): the_row(); 
                            if(have_rows('eigenschap')): while(have_rows('eigenschap')): the_row(); 
                ?>
                    <div class="col-lg-6">
                        <div class="row single__table">
                            <div class="col-lg-6">
                                <p><?php echo get_sub_field('naam') ?></p>
                            </div>
                            <div class="col-lg-6">
                                <p><?php echo get_sub_field('waarde') ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                            endwhile; endif; 
                        endwhile; endif; 
                    endwhile; endif; 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="u-margin-bottom--md">Comfort & Interieur</h2>
                <?php    
                    if(have_rows('comfort_en_interieur')): while(have_rows('comfort_en_interieur')): the_row(); 
                        if(have_rows('eigenschappen')): while(have_rows('eigenschappen')): the_row(); 
                            if(have_rows('eigenschap')): while(have_rows('eigenschap')): the_row(); 
                ?>
                    <div class="col-lg-4">
                        <p><?php echo get_sub_field('naam') ?></p>
                    </div>
                <?php
                            endwhile; endif; 
                        endwhile; endif; 
                    endwhile; endif; 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="u-margin-bottom--md">Overig</h2>
                <?php    
                    if(have_rows('overig')): while(have_rows('overig')): the_row(); 
                        if(have_rows('eigenschappen')): while(have_rows('eigenschappen')): the_row(); 
                            if(have_rows('eigenschap')): while(have_rows('eigenschap')): the_row(); 
                ?>
                    <div class="col-lg-4">
                        <p><?php echo get_sub_field('naam') ?></p>
                    </div>
                <?php
                            endwhile; endif; 
                        endwhile; endif; 
                    endwhile; endif; 
                ?>
            </div>
        </div>
    </div>
    <div class="archive__banner">
        <div class="row" style="margin-bottom: 0;">
            <div class="col-lg-12 u-horizontal-align--center">
                <?php 
                    if(have_rows('andere_auto', 'option')): while(have_rows('andere_auto', 'option')): the_row();  
                ?>
                    <section class="c-banner" style="margin-bottom: 0; background: url('<?php echo get_sub_field('achtergrond')['url']; ?>') no-repeat center center; background-size: cover;">
                        <div class="container" style="margin-top: 0px; margin-bottom: 0px;">
                            <div class="row align--center">
                                <div class="col-lg-9 u-horizontal-align--left">
                                    <h2 class="u-margin-bottom--sm"><?php the_sub_field('titel'); ?></h2>
                                    <p><?php the_sub_field('ondertitel'); ?></p>
                                </div>
                                <div class="col-lg-3 u-horizontal-align--left">
                                    <?php
                                        $button = get_sub_field('button');	
                                        if($button): while(have_rows('button')): the_row(); 
                                    ?>
                                        <a class="c-button u-margin-right--lg" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('titel'); ?></a>
                                    <?php
                                        endwhile; endif; 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php  
                    endwhile; endif; 
                ?>
            </div>
        </div>
    </div>
<?php
    get_footer(); 
?>
