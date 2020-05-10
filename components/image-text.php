<?php 
    if(have_rows('over_ons')): while(have_rows('over_ons')): the_row();
?>
    <section class="c-image-text">
        <div class="container" style="margin-top: 0px;">
            <div class="row">
                <div class="col-lg-12 u-horizontal-align--center">
                    <h2><?php echo get_sub_field('titel') ?></h2>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 0px;">  
            <div class="row align--center">
                <div class="col-lg-6 col-sm-12">
                    <img src="<?php echo get_sub_field('afbeelding')['url'] ?>" alt="" height="400px">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p><?php echo get_sub_field('tekst') ?></p>
                </div>
            </div>
        </div>
    </section>
<?php
    endwhile; endif; 
?>