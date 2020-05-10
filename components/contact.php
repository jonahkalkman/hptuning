<?php 
    if(have_rows('contact')): while(have_rows('contact')): the_row();
?>
    <section class="c-banner" style="background: url('<?php echo get_sub_field('achtergrond')['url'] ?>')">
        <h2><?php echo get_sub_field('titel') ?></h2>
    </section>
    <section class="c-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php echo get_sub_field('ondertitel') ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo get_sub_field('tekst') ?>
                </div>
                <div class="col-lg-6">
                    <?php echo get_sub_field('formulier') ?>
                </div>
            </div>
        </div>
    </section>
<?php
    endwhile; endif; 
?>