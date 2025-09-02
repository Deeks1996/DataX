<?php
/*
Template Name: HR Solutions Page Template
Description: Custom template for the HR-Solutions page.
*/
get_header();

// --- Retrieve ACF Field Values for HR Solutions Page ---

// In-Banner Section
$hr_banner_video_file = get_field( 'hr_banner_video_mp4' ); // File array
$hr_banner_x_image    = get_field( 'hr_banner_x_image' );    // Image array
$hr_page_title_override = get_field( 'hr_page_title_override' );

// Main Content Section
$hr_partner_logo        = get_field( 'hr_partner_logo' );       // Image array
$hr_section_heading_1   = get_field( 'hr_section_heading_1' );
$hr_paragraph_1         = get_field( 'hr_paragraph_1' );       // WYSIWYG
$hr_paragraph_2         = get_field( 'hr_paragraph_2' );       // WYSIWYG
$hr_paragraph_3         = get_field( 'hr_paragraph_3' );       // WYSIWYG
$hr_youtube_embed_url   = get_field( 'hr_youtube_embed_url' ); // oEmbed
$hr_section_heading_2   = get_field( 'hr_section_heading_2' );

// Solution Overview Individual Fields
$hr_solution_1_heading = get_field( 'hr_solution_1_heading' );
$hr_solution_1_description = get_field( 'hr_solution_1_description' );
$hr_solution_2_heading = get_field( 'hr_solution_2_heading' );
$hr_solution_2_description = get_field( 'hr_solution_2_description' );
$hr_solution_3_heading = get_field( 'hr_solution_3_heading' );
$hr_solution_3_description = get_field( 'hr_solution_3_description' );
$hr_solution_4_heading = get_field( 'hr_solution_4_heading' );
$hr_solution_4_description = get_field( 'hr_solution_4_description' );
$hr_solution_5_heading = get_field( 'hr_solution_5_heading' );
$hr_solution_5_description = get_field( 'hr_solution_5_description' );
$hr_solution_6_heading = get_field( 'hr_solution_6_heading' );
$hr_solution_6_description = get_field( 'hr_solution_6_description' );
$hr_solution_7_heading = get_field( 'hr_solution_7_heading' );
$hr_solution_7_description = get_field( 'hr_solution_7_description' );


// --- Prepare URLs and Alt Texts from ACF values with fallbacks ---

// Banner Video URL
$banner_video_mp4_url = $hr_banner_video_file['url'] ?? '';

// Banner X Image URL and Alt
$banner_x_image_url = $hr_banner_x_image['url'] ?? '';
$banner_x_image_alt = $hr_banner_x_image['alt'] ?? 'Decorative X image';

// Partner Logo URL and Alt
$partner_logo_url = $hr_partner_logo['url'] ?? '';
$partner_logo_alt = $hr_partner_logo['alt'] ?? 'Partner Logo';

