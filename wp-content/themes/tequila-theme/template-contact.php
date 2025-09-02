<?php
/**
 * Template Name: Contact Page Template
 */
get_header(); 

// --- Retrieve ACF Field Values for Contact Page ---

// In-Banner Section
$contact_banner_video_file = get_field( 'contact_banner_video_mp4' ); // File array
$contact_banner_x_image    = get_field( 'contact_banner_x_image' );    // Image array

// Main Contact Section (Left Column)
$contact_main_heading      = get_field( 'contact_main_heading' );
$contact_address           = get_field( 'contact_address' );
$contact_phone_number      = get_field( 'contact_phone_number' );
$contact_phone_link        = get_field( 'contact_phone_link' );
$contact_email_address     = get_field( 'contact_email_address' );
$contact_email_link        = get_field( 'contact_email_link' );
$contact_map_icon          = get_field( 'contact_map_icon' );          // Image array
$contact_map_link_text     = get_field( 'contact_map_link_text' );
$contact_map_link_url      = get_field( 'contact_map_link_url' );

// Contact Form Section (Right Column)
$contact_form_heading      = get_field( 'contact_form_heading' );
$contact_form_description  = get_field( 'contact_form_description' );
$contact_form_shortcode    = get_field( 'contact_form_shortcode' );


// --- Prepare URLs and Alt Texts from ACF values with fallbacks ---

// Banner Video URL
$banner_video_mp4_url = $contact_banner_video_file['url'] ?? '';

// Banner X Image URL and Alt
$banner_x_image_url = $contact_banner_x_image['url'] ?? '';
$banner_x_image_alt = $contact_banner_x_image['alt'] ?? 'Decorative X image';

// Map Icon URL and Alt
$map_icon_url = $contact_map_icon['url'] ?? '';
$map_icon_alt = $contact_map_icon['alt'] ?? 'Map marker icon';

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
                <?php // Fallback to default theme video if no ACF video is set ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/video/banner.mp4" type="video/mp4" autoplay="true">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $banner_x_image_url ) : ?>
                <img src="<?php echo esc_url( $banner_x_image_url ); ?>" alt="<?php echo esc_attr( $banner_x_image_alt ); ?>">
            <?php else : ?>
                <?php // Fallback to default theme X image if no ACF image is set ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-banner/x.webp" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-md-5">
                    <div class="section-title mb-3">
                        <?php if ( $contact_main_heading ) : ?>
                            <h2><?php echo esc_html( $contact_main_heading ); ?></h2>
                        <?php else : ?>
                            <h2>DataX Solution</h2>
                        <?php endif; ?>
                    </div>
                    <?php
                    // Standard WordPress content from the editor
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    else :
                        echo '<p>No content found for this page.</p>';
                    endif;
                    ?>
                    <ul>
                        <li class="media">
                            <div class="media-img">
                                <i class="fas fa-map-marker-alt"></i> <?php // Font Awesome Icon (hardcoded) ?>
                            </div>
                            <?php if ( $contact_address ) : ?>
                                <div class="media-body"><?php echo nl2br( esc_html( $contact_address ) ); ?></div>
                            <?php else : ?>
                                <div class="media-body">B1-546F, 5th Floor, Tower B1, PO Box 45208,
                                    Ajman Free Zone, Ajman, UAE</div>
                            <?php endif; ?>
                        </li>
                        <li class="media">
                            <div class="media-img">
                                <i class="fas fa-phone-alt"></i> <?php // Font Awesome Icon (hardcoded) ?>
                            </div>
                            <?php if ( $contact_phone_number && $contact_phone_link ) : ?>
                                <a href="<?php echo esc_url( $contact_phone_link ); ?>" class="media-body"><?php echo esc_html( $contact_phone_number ); ?></a>
                            <?php else : ?>
                                <a href="tel:+971065211720" class="media-body">+971 6 521 1720</a>
                            <?php endif; ?>
                        </li>
                        <li class="media">
                            <div class="media-img">
                                <i class="fas fa-envelope"></i> <?php // Font Awesome Icon (hardcoded) ?>
                            </div>
                            <?php if ( $contact_email_address && $contact_email_link ) : ?>
                                <a href="<?php echo esc_url( $contact_email_link ); ?>" class="media-body"><?php echo esc_html( $contact_email_address ); ?></a>
                            <?php else : ?>
                                <a href="mailto:contact@dataxsolution.net" class="media-body">contact@dataxsolution.net</a>
                            <?php endif; ?>
                        </li>
                        <li class="media">
                            <div class="media-img">
                                <?php if ( $map_icon_url ) : ?>
                                    <img src="<?php echo esc_url( $map_icon_url ); ?>" alt="<?php echo esc_attr( $map_icon_alt ); ?>">
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marker.svg" alt="marker">
                                <?php endif; ?>
                            </div>
                            <?php if ( $contact_map_link_text && $contact_map_link_url ) : ?>
                                <a href="<?php echo esc_url( $contact_map_link_url ); ?>" class="media-body" target="_blank"><?php echo esc_html( $contact_map_link_text ); ?></a>
                            <?php else : ?>
                                <a href="https://goo.gl/maps/h5Atyf63k5qz8wLbA" class="media-body" target="_blank">View on Google Map</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 contact-form">
                    <div class="section-title">
                        <?php if ( $contact_form_heading ) : ?>
                            <h2><?php echo esc_html( $contact_form_heading ); ?></h2>
                        <?php else : ?>
                            <h2>Write in to us</h2>
                        <?php endif; ?>

                        <?php if ( $contact_form_description ) : ?>
                            <p><?php echo nl2br( esc_html( $contact_form_description ) ); ?></p>
                        <?php else : ?>
                            <p>The power of Open source is the power of the people. We would love to hear from you!</p>
                        <?php endif; ?>
                    </div>

                    <?php
                    // Display Contact Form 7 shortcode
                    if ( $contact_form_shortcode ) :
                        echo do_shortcode( $contact_form_shortcode );
                    else :
                        // Fallback to a default shortcode if ACF field is empty
                        echo do_shortcode( '[contact-form-7 id="34ac436" title="Contact form 1"]' );
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>