<?php 
    get_header();
?>
    <section class="page__content u-padding-bottom--lg" style="background: url('<?php echo wp_upload_dir()['baseurl']; ?>/2020/08/dwad.png') no-repeat center center; background-size: cover;">
        <div class="container" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="row u-margin-bottom--xlg">
                <div class="col-lg-12 u-horizontal-align--center">
                    <h1 class="news__title"><?php echo the_title(); ?></h1>
                    <p>You can fill in the below form and one of our employees will contact you shortly</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3>Green Label Logistics</h3>
                    <p class="u-margin-bottom--lg">
                        Van Nelleweg 1</br>
                        3044 BC, Rotterdam</br>
                        The Netherlands
                    </p>
                    <p>Phone: <a href="tel:+31 10 200 15 40">+31 10 200 15 40</a></p>
                    <p>Email: <a href="mailto:info@greenlabellogistics.com">info@greenlabellogistics.com</a></p>
                    <p>Visit our general website: <a href="http://www.hartmanlogisticsgroup.com/" target="blanc">www.hartmanlogisticsgroup.com</a></p>
                </div>
                <div class="col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contactformulier 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <iframe
        width="100%"
        height="300"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBR27EC_cJSel001-wvDAf_MvkkMiGlh6w&q=Space+Needle,Seattle+WA" allowfullscreen>
    </iframe>
<?php
    get_footer(); 
?>
