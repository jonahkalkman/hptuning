<footer>
    <div class="footer__wrapper">
        <div class="footer__item">
            <p>Pagina's</p>
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => false, 
                        'menu_class' => 'footer__list'
                    )
                ); 
                wp_reset_query();
            ?>
        </div>
        <div class="footer__item">
            <p>Service</p>
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'service',
                        'container' => false, 
                        'menu_class' => 'footer__list'
                    )
                ); 
                wp_reset_query();
            ?>
        </div>
        <div class="footer__item">
            <p>Contact</p>
            <ul class="footer__list">
                <li><a href="tel:<?php the_field('telefoonnummer', 'option'); ?>"><?php the_field('telefoonnummer', 'option'); ?></a></li>
                <li><a href="mailto:<?php the_field('mailadres', 'option'); ?>"><?php the_field('mailadres', 'option'); ?></a></li>
            </ul>
        </div>
    </div>
    <div class="footer__copyright">
        <p class="footer__text">
            © <?php echo date("Y"); ?> <a href="/"><?php echo get_bloginfo() ?></a> - Alle rechten voorbehouden.
        </p>  
        <div class="copyright__links">
            <p class="footer__text">
                <a href="sitemap.xml">Sitemap</a>
            </p>
            <p class="footer__text">
                <a href="/privacybeleid">Privacybeleid</a>
            </p>  
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</main>
</body>
</html>