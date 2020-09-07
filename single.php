<?php 
    get_header();
?>
    <section class="page__hero">
        <div class="row" style="margin-top: 0px; margin-bottom: 0px;">
            <div class="col-lg-12 u-horizontal-align--center">
                <section class="c-banner" style="background: url('<?php the_post_thumbnail_url(); ?>') rgba(36, 36, 36, 0.3) no-repeat center center; background-size: cover; background-blend-mode: multiply;">
                    <p class="single__date">Posted on <?php echo get_the_date(); ?></p>
                    <h2 class="page__title"><?php echo single_post_title() ?></h2>
                </section>
            </div>
        </div>
    </section>
    <section class="page__content" style="background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2020/08/dwad.png') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row single__content">
                <div class="col-lg-1 single__share">
                    <p>Share</p>
                    <a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"><img class="single__social-icon" src="<?php echo wp_upload_dir()['baseurl']; ?>/2020/08/facebook.png" alt="facebook share"></a>
                    <a href="http://twitter.com/share?url=<?php echo get_permalink(); ?>"><img class="single__social-icon" src="<?php echo wp_upload_dir()['baseurl']; ?>/2020/08/twitter.png" alt="twitter share"></a>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"><img class="single__social-icon" src="<?php echo wp_upload_dir()['baseurl']; ?>/2020/08/linkedin.png" alt="linkedin share"></a>
                </div>
                <div class="col-lg-10 single__text">
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
<?php
    get_footer(); 
?>
