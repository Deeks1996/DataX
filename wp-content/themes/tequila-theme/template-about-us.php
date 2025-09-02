<?php
/*
Template Name: About Us Page
Description: Custom template for the About Us page.
*/
get_header();

// --- Retrieve ACF Field Values ---
// In-Banner Section
$in_banner_video_mp4_url = get_field( 'in_banner_video_mp4' );
$in_banner_x_image       = get_field( 'in_banner_x_image' ); // Returns array

// Analytics Section
$analytics_bg_image              = get_field( 'analytics_bg_image' ); // Returns array
$analytics_company_profile_subtitle = get_field( 'analytics_company_profile_subtitle' );
$analytics_main_heading          = get_field( 'analytics_main_heading' );
$analytics_paragraph             = get_field( 'analytics_paragraph' );
$analytics_bullet_list_content   = get_field( 'analytics_bullet_list_content' ); // WYSIWYG

// About DataX Section
$about_datax_bg_image        = get_field( 'about_datax_bg_image' ); // Returns array
$about_datax_subtitle        = get_field( 'about_datax_subtitle' );
$about_datax_main_paragraph  = get_field( 'about_datax_main_paragraph' ); // WYSIWYG

// Vision Mission Section
$vision_mission_bg_image = get_field( 'vision_mission_bg_image' ); // Returns array
$mission_title           = get_field( 'mission_title' );
$mission_text            = get_field( 'mission_text' ); // WYSIWYG
$vision_title            = get_field( 'vision_title' );
$vision_text             = get_field( 'vision_text' ); // WYSIWYG

// Work With Us Section
$work_with_us_bg_image        = get_field( 'work_with_us_bg_image' ); // Returns array
$work_with_us_subtitle        = get_field( 'work_with_us_subtitle' );
$work_with_us_paragraph_1     = get_field( 'work_with_us_paragraph_1' ); // WYSIWYG
$work_with_us_paragraph_2     = get_field( 'work_with_us_paragraph_2' ); // WYSIWYG
$work_with_us_careers_email_text = get_field( 'work_with_us_careers_email_text' ); // WYSIWYG

