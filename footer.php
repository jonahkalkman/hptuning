<?php
    global $cfs
?>
<footer>
    <div class="container" style="margin-bottom: 0; margin-top: 0;">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <img class="footer__logo" src="<?php echo $cfs->get('footer_logo', 5); ?>" alt="" width="150">
            </div>
            <div class="col-lg-3 col-md-3 footer__item">
                <p class="footer__title"><?php echo $cfs->get('footer_eerste_kolom_titel', 5); ?></p>
                <p><?php echo $cfs->get('footer_adres', 5); ?></p>
            </div>
            <div class="col-lg-3 col-md-3 footer__item">
                <p class="footer__title"><?php echo $cfs->get('footer_tweede_kolom_titel', 5); ?></p>
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
                <p class="footer__title"><?php echo $cfs->get('footer_derde_kolom_titel', 5); ?></p>
                <a href="tel:<?php echo $cfs->get('footer_telefoonnummer', 5); ?>" style="text-decoration: none;">
                    <p style="vertical-align: middle;">
                        <svg class="u-margin-right--xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384" width="20" height="20">
                            <path d="M353.188 252.052c-23.51 0-46.594-3.677-68.469-10.906-10.719-3.656-23.896-.302-30.438 6.417l-43.177 32.594c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208 11.167-20.198 7.635-31.448-7.26-21.99-10.948-45.063-10.948-68.583C132.146 13.823 118.323 0 101.333 0h-70.52C13.823 0 0 13.823 0 30.813 0 225.563 158.438 384 353.188 384c16.99 0 30.813-13.823 30.813-30.813v-70.323c-.001-16.989-13.824-30.812-30.813-30.812z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#699EA5"/>
                        </svg>
                        <?php echo $cfs->get('footer_telefoonnummer', 5); ?>
                    </p>
                </a>
                <a href="mailto:<?php echo $cfs->get('footer_mailadres', 5); ?>" style="text-decoration: none; display: block; margin-bottom: 20px;">
                    <p style="vertical-align: middle; line-height: 14px;">
                        <svg class="u-margin-right--xs" style="vertical-align: top;" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 511.996 511.996" width="20">
                            <path d="M230.9 253.371c13.369 8.913 36.827 8.914 50.199-.001l.007-.004 227.865-151.911c-7.474-21.616-28.018-37.188-52.142-37.188H55.166c-24.125 0-44.668 15.572-52.143 37.188l227.87 151.912.007.004z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#699EA5"/>
                            <path d="M297.746 278.328l-.007.005c-11.702 7.801-26.724 11.702-41.741 11.702-15.02 0-30.036-3.9-41.739-11.703l-.005-.003L0 135.494v257.072c0 30.417 24.747 55.163 55.166 55.163h401.666c30.418 0 55.164-24.746 55.164-55.163V135.494z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#699EA5"/>
                        </svg>
                        <?php echo $cfs->get('footer_mailadres', 5); ?>
                    </p>
                </a>
                <a href="<?php echo $cfs->get('footer_instagram', 5); ?>" style="text-decoration: none; margin-right: 10px;">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2020/05/logotype-1.png" alt="" width="20">
                </a>
                <a href="<?php echo $cfs->get('footer_facebook', 5); ?>" style="text-decoration: none; margin-right: 10px;">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2020/05/logotype.png" alt="" width="20">
                </a>
                <a href="<?php echo $cfs->get('footer_linkedin', 5); ?>" style="text-decoration: none;">
                    <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2020/05/symbol-1.png" alt="" width="20">
                </a>
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