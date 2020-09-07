<?php 
    get_header();
?>
    <section class="page__content" style="background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2020/08/dwad.png') no-repeat center center; background-size: cover;">
        <div class="container" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="row u-margin-bottom--xlg">
                <div class="col-lg-12 u-horizontal-align--center">
                    <h1 class="news__title">Latest news</h1>
                </div>
            </div>
            <?php
                if (have_posts()): while (have_posts()):
                    the_post();
            ?>
                <div class="page__news row align--center u-margin-bottom--xlg">
                        <div class="col-lg-3 col-md-12 u-horizontal-align--right"> 
                            <?php the_post_thumbnail('medium', array('class' => "news__tumbnail")); ?>
                        </div> 
                        <div class="col-lg-5 news__post-content">
                            <h2><?php echo the_title(); ?></h2>
                            <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                            <a class="news__readmore" href="<?php echo get_permalink(); ?>">Read more</a>
                        </div>
                </div>
            <?php
                endwhile; endif;
            ?>
        </div>
    </section>
<?php
    get_footer(); 
?>
