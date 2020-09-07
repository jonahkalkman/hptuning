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
    <body <?php body_class(); ?>>
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
                <div class="container" style="padding-top: 0px; padding-bottom: 0;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header__menuwrapper">
                                <a href="/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="300" viewBox="0 0 35012 8534" xmlns:xlink="http://www.w3.org/1999/xlink" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                        <defs>
                                            <linearGradient id="id0" gradientUnits="userSpaceOnUse" x1="3254.38" y1="-1722.24" x2="7154.36" y2="9295.49">
                                            <stop offset="0" stop-color="#bf272e"/>
                                            <stop offset=".188" stop-color="#bf272e"/>
                                            <stop offset=".329" stop-color="#e63a34"/>
                                            <stop offset="1" stop-color="#bf272e"/>
                                            </linearGradient>
                                            <linearGradient id="id1" gradientUnits="userSpaceOnUse" xlink:href="#id0" x1="4913.59" y1="-3839.05" x2="9528.31" y2="9121.88"/>
                                            <style>
                                            .str0{stroke:#1f1b20;stroke-width:7.62179}.fil0{fill:#fefefe}
                                            </style>
                                        </defs>
                                        <g id="Layer_x0020_1">
                                            <path class="fil0 str0" d="M11100 2004h667l-597 2401h486l597-2401h653l103-409h-1805zM15099 2173l-368 1469c-65 262-153 378-500 378-117 0-193-21-225-62-35-45-36-135-2-275l379-1510h-487l-395 1580c-43 174-14 336 80 457 83 105 256 230 613 230 567 0 901-316 981-630l411-1637h-487zM18408 2173h-487l-313 1263-44 222-428-1485h-515l-556 2232h486l314-1260 43-217 428 1477h515zM20874 2173h-1167l-103 408h338l-350 1416h-338l-104 408h1167l104-408h-343l351-1416h342zM23959 2173h-486l-313 1263-44 222-428-1485h-515l-556 2232h486l313-1260 43-217 429 1477h515zM24641 3266c-68 275-105 657 99 918 133 170 346 256 632 256 258 0 595-95 839-237l31-18 262-1051h-1064l-104 408h579l-98 396c-128 54-267 82-403 82-120 0-204-32-256-99-86-110-96-325-27-605 72-284 255-759 681-759 176 0 304 82 380 244l38 79 448-222-34-75c-128-279-408-446-749-446-228 0-991 82-1254 1129zM10513 7663h486l420-1685 43-195 310 1880h528l699-2810h-486l-419 1688-44 191-309-1879h-528zM15669 5430h-1680l-557 2233h1680l104-409h-1195l139-561h985l103-408h-986l110-446h1194zM17461 5430h-872l-104 409h251l-351 1415h-249l-104 409h915c887 0 1163-411 1342-1122 101-406 82-679-58-858-135-172-379-253-770-253zm-239 409h252c163 0 263 31 315 97 75 97 75 290 0 592-151 607-370 726-698 726h-219l350-1415zM21221 5430h-1681l-556 2233h1680l104-409h-1195l138-561h986l103-408h-986l110-446h1194zM22279 5430l-556 2233h487l217-883h325l396 963 464-210-379-824c288-105 531-349 599-611 44-184 21-336-70-452-111-141-317-216-597-216h-886zm384 409h433c111 0 192 25 228 72 27 34 33 83 17 145-50 195-247 316-514 316h-297l133-533zM25639 5430h-487l-556 2233h1750l103-409h-1264zM28871 5430h-521l-1345 2150 449 151 390-630h732l72 638 496-144-273-2165zm-410 654l68 608h-437l369-608zM32287 5430h-486l-313 1264-45 222-427-1486h-515l-556 2233h486l313-1260 43-217 429 1477h515zM34116 5430h-871l-104 409h251l-351 1415h-250l-103 409h915c886 0 1163-411 1341-1122 43-171 64-319 64-446 0-174-40-309-121-412-135-172-380-253-771-253zm-238 409h252c162 0 262 31 315 97 75 97 75 290 0 592-151 607-371 726-699 726h-219l351-1415z"/>
                                            <path d="M10391 0H1923c-210 0-388 154-417 362L4 8053c-2 18-4 37-4 55v10c2 226 187 416 422 416h8468c209 0 387-155 417-362l1501-7691c36-254-161-481-417-481zM5259 3563l507-2414h18l4-17h1835c517 0 945 114 1275 338 408 273 625 699 625 1231 0 118-14 247-42 383-131 613-466 1089-994 1416-452 276-1001 415-1633 415h-627l-540 2584h-18l-4 16H4420l598-2813H3212l-601 2813H1368l1345-6366h1252l-517 2414h1811z" fill="url(#id0)"/>
                                            <path d="M6473 3640h115c494 0 860-44 1089-131 322-120 505-336 575-682 16-71 24-144 24-219v-7c0-176-54-309-320-389-113-31-384-71-1003-71h-168l-312 1499z" fill="url(#id1)"/>
                                        </g>
                                    </svg>
                                </a>
                                <div style="display: flex; align-items: center; flex-direction: row; vertical-align: middle;">
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
        