// --- End Retrieve ACF Field Values ---
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $in_banner_video_mp4_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $in_banner_video_mp4_url ); ?>" type="video/mp4" autoplay="true">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4" autoplay="true">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $in_banner_x_image ) : ?>
                <img src="<?php echo esc_url( $in_banner_x_image['url'] ); ?>" alt="<?php echo esc_attr( $in_banner_x_image['alt'] ? $in_banner_x_image['alt'] : 'X' ); ?>">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-banner/x.webp" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="analytics">
        <div class="img-box">
            <?php if ( $analytics_bg_image ) : ?>
                <img src="<?php echo esc_url( $analytics_bg_image['url'] ); ?>" alt="<?php echo esc_attr( $analytics_bg_image['alt'] ? $analytics_bg_image['alt'] : 'Body x' ); ?>" data-scroll data-scroll-speed="-4" data-scroll-direction="horizontal">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/body-x.webp" alt="Body x" data-scroll data-scroll-speed="-4" data-scroll-direction="horizontal">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-sm-3 mb-lg-4">
                        <?php if ( $analytics_company_profile_subtitle ) : ?>
                            <h4><?php echo esc_html( $analytics_company_profile_subtitle ); ?></h4>
                        <?php else : ?>
                            <h4>Company Profile</h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <?php if ( $analytics_main_heading ) : ?>
                        <h5><?php echo esc_html( $analytics_main_heading ); ?></h5>
                    <?php else : ?>
                        <h5>Transform Business with Data Centric Vision</h5>
                    <?php endif; ?>

                    <?php if ( $analytics_paragraph ) : ?>
                        <?php echo $analytics_paragraph; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>We support our clients through Digital Transformation and Change Management initiatives with open source leading Data Management software that enables Data
                            Governance approach to maximize investments from Data assets</p>
                    <?php endif; ?>

                    <?php if ( $analytics_bullet_list_content ) : ?>
                        <ul class="blt-list">
                            <?php echo $analytics_bullet_list_content; // Direct echo for WYSIWYG, expecting <li> tags within ?>
                        </ul>
                    <?php else : ?>
                        <ul class="blt-list">
                            <li><p>Trusted by top retail banks for implementing bigdata solutions</p></li>
                            <li><p>Trusted by top healthcare service providers for implementing bigdata solutions</p></li>
                            <li><p>Trusted by top telecom companies for implementing bigdata solutions</p></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="about-datax">
        <div class="img-box">
            <?php if ( $about_datax_bg_image ) : ?>
                <img src="<?php echo esc_url( $about_datax_bg_image['url'] ); ?>" alt="<?php echo esc_attr( $about_datax_bg_image['alt'] ? $about_datax_bg_image['alt'] : 'about datax' ); ?>" data-scroll data-scroll-speed="2">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-datax.webp" alt="about datax" data-scroll data-scroll-speed="2">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="section-title mb-lg-4 mb-xl-5">
                        <?php if ( $about_datax_subtitle ) : ?>
                            <h4><?php echo esc_html( $about_datax_subtitle ); ?></h4>
                        <?php else : ?>
                            <h4>About DataX Solution</h4>
                        <?php endif; ?>
                    </div>
                    <?php if ( $about_datax_main_paragraph ) : ?>
                        <h4><?php echo $about_datax_main_paragraph; // Direct echo for WYSIWYG ?></h4>
                    <?php else : ?>
                        <h4>DataX Solution is a leading enterprise open source solution company serving customers across Middle East & Africa as well as in South East Asia. Our key objective
                            is to enable large organizations embrace open source software to meet their digital transformation goal. Currently over 50 leading enterprise class organizations
                            have taken DataX Solution’s offerings around modern Database, Microservices, Cloud and Analytics.</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission">
        <div class="img-box">
            <?php if ( $vision_mission_bg_image ) : ?>
                <img src="<?php echo esc_url( $vision_mission_bg_image['url'] ); ?>" alt="<?php echo esc_attr( $vision_mission_bg_image['alt'] ? $vision_mission_bg_image['alt'] : 'about datax' ); ?>" data-scroll data-scroll-speed="-2">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-vision.webp" alt="about datax" data-scroll data-scroll-speed="-2">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 ml-auto">
                    <div class="section-title mb-2 mb-lg-4 mb-xl-5">
                        <?php if ( $mission_title ) : ?>
                            <h4><?php echo esc_html( $mission_title ); ?></h4>
                        <?php else : ?>
                            <h4>Our Mission</h4>
                        <?php endif; ?>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <?php if ( $mission_text ) : ?>
                                <?php echo $mission_text; // Direct echo for WYSIWYG ?>
                            <?php else : ?>
                                <p>We aim to accelerate digital transformation for the world’s largest enterprises.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3 py-lg-4"></div>
                <div class="col-12 col-md-6 ml-auto">
                    <div class="section-title mb-2 mb-lg-4 mb-xl-5">
                        <?php if ( $vision_title ) : ?>
                            <h4><?php echo esc_html( $vision_title ); ?></h4>
                        <?php else : ?>
                            <h4>Our Vision</h4>
                        <?php endif; ?>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <?php if ( $vision_text ) : ?>
                                <?php echo $vision_text; // Direct echo for WYSIWYG ?>
                            <?php else : ?>
                                <p>We want to give you the freedom to innovate everywhere, and support your cloud native journeys in order to achieve your digital transformation goals.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-with-us">
        <div class="img-box">
            <?php if ( $work_with_us_bg_image ) : ?>
                <img src="<?php echo esc_url( $work_with_us_bg_image['url'] ); ?>" alt="<?php echo esc_attr( $work_with_us_bg_image['alt'] ? $work_with_us_bg_image['alt'] : 'about datax' ); ?>" data-scroll data-scroll-speed="-2">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-with-us.webp" alt="about datax" data-scroll data-scroll-speed="-2">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="section-title mb-lg-4 mb-xl-5">
                        <?php if ( $work_with_us_subtitle ) : ?>
                            <h4><?php echo esc_html( $work_with_us_subtitle ); ?></h4>
                        <?php else : ?>
                            <h4>Life @DataXSolution</h4>
                        <?php endif; ?>
                    </div>
                    <?php if ( $work_with_us_paragraph_1 ) : ?>
                        <?php echo $work_with_us_paragraph_1; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>DataX Solution aims to furnish a working environment in which employees are provided with an opportunity to grow regardless of their background, culture,
                            nationality or gender. DataX Solution encourages its people to develop their careers and will support long term growth aspirations of the business.</p>
                    <?php endif; ?>
                    <?php if ( $work_with_us_paragraph_2 ) : ?>
                        <?php echo $work_with_us_paragraph_2; // Direct echo for WYSIWYG ?>
                    <?php else : ?>
                        <p>The diversity of our people is a core strength and one we are proud of as a business. You are joining a company which delivers for our customers who rely on us to
                            execute projects to the highest quality standards that we have become known for.</p>
                    <?php endif; ?>
                    <?php if ( $work_with_us_careers_email_text ) : ?>
                        <?php echo $work_with_us_careers_email_text; // Direct echo for WYSIWYG, should include the <a href="mailto:..."> tag ?>
                    <?php else : ?>
                        <p>Send us your profiles to <a href="mailto:careers@dataxsolution.net">careers@dataxsolution.net</a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>