<?php
/*
Template Name: PostgreSQL Template
*/
get_header();

// Get ACF fields for the current page
$hero_video = get_field('hero_video');
$tech_banner_bg_image = get_field('tech_banner_bg_image');
$tech_banner_logo = get_field('tech_banner_logo');
$tech_banner_title = get_field('tech_banner_title');
$tech_banner_description = get_field('tech_banner_description');
$why_postgresql_title = get_field('why_postgresql_title');
$why_postgresql_content = get_field('why_postgresql_content');
$benefits_section_title = get_field('benefits_section_title');
$benefits_section_description = get_field('benefits_section_description');

// New fields for 'Know More' section
$know_more_section_title = get_field('know_more_section_title'); // Not used directly in the new layout, but kept for reference
$know_more_section_description = get_field('know_more_section_description');
$know_more_button_text = get_field('know_more_button_text');
$know_more_button_link_input = get_field('know_more_button_link');

// Logic to handle internal slugs vs. external URLs for the button link
$know_more_button_final_link = '';
if ( $know_more_button_link_input ) {
    if ( strpos($know_more_button_link_input, 'http') === 0 || strpos($know_more_button_link_input, '//') === 0 ) {
        $know_more_button_final_link = $know_more_button_link_input;
    } else {
        $know_more_button_final_link = home_url( $know_more_button_link_input );
    }
}

$the_platform_title = get_field('the_platform_title');
$the_platform_description = get_field('the_platform_description');
$tool_suites_title = get_field('tool_suites_title');
$tool_suites_description = get_field('tool_suites_description');
$deployment_options_title = get_field('deployment_options_title');
$deployment_options_description = get_field('deployment_options_description');

// Retrieve Group field data
// Benefits - NOW 5 ITEMS
$benefit_item_1 = get_field('benefit_item_1');
$benefit_item_2 = get_field('benefit_item_2');
$benefit_item_3 = get_field('benefit_item_3');
$benefit_item_4 = get_field('benefit_item_4'); 
$benefit_item_5 = get_field('benefit_item_5'); 

// Consulting Services
$consulting_service_1 = get_field('consulting_service_1');
$consulting_service_2 = get_field('consulting_service_2');
$consulting_service_3 = get_field('consulting_service_3');

// Tool Suite Items
$tool_suite_item_1 = get_field('tool_suite_item_1');
$tool_suite_item_2 = get_field('tool_suite_item_2');
$tool_suite_item_3 = get_field('tool_suite_item_3');

// Deployment Options
$deployment_option_1 = get_field('deployment_option_1');
$deployment_option_2 = get_field('deployment_option_2');
$deployment_option_3 = get_field('deployment_option_3');
$deployment_option_4 = get_field('deployment_option_4');
$deployment_option_5 = get_field('deployment_option_5');

