<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tequila-Project-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <meta name="title" content="dataX Solution">
    <meta name="description" content="Providing data solutions, the open source way · Amp up your digital goals, with the power of multi cloud · Get future ready with open source solutions & services.">

    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" type="image/gif" sizes="32x32">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" crossorigin>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" crossorigin>

    </head>

<body <?php body_class( 'home' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tequila-project-theme' ); ?></a>

    <div class="cursor"></div>
    <div class="loader">
        <div class="loader__bckg"></div>
        <div class="loader__logo">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lg-outline.webp" alt="Loader Logo" class="loader-logo" width="80" height="80" loading="lazy">
            <span></span>
        </div>
    </div>
    <header class="header">
        <nav>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-6 col-md-auto">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-white.webp" alt="Logo White" width="161" height="64" loading="lazy">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.webp" alt="Logo" width="120" height="48" loading="lazy">
                        </a>
                    </div>
                    <div class="col-auto col-md-auto text-right ml-auto">
                        <ul class="menu top">
                            <li><a href="tel:+97165211720" class="icon"><i class="fas fa-phone-alt"></i></a></li>
                            <li><a href="mailto:contact@dataxsolution.net" class="icon"><i class="fas fa-envelope"></i></a></li>
                            <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="button">Get In Touch</a></li>
                        </ul>
                        <?php
                        // Primary Navigation Menu
                        wp_nav_menu( array(
                            'theme_location' => 'primary', // Register this in functions.php
                            'container'      => false,
                            'menu_class'     => 'menu',
                            'depth'          => 2, // Adjust depth as needed for dropdowns
                            'fallback_cb'    => false,
                        ) );
                        ?>
                        <?php
                        // Mega Menu Navigation (You might need a custom walker for complex mega menus)
                        // For simplicity, I'm showing a basic structure. If it's very custom, you might need to build it out more.
                        wp_nav_menu( array(
                            'theme_location' => 'technologies-mega-menu', // Register this in functions.php
                            'container'      => 'div',
                            'container_class' => 'mega-menu',
                            'menu_class'     => 'row justify-content-between',
                            'depth'          => 3, // Adjust depth for sub-sub-menus
                            'fallback_cb'    => false,
                            'walker'         => new Custom_Mega_Menu_Walker(), // You would define this class
                        ) );
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
                                    // Fullscreen/Mobile Navigation Menu
                                    wp_nav_menu( array(
                                        'theme_location' => 'mobile', // Register this in functions.php
                                        'container'      => false,
                                        'menu_class'     => 'navbar-nav',
                                        'depth'          => 3,
                                        'fallback_cb'    => false,
                                    ) );
                                    ?>
                                    <ul class="navbar-nav">
                                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="button">Get In Touch</a></li>
                                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/profile/DataX-Profile-V3.pdf" class="button" target="_blank">Download Brochure</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto pl-0 d-lg-inline-block">
                        <div class="qr-button">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/qrcode.png" alt="whatsapp" width="60" height="60" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>```

---

### **Add to your `functions.php` file**

You'll need to create or modify your `functions.php` file in your theme's root directory.

```php
<?php
/**
 * Tequila-Project-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tequila-Project-theme
 */

if ( ! function_exists( 'tequila_project_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tequila_project_theme_setup() {
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and instead lets WordPress
         * manage it.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/basics/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus.
        register_nav_menus( array(
            'primary'                => esc_html__( 'Primary Menu', 'tequila-project-theme' ),
            'technologies-mega-menu' => esc_html__( 'Technologies Mega Menu', 'tequila-project-theme' ),
            'mobile'                 => esc_html__( 'Mobile Menu (Fullscreen)', 'tequila-project-theme' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ) );

        // Add support for core custom logo.
        add_theme_support( 'custom-logo', array(
            'height'      => 64,
            'width'       => 161,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'tequila_project_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function tequila_project_theme_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap', array(), null );
    wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );

    // Font Awesome
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/1346718fb0.js', array(), null, true ); // Load in footer

    // Theme CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.0' ); // Example version
    wp_enqueue_style( 'locomotive-scroll', get_template_directory_uri() . '/css/locomotive-scroll.min.css', array(), '4.1.4' );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '8.4.5' );
    wp_enqueue_style( 'tequila-project-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'tequila-project-device', get_template_directory_uri() . '/css/device.css', array(), '1.0.0' );

    // Theme JS
    // jQuery is often registered by WordPress core, so we just declare it as a dependency
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.7.0', true ); // Load in footer
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.3.0', true );
    wp_enqueue_script( 'tilt-jquery', get_template_directory_uri() . '/js/tilt.jquery.js', array('jquery'), '1.2.1', true );
    wp_enqueue_script( 'locomotive-scroll', get_template_directory_uri() . '/js/locomotive-scroll.min.js', array(), '4.1.4', true );
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/js/gsap.min.js', array(), '3.11.5', true );
    wp_enqueue_script( 'scrolltrigger', get_template_directory_uri() . '/js/ScrollTrigger.min.js', array('gsap'), '3.11.5', true );
    wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', array('gsap'), '2.1.2', true );
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '8.4.5', true );
    wp_enqueue_script( 'tequila-project-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true ); 

}
add_action( 'wp_enqueue_scripts', 'tequila_project_theme_scripts' );

 * Custom Walker for Mega Menu 

class Custom_Mega_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class=\"container\"><ul class=\"row\">";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }

}