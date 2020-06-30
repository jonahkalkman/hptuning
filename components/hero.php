<?php 
    if(have_rows('hero')): while(have_rows('hero')): the_row();
?>
    <section class="c-hero" style="background: url('<?php echo get_sub_field('achtergrond')['url'] ?>') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 u-horizontal-align--center">
                    <h2 class="hero__title"><?php echo get_sub_field('titel') ?></h2>
                </div>
                <div class="col-lg-12 u-horizontal-align--center u-margin-top--md">
                    <?php
                        $buttoncollectie = get_sub_field('button_collectie');	
                        if($buttoncollectie): while(have_rows('button_collectie')): the_row(); 
                    ?>
                        <a class="c-button u-margin-right--lg" href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('tekst') ?></a>
                    <?php
                        endwhile; endif; 
                    ?>
                    <?php
                        $buttoncontact = get_sub_field('button_contact');	
                        if($buttoncontact): while(have_rows('button_contact')): the_row(); 
                    ?>
                        <a class="c-button button--secondary" href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('tekst') ?></a>
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