<?php
    $featured_image = get_the_post_thumbnail_url();
?>
<section class="c-content">
    <?php while (have_posts()) : the_post(); ?>
        <div class="c-banner" style="background: url(<?php echo $featured_image; ?>) no-repeat center center fixed; background-size: cover;">
			<div class="row u-horizontal-align--center">
				<div class="col-lg-6">
					<h1 class="banner__title content__title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	<?php 
			endwhile; 
	wp_reset_postdata();
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content__wysiwyg" data-aos="fade-down">
					<?php echo the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>