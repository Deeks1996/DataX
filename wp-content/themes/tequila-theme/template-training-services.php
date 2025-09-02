<?php
/**
 * Template Name: Training Services
 * Description: Page template for open-source training offerings.
 */
get_header(); 
?>

<div class="smooth-scroll">
    <section class="in-banner">
        <div class="img-box">
            <?php 
            $banner_video = get_field('training_banner_video_mp4');
            if( $banner_video ): ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url($banner_video); ?>" type="video/mp4">
                </video>
            <?php else: // Fallback to default video if ACF field is empty ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php 
            $banner_x_image = get_field('training_banner_x_image');
            if( $banner_x_image ): ?>
                <img src="<?php echo esc_url($banner_x_image); ?>" alt="X">
            <?php else: // Fallback to default image ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-banner/x.webp" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php 
                    $page_title = get_field('training_page_title');
                    if( $page_title ): ?>
                        <h2 class="page-title"><?php echo esc_html($page_title); ?></h2>
                    <?php else: // Fallback to standard WordPress title ?>
                        <h2 class="page-title"><?php the_title(); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-4 mb-md-5">
                        <?php 
                        $section_1_title = get_field('training_section_1_title');
                        if( $section_1_title ): ?>
                            <h4><?php echo esc_html($section_1_title); ?></h4>
                        <?php endif; ?>
                    </div>
                    <ul class="consulting-services-list mb-3 mb-md-5">
                        <?php 
                        // Training Service Item 1 (PostGreSQL)
                        $item_1_image = get_field('training_service_item_1_image');
                        $item_1_title = get_field('training_service_item_1_title');
                        $item_1_link = get_field('training_service_item_1_link'); 
                        if ($item_1_image || $item_1_title): ?>
                            <li>
                                <a href="<?php echo $item_1_link ? esc_url($item_1_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_1_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_1_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_1_image); ?>" alt="<?php echo esc_attr($item_1_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_1_title ): ?><div class="card-body"><?php echo esc_html($item_1_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php 
                        // Training Service Item 2 (MongoDB)
                        $item_2_image = get_field('training_service_item_2_image');
                        $item_2_title = get_field('training_service_item_2_title');
                        $item_2_link = get_field('training_service_item_2_link'); 
                        if ($item_2_image || $item_2_title): ?>
                            <li>
                                <a href="<?php echo $item_2_link ? esc_url($item_2_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_2_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_2_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_2_image); ?>" alt="<?php echo esc_attr($item_2_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_2_title ): ?><div class="card-body"><?php echo esc_html($item_2_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <?php 
                $postgresql_heading = get_field('training_postgresql_heading');
                if( $postgresql_heading ): ?>
                    <h5 class="pb-3"><?php echo esc_html($postgresql_heading); ?></h5>
                <?php endif; ?>

                <ul class="course-list row">
                    <?php 
                    // PostgreSQL Course 1
                    $pg_course_1_title = get_field('training_pg_course_1_title');
                    $pg_course_1_description = get_field('training_pg_course_1_description');
                    $pg_course_1_modal_title = get_field('training_pg_course_1_modal_title');
                    if( $pg_course_1_title || $pg_course_1_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $pg_course_1_title ): ?><h4><?php echo esc_html($pg_course_1_title); ?></h4><?php endif; ?>
                                    <?php if( $pg_course_1_description ): ?><p><?php echo esc_html($pg_course_1_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($pg_course_1_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php 
                    // PostgreSQL Course 2
                    $pg_course_2_title = get_field('training_pg_course_2_title');
                    $pg_course_2_description = get_field('training_pg_course_2_description');
                    $pg_course_2_modal_title = get_field('training_pg_course_2_modal_title');
                    if( $pg_course_2_title || $pg_course_2_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $pg_course_2_title ): ?><h4><?php echo esc_html($pg_course_2_title); ?></h4><?php endif; ?>
                                    <?php if( $pg_course_2_description ): ?><p><?php echo esc_html($pg_course_2_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($pg_course_2_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>
                    
                    <?php 
                    // PostgreSQL Course 3
                    $pg_course_3_title = get_field('training_pg_course_3_title');
                    $pg_course_3_description = get_field('training_pg_course_3_description');
                    $pg_course_3_modal_title = get_field('training_pg_course_3_modal_title');
                    if( $pg_course_3_title || $pg_course_3_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $pg_course_3_title ): ?><h4><?php echo esc_html($pg_course_3_title); ?></h4><?php endif; ?>
                                    <?php if( $pg_course_3_description ): ?><p><?php echo esc_html($pg_course_3_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($pg_course_3_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php 
                    // PostgreSQL Course 4
                    $pg_course_4_title = get_field('training_pg_course_4_title');
                    $pg_course_4_description = get_field('training_pg_course_4_description');
                    $pg_course_4_modal_title = get_field('training_pg_course_4_modal_title');
                    if( $pg_course_4_title || $pg_course_4_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $pg_course_4_title ): ?><h4><?php echo esc_html($pg_course_4_title); ?></h4><?php endif; ?>
                                    <?php if( $pg_course_4_description ): ?><p><?php echo esc_html($pg_course_4_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($pg_course_4_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php 
                    // PostgreSQL Course 5
                    $pg_course_5_title = get_field('training_pg_course_5_title');
                    $pg_course_5_description = get_field('training_pg_course_5_description');
                    $pg_course_5_modal_title = get_field('training_pg_course_5_modal_title');
                    if( $pg_course_5_title || $pg_course_5_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $pg_course_5_title ): ?><h4><?php echo esc_html($pg_course_5_title); ?></h4><?php endif; ?>
                                    <?php if( $pg_course_5_description ): ?><p><?php echo esc_html($pg_course_5_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($pg_course_5_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>
                    
                    <?php 
                    // PostgreSQL Course 6
                    $pg_course_6_title = get_field('training_pg_course_6_title');
                    $pg_course_6_description = get_field('training_pg_course_6_description');
                    $pg_course_6_modal_title = get_field('training_pg_course_6_modal_title');
                    if( $pg_course_6_title || $pg_course_6_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $pg_course_6_title ): ?><h4><?php echo esc_html($pg_course_6_title); ?></h4><?php endif; ?>
                                    <?php if( $pg_course_6_description ): ?><p><?php echo esc_html($pg_course_6_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($pg_course_6_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php 
                    // PostgreSQL Course 7
                    $pg_course_7_title = get_field('training_pg_course_7_title');
                    $pg_course_7_description = get_field('training_pg_course_7_description');
                    $pg_course_7_modal_title = get_field('training_pg_course_7_modal_title');
                    if( $pg_course_7_title || $pg_course_7_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $pg_course_7_title ): ?><h4><?php echo esc_html($pg_course_7_title); ?></h4><?php endif; ?>
                                    <?php if( $pg_course_7_description ): ?><p><?php echo esc_html($pg_course_7_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($pg_course_7_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>

                <?php 
                $mongodb_heading = get_field('training_mongodb_heading');
                if( $mongodb_heading ): ?>
                    <h5 class="pb-3"><?php echo esc_html($mongodb_heading); ?></h5>
                <?php endif; ?>

                <ul class="course-list row">
                    <?php 
                    // MongoDB Course 1
                    $mg_course_1_title = get_field('training_mg_course_1_title');
                    $mg_course_1_description = get_field('training_mg_course_1_description');
                    $mg_course_1_modal_title = get_field('training_mg_course_1_modal_title');
                    if( $mg_course_1_title || $mg_course_1_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $mg_course_1_title ): ?><h4><?php echo esc_html($mg_course_1_title); ?></h4><?php endif; ?>
                                    <?php if( $mg_course_1_description ): ?><p><?php echo esc_html($mg_course_1_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($mg_course_1_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php 
                    // MongoDB Course 2
                    $mg_course_2_title = get_field('training_mg_course_2_title');
                    $mg_course_2_description = get_field('training_mg_course_2_description');
                    $mg_course_2_modal_title = get_field('training_mg_course_2_modal_title');
                    if( $mg_course_2_title || $mg_course_2_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $mg_course_2_title ): ?><h4><?php echo esc_html($mg_course_2_title); ?></h4><?php endif; ?>
                                    <?php if( $mg_course_2_description ): ?><p><?php echo esc_html($mg_course_2_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($mg_course_2_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php 
                    // MongoDB Course 3
                    $mg_course_3_title = get_field('training_mg_course_3_title');
                    $mg_course_3_description = get_field('training_mg_course_3_description');
                    $mg_course_3_modal_title = get_field('training_mg_course_3_modal_title');
                    if( $mg_course_3_title || $mg_course_3_description ): ?>
                        <li class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <?php if( $mg_course_3_title ): ?><h4><?php echo esc_html($mg_course_3_title); ?></h4><?php endif; ?>
                                    <?php if( $mg_course_3_description ): ?><p><?php echo esc_html($mg_course_3_description); ?></p><?php endif; ?>
                                </div>
                                <div class="card-footer">
                                    <a href="javascript:void(0)" class="button custom-modal-trigger"
                                    data-toggle="modal" data-target="#enrolmentFormModal"
                                    data-form-title="<?php echo esc_attr($mg_course_3_modal_title); ?>">Enroll now</a>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

<div class="modal fade" id="enrolmentFormModal" tabindex="-1" role="dialog" aria-labelledby="enrolmentFormLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="enrolmentFormLabel">Register to learn</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="enrollmentForm">
                    <?php
                    // This shortcode is still page-specific for simplicity with ACF Basic.
                    $modal_form_shortcode = get_field('training_modal_form_shortcode'); 
                    if( $modal_form_shortcode ):
                        echo do_shortcode($modal_form_shortcode);
                    else: // Fallback to hardcoded shortcode if ACF field is empty
                        echo do_shortcode('[contact-form-7 id="6592a90" title="Training Services Enrollment Form"]');
                    endif;
                    ?>
                </div>
            </div>
            <div class="modal-footer d-none"></div>
        </div>
    </div>
</div>