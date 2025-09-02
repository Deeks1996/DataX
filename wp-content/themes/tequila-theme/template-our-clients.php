<?php
/*
Template Name: Our Clients Page
Description: Custom template for the Our Clients page.
*/
get_header();

// --- Retrieve ACF Field Values ---

// Banner Section
$banner_video_mp4_url   = get_field( 'our_clients_banner_video_mp4' );
$banner_x_image         = get_field( 'our_clients_banner_x_image' ); // Image Array
$page_title_override    = get_field( 'our_clients_page_title_override' );

// Our Clients Section
$clients_section_heading = get_field( 'our_clients_section_heading' );
$client_logos_html      = get_field( 'our_clients_logos_html' ); // WYSIWYG content

// Testimonials Section
$testimonials_section_heading = get_field( 'our_clients_testimonials_heading' );

// Testimonial 1 Fields
$testimonial_1_photo        = get_field( 'testimonial_1_photo' ); // Image Array
$testimonial_1_text         = get_field( 'testimonial_1_text' ); // WYSIWYG content
$testimonial_1_client_name  = get_field( 'testimonial_1_client_name' );

// Testimonial 2 Fields
$testimonial_2_photo        = get_field( 'testimonial_2_photo' ); // Image Array
$testimonial_2_text         = get_field( 'testimonial_2_text' ); // WYSIWYG content
$testimonial_2_client_name  = get_field( 'testimonial_2_client_name' );

// --- Prepare Image/Video URLs and Alt Texts ---
// Using null coalescing operator (??) for safer access and defaults
$x_image_url = $banner_x_image['url'] ?? '';
$x_image_alt = $banner_x_image['alt'] ?? 'Decorative X image';

$testimonial_1_photo_url = $testimonial_1_photo['url'] ?? '';
$testimonial_1_photo_alt = $testimonial_1_photo['alt'] ?? 'Testimonial Client 1 Photo';

$testimonial_2_photo_url = $testimonial_2_photo['url'] ?? '';
$testimonial_2_photo_alt = $testimonial_2_photo['alt'] ?? 'Testimonial Client 2 Photo';
?>

<div class="smooth-scroll" data-scroll-container>
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $banner_video_mp4_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $banner_video_mp4_url ); ?>" type="video/mp4">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $x_image_url ) : ?>
                <img src="<?php echo esc_url( $x_image_url ); ?>" alt="<?php echo esc_attr( $x_image_alt ); ?>">
            <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-banner/x.webp" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title">
                        <?php
                        if ( $page_title_override ) {
                            echo esc_html( $page_title_override );
                        } else {
                            the_title(); // Fallback to standard WordPress page title
                        }
                        ?>
                    </h2>
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
    <section class="our-client inner">
        <div class="container">
            <div class="section-title">
                <?php if ( $clients_section_heading ) : ?>
                    <h2><?php echo esc_html( $clients_section_heading ); ?></h2>
                <?php else : ?>
                    <h2>Our Clients</h2> <?php endif; ?>
            </div>
            <?php
            // Check if ACF WYSIWYG content exists for client logos
            if ( $client_logos_html ) :
                echo wp_kses_post( apply_filters( 'the_content', $client_logos_html ) ); // Use wp_kses_post for security
            else :
                // Fallback client logos if ACF field is empty
                ?>
                <ul class="client-list">
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/alja.webp" alt="Alja"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/cap.webp" alt="Cap"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/etis.webp" alt="Etis"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/liv.webp" alt="Liv"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/nbd.webp" alt="NBD"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/rak.webp" alt="Rak"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/roshan.webp" alt="Roshan"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/ZainKuwait.webp" alt="Zain Kuwait"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/ZainKSA.webp" alt="Zain KSA"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/kf-sm.webp" alt="KF SM"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/opwp.webp" alt="OPWP"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/ooredoo.webp" alt="Ooredoo"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/alfaris.webp" alt="Alfaris"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/riyad.webp" alt="Riyad"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/kfh.webp" alt="KFH"></div></li>
                    <li><div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client/mashreq.webp" alt="Mashreq"></div></li>
                </ul>
            <?php endif; ?>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <?php if ( $testimonials_section_heading ) : ?>
                            <h2><?php echo esc_html( $testimonials_section_heading ); ?></h2>
                        <?php else : ?>
                            <h2>What Our Clients Say</h2> <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="swiper slider">
                        <div class="swiper-wrapper">

                            <?php // Testimonial 1 ?>
                            <?php if ( $testimonial_1_text && $testimonial_1_client_name ) : ?>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <?php if ( $testimonial_1_photo_url ) : ?>
                                            <div class="card-img">
                                                <img src="<?php echo esc_url( $testimonial_1_photo_url ); ?>" alt="<?php echo esc_attr( $testimonial_1_photo_alt ); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="card-body">
                                            <?php echo wp_kses_post( apply_filters( 'the_content', $testimonial_1_text ) ); ?>
                                        </div>
                                        <div class="card-footer">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>- <?php echo esc_html( $testimonial_1_client_name ); ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php // Testimonial 2 ?>
                            <?php if ( $testimonial_2_text && $testimonial_2_client_name ) : ?>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <?php if ( $testimonial_2_photo_url ) : ?>
                                            <div class="card-img">
                                                <img src="<?php echo esc_url( $testimonial_2_photo_url ); ?>" alt="<?php echo esc_attr( $testimonial_2_photo_alt ); ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="card-body">
                                            <?php echo wp_kses_post( apply_filters( 'the_content', $testimonial_2_text ) ); ?>
                                        </div>
                                        <div class="card-footer">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>- <?php echo esc_html( $testimonial_2_client_name ); ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div></div><div class="swiper-pagination"></div>
                    <div class="swiper-button-next custom"></div>
                    <div class="swiper-button-prev custom"></div>
                </div>
            </div>
        </div>
    </section>
    </div><?php get_footer(); ?>