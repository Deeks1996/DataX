<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // Define the ID of your 'Global Site Settings' page
    $global_settings_page_id = 1490; 
    ?>

    <?php // Dynamic Title Tag ?>
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <?php // Dynamic Meta Description and Keywords ?>
    <?php
    if ( ! class_exists( 'WPSEO_Frontend' ) && ! class_exists( 'RankMath' ) ) {
        if ( is_front_page() || is_home() ) {
            ?>
            <meta name="description" content="<?php bloginfo('description'); ?>">
            <?php
        } elseif ( is_singular() ) {
            ?>
            <meta name="description" content="<?php echo esc_attr( get_the_excerpt() ); ?>">
            <?php
        } else {
            // Fallback for other pages if no specific description is set
            // Now pulling from the specific Global Settings Page ID
            $default_description = get_field('default_meta_description', $global_settings_page_id);
            if ( $default_description ) {
                ?>
                <meta name="description" content="<?php echo esc_attr( $default_description ); ?>">
                <?php
            } else {
                // If no ACF field, use a hardcoded default (less ideal, but for completeness)
                ?>
                <meta name="description" content="Providing data solutions, the open source way · Amp up your digital goals, with the power of multi cloud · Get future ready with open source solutions & services.">
                <?php
            }
        }
    }
    ?>

    <?php
    // Favicon from ACF, pulling from the specific Global Settings Page ID
    $favicon_url = get_field('site_favicon', $global_settings_page_id);
    if ( $favicon_url ) : ?>
        <link rel="icon" href="<?php echo esc_url( $favicon_url ); ?>" type="image/gif" sizes="32x32">
    <?php else : ?>
        <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.png" type="image/gif" sizes="32x32">
    <?php endif; ?>

    <?php // Font Awesome Script - Already correct, using defer for performance ?>
    <script src="https://kit.fontawesome.com/1346718fb0.js" crossorigin="anonymous" defer></script>

    <?php wp_head(); // Essential WordPress hook for scripts, styles, etc. ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); // Essential WordPress hook for body start ?>

<div class="cursor"></div>
<div class="loader">
    <div class="loader__bckg"></div>
    <div class="loader__logo">
        <?php
        $loader_logo = get_field('loader_logo_image', $global_settings_page_id);
        if ( $loader_logo ) : ?>
            <img src="<?php echo esc_url( $loader_logo ); ?>" alt="Loader Logo" class="loader-logo" width="80" height="80" loading="lazy">
        <?php else : ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/lg-outline.webp" alt="Loader Logo" class="loader-logo" width="80" height="80" loading="lazy">
        <?php endif; ?>
        <span></span>
    </div>
</div>

