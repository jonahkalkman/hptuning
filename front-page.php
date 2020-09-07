<?php
    get_header();
    global $cfs;
    get_template_part("components/hero", "first" );
    get_template_part("components/intro", "first" );
    get_template_part("components/banner", "first" );
    get_template_part("components/services", "first" );
    get_template_part("components/contact", "first" );
?>
<?php
    get_footer(); 
?>