// Determine the page title to display
$display_page_title = $hr_page_title_override ? esc_html($hr_page_title_override) : 'HR Solutions'; // Default to "HR Solutions"
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

    <section class="analytics"> <?php // Reusing 'analytics' class as per original code ?>
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-3 col-md-2">
                    <div class="img-box">
                        <?php if ( $partner_logo_url ) : ?>
                            <img src="<?php echo esc_url( $partner_logo_url ); ?>" alt="<?php echo esc_attr( $partner_logo_alt ); ?>">
                        <?php else : ?>
                            <?php // Fallback to default adrlin.png logo if no ACF image is set ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/adrlin.png" alt="adrlin">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 py-2 py-md-3 py-xl-4"></div>
                <div class="col-12">
                    <div class="section-title mb-sm-3 mb-lg-4">
                        <?php if ( $hr_section_heading_1 ) : ?>
                            <h4><?php echo esc_html( $hr_section_heading_1 ); ?></h4>
                        <?php else : ?>
                            <h4>What’s HR Solutions?</h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <?php if ( $hr_paragraph_1 ) : ?>
                        <?php echo $hr_paragraph_1; // WYSIWYG content ?>
                    <?php else : ?>
                        <p>Adrenalin HCM Digital technologies like cloud software and mobile applications can break down your organizational silos, so you can view your company as an
                            integrated whole.</p>
                    <?php endif; ?>

                    <?php if ( $hr_paragraph_2 ) : ?>
                        <?php echo $hr_paragraph_2; // WYSIWYG content ?>
                    <?php else : ?>
                        <p>Adrenalin HCM modules are designed to address key functions in a forward-looking HR strategy.</p>
                    <?php endif; ?>

                    <?php if ( $hr_paragraph_3 ) : ?>
                        <?php echo $hr_paragraph_3; // WYSIWYG content ?>
                    <?php else : ?>
                        <p>Select from a wide range of modules like Talent Acquisition, Performance Alignment, Talent Development, Leave Management, Payroll Software, Competency Management,
                            Social Connect to align your HR Strategy with your business goals</p>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <div class="video-box mt-4 mt-md-5" data-scroll data-scroll-speed="1">
                        <?php if ( $hr_youtube_embed_url ) : ?>
                            <?php echo $hr_youtube_embed_url; // oEmbed content ?>
                        <?php else : ?>
                            <iframe src="https://www.youtube.com/embed/YOUR_DEFAULT_VIDEO_ID" title="YouTube video player" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php // Generic fallback YouTube URL. You might want to update this to a relevant video ID. ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-sm-3 mb-lg-4">
                        <?php if ( $hr_section_heading_2 ) : ?>
                            <h4><?php echo esc_html( $hr_section_heading_2 ); ?></h4>
                        <?php else : ?>
                            <h4>Solution Over View:</h4>
                        <?php endif; ?>
                    </div>
                </div>

                <?php
                // Solution Overview Items (manual display for ACF Free)
                // We'll divide into two columns as per your original layout
                $column1_items = [
                    ['heading' => $hr_solution_1_heading, 'description' => $hr_solution_1_description],
                    ['heading' => $hr_solution_2_heading, 'description' => $hr_solution_2_description],
                    ['heading' => $hr_solution_3_heading, 'description' => $hr_solution_3_description],
                    ['heading' => $hr_solution_4_heading, 'description' => $hr_solution_4_description],
                ];
                $column2_items = [
                    ['heading' => $hr_solution_5_heading, 'description' => $hr_solution_5_description],
                    ['heading' => $hr_solution_6_heading, 'description' => $hr_solution_6_description],
                    ['heading' => $hr_solution_7_heading, 'description' => $hr_solution_7_description],
                ];

                // Check if at least one custom solution item exists to decide between dynamic/fallback
                $has_custom_solutions = false;
                foreach ($column1_items as $item) {
                    if (!empty($item['heading']) || !empty($item['description'])) {
                        $has_custom_solutions = true;
                        break;
                    }
                }
                if (!$has_custom_solutions) {
                    foreach ($column2_items as $item) {
                        if (!empty($item['heading']) || !empty($item['description'])) {
                            $has_custom_solutions = true;
                            break;
                        }
                    }
                }

                if ( $has_custom_solutions ) : ?>
                    <div class="col-md-6 pr-md-4 pr-xl-4">
                        <ul class="solution-overview">
                            <?php foreach ( $column1_items as $item ) :
                                if ( !empty( $item['heading'] ) || !empty( $item['description'] ) ) : ?>
                                    <li>
                                        <?php if ( $item['heading'] ) : ?>
                                            <h4><?php echo esc_html( $item['heading'] ); ?></h4>
                                        <?php endif; ?>
                                        <?php if ( $item['description'] ) : ?>
                                            <?php echo $item['description']; // Text Area content ?>
                                        <?php endif; ?>
                                    </li>
                                <?php endif;
                            endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-md-6 pl-md-4 pl-xl-5">
                        <ul class="solution-overview">
                            <?php foreach ( $column2_items as $item ) :
                                if ( !empty( $item['heading'] ) || !empty( $item['description'] ) ) : ?>
                                    <li>
                                        <?php if ( $item['heading'] ) : ?>
                                            <h4><?php echo esc_html( $item['heading'] ); ?></h4>
                                        <?php endif; ?>
                                        <?php if ( $item['description'] ) : ?>
                                            <?php echo $item['description']; // Text Area content ?>
                                        <?php endif; ?>
                                    </li>
                                <?php endif;
                            endforeach; ?>
                        </ul>
                    </div>
                <?php else :
                    // Fallback for Solution Overview if no custom ACF fields are filled
                    // This is the original hardcoded content
                    ?>
                    <div class="col-md-6 pr-md-4 pr-xl-4">
                        <ul class="solution-overview">
                            <li>
                                <h4>Core HCM</h4>
                                <p>Create a strong foundation to address all your organization needs.</p>
                            </li>
                            <li>
                                <h4>Talent Management</h4>
                                <p>Optimize your most important asset – your employees.</p>
                            </li>
                            <li>
                                <h4>Virtual Social Connect</h4>
                                <p>Connect, communicate and collaborate across the organization.</p>
                            </li>
                            <li>
                                <h4>HR Analytics</h4>
                                <p>Access People Insights – anywhere, anytime!</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pl-md-4 pl-xl-5">
                        <ul class="solution-overview">
                            <li>
                                <h4>Payroll</h4>
                                <p>Simplify your payroll and compliance activities.</p>
                            </li>
                            <li>
                                <h4>Learning Management System</h4>
                                <p>Run your learning activities under one roof.</p>
                            </li>
                            <li>
                                <h4>Sara – HR Chatbot</h4>
                                <p>Our all-new HR Chatbot that is redefining excellence in this vibrant new field</p>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>