?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $hero_video ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $hero_video['url'] ); ?>" type="<?php echo esc_attr( $hero_video['mime_type'] ); ?>">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-banner/x.webp" alt="X">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/technologies/' ) ); ?>">Technologies</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="solutions-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card tech-banner">
                        <div class="card-img">
                            <?php if ( $tech_banner_bg_image ) : ?>
                                <img src="<?php echo esc_url( $tech_banner_bg_image ); ?>" alt="Tech Banner Background">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/sql-bg.webp" alt="Default BG">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="img-box">
                                <?php if ( $tech_banner_logo ) : ?>
                                    <img src="<?php echo esc_url( $tech_banner_logo ); ?>" alt="Tech Banner Logo">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/sql.webp" alt="Default Logo">
                                <?php endif; ?>
                            </div>
                            <?php if ( $tech_banner_title ) : ?>
                                <h4><?php echo esc_html( $tech_banner_title ); ?></h4>
                            <?php else : ?>
                                <h4>PostgreSQL, the open source relational database of choice for many people and organizations</h4>
                            <?php endif; ?>

                            <?php if ( $tech_banner_description ) : ?>
                                <p><?php echo esc_html( $tech_banner_description ); ?></p>
                            <?php else : ?>
                                <p>On premise or in cloud, the best in class database management software</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <?php if ( $why_postgresql_title || $why_postgresql_content ) : ?>
                        <div class="section-title mb-4">
                            <?php if ( $why_postgresql_title ) : ?>
                                <h4><?php echo esc_html( $why_postgresql_title ); ?></h4>
                            <?php endif; ?>
                            <?php if ( $why_postgresql_content ) : ?>
                                <?php echo apply_filters( 'the_content', $why_postgresql_content ); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $benefits_section_title || $benefits_section_description ) : ?>
                        <div class="section-title mb-4">
                            <?php if ( $benefits_section_title ) : ?>
                                <h4><?php echo esc_html( $benefits_section_title ); ?></h4>
                            <?php endif; ?>
                            <?php if ( $benefits_section_description ) : ?>
                                <?php echo apply_filters( 'the_content', $benefits_section_description ); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // Benefit List - Using Group Fields
                    $benefits_exist = false;
                    // Updated check to include all 5 benefit items
                    if ( $benefit_item_1 || $benefit_item_2 || $benefit_item_3 || $benefit_item_4 || $benefit_item_5 ) {
                        $benefits_exist = true;
                    }
                    ?>
                    <?php if ( $benefits_exist ) : ?>
                        <ul class="blt-list mb-4">
                            <?php if ( $benefit_item_1 && $benefit_item_1['text'] ) : ?>
                                <li><p><?php echo esc_html( $benefit_item_1['text'] ); ?></p></li>
                            <?php endif; ?>
                            <?php if ( $benefit_item_2 && $benefit_item_2['text'] ) : ?>
                                <li><p><?php echo esc_html( $benefit_item_2['text'] ); ?></p></li>
                            <?php endif; ?>
                            <?php if ( $benefit_item_3 && $benefit_item_3['text'] ) : ?>
                                <li><p><?php echo esc_html( $benefit_item_3['text'] ); ?></p></li>
                            <?php endif; ?>
                            <?php if ( $benefit_item_4 && $benefit_item_4['text'] ) :  ?>
                                <li><p><?php echo esc_html( $benefit_item_4['text'] ); ?></p></li>
                            <?php endif; ?>
                            <?php if ( $benefit_item_5 && $benefit_item_5['text'] ) : ?>
                                <li><p><?php echo esc_html( $benefit_item_5['text'] ); ?></p></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>

                    <?php
                    // Consulting Services - Using Group Fields
                    $consulting_services_exist = false;
                    if ( $consulting_service_1 || $consulting_service_2 || $consulting_service_3 ) {
                        $consulting_services_exist = true;
                    }
                    ?>
                    <?php if ( $consulting_services_exist ) : ?>
                        <ul class="consulting-services-list mb-4">
                            <?php if ( $consulting_service_1 && $consulting_service_1['image'] && $consulting_service_1['title'] ) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url( $consulting_service_1['image']['url'] ); ?>" alt="<?php echo esc_attr( $consulting_service_1['title'] ); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html( $consulting_service_1['title'] ); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( $consulting_service_2 && $consulting_service_2['image'] && $consulting_service_2['title'] ) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url( $consulting_service_2['image']['url'] ); ?>" alt="<?php echo esc_attr( $consulting_service_2['title'] ); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html( $consulting_service_2['title'] ); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( $consulting_service_3 && $consulting_service_3['image'] && $consulting_service_3['title'] ) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url( $consulting_service_3['image']['url'] ); ?>" alt="<?php echo esc_attr( $consulting_service_3['title'] ); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html( $consulting_service_3['title'] ); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if ( $the_platform_title || $the_platform_description ) : ?>
                        <div class="section-title mb-4">
                            <?php if ( $the_platform_title ) : ?>
                                <h4><?php echo esc_html( $the_platform_title ); ?></h4>
                            <?php endif; ?>
                            <?php if ( $the_platform_description ) : ?>
                                <?php echo apply_filters( 'the_content', $the_platform_description ); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $tool_suites_title || $tool_suites_description ) : ?>
                        <div class="section-title mb-4">
                            <?php if ( $tool_suites_title ) : ?>
                                <h4><?php echo esc_html( $tool_suites_title ); ?></h4>
                            <?php endif; ?>
                            <?php if ( $tool_suites_description ) : ?>
                                <?php echo apply_filters( 'the_content', $tool_suites_description ); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // Tool Suite Items - Using Group Fields
                    $tool_suite_items_exist = false;
                    if ( $tool_suite_item_1 || $tool_suite_item_2 || $tool_suite_item_3 ) {
                        $tool_suite_items_exist = true;
                    }
                    ?>
                    <?php if ( $tool_suite_items_exist ) : ?>
                        <div class="content-box topic-list">
                            <ul>
                                <?php if ( $tool_suite_item_1 && $tool_suite_item_1['image'] && $tool_suite_item_1['title'] ) : ?>
                                    <li>
                                        <a href="javascript:void(0)" class="card disabled">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-img">
                                                        <img src="<?php echo esc_url( $tool_suite_item_1['image']['url'] ); ?>" alt="<?php echo esc_attr( $tool_suite_item_1['title'] ); ?>">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><?php echo esc_html( $tool_suite_item_1['title'] ); ?></h4>
                                                    </div>
                                                </div>
                                                <?php if ( $tool_suite_item_1['description'] ) : ?>
                                                    <p><?php echo esc_html( $tool_suite_item_1['description'] ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ( $tool_suite_item_2 && $tool_suite_item_2['image'] && $tool_suite_item_2['title'] ) : ?>
                                    <li>
                                        <a href="javascript:void(0)" class="card disabled">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-img">
                                                        <img src="<?php echo esc_url( $tool_suite_item_2['image']['url'] ); ?>" alt="<?php echo esc_attr( $tool_suite_item_2['title'] ); ?>">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><?php echo esc_html( $tool_suite_item_2['title'] ); ?></h4>
                                                    </div>
                                                </div>
                                                <?php if ( $tool_suite_item_2['description'] ) : ?>
                                                    <p><?php echo esc_html( $tool_suite_item_2['description'] ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ( $tool_suite_item_3 && $tool_suite_item_3['image'] && $tool_suite_item_3['title'] ) : ?>
                                    <li>
                                        <a href="javascript:void(0)" class="card disabled">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-img">
                                                        <img src="<?php echo esc_url( $tool_suite_item_3['image']['url'] ); ?>" alt="<?php echo esc_attr( $tool_suite_item_3['title'] ); ?>">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><?php echo esc_html( $tool_suite_item_3['title'] ); ?></h4>
                                                    </div>
                                                </div>
                                                <?php if ( $tool_suite_item_3['description'] ) : ?>
                                                    <p><?php echo esc_html( $tool_suite_item_3['description'] ); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if ( $deployment_options_title || $deployment_options_description ) : ?>
                        <div class="section-title mb-4">
                            <?php if ( $deployment_options_title ) : ?>
                                <h4><?php echo esc_html( $deployment_options_title ); ?></h4>
                            <?php endif; ?>
                            <?php if ( $deployment_options_description ) : ?>
                                <?php echo apply_filters( 'the_content', $deployment_options_description ); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // Deployment Options - Using Group Fields
                    $deployment_options_exist = false;
                    if ( $deployment_option_1 || $deployment_option_2 || $deployment_option_3 || $deployment_option_4 || $deployment_option_5 ) {
                        $deployment_options_exist = true;
                    }
                    ?>
                    <?php if ( $deployment_options_exist ) : ?>
                        <ul class="consulting-services-list mb-4">
                            <?php if ( $deployment_option_1 && $deployment_option_1['image'] && $deployment_option_1['title'] ) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url( $deployment_option_1['image']['url'] ); ?>" alt="<?php echo esc_attr( $deployment_option_1['title'] ); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html( $deployment_option_1['title'] ); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( $deployment_option_2 && $deployment_option_2['image'] && $deployment_option_2['title'] ) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url( $deployment_option_2['image']['url'] ); ?>" alt="<?php echo esc_attr( $deployment_option_2['title'] ); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html( $deployment_option_2['title'] ); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( $deployment_option_3 && $deployment_option_3['image'] && $deployment_option_3['title'] ) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url( $deployment_option_3['image']['url'] ); ?>" alt="<?php echo esc_attr( $deployment_option_3['title'] ); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html( $deployment_option_3['title'] ); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( $deployment_option_4 && $deployment_option_4['image'] && $deployment_option_4['title'] ) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url( $deployment_option_4['image']['url'] ); ?>" alt="<?php echo esc_attr( $deployment_option_4['title'] ); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html( $deployment_option_4['title'] ); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( $deployment_option_5 && $deployment_option_5['image'] && $deployment_option_5['title'] ) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url( $deployment_option_5['image']['url'] ); ?>" alt="<?php echo esc_attr( $deployment_option_5['title'] ); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html( $deployment_option_5['title'] ); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>

                    <section class="know-more-band">
                        <div class="container">
                            <?php if ( $know_more_section_description ) : ?>
                                <p class="text-center w-100"><?php echo nl2br(esc_html($know_more_section_description)); ?></p>
                            <?php else : ?>
                                <p class="text-center w-100">To know more about Services, Pricing & Support</p>
                            <?php endif; ?>

                            <div class="d-flex flex-wrap justify-content-center">
                                <?php if ( $know_more_button_final_link && $know_more_button_text ) : ?>
                                    <a href="<?php echo esc_url($know_more_button_final_link); ?>" class="button anim mx-auto">
                                        <div class="img-box circle">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                                        </div>
                                        <div class="img-box arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                                        </div>
                                        <span><?php echo esc_html($know_more_button_text); ?></span>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>" class="button anim mx-auto">
                                        <div class="img-box circle">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                                        </div>
                                        <div class="img-box arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                                        </div>
                                        <span>Contact Us</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                    </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>