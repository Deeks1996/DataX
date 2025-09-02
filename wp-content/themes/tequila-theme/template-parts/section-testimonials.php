<?php
/**
 * Template part for displaying the testimonials section.
 *
 * @package TequilaTheme
 */
?>
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>What Our Clients Say</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="swiper slider">
                    <div class="swiper-wrapper">

                        <?php
                        // The Query to fetch testimonials
                        $args = array(
                            'post_type'      => 'testimonial', // Your custom post type slug
                            'posts_per_page' => -1,             // Display all testimonials
                            'order'          => 'DESC',         // Order by latest first
                            'orderby'        => 'date',
                        );

                        $testimonials_query = new WP_Query( $args );

                        // The Loop
                        if ( $testimonials_query->have_posts() ) :
                            while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                                // Get custom field values
                                $company_logo      = get_field( 'company_logo' );       // This returns an array if 'Return Format' is Array
                                $company_name      = get_field( 'company_name' );
                                $testimonial_text  = get_field( 'testimonial_text' );  // <--- NEW: Get the testimonial text from ACF

                                // If you named your field 'testimonial_content', use this instead:
                                // $testimonial_text = get_field( 'testimonial_content' );
                        ?>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <?php if ( $company_logo ) : ?>
                                            <div class="card-img">
                                                <img src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ? $company_logo['alt'] : $company_name ); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="card-body">
                                            <p><?php
                                                // Display the testimonial text from your ACF field
                                                echo wp_kses_post( $testimonial_text ); // Using wp_kses_post for safe HTML output
                                            ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="media">
                                                <div class="media-body">
                                                    <?php if ( $company_name ) : ?>
                                                        <h4>- <?php echo esc_html( $company_name ); ?></h4>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata(); // Restore original Post Data
                        else :
                            // No testimonials found
                            echo '<div class="swiper-slide"><div class="card"><p>No testimonials to display yet.</p></div></div>';
                        endif;
                        ?>

                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-next custom"></div>
                <div class="swiper-button-prev custom"></div>
            </div>
        </div>
    </div>
</section>