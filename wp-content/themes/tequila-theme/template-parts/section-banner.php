<?php
/**
 * Template part for displaying the banner section (with slider).
 *
 * @package TequilaTheme
 */
?>
<section class="banner">
    <div class="swiper slider">
        <div class="swiper-wrapper">
            <?php
            // WordPress Query to fetch all 'banner_slide' custom post types
            $args = array(
                'post_type'      => 'banner_slide',     // The slug of our Custom Post Type
                'posts_per_page' => -1,                 // Get all posts of this type (-1 means all)
                'orderby'        => 'menu_order',       // Order them by the order set in admin, or by 'date', 'title'
                'order'          => 'ASC',              // Ascending order
                'post_status'    => 'publish'           // Only retrieve published posts
            );
            $banner_slides_query = new WP_Query( $args );

            // --- DEBUGGING START (BANNER SECTION) ---
            echo '<!-- BANNER SECTION DEBUGGING START -->';
            echo '<!-- Number of banner_slide posts found: ' . $banner_slides_query->post_count . ' -->';
            // --- DEBUGGING END (BANNER SECTION) ---

            // Check if there are any banner slide posts
            if ( $banner_slides_query->have_posts() ) :
                while ( $banner_slides_query->have_posts() ) : $banner_slides_query->the_post(); // The WordPress Loop
                    // Get ACF fields for the current banner slide post
                    $slide_headline     = get_field( 'slide_headline' );
                    $button_text        = get_field( 'button_text' );
                    $button_url         = get_field( 'button_url' );
                    $banner_main_image  = get_field( 'banner_main_image' ); // This should be an Image Array
                    $animated_image_1   = get_field( 'animated_image_1' ); // This should be an Image Array
                    $animated_image_2   = get_field( 'animated_image_2' ); // This should be an Image Array

                    // --- DEBUGGING PER SLIDE ---
                    echo '<!-- SLIDE ID: ' . get_the_ID() . ' -->';
                    echo '<!-- Debug: slide_headline = '; var_dump($slide_headline); echo ' -->';
                    echo '<!-- Debug: button_url = '; var_dump($button_url); echo ' -->';
                    echo '<!-- Debug: banner_main_image = '; var_dump($banner_main_image); echo ' -->';
                    echo '<!-- Debug: animated_image_1 = '; var_dump($animated_image_1); echo ' -->';
                    echo '<!-- Debug: animated_image_2 = '; var_dump($animated_image_2); echo ' -->';
                    // --- END DEBUGGING PER SLIDE ---
                    ?>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="content-box">
                                <?php if ( $slide_headline ) : ?>
                                    <h2 data-swiper-parallax="-300"><?php echo esc_html( $slide_headline ); ?></h2>
                                <?php endif; ?>
                                <?php if ( $button_url && $button_text ) : ?>
                                    <a data-swiper-parallax="-200" href="<?php echo esc_url( $button_url ); ?>" class="button anim">
                                        <div class="img-box circle">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                        </div>
                                        <div class="img-box arrow">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Arrow" width="60" height="64" loading="lazy">
                                        </div>
                                        <span><?php echo esc_html( $button_text ); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="banner-img">
                            <?php if ( $animated_image_1 && is_array($animated_image_1) ) : // Check if it's an array for image field ?>
                                <div class="img-1">
                                    <?php echo wp_get_attachment_image( $animated_image_1['id'], 'full', false, array( 'width' => 446, 'height' => 395, 'loading' => 'lazy' ) ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ( $animated_image_2 && is_array($animated_image_2) ) : // Check if it's an array for image field ?>
                                <div class="img-2" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
                                    <?php echo wp_get_attachment_image( $animated_image_2['id'], 'full', false, array( 'width' => 271, 'height' => 143, 'loading' => 'lazy' ) ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ( $banner_main_image && is_array($banner_main_image) ) : // Check if it's an array for image field ?>
                                <?php echo wp_get_attachment_image( $banner_main_image['id'], 'full', false, array( 'width' => 720, 'height' => 508, 'loading' => 'lazy' ) ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endwhile;

                // Restore original post data to prevent conflicts with other queries
                wp_reset_postdata();
            else :
                // Message to display if no slides are found
                ?>
                <p>No Banner Slides found. Please add slides via the WordPress admin panel.</p>
                <?php
            endif;
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="mobile-x">
        <div class="img-box">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-x.webp" alt="banner x" data-scroll data-scroll-speed="-2" data-scroll-direction="horizontal" loading="lazy">
        </div>
    </div>

    <div class="x" data-scroll data-scroll-speed="-2" data-scroll-direction="horizontal">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 790.218 874.794">
            <clipPath id="mask">
                <path id="Path_9222" data-name="Path 9222" d="M216.81-49.455,393.221,248.693h6.834L577.32-49.455H786.195l-266.966,437.4,272.946,437.4H579.456l-179.4-298.574h-6.834L213.82,825.339H1.956l273.8-437.4L7.082-49.455Z" transform="translate(-1.956 49.455)" />
            </clipPath>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 790.218 874.794">
            <foreignObject clip-path="url(#mask)" width="100%" height="100%">
                <video loop muted autoplay>
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/video/video.mp4" type="video/mp4">
                </video>
            </foreignObject>
        </svg>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
