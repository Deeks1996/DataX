<?php
/**
 * Tequila-Project-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tequila-Project-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tequila_project_theme_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Tequila-Project-theme, use a find and replace
     * to change 'tequila-project-theme' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'tequila-project-theme', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
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
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'tequila_project_theme_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 64, // Updated height
            'width'       => 161, // Updated width
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'tequila_project_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tequila_project_theme_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'tequila_project_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'tequila_project_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tequila_project_theme_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'tequila-project-theme' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'tequila-project-theme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'tequila_project_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tequila_project_theme_scripts() {
    // Keep your original theme style enqueue
    wp_enqueue_style( 'tequila-project-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'tequila-project-theme-style', 'rtl', 'replace' );

    // Google Fonts
    wp_enqueue_style( 'google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap', array(), null );
    wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );

    // Font Awesome (using defer for performance, ensure it's loaded before scripts that use it)
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/1346718fb0.js', array(), null, true );

    // Theme CSS files
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.0' ); // Specify version
    wp_enqueue_style( 'locomotive-scroll', get_template_directory_uri() . '/css/locomotive-scroll.min.css', array(), '4.1.4' ); // Specify version
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '8.4.5' ); // Specify version
    wp_enqueue_style( 'tequila-project-custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' ); // Custom name to avoid conflict
    wp_enqueue_style( 'tequila-project-device', get_template_directory_uri() . '/css/device.css', array(), '1.0.0' ); // Specify version

    // Theme JS files
    // jQuery is often registered by WordPress core, but if your jquery.min.js is custom, enqueue it.
    // Ensure the theme's jquery.min.js doesn't conflict with WordPress's built-in jQuery.
    // If you plan to use WordPress's default jQuery, you can remove the jquery.min.js enqueue line.
    wp_enqueue_script( 'jquery-custom', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.7.0', true ); // Using 'jquery-custom' handle
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery-custom'), '5.3.0', true );
    wp_enqueue_script( 'tilt-jquery', get_template_directory_uri() . '/js/tilt.jquery.js', array('jquery-custom'), '1.2.1', true );
    wp_enqueue_script( 'locomotive-scroll-js', get_template_directory_uri() . '/js/locomotive-scroll.min.js', array(), '4.1.4', true );
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/js/gsap.min.js', array(), '3.11.5', true );
    wp_enqueue_script( 'scrolltrigger', get_template_directory_uri() . '/js/ScrollTrigger.min.js', array('gsap'), '3.11.5', true );
    wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', array('gsap'), '2.1.2', true ); // Note: TweenMax is part of GSAP v2, GSAP 3 typically uses its own modules. Double-check if you need both.
    wp_enqueue_script( 'swiper-bundle-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '8.4.5', true );
    wp_enqueue_script( 'tequila-project-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery-custom', 'gsap', 'scrolltrigger', 'swiper-bundle-js'), '1.0.0', true ); // Added dependencies

    // Original navigation script
    wp_enqueue_script( 'tequila-project-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'tequila_project_theme_scripts' );

/**
 * Custom Walker for Mega Menu (Example - you will need to implement this if the default menu walker doesn't suffice)
 * This is a more advanced topic and requires understanding of WordPress Menu Walkers.
 * For a simple mega menu, you might achieve it purely with CSS and the default Walker.
 * If your mega menu has very specific HTML structure within each item, a custom walker is needed.
 *
 * Uncomment and define this class if you choose to use it.
 */
/*
class Custom_Mega_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        // For the mega menu, the first level submenu might need the 'container' and 'row'
        if ( $depth === 0 ) { // If it's the immediate child of a top-level item
            $output .= "\n$indent<div class=\"mega-menu\"><div class=\"container\"><ul class=\"row\">";
        } else {
            $output .= "\n$indent<ul class=\"sub-menu\">";
        }
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        if ( $depth === 0 ) {
            $output .= "$indent</ul></div></div>\n";
        } else {
            $output .= "$indent</ul>\n";
        }
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        // You would customize how each menu item (<li> and <a>) is rendered here
        // based on depth and item properties.
        // Example: adding specific classes for mega menu columns or image boxes.
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $classes[] = ( $depth === 1 && $item->menu_item_parent == 0 ) ? 'col-md-4' : ''; // Example for mega menu columns

        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';

        // Add image box for specific mega menu items
        if ( $depth === 2 && strpos( $item->title, 'Redis' ) !== false ) { // Example condition
             $item_output .= '<div class="img-box"><img src="' . esc_url( get_template_directory_uri() ) . '/images/solutions/red.webp" alt="logo" width="70" height="70" loading="lazy"></div>';
        }
        // Add more conditions for other images

        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    // You might also need to override end_el
}
*/


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}