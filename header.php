<?php
    global $cfs
?>
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
        <a class="fixed-button fixed-button--secondary" href="<?php echo $cfs->get('header_telefoonnummer', 5); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384" width="14" height="14">
                <path d="M353.188 252.052c-23.51 0-46.594-3.677-68.469-10.906-10.719-3.656-23.896-.302-30.438 6.417l-43.177 32.594c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208 11.167-20.198 7.635-31.448-7.26-21.99-10.948-45.063-10.948-68.583C132.146 13.823 118.323 0 101.333 0h-70.52C13.823 0 0 13.823 0 30.813 0 225.563 158.438 384 353.188 384c16.99 0 30.813-13.823 30.813-30.813v-70.323c-.001-16.989-13.824-30.812-30.813-30.812z" data-original="#000000" class="active-path" data-old_color="#000000" fill="white"/>
            </svg>
        </a>
        <a class="fixed-button" href="<?php echo $cfs->get('header_mailadres', 5); ?>">
            <svg style="vertical-align: top;" xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 511.996 511.996" width="14">
                <path d="M230.9 253.371c13.369 8.913 36.827 8.914 50.199-.001l.007-.004 227.865-151.911c-7.474-21.616-28.018-37.188-52.142-37.188H55.166c-24.125 0-44.668 15.572-52.143 37.188l227.87 151.912.007.004z" data-original="#000000" class="active-path" data-old_color="#000000" fill="white"/>
                <path d="M297.746 278.328l-.007.005c-11.702 7.801-26.724 11.702-41.741 11.702-15.02 0-30.036-3.9-41.739-11.703l-.005-.003L0 135.494v257.072c0 30.417 24.747 55.163 55.166 55.163h401.666c30.418 0 55.164-24.746 55.164-55.163V135.494z" data-original="#000000" class="active-path" data-old_color="#000000" fill="white"/>
            </svg>
        </a>
        <main id="content" role="main">  
            <div class="menu--mobile" js-hook-mobile-menu>
                <div class="menu--mobile__icon" js-hook-close-button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 450" width="30px" height="30px" x="100%" y="100%">
                        <path fill-rule="evenodd" d="M16.142 1.173C2.966 6.168-3.424 21.061 1.656 34.932c1.582 4.319 5.244 8.114 81.822 84.796l80.165 80.276-79.758 79.881C-5.711 369.619.391 362.669.391 375c0 15.557 9.052 24.609 24.609 24.609 12.331 0 5.381 6.102 95.117-83.496L200 236.353l79.883 79.76c89.736 89.598 82.786 83.496 95.117 83.496 14.879 0 24.231-8.815 24.864-23.437.561-12.946 7.678-4.756-83.34-95.899L236.36 200l80.164-80.273c91.018-91.143 83.901-82.953 83.34-95.899C399.231 9.206 389.879.391 375 .391c-12.331 0-5.381-6.102-95.117 83.496L200 163.647l-79.883-79.76C55.926 19.795 39.467 3.761 36.328 2.263 31.479-.051 20.881-.624 16.142 1.173"/>
                    </svg>
                </div>
                <?php
                    wp_nav_menu ( 
                        array ( 
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'menu--mobile__list' 
                        )
                    );
                ?>
            </div> 
            <header class="c-header">
                <div class="container" style="margin-top: 20px; margin-bottom: 0;">
                    <div class="row" style="margin-top: 0;">
                        <div class="col-lg-12">
                            <div class="header__menuwrapper">
                                <a href="/"><img class="header__logo" src="<?php echo wp_upload_dir()['baseurl']; ?>/2020/05/TD-Elektro-1.png" alt=""></a>
                                <div style="display: flex; align-items: flex-end; flex-direction: column;">
                                    <ul class="c-menu menu--top u-margin-bottom--md" style="float: right;">
                                        <li style="vertical-align: middle;">
                                            <svg class="u-margin-right--xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384" width="14" height="14">
                                                <path d="M353.188 252.052c-23.51 0-46.594-3.677-68.469-10.906-10.719-3.656-23.896-.302-30.438 6.417l-43.177 32.594c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208 11.167-20.198 7.635-31.448-7.26-21.99-10.948-45.063-10.948-68.583C132.146 13.823 118.323 0 101.333 0h-70.52C13.823 0 0 13.823 0 30.813 0 225.563 158.438 384 353.188 384c16.99 0 30.813-13.823 30.813-30.813v-70.323c-.001-16.989-13.824-30.812-30.813-30.812z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#699EA5"/>
                                            </svg>
                                            <a href="<?php echo $cfs->get('header_telefoonnummer', 5); ?>"><?php echo $cfs->get('header_telefoonnummer', 5); ?></a>
                                        </li>
                                        <li style="vertical-align: middle; line-height: 14px;">
                                            <svg class="u-margin-right--xs" style="vertical-align: top;" xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 511.996 511.996" width="14">
                                                <path d="M230.9 253.371c13.369 8.913 36.827 8.914 50.199-.001l.007-.004 227.865-151.911c-7.474-21.616-28.018-37.188-52.142-37.188H55.166c-24.125 0-44.668 15.572-52.143 37.188l227.87 151.912.007.004z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#699EA5"/>
                                                <path d="M297.746 278.328l-.007.005c-11.702 7.801-26.724 11.702-41.741 11.702-15.02 0-30.036-3.9-41.739-11.703l-.005-.003L0 135.494v257.072c0 30.417 24.747 55.163 55.166 55.163h401.666c30.418 0 55.164-24.746 55.164-55.163V135.494z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#699EA5"/>
                                            </svg>
                                            <a href="<?php echo $cfs->get('header_mailadres', 5); ?>"><?php echo $cfs->get('header_mailadres', 5); ?></a>
                                        </li>
                                    </ul>
                                    <?php
                                        wp_nav_menu ( 
                                            array ( 
                                                'theme_location' => 'primary',
                                                'container' => false,
                                                'menu_class' => 'c-menu menu--main' 
                                            )
                                        );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="menu__icon" js-hook-open-button>	
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" width="30px" height="30px">
                                <path fill-rule="evenodd" d="M11.328 61.475c-13.979 2.957-15.261 25.43-1.772 31.066 4.414 1.844 376.474 1.844 380.888 0 11.71-4.893 13.14-21.635 2.467-28.869l-3.458-2.344-188.281-.092c-103.555-.051-188.984.057-189.844.239M10.18 184.46c-11.999 4.805-13.907 21.814-3.277 29.201l3.388 2.355h379.418l3.388-2.355c9.275-6.446 9.275-20.876 0-27.322l-3.388-2.355-188.8-.148c-123.001-.097-189.472.121-190.729.624m-.799 123.035c-11.558 5.012-12.881 21.656-2.292 28.833l3.458 2.344h378.906l3.458-2.344c10.673-7.234 9.243-23.976-2.467-28.869-4.359-1.821-376.861-1.787-381.063.036"/>
                            </svg>
                        </div>
                    </div>
                </div>   
            </header>
        