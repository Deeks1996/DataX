<?php
/*
Template Name: Technologies Page Template
Description: Custom template for the Technologies page.
*/
get_header();

// --- Retrieve ACF Field Values (Banner Section) ---
$banner_video_file         = get_field( 'technologies_banner_video_mp4' ); // File array from File field type
$banner_x_image            = get_field( 'technologies_banner_x_image' );    // Image Array from Image field type
$page_title_override       = get_field( 'technologies_page_title_override' );

// Prepare Video URL from File field array
$banner_video_mp4_url = $banner_video_file['url'] ?? '';

// Prepare Image URLs and Alt Texts for Banner from Image field array
$banner_x_image_url = $banner_x_image['url'] ?? '';
$banner_x_image_alt = $banner_x_image['alt'] ?? 'Decorative X image';

// Determine the page title to display
$display_page_title = $page_title_override ? esc_html($page_title_override) : 'Solutions'; // Default to "Solutions"
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $banner_video_mp4_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $banner_video_mp4_url ); ?>" type="video/mp4" autoplay="true">
                </video>
            <?php else : ?>
                <?php
                // Fallback to default theme video if no ACF video is set
                $default_banner_video = get_template_directory_uri() . '/assets/images/video/banner.mp4';
                ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $default_banner_video ); ?>" type="video/mp4" autoplay="true">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $banner_x_image_url ) : ?>
                <img src="<?php echo esc_url( $banner_x_image_url ); ?>" alt="<?php echo esc_attr( $banner_x_image_alt ); ?>">
            <?php else : ?>
                <?php
                // Fallback to default theme X image if no ACF image is set
                $default_x_image = get_template_directory_uri() . '/assets/images/in-banner/x.webp';
                ?>
                <img src="<?php echo esc_url( $default_x_image ); ?>" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php echo $display_page_title; ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $display_page_title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="solutions">
        <?php
        /**
         * Helper function to render a single technology block.
         * Retrieves ACF fields based on a given prefix and outputs the HTML.
         *
         * @param string $prefix The unique prefix for the technology's ACF fields (e.g., 'redis').
         * @param bool   $default_reverse The default layout direction if the ACF field is not set.
         */
        function render_technology_block( $prefix, $default_reverse = false ) {
            // Check if the section is enabled via ACF field
            $enable_section = get_field( $prefix . '_enable_section' );
            if ( !$enable_section ) {
                return; // Skip rendering this block if not enabled
            }

            // Retrieve all ACF fields for the current technology block
            $layout_reverse  = get_field( $prefix . '_layout_reverse' );
            $heading         = get_field( $prefix . '_heading' );
            $link_url        = get_field( $prefix . '_link_url' ); // This is a Text field
            $description     = get_field( $prefix . '_description' );
            $button_text     = get_field( $prefix . '_button_text' );
            $bg_image        = get_field( $prefix . '_bg_image' ); // Image Array
            $icon_image      = get_field( $prefix . '_icon_image' ); // Image Array

            
            $row_class = ( $layout_reverse ?? $default_reverse ) ? ' flex-md-row-reverse' : ''; // Used on the .row div
            $block_class = ( $layout_reverse ?? $default_reverse ) ? ' reverse' : ''; // Used on the .solution-block div

            $default_base_path = get_template_directory_uri() . '/assets/images/in-solution/';
            $sanitized_prefix = str_replace('_', '-', $prefix); // Replace underscores with hyphens for file names

            // Specific fallbacks for images that don't follow the direct prefix-to-name mapping
            $default_bg_path = $default_base_path . $sanitized_prefix . '-bg.webp';
            $default_icon_path = $default_base_path . $sanitized_prefix . '.webp';

            if ($prefix === 'couchbase') {
                 $default_bg_path = $default_base_path . 'apache-bg.webp'; // Special case for Couchbase background
            } elseif ($prefix === 'postgresql') {
                 $default_bg_path = $default_base_path . 'sql-bg.webp';   // Special case for PostgreSQL background
                 $default_icon_path = $default_base_path . 'sql.webp';    // Special case for PostgreSQL icon
            } elseif ($prefix === 'github') {
                $default_bg_path = $default_base_path . 'git-bg.webp';    // Special case for GitHub background
                $default_icon_path = $default_base_path . 'git.webp';     // Special case for GitHub icon
            }

            // Get image URLs and alt texts from ACF, or use fallbacks
            $bg_image_url = $bg_image['url'] ?? $default_bg_path;
            $bg_image_alt = $bg_image['alt'] ?? (ucfirst(str_replace('_', ' ', $prefix)) . ' Background Image');

            $icon_image_url = $icon_image['url'] ?? $default_icon_path;
            $icon_image_alt = $icon_image['alt'] ?? (ucfirst(str_replace('_', ' ', $prefix)) . ' Icon');

            // Construct the full URL for internal links using home_url()
            
            $full_link_url = $link_url ? esc_url( home_url( $link_url ) ) : '#';
        ?>
            <div class="solution-block<?php echo esc_attr( $block_class ); ?>">
                <div class="container-fluid">
                    <div class="row<?php echo esc_attr( $row_class ); ?>">
                        <div class="col-lg-5 col-xl-4">
                            <div class="content-box" data-scroll data-scroll-speed="-1">
                                <?php if ( $heading ) : ?>
                                    <h3>
                                        <?php if ( $link_url ) : // Link the heading if a URL is provided ?>
                                            <a href="<?php echo $full_link_url; ?>"><?php echo esc_html( $heading ); ?></a>
                                        <?php else : ?>
                                            <?php echo esc_html( $heading ); ?>
                                        <?php endif; ?>
                                    </h3>
                                <?php endif; ?>

                                <?php if ( $description ) : ?>
                                    <p><?php echo esc_html( $description ); ?></p>
                                <?php endif; ?>

                                <?php if ( $button_text && $link_url ) : // Only show button if text and URL are present ?>
                                    <a href="<?php echo $full_link_url; ?>" class="button anim">
                                        <div class="img-box circle">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                                        </div>
                                        <div class="img-box arrow">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Arrow">
                                        </div>
                                        <span><?php echo esc_html( $button_text ); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8 px-lg-4 px-xl-5">
                            <?php if ( $link_url ) :  ?>
                                <a href="<?php echo $full_link_url; ?>" class="icon-bg">
                            <?php else : ?>
                                <div class="icon-bg">
                            <?php endif; ?>
                                <span data-scroll data-scroll-speed="2"></span>
                                <img src="<?php echo esc_url( $bg_image_url ); ?>" alt="<?php echo esc_attr( $bg_image_alt ); ?>">
                                <div class="icon">
                                    <img src="<?php echo esc_url( $icon_image_url ); ?>" alt="<?php echo esc_attr( $icon_image_alt ); ?>">
                                </div>
                            <?php if ( $link_url ) : ?>
                                </a>
                            <?php else : ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } // End of render_technology_block function

        render_technology_block( 'redis', true );        // Default to reverse layout (text on left)
        render_technology_block( 'mongodb', false );     // Default to standard layout (text on right)
        render_technology_block( 'datastax', true );     // Default to reverse layout
        render_technology_block( 'elastic', false );     // Default to standard layout
        render_technology_block( 'hashicorp', true );    // Default to reverse layout
        render_technology_block( 'couchbase', false );   // Default to standard layout
        render_technology_block( 'postgresql', true );   // Default to reverse layout
        render_technology_block( 'github', false );      // Default to standard layout

        ?>
    </section>
</div>

<?php get_footer(); ?>