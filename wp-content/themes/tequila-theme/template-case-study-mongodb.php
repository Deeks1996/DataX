<?php
/*
Template Name: Case Study - MongoDB
*/
get_header();

// Retrieve ACF Field Values for the current Page
$mongo_in_banner_video_mp4_url  = get_field( 'mongo_in_banner_video_mp4' );
$mongo_in_banner_x_image        = get_field( 'mongo_in_banner_x_image' ); // Returns Image Array

$mongo_page_main_heading        = get_field( 'mongo_page_main_heading' );
$mongo_challenges_heading       = get_field( 'mongo_challenges_heading' );
$mongo_challenges_content       = get_field( 'mongo_challenges_content' );
$mongo_solution_heading         = get_field( 'mongo_solution_heading' );

$mongo_solution_content_pre_figures = get_field( 'mongo_solution_content_pre_figures' );
$mongo_solution_figure1_image       = get_field( 'mongo_solution_figure1_image' ); // Image Array
$mongo_solution_figure1_caption     = get_field( 'mongo_solution_figure1_caption' );
$mongo_solution_content_fig1_fig2   = get_field( 'mongo_solution_content_fig1_fig2' );
$mongo_solution_figure2_image       = get_field( 'mongo_solution_figure2_image' ); // Image Array
$mongo_solution_figure2_caption     = get_field( 'mongo_solution_figure2_caption' );
$mongo_solution_content_fig2_fig3   = get_field( 'mongo_solution_content_fig2_fig3' );
$mongo_solution_figure3_image       = get_field( 'mongo_solution_figure3_image' ); // Image Array
$mongo_solution_figure3_caption     = get_field( 'mongo_solution_figure3_caption' );
$mongo_solution_content_post_figures = get_field( 'mongo_solution_content_post_figures' );

$mongo_results_heading          = get_field( 'mongo_results_heading' );
$mongo_results_content_pre_quote= get_field( 'mongo_results_content_pre_quote' );
$mongo_results_quote_text       = get_field( 'mongo_results_quote_text' );
$mongo_results_quote_author     = get_field( 'mongo_results_quote_author' );
$mongo_results_content_post_quote = get_field( 'mongo_results_content_post_quote' );


// Get URL and alt for the in-banner X image (if array is returned)
$x_image_url = $mongo_in_banner_x_image['url'] ?? '';
$x_image_alt = $mongo_in_banner_x_image['alt'] ?? 'Decorative X image';
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $mongo_in_banner_video_mp4_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $mongo_in_banner_video_mp4_url ); ?>" type="video/mp4">
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
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Study</li> <?php ?>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="analytics">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $mongo_page_main_heading ) : ?>
                            <h3><?php echo esc_html( $mongo_page_main_heading ); ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $mongo_challenges_heading ) : ?>
                            <h4><?php echo esc_html( $mongo_challenges_heading ); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if ( $mongo_challenges_content ) : ?>
                        <?php echo apply_filters( 'the_content', $mongo_challenges_content );  ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $mongo_solution_heading ) : ?>
                            <h4><?php echo esc_html( $mongo_solution_heading ); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if ( $mongo_solution_content_pre_figures ) : ?>
                        <?php echo apply_filters( 'the_content', $mongo_solution_content_pre_figures ); // Apply the_content filter for WYSIWYG ?>
                    <?php endif; ?>

                    <?php
                    // Handle Figure 1
                    $fig1_image_url = $mongo_solution_figure1_image['url'] ?? '';
                    $fig1_image_alt = $mongo_solution_figure1_image['alt'] ?? ( $mongo_solution_figure1_caption ?: 'Figure 1 Image' );
                    if ( $fig1_image_url ) : ?>
                        <figure>
                            <img src="<?php echo esc_url( $fig1_image_url ); ?>" alt="<?php echo esc_attr( $fig1_image_alt ); ?>">
                            <?php if ( $mongo_solution_figure1_caption ) : ?>
                                <figcaption><?php echo esc_html( $mongo_solution_figure1_caption ); ?></figcaption>
                            <?php endif; ?>
                        </figure>
                    <?php endif; ?>

                    <?php if ( $mongo_solution_content_fig1_fig2 ) : ?>
                        <?php echo apply_filters( 'the_content', $mongo_solution_content_fig1_fig2 ); // Apply the_content filter for WYSIWYG ?>
                    <?php endif; ?>

                    <?php
                    // Handle Figure 2
                    $fig2_image_url = $mongo_solution_figure2_image['url'] ?? '';
                    $fig2_image_alt = $mongo_solution_figure2_image['alt'] ?? ( $mongo_solution_figure2_caption ?: 'Figure 2 Image' );
                    if ( $fig2_image_url ) : ?>
                        <figure>
                            <img src="<?php echo esc_url( $fig2_image_url ); ?>" alt="<?php echo esc_attr( $fig2_image_alt ); ?>">
                            <?php if ( $mongo_solution_figure2_caption ) : ?>
                                <figcaption><?php echo esc_html( $mongo_solution_figure2_caption ); ?></figcaption>
                            <?php endif; ?>
                        </figure>
                    <?php endif; ?>

                    <?php if ( $mongo_solution_content_fig2_fig3 ) : ?>
                        <?php echo apply_filters( 'the_content', $mongo_solution_content_fig2_fig3 ); // Apply the_content filter for WYSIWYG ?>
                    <?php endif; ?>

                    <?php
                    // Handle Figure 3
                    $fig3_image_url = $mongo_solution_figure3_image['url'] ?? '';
                    $fig3_image_alt = $mongo_solution_figure3_image['alt'] ?? ( $mongo_solution_figure3_caption ?: 'Figure 3 Image' );
                    if ( $fig3_image_url ) : ?>
                        <figure>
                            <img src="<?php echo esc_url( $fig3_image_url ); ?>" alt="<?php echo esc_attr( $fig3_image_alt ); ?>">
                            <?php if ( $mongo_solution_figure3_caption ) : ?>
                                <figcaption><?php echo esc_html( $mongo_solution_figure3_caption ); ?></figcaption>
                            <?php endif; ?>
                        </figure>
                    <?php endif; ?>

                    <?php if ( $mongo_solution_content_post_figures ) : ?>
                        <?php echo apply_filters( 'the_content', $mongo_solution_content_post_figures ); // Apply the_content filter for WYSIWYG ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $mongo_results_heading ) : ?>
                            <h4><?php echo esc_html( $mongo_results_heading ); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if ( $mongo_results_content_pre_quote ) : ?>
                        <?php echo apply_filters( 'the_content', $mongo_results_content_pre_quote ); // Apply the_content filter for WYSIWYG ?>
                    <?php endif; ?>

                    <?php if ( $mongo_results_quote_text ) : ?>
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h3><?php echo wp_kses_post( $mongo_results_quote_text ); ?></h3>
                                <?php if ( $mongo_results_quote_author ) : ?>
                                    <p class="lead"><?php echo esc_html( $mongo_results_quote_author ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ( $mongo_results_content_post_quote ) : ?>
                        <?php echo apply_filters( 'the_content', $mongo_results_content_post_quote ); // Apply the_content filter for WYSIWYG ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>