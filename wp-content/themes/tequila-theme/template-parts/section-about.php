<?php
/**
 * Template part for displaying the about section (with slider).
 *
 * @package TequilaTheme
 */
?>
<section class="about-us">
    <div class="bg-left" data-scroll data-scroll-speed="-4">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-pattern.webp" alt="About pattern" width="730" height="1588">
    </div>
    <div class="bg-right">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-bg.png" alt="About bg" width="1944" height="528" loading="lazy">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>About DataX Solution</h2> </div>
            </div>
            <div class="col-md-11 offset-md-1 offset-xl-0 col-xl-12">
                <div class="swiper slider">
                    <div class="swiper-wrapper">
                        <?php
                        // WordPress Query to fetch all 'about_slide' custom post types
                        $args = array(
                            'post_type'      => 'about_slide',     
                            'posts_per_page' => -1,                
                            'orderby'        => 'menu_order',      
                            'order'          => 'ASC',             
                            'post_status'    => 'publish'          
                        );
                        $about_slides_query = new WP_Query( $args );

                        // Check if there are any about slide posts
                        if ( $about_slides_query->have_posts() ) :
                            while ( $about_slides_query->have_posts() ) : $about_slides_query->the_post(); // The WordPress Loop
                                // Get ACF fields for the current about slide post
                                $slide_image    = get_field( 'slide_image' ); // Gets the image array
                                $slide_headline = get_field( 'slide_headline' ); // Gets the headline text
                                ?>
                                <div class="swiper-slide">
                                    <div class="slider-img">
                                        <?php
                                        // Display the slide image if it exists
                                        if ( $slide_image ) {
                                            // wp_get_attachment_image outputs the full <img> tag
                                            // $slide_image['id'] is the attachment ID from ACF Image Array
                                            echo wp_get_attachment_image( $slide_image['id'], 'full', false, array( 'width' => 296, 'height' => 328, 'loading' => 'lazy' ) );
                                        } else {
                                            // Optional: Fallback image if no image is set in admin
                                            ?>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="Placeholder Image" width="296" height="328" loading="lazy">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="content-box">
                                        <h3><?php echo esc_html( $slide_headline ); ?></h3>
                                    </div>
                                </div>
                                <?php
                            endwhile;

                            // Restore original post data to prevent conflicts with other queries
                            wp_reset_postdata();
                        else :
                            // Message to display if no slides are found
                            ?>
                            <p>No About Slides found. Please add slides via the WordPress admin panel.</p>
                            <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next custom"></div>
    <div class="swiper-button-prev custom"></div>
</section>