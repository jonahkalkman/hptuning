<?php 
    if(have_rows('collectie')): while(have_rows('collectie')): the_row();
?>
    <section class="c-collection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 u-horizontal-align--center">
                    <h2 class="collection__title"><?php echo get_sub_field('titel') ?></h2> 
                    <p class="collection__description u-margin-top--sm"><?php echo get_sub_field('beschrijving') ?></p>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 0px;">
            <div class="row">
                <?php
                    $args = array(
                        'post_type' => 'cars',
                        'posts_per_page' => '5'
                    ); 

                    $post_query = new WP_Query($args);
                    if($post_query->have_posts() ) {
                        while($post_query->have_posts() ) {
                            $post_query->the_post();
                ?>
                    <div class="col-lg-4">
                        <a href="<?php echo get_permalink() ?>" class="c-card" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center; background-size: cover;">
                            <div class="card__content">
                                <h3 class="card__title"><?php the_title(); ?></h3>
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
                        }
                    }
                    wp_reset_query();
                ?>
            </div>
            <div class="row">
                <div class="col-lg-12 u-horizontal-align--center">
                    <?php
                        $button = get_sub_field('button');	
                        if($button): while(have_rows('button')): the_row(); 
                    ?>
                    <a class="c-button u-margin-right--lg" href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('titel') ?></a>
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