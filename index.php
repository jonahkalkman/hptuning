<?php 
    get_header();
?>
    <section class="page__hero">
        <div class="row" style="margin-top: 0px; margin-bottom: 0px;">
            <div class="col-lg-12 u-horizontal-align--center">
                <section class="c-banner" style="background: url('<?php the_post_thumbnail_url(); ?>') rgba(36, 36, 36, 0.3) no-repeat center center; background-size: cover; background-blend-mode: multiply;">
                    <h2 class="page__title"><?php echo single_post_title() ?></h2>
                </section>
            </div>
        </div>
    </section>
    <section class="page__content" style="background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2020/08/dwad.png') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row align--center">
                <div class="col-lg-12">
                    <?php
                        if (have_posts()): while (have_posts()):
                        the_post();
                            the_content();
                        endwhile; endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="c-banner" style="background-color: #056839;">
        <div class="container">
            <div class="row" style="display: flex; justify-content: center;">
                <div class="col-lg-8 u-horizontal-align--center">
                    <h2 class="banner__title">Interested in our services? Feel free to contact us for a non-binding offer</h2>
                    <a href="<?php echo get_bloginfo('wpurl'); ?>/contact" class="c-button button--third">Contact us</a>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer(); 
?>
