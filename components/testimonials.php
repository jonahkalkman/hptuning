<?php 
    if(have_rows('testimonials_blok')): while(have_rows('testimonials_blok')): the_row();
?>
    <section class="c-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 u-horizontal-align--center">
                    <h2><?php echo get_sub_field('titel') ?></h2>
                </div>
            </div>
        </div>  
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="c-banner" style="background: url('<?php echo get_sub_field('achtergrond')['url'] ?>') no-repeat center center; background-size: cover;">
                    <div id="banner__slider">
                        <?php
                            $testimonials = get_sub_field('testimonials');	
                            if($testimonials): while(have_rows('testimonials')): the_row(); 
                                if(have_rows('testimonial')): while(have_rows('testimonial')): the_row(); 
                        ?>
                            <div class="slider__item">
                                <p class="u-margin-bottom--sm"><?php echo get_sub_field('tekst') ?></p>
                                <img style="margin: 0 auto;" src="<?php echo get_sub_field('sterren')['url'] ?>" alt="slider image">
                                <p class="u-margin-top--md"><i><?php echo get_sub_field('naam') ?></i></p>
                            </div>
                        <?php 
                                endwhile; endif; 
                            endwhile; endif; 
                        ?>
                    </div>
                    <button type="button" class="banner__previous">
                        <img src="https://xleasecars.jkwebsites.nl/wp-content/uploads/2020/02/arrow-left.png" alt="arrow slider left">
                    </button>
                    <button type="button" class="banner__next">
                        <img src="https://xleasecars.jkwebsites.nl/wp-content/uploads/2020/02/arrow-right.png" alt="arrow slider right">
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    endwhile; endif; 
?>