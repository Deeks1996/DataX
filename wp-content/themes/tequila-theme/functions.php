<?php

// Theme setup
function datax_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menus([
        'primary' => __('Primary Menu', 'datax'),
        'mobile'  => __('Mobile Menu', 'datax'),
    ]);
}
add_action('after_setup_theme', 'datax_theme_setup');

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}

/**
 * Enqueue Google Fonts (Poppins and Inter).
 */
function datax_enqueue_google_fonts() {
    // Enqueue Poppins font
    wp_enqueue_style(
        'google-font-poppins',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap',
        array(), // No dependencies
        null     // Use null for version as Google Fonts URLs handle caching
    );

    // Enqueue Inter font
    wp_enqueue_style(
        'google-font-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(), // No dependencies
        null
    );
}
// Hook Google Fonts enqueue to wp_enqueue_scripts with a higher priority (optional, but ensures they load early)
add_action( 'wp_enqueue_scripts', 'datax_enqueue_google_fonts', 5 );


/**
 * Add preconnect and preload for Google Fonts for performance.
 */
function datax_add_google_fonts_preload() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    // Preload the actual CSS files, not the font files directly, as Google Fonts CSS handles woff2 internally.
    echo '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap">';
    echo '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">';
}
// Hook the preload function to wp_head
add_action( 'wp_head', 'datax_add_google_fonts_preload' );

function datax_enqueue_font_awesome_kit() {
    // https://kit.fontawesome.com/1346718fb0.js is the URL to your Font Awesome kit
    
    wp_register_script(
        'datax-fontawesome',
        'https://kit.fontawesome.com/1346718fb0.js',
        [],
        null,
        true // Load in footer for better performance with defer
    );

    // Add 'defer' attribute to the script tag
    add_filter( 'script_loader_tag', 'datax_add_defer_attribute', 10, 2 );

    // Enqueue the script to be loaded on the front end
    wp_enqueue_script( 'datax-fontawesome' );
}
add_action( 'wp_enqueue_scripts', 'datax_enqueue_font_awesome_kit' );


/**
 * Adds the 'defer' attribute to specific script tags.
 * This function is hooked into 'script_loader_tag' to modify the script output.
 *
 * @param string $tag    The <script> tag for the enqueued script.
 * @param string $handle The script's handle.
 * @return string The modified script tag.
 */
function datax_add_defer_attribute( $tag, $handle ) {
    // Only add defer to our Font Awesome script
    if ( 'datax-fontawesome' === $handle ) {
        // Check if defer attribute is already present to avoid duplication
        if ( false === strpos( $tag, ' defer' ) ) {
            $tag = str_replace( '<script ', '<script defer ', $tag );
        }
        // Also ensure crossorigin is present if not already added by wp_register_script
        if ( false === strpos( $tag, ' crossorigin' ) ) {
            $tag = str_replace( '<script defer ', '<script defer crossorigin="anonymous" ', $tag );
        }
    }
    return $tag;
}

// Enqueue other theme styles and scripts
function datax_enqueue_assets() {
    $theme_uri = get_template_directory_uri();

    // CSS
    // Note: Google Fonts are enqueued in datax_enqueue_google_fonts()
    wp_enqueue_style('bootstrap', $theme_uri . '/assets/css/bootstrap.min.css', array(), '4.5.2');
    wp_enqueue_style('swiper', $theme_uri . '/assets/css/swiper-bundle.min.css', array('bootstrap'), '1.0.0');
    wp_enqueue_style('locomotive', $theme_uri . '/assets/css/locomotive-scroll.min.css', array('bootstrap'), '1.0.0'); // Re-enabled
    wp_enqueue_style('main-style', $theme_uri . '/assets/css/style.css', array('bootstrap'), '1.0.0');
    wp_enqueue_style('device-style', $theme_uri . '/assets/css/device.css', array('main-style'), '1.0.0');

    // JavaScript
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', $theme_uri . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('tilt', $theme_uri . '/assets/js/tilt.jquery.js', array('jquery'), null, true);
    wp_enqueue_script('locomotive', $theme_uri . '/assets/js/locomotive-scroll.min.js', array(), null, true); // Re-enabled
    wp_enqueue_script('gsap', $theme_uri . '/assets/js/gsap.min.js', array(), null, true); // Re-enabled
    wp_enqueue_script('scrolltrigger', $theme_uri . '/assets/js/ScrollTrigger.min.js', array('gsap'), null, true); // Re-enabled with GSAP dependency
    wp_enqueue_script('tweenmax', $theme_uri . '/assets/js/TweenMax.min.js', array(), null, true);
    wp_enqueue_script('swiper', $theme_uri . '/assets/js/swiper-bundle.min.js', array(), null, true);
    // custom.js should depend on locomotive, gsap, and scrolltrigger if it uses them
    wp_enqueue_script('custom', $theme_uri . '/assets/js/custom.js', array('jquery', 'locomotive', 'gsap', 'scrolltrigger'), null, true);

    //custom contact-form.js script
    wp_enqueue_script(
        'my-contact-form-script',
        $theme_uri . '/assets/js/forms/contact-form.js',
        array('jquery'),
        '1.0',
        true
    );
    // Enqueue the enrollment form JavaScript
    wp_enqueue_script(
        'my-enrollment-form-script',
        get_template_directory_uri() . '/assets/js/forms/enrolment-form.js',
        array('jquery'),
        '1.0',
        true
    );
}
// This action hook will now enqueue your other assets.
// The Google Fonts are enqueued by the 'datax_enqueue_google_fonts' function.
add_action('wp_enqueue_scripts', 'datax_enqueue_assets');


function add_file_types_to_uploads( $file_types ) {
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge( $file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes','add_file_types_to_uploads');

function custom_case_study_old_permalink_redirect() {
    // Only run on the front-end for single 'case-study' posts that are not attachments
    if ( is_singular( 'case-study' ) && ! is_admin() && ! is_attachment() ) {
        global $post;

        $old_permalink_structure = trailingslashit( home_url( '/case-study/' ) ) . trailingslashit( $post->post_name );

        $new_permalink = trailingslashit( get_permalink( $post->ID ) );

        // Get the URL that the user actually requested
        $requested_url = trailingslashit( home_url( $_SERVER['REQUEST_URI'] ) );

        if ( $requested_url === $old_permalink_structure && $requested_url !== $new_permalink ) {
            wp_redirect( $new_permalink, 301 ); // 301 is a permanent redirect
            exit();
        }
    }
}
add_action( 'template_redirect', 'custom_case_study_old_permalink_redirect' );

add_filter( 'wp_mail_smtp_phpmailer_smtp_options', function( $smtp_options ) {
    $smtp_options['ssl']['verify_peer'] = false;
    $smtp_options['ssl']['verify_peer_name'] = false;
    $smtp_options['ssl']['allow_self_signed'] = true; // May not be strictly needed, but good for local
    error_log( 'WP Mail SMTP: Forced SSL verification bypass via filter.' ); // For debugging confirmation
    return $smtp_options;
});
