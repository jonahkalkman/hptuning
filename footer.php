<?php
    global $cfs
?>
<footer>
    <div class="container" style="padding-bottom: 0;padding-top: 20px;">
        <div class="row">
            <div class="col-lg-3 col-md-3 footer__item">
                <p class="footer__title">Company</p>
                <?php
                    wp_nav_menu ( 
                        array ( 
                            'menu' => 'diensten',
                            'container' => false,
                            'menu_class' => 'c-menu menu--footer' 
                        )
                    );
                ?>
            </div>
            <div class="col-lg-3 col-md-3 footer__item">
                <p class="footer__title">Services</p>
                <?php
                    wp_nav_menu ( 
                        array ( 
                            'menu' => 'diensten',
                            'container' => false,
                            'menu_class' => 'c-menu menu--footer' 
                        )
                    );
                ?>
            </div>
            <div class="col-lg-3 col-md-3 footer__item">
                <p class="footer__title">Green Label Logistics</p>
                <a href="mailto:info@greenlabellogistics.com"><p>info@greenlabellogistics.com</p></a>
                <a href="tel:+31 10 200 15 40"><p>+31 10 200 15 40</p></a>
                <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2020/08/Kopie-van-_Green-Label-Logistics_Tag-Groen_LINKS.png" alt="" width="180px">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <p class="footer__text">
                        © <?php echo date("Y"); ?> <a href="/"><?php echo get_bloginfo() ?></a> - Alle rechten voorbehouden.
                    </p>  
                    <div class="copyright__links">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</main>
</body>
</html>