<?php 
    get_header();
?>
    <div class="archive__banner">
        <div class="row" style="margin-top: 0px;">
            <div class="col-lg-12 u-horizontal-align--center">
                <section class="c-banner" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center; background-size: cover;">
                    <h2><?php echo single_post_title() ?></h2>
                </section>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align--center">
            <div class="col-lg-6">
                <img src="<?php echo get_field('afbeelding')['url']; ?>" alt="<?php echo get_field('afbeelding')['alt']; ?>">
            </div>
            <div class="col-lg-6">
                <p><?php echo the_field('tekst'); ?></p>
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
