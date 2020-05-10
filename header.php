<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title><?php echo wp_get_document_title() ?></title>
        <meta name="description" content="<?php echo get_bloginfo() ?>">
        <meta name="og:title" property="og:title" content="<?php echo get_bloginfo() ?>">
        <meta property="og:image" content="" />
        <meta property="og:url" content="<?php echo get_permalink(); ?>" />
        <link rel="canonical" href="<?php echo get_permalink(); ?>"/>
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="theme-color" content="#4584FF"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <span class="backtotop" js-hook-top-button><img src="https://xleasecars.jkwebsites.nl/wp-content/uploads/2020/03/arrow-up.png" alt="arrow to top"></span>
        <main id="content" role="main">      
            <header class="c-header">
                <div class="c-bar">
                    <a href="tel:<?php the_field('telefoonnummer', 'option'); ?>"><?php the_field('telefoonnummer', 'option'); ?></a>
                    <a href="mailto:<?php the_field('mailadres', 'option'); ?>"><?php the_field('mailadres', 'option'); ?></a>
                </div>
                <div class="header__menuwrapper">
                    <a href="/"><h1><?php bloginfo() ?></h1></a>
                    <?php
                        wp_nav_menu ( 
                            array ( 
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'c-menu' 
                            )
                        );
                    ?>
                </div>
                 <div class="menu__icon" js-hook-open-button>	
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" width="30px" height="30px">
                        <path fill-rule="evenodd" d="M11.328 61.475c-13.979 2.957-15.261 25.43-1.772 31.066 4.414 1.844 376.474 1.844 380.888 0 11.71-4.893 13.14-21.635 2.467-28.869l-3.458-2.344-188.281-.092c-103.555-.051-188.984.057-189.844.239M10.18 184.46c-11.999 4.805-13.907 21.814-3.277 29.201l3.388 2.355h379.418l3.388-2.355c9.275-6.446 9.275-20.876 0-27.322l-3.388-2.355-188.8-.148c-123.001-.097-189.472.121-190.729.624m-.799 123.035c-11.558 5.012-12.881 21.656-2.292 28.833l3.458 2.344h378.906l3.458-2.344c10.673-7.234 9.243-23.976-2.467-28.869-4.359-1.821-376.861-1.787-381.063.036"/>
                    </svg>
                </div>
                <div class="menu--mobile" js-hook-mobile-menu>
                    <div class="menu--mobile__icon" js-hook-close-button>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 450" width="30px" height="30px" x="100%" y="100%">
                            <path fill-rule="evenodd" d="M16.142 1.173C2.966 6.168-3.424 21.061 1.656 34.932c1.582 4.319 5.244 8.114 81.822 84.796l80.165 80.276-79.758 79.881C-5.711 369.619.391 362.669.391 375c0 15.557 9.052 24.609 24.609 24.609 12.331 0 5.381 6.102 95.117-83.496L200 236.353l79.883 79.76c89.736 89.598 82.786 83.496 95.117 83.496 14.879 0 24.231-8.815 24.864-23.437.561-12.946 7.678-4.756-83.34-95.899L236.36 200l80.164-80.273c91.018-91.143 83.901-82.953 83.34-95.899C399.231 9.206 389.879.391 375 .391c-12.331 0-5.381-6.102-95.117 83.496L200 163.647l-79.883-79.76C55.926 19.795 39.467 3.761 36.328 2.263 31.479-.051 20.881-.624 16.142 1.173"/>
                        </svg>
                    </div>
                    <?php
                        wp_nav_menu ( 
                            array ( 
                                'theme_location'=>'primary',
                                'container'=> false, 'menu_class'=> false, 
                                'menu_class'=> 'menu--mobile__list' 
                            )
                        );
                    ?>      
                </div>
            </header>
        