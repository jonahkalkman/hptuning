<?php get_header(); ?>
<section class="c-archive" style="margin-top: 0px;">
    <div class="archive__banner">
        <div class="row" style="margin-top: 0px;">
            <div class="col-lg-12 u-horizontal-align--center">
                <section class="c-banner" style="background-color: light-grey;">
                    <h2>Collectie / <?php echo get_the_category()[0]->name; ?></h2>
                </section>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 u-horizontal-align--center">
                <h2>Alle <?php echo get_the_category()[0]->name; ?> auto's in onze collectie.</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php 
                while(have_posts()): the_post();
            ?>
                <div class="col-lg-4">
                    <a href="<?php echo get_permalink() ?>" class="c-card" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center; background-size: cover;">
                        <div class="card__content">
                            <h3 class="card__title"><?php echo get_the_title() ?></h3>
                            <div class="card__properties">
                                <p><?php the_field('merk'); ?> | </p>
                                <p> <?php echo get_the_category()[0]->cat_name; ?> | </p>
                                <p><?php the_field('prijs'); ?> | </p>
                                <p><?php the_field('bouwjaar'); ?> | </p>
                                <p><?php the_field('tellerstand'); ?></p>
                            </div>
                            <p><?php the_field('korte_beschrijving'); ?></p>
                        </div>
                    </a>
                </div>
            <?php
                endwhile; 
            ?>
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
</section>
<?php get_footer(); ?>