<header class="header">
    <nav>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-6 col-md-auto">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                        <?php
                        $main_logo_white = get_field('main_logo_white', $global_settings_page_id);
                        $main_logo_default = get_field('main_logo_default', $global_settings_page_id);
                        
                        if ( $main_logo_white ) : ?>
                            <img src="<?php echo esc_url( $main_logo_white ); ?>" alt="Logo White" width="161" height="64" loading="lazy">
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-white.webp" alt="Logo White" width="161" height="64" loading="lazy">
                        <?php endif; ?>

                        <?php if ( $main_logo_default ) : ?>
                            <img src="<?php echo esc_url( $main_logo_default ); ?>" alt="Logo" width="120" height="48" loading="lazy">
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.webp" alt="Logo" width="120" height="48" loading="lazy">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="col-auto col-md-auto text-right ml-auto">
                    <ul class="menu top">
                        <?php
                        $header_phone = get_field('header_phone_number', $global_settings_page_id);
                        if ( $header_phone ) : ?>
                            <li><a href="tel:<?php echo esc_attr( $header_phone ); ?>" class="icon"><i class="fas fa-phone-alt"></i></a></li>
                        <?php else : ?>
                            <li><a href="tel:+97165211720" class="icon"><i class="fas fa-phone-alt"></i></a></li>
                        <?php endif; ?>

                        <?php
                        $header_email = get_field('header_email_address', $global_settings_page_id);
                        if ( $header_email ) : ?>
                            <li><a href="mailto:<?php echo esc_attr( $header_email ); ?>" class="icon"><i class="fas fa-envelope"></i></a></li>
                        <?php else : ?>
                            <li><a href="mailto:contact@dataxsolution.net" class="icon"><i class="fas fa-envelope"></i></a></li>
                        <?php endif; ?>

                        <?php
                        $get_in_touch_url = get_field('get_in_touch_button_url', $global_settings_page_id);
                        $get_in_touch_text = get_field('get_in_touch_button_text', $global_settings_page_id);
                        if ( $get_in_touch_url && $get_in_touch_text ) : ?>
                            <li><a href="<?php echo esc_url( $get_in_touch_url ); ?>" class="button"><?php echo esc_html( $get_in_touch_text ); ?></a></li>
                        <?php else : ?>
                            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button">Get In Touch</a></li>
                        <?php endif; ?>
                    </ul>

                    <?php
                    // Primary Navigation Menu
                    // IMPORTANT: Remove the entire 'else' block below once you've set up your 'primary-menu' in Appearance > Menus
                    if ( has_nav_menu( 'primary-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'container'      => false,
                            'menu_class'     => 'menu',
                            'walker'         => new Your_Custom_Nav_Walker(), // Ensure Your_Custom_Nav_Walker is defined or remove this line if not using a custom walker
                        ) );
                    } else {
                        // This fallback hardcoded menu should be removed after menu setup
                        ?>
                        <ul class="menu">
                            <li <?php if (is_front_page()) { echo 'class="active"'; } ?>>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if (is_front_page()) { echo 'class="active"'; } ?>>Home</a>
                            </li>
                            <li <?php if (is_page('about')) { echo 'class="active"'; } ?>>
                                <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" <?php if (is_page('about-us')) { echo 'class="active"'; } ?>>About</a>
                            </li>
                            <li <?php if (is_page('our-clients')) { echo 'class="active"'; } ?>>
                                <a href="<?php echo esc_url( home_url( '/our-clients' ) ); ?>" <?php if (is_page('our-clients')) { echo 'class="active"'; } ?>>Our Clients</a>
                            </li>
                            <li class="menu-item-has-children <?php if (is_page(array('services', 'consulting-services', 'technical-services', 'migration-services', 'training-services'))) { echo 'active'; } ?>">
                                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" <?php if (is_page(array('services', 'consulting-services', 'technical-services', 'migration-services', 'training-services'))) { echo 'class="active"'; } ?>>Services</a>
                                <ul class="sub-menu dropdown">
                                    <li <?php if (is_page('consulting-services')) { echo 'class="active"'; } ?>>
                                        <a href="<?php echo esc_url( home_url( '/consulting-services' ) ); ?>" <?php if (is_page('consulting-services')) { echo 'class="active"'; } ?>>Consulting</a>
                                    </li>
                                    <li <?php if (is_page('technical-services')) { echo 'class="active"'; } ?>>
                                        <a href="<?php echo esc_url( home_url( '/technical-services' ) ); ?>" <?php if (is_page('technical-services')) { echo 'class="active"'; } ?>>Technical</a>
                                    </li>
                                    <li <?php if (is_page('migration-services')) { echo 'class="active"'; } ?>>
                                        <a href="<?php echo esc_url( home_url( '/migration-services' ) ); ?>" <?php if (is_page('migration-services')) { echo 'class="active"'; } ?>>Migration</a>
                                    </li>
                                    <li <?php if (is_page('training-services')) { echo 'class="active"'; } ?>>
                                        <a href="<?php echo esc_url( home_url( '/training-services' ) ); ?>" <?php if (is_page('training-services')) { echo 'class="active"'; } ?>>Training</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children <?php if (is_page(array('technologies', 'redis', 'mongodb', 'datastax', 'elastic', 'hashicorp', 'couchbase', 'postgresql', 'github', 'harness'))) { echo 'active'; } ?>">
                                <a href="<?php echo esc_url( home_url( '/technologies' ) ); ?>" <?php if (is_page(array('technologies', 'redis', 'mongodb', 'datastax', 'elastic', 'hashicorp', 'couchbase', 'postgresql', 'github', 'harness'))) { echo 'class="active"'; } ?>>Technologies</a>
                                <div class="mega-menu">
                                    <div class="container">
                                        <ul class="row justify-content-between">
                                            <li class="col-md-4">
                                                <ul class="sub-menu">
                                                    <li <?php if (is_page('redis')) { echo 'class="active"'; } ?>>
                                                        <a href="<?php echo esc_url( home_url( '/redis' ) ); ?>" <?php if (is_page('redis')) { echo 'class="active"'; } ?>>
                                                            <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solutions/red.webp" alt="logo" loading="lazy"></div>Redis
                                                        </a>
                                                    </li>
                                                    <li <?php if (is_page('mongodb')) { echo 'class="active"'; } ?>>
                                                        <a href="<?php echo esc_url( home_url( '/mongodb' ) ); ?>" <?php if (is_page('mongodb')) { echo 'class="active"'; } ?>>
                                                            <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solutions/mon.webp" alt="logo" loading="lazy"></div>Mongo DB
                                                        </a>
                                                    </li>
                                                    <li <?php if (is_page('datastax')) { echo 'class="active"'; } ?>>
                                                        <a href="<?php echo esc_url( home_url( '/datastax' ) ); ?>" <?php if (is_page('datastax')) { echo 'class="active"'; } ?>>
                                                            <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solutions/data.webp" alt="logo" loading="lazy"></div>Datastax
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-md-4">
                                                <ul class="sub-menu">
                                                    <li <?php if (is_page('elastic')) { echo 'class="active"'; } ?>>
                                                        <a href="<?php echo esc_url( home_url( '/elastic' ) ); ?>" <?php if (is_page('elastic')) { echo 'class="active"'; } ?>>
                                                            <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solutions/ela.webp" alt="logo" loading="lazy"></div>Elastic
                                                        </a>
                                                    </li>
                                                    <li <?php if (is_page('hashicorp')) { echo 'class="active"'; } ?>>
                                                        <a href="<?php echo esc_url( home_url( '/hashicorp' ) ); ?>" <?php if (is_page('hashicorp')) { echo 'class="active"'; } ?>>
                                                            <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solutions/hash.webp" alt="logo" loading="lazy"></div>HashiCorp
                                                        </a>
                                                    </li>
                                                    <li <?php if (is_page('couchbase')) { echo 'class="active"'; } ?>>
                                                        <a href="<?php echo esc_url( home_url( '/couchbase' ) ); ?>" <?php if (is_page('couchbase')) { echo 'class="active"'; } ?>>
                                                            <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solutions/chbs.webp" alt="logo" loading="lazy"></div>Couchbase
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-md-4">
                                                <ul class="sub-menu">
                                                    <li <?php if (is_page('postgresql')) { echo 'class="active"'; } ?>>
                                                        <a href="<?php echo esc_url( home_url( '/postgresql' ) ); ?>" <?php if (is_page('postgresql')) { echo 'class="active"'; } ?>>
                                                            <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solutions/sql.webp" alt="logo" loading="lazy"></div>Postgre SQL
                                                        </a>
                                                    </li>
                                                    <li <?php if (is_page('github')) { echo 'class="active"'; } ?>>
                                                        <a href="<?php echo esc_url( home_url( '/github' ) ); ?>" <?php if (is_page('github')) { echo 'class="active"'; } ?>>
                                                            <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/solutions/git.webp" alt="logo" loading="lazy"></div>GitHub
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li <?php if (is_page('analytics')) { echo 'class="active"'; } ?>>
                                <a href="<?php echo esc_url( home_url( '/analytics' ) ); ?>" <?php if (is_page('analytics')) { echo 'class="active"'; } ?>>Analytics</a>
                            </li>
                            <li <?php if (is_page('hr-solutions')) { echo 'class="active"'; } ?>>
                                <a href="<?php echo esc_url( home_url( '/hr-solutions' ) ); ?>" <?php if (is_page('hr-solutions')) { echo 'class="active"'; } ?>>HR Solutions</a>
                            </li>
                            <li <?php if (is_home() || is_singular('post') || is_archive()) { echo 'class="active"'; } ?>>
                                <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>" <?php if (is_home() || is_singular('post') || is_archive()) { echo 'class="active"'; } ?>>Blogs</a>
                            </li>
                        </ul>
                        <?php
                    }
                    ?>

                    <a href="javascript:void(0)" class="hamburger menu-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>

                    <div class="fullscreen">
                        <div class="container">
                            <a href="javascript:void(0)" class="close"></a>
                        </div>
                        <div class="hamburger-content">
                            <div class="container">
                                <?php
                                // Mobile/Fullscreen Navigation Menu
                                // IMPORTANT: Remove the entire 'else' block below once you've set up your 'mobile-menu' in Appearance > Menus
                                if ( has_nav_menu( 'mobile-menu' ) ) {
                                    wp_nav_menu( array(
                                        'theme_location' => 'mobile-menu',
                                        'container'      => false,
                                        'menu_class'     => 'navbar-nav',
                                        'walker'         => new Your_Custom_Nav_Walker(), 
                                    ) );
                                } else {
                                    // This fallback hardcoded menu should be removed after menu setup
                                    ?>
                                    <ul class="navbar-nav">
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/our-clients' ) ); ?>">Our Clients</a></li>
                                        <li>
                                            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a>
                                            <a href="javascript:void(0)" class="main-trigger"><i class="fas fa-angle-down"></i><i class="fas fa-angle-up"></i></a>
                                            <div class="main-menu">
                                                <ul class="row">
                                                    <li class="col-md-auto">
                                                        <a href="<?php echo esc_url( home_url( '/consulting-services' ) ); ?>">Consulting</a>
                                                        <a href="<?php echo esc_url( home_url( '/technical-services' ) ); ?>">Technical</a>
                                                        <a href="<?php echo esc_url( home_url( '/migration-services' ) ); ?>">Migration</a>
                                                        <a href="<?php echo esc_url( home_url( '/training-services' ) ); ?>">Training</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url( home_url( '/technologies' ) ); ?>">Technologies</a>
                                            <a href="javascript:void(0)" class="main-trigger"><i class="fas fa-angle-down"></i><i class="fas fa-angle-up"></i></a>
                                            <div class="main-menu">
                                                <ul class="row">
                                                    <li class="col-md-auto">
                                                        <a href="<?php echo esc_url( home_url( '/mongodb' ) ); ?>">Mongo DB</a>
                                                        <a href="<?php echo esc_url( home_url( '/redis' ) ); ?>">Redis</a>
                                                        <a href="<?php echo esc_url( home_url( '/datastax' ) ); ?>">Datastax</a>
                                                        <a href="<?php echo esc_url( home_url( '/hashicorp' ) ); ?>">HashiCorp</a>
                                                        <a href="<?php echo esc_url( home_url( '/elastic' ) ); ?>">Elastic</a>
                                                        <a href="<?php echo esc_url( home_url( '/postgresql' ) ); ?>">Postgre SQL</a>
                                                        <a href="<?php echo esc_url( home_url( '/couchbase' ) ); ?>">Couchbase</a>
                                                        <a href="<?php echo esc_url( home_url( '/github' ) ); ?>">GitHub</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="<?php echo esc_url( home_url( '/analytics' ) ); ?>">Analytics</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/hr-solutions' ) ); ?>">HR Solutions</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blogs</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button">Get In Touch</a></li>
                                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/profile/DataX-Profile-V3.pdf" class="button" target="_blank">Download Brochure</a></li>
                                    </ul>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto pl-0 d-lg-inline-block">
                    <div class="qr-button">
                        <?php
                        $qr_code_img = get_field('qr_code_image', $global_settings_page_id);
                        if ( $qr_code_img ) : ?>
                            <img src="<?php echo esc_url( $qr_code_img ); ?>" alt="whatsapp" width="60" height="60" loading="lazy">
                        <?php else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/qrcode.png" alt="whatsapp" width="60" height="60" loading="lazy">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="smooth-scroll">
    <div class="body-x" data-scroll data-scroll-speed="-4" data-scroll-direction="horizontal">
        <?php
        $body_x_img = get_field('body_background_x_image', $global_settings_page_id);
        if ( $body_x_img ) : ?>
            <img src="<?php echo esc_url( $body_x_img ); ?>" alt="body x" width="576" height="463" loading="lazy">
        <?php else : ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/body-x.webp" alt="body x" width="576" height="463" loading="lazy">
        <?php endif; ?>
    </div>
