<?php
/**
 * Template Name: Case Study - Elastic
 */
get_header();

// --- Retrieve ACF Field Values for Case Study - Elastic Page ---
// In-Banner Section
$cs_elastic_in_banner_video_mp4_url = get_field( 'cs_elastic_in_banner_video_mp4' );
$cs_elastic_in_banner_x_image       = get_field( 'cs_elastic_in_banner_x_image' ); // Returns array

// Main Content Section
$cs_elastic_main_heading          = get_field( 'cs_elastic_main_heading' );
$cs_elastic_main_paragraph_1      = get_field( 'cs_elastic_main_paragraph_1' ); // WYSIWYG
$cs_elastic_main_paragraph_2      = get_field( 'cs_elastic_main_paragraph_2' ); // WYSIWYG
$cs_elastic_main_paragraph_3      = get_field( 'cs_elastic_main_paragraph_3' ); // WYSIWYG
$cs_elastic_main_paragraph_4      = get_field( 'cs_elastic_main_paragraph_4' ); // WYSIWYG

$cs_elastic_challenges_heading      = get_field( 'cs_elastic_challenges_heading' );
$cs_elastic_challenges_paragraph_1  = get_field( 'cs_elastic_challenges_paragraph_1' ); // WYSIWYG
$cs_elastic_challenges_paragraph_2  = get_field( 'cs_elastic_challenges_paragraph_2' ); // WYSIWYG

$cs_elastic_solution_heading        = get_field( 'cs_elastic_solution_heading' );
$cs_elastic_solution_paragraph      = get_field( 'cs_elastic_solution_paragraph' ); // WYSIWYG

$cs_elastic_benefits_heading        = get_field( 'cs_elastic_benefits_heading' );
$cs_elastic_benefits_paragraph      = get_field( 'cs_elastic_benefits_paragraph' ); // WYSIWYG

// --- End Retrieve ACF Field Values ---
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $cs_elastic_in_banner_video_mp4_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $cs_elastic_in_banner_video_mp4_url ); ?>" type="video/mp4" autoplay="true">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/video/banner.mp4" type="video/mp4" autoplay="true">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $cs_elastic_in_banner_x_image ) : ?>
                <img src="<?php echo esc_url( $cs_elastic_in_banner_x_image['url'] ); ?>" alt="<?php echo esc_attr( $cs_elastic_in_banner_x_image['alt'] ? $cs_elastic_in_banner_x_image['alt'] : 'X' ); ?>">
            <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-banner/x.webp" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php the_title(); // Dynamically display page title ?></h2>
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
                <div class="col-12 pb-2 pb-md-3 pb-xl-4"></div>
                <div class="col-12">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $cs_elastic_main_heading ) : ?>
                            <h4><?php echo esc_html( $cs_elastic_main_heading ); ?></h4>
                        <?php else : ?>
                            <h4>How a leading healthcare service provider implemented Data-Log monitoring solution using Elastic</h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <?php if ( $cs_elastic_main_paragraph_1 ) : ?>
                        <?php echo $cs_elastic_main_paragraph_1; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>Our customer is one of leading healthcare provider that offer services that include Cancer Research, Cardiovascular Disease, Stem Cells Therapy and Genetics
                        Research & others, thus making it one of the world top centers in rare diseases research</p>
                    <?php endif; ?>

                    <?php if ( $cs_elastic_main_paragraph_2 ) : ?>
                        <?php echo $cs_elastic_main_paragraph_2; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>Our customer was looking to work with an open source partner with expertise in Elasticsearch to design and build a log analysis platform</p>
                    <?php endif; ?>

                    <?php if ( $cs_elastic_main_paragraph_3 ) : ?>
                        <?php echo $cs_elastic_main_paragraph_3; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>DataStax team built an environment in UAT, for log monitoring and analysis through successful testing, and took it to production by providing 24×7
                        post-implementation technical support.</p>
                    <?php endif; ?>

                    <?php if ( $cs_elastic_main_paragraph_4 ) : ?>
                        <?php echo $cs_elastic_main_paragraph_4; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>Post-implementation, the customer was able to monitor logs and analyze them quickly in order to spot pre-existing vulnerabilities and also predict future errors to
                        tackle them well in advance</p>
                    <?php endif; ?>
                </div>

                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $cs_elastic_challenges_heading ) : ?>
                            <h4><?php echo esc_html( $cs_elastic_challenges_heading ); ?></h4>
                        <?php else : ?>
                            <h4>Challenges</h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <?php if ( $cs_elastic_challenges_paragraph_1 ) : ?>
                        <?php echo $cs_elastic_challenges_paragraph_1; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>Our customer is one of leading healthcare provider that offer services that include Cancer Research, Cardiovascular Disease, Stem Cells Therapy and Genetics Research & others, thus making it one of the world top centers in rare diseases research</p>
                    <?php endif; ?>

                    <?php if ( $cs_elastic_challenges_paragraph_2 ) : ?>
                        <?php echo $cs_elastic_challenges_paragraph_2; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>Our customer was looking to work with an open source partner with expertise in Elasticsearch to design and build a log analysis platform</p>
                    <?php endif; ?>
                </div>

                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $cs_elastic_solution_heading ) : ?>
                            <h4><?php echo esc_html( $cs_elastic_solution_heading ); ?></h4>
                        <?php else : ?>
                            <h4>Solution</h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <?php if ( $cs_elastic_solution_paragraph ) : ?>
                        <?php echo $cs_elastic_solution_paragraph; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>DataStax team built an environment in UAT, for log monitoring and analysis through successful testing, and took it to production by providing 24×7 post-implementation technical support.</p>
                    <?php endif; ?>
                </div>

                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4 mb-xl-5">
                        <?php if ( $cs_elastic_benefits_heading ) : ?>
                            <h4><?php echo esc_html( $cs_elastic_benefits_heading ); ?></h4>
                        <?php else : ?>
                            <h4>Benefits: </h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <?php if ( $cs_elastic_benefits_paragraph ) : ?>
                        <?php echo $cs_elastic_benefits_paragraph; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>Post-implementation, the customer was able to monitor logs and analyze them quickly in order to spot pre-existing vulnerabilities and also predict future errors to
                        tackle them well
                        in advance</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>