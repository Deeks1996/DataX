<?php
/**
 * Template Name: Technical Services Template
 * Description: Custom template for the Technical Services page.
 */

get_header(); 
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php 
            $banner_video = get_field('technical_banner_video_mp4');
            if( $banner_video ): ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url($banner_video); ?>" type="video/mp4" autoplay="true">
                </video>
            <?php else: // Fallback to default video if ACF field is empty ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php 
            $banner_x_image = get_field('technical_banner_x_image');
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
                    $page_title = get_field('technical_page_title');
                    if( $page_title ): ?>
                        <h2 class="page-title"><?php echo esc_html($page_title); ?></h2>
                    <?php else: // Fallback to standard WordPress title ?>
                        <h2 class="page-title"><?php the_title(); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink( get_page_by_path( 'services' ) ); ?>">Services</a></li>
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
                    <div class="section-title mb-4">
                        <?php 
                        $section_1_title = get_field('technical_section_1_title');
                        if( $section_1_title ): ?>
                            <h4><?php echo esc_html($section_1_title); ?></h4>
                        <?php endif; ?>
                        <?php 
                        $section_1_description = get_field('technical_section_1_description');
                        if( $section_1_description ): ?>
                            <p><?php echo esc_html($section_1_description); ?></p>
                        <?php endif; ?>
                    </div>
                    <ul class="consulting-services-list mb-3 mb-md-5">
                        <?php 
                        // Technical Service Item 1
                        $item_1_image = get_field('technical_service_item_1_image');
                        $item_1_title = get_field('technical_service_item_1_title');
                        $item_1_link = get_field('technical_service_item_1_link');
                        if ($item_1_image || $item_1_title): ?>
                            <li>
                                <a href="<?php echo $item_1_link ? esc_url($item_1_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_1_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_1_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_1_image); ?>" alt="<?php echo esc_attr($item_1_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_1_title ): ?><div class="card-body"><?php echo esc_html($item_1_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php 
                        // Technical Service Item 2
                        $item_2_image = get_field('technical_service_item_2_image');
                        $item_2_title = get_field('technical_service_item_2_title');
                        $item_2_link = get_field('technical_service_item_2_link');
                        if ($item_2_image || $item_2_title): ?>
                            <li>
                                <a href="<?php echo $item_2_link ? esc_url($item_2_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_2_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_2_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_2_image); ?>" alt="<?php echo esc_attr($item_2_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_2_title ): ?><div class="card-body"><?php echo esc_html($item_2_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php 
                        // Technical Service Item 3
                        $item_3_image = get_field('technical_service_item_3_image');
                        $item_3_title = get_field('technical_service_item_3_title');
                        $item_3_link = get_field('technical_service_item_3_link');
                        if ($item_3_image || $item_3_title): ?>
                            <li>
                                <a href="<?php echo $item_3_link ? esc_url($item_3_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_3_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_3_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_3_image); ?>" alt="<?php echo esc_attr($item_3_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_3_title ): ?><div class="card-body"><?php echo esc_html($item_3_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="col-12">
                    <div class="section-title mb-2 mb-sm-3 mb-lg-4">
                        <?php 
                        $postgresql_section_title = get_field('technical_postgresql_section_title');
                        if( $postgresql_section_title ): ?>
                            <h4><?php echo esc_html($postgresql_section_title); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6 pr-md-4 pr-xl-5 mb-md-4">
                    <?php 
                    $postgresql_subtitle_1 = get_field('technical_postgresql_subtitle_1');
                    if( $postgresql_subtitle_1 ): ?>
                        <h5><?php echo esc_html($postgresql_subtitle_1); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // PostgreSQL List 1 Items (up to 7 items)
                        for ($i = 1; $i <= 7; $i++):
                            $list_item_text = get_field('technical_postgresql_list_1_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>

                <div class="col-md-6 pl-md-4 pl-xl-5 mb-4">
                    <?php 
                    $postgresql_subtitle_2 = get_field('technical_postgresql_subtitle_2');
                    if( $postgresql_subtitle_2 ): ?>
                        <h5 class="<?php echo $postgresql_subtitle_2 ? '' : 'd-none d-md-block'; ?>"><?php echo esc_html($postgresql_subtitle_2); ?></h5>
                    <?php else: // Placeholder for layout alignment ?>
                         <h5 class="d-none d-md-block">&nbsp;</h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // PostgreSQL List 2 Items (up to 5 items)
                        for ($i = 1; $i <= 5; $i++):
                            $list_item_text = get_field('technical_postgresql_list_2_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>

                <div class="col-md-6 pr-md-4 pr-xl-4">
                    <?php 
                    $postgresql_subtitle_3 = get_field('technical_postgresql_subtitle_3');
                    if( $postgresql_subtitle_3 ): ?>
                        <h5><?php echo esc_html($postgresql_subtitle_3); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics mb-4">
                        <?php 
                        // PostgreSQL List 3 Items (up to 4 items)
                        for ($i = 1; $i <= 4; $i++):
                            $list_item_text = get_field('technical_postgresql_list_3_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>

                <div class="col-md-6 pl-md-4 pl-xl-5">
                    <?php 
                    $postgresql_subtitle_4 = get_field('technical_postgresql_subtitle_4');
                    if( $postgresql_subtitle_4 ): ?>
                        <h5><?php echo esc_html($postgresql_subtitle_4); ?></h5>
                    <?php else: // Placeholder for layout alignment ?>
                         <h5 class="d-none d-md-block">&nbsp;</h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics mb-4">
                        <?php 
                        // PostgreSQL List 4 Items (up to 3 items)
                        for ($i = 1; $i <= 3; $i++):
                            $list_item_text = get_field('technical_postgresql_list_4_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>

                <div class="col-12">
                    <div class="section-title mb-2 mb-sm-3 mb-lg-4">
                        <?php 
                        $mongodb_section_title = get_field('technical_mongodb_section_title');
                        if( $mongodb_section_title ): ?>
                            <h4><?php echo esc_html($mongodb_section_title); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 pr-md-4 pr-xl-4">
                    <?php 
                    $mongodb_subtitle_1 = get_field('technical_mongodb_subtitle_1');
                    if( $mongodb_subtitle_1 ): ?>
                        <h5><?php echo esc_html($mongodb_subtitle_1); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // MongoDB List 1 Items (up to 8 items)
                        for ($i = 1; $i <= 8; $i++):
                            $list_item_text = get_field('technical_mongodb_list_1_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>
                <div class="col-md-6 pl-md-4 pl-xl-5 mb-4">
                    <?php 
                    $mongodb_subtitle_2 = get_field('technical_mongodb_subtitle_2');
                    if( $mongodb_subtitle_2 ): ?>
                        <h5><?php echo esc_html($mongodb_subtitle_2); ?></h5>
                    <?php else: // Placeholder for layout alignment ?>
                         <h5 class="d-none d-md-block">&nbsp;</h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // MongoDB List 2 Items (up to 9 items)
                        for ($i = 1; $i <= 9; $i++):
                            $list_item_text = get_field('technical_mongodb_list_2_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>

                <div class="col-12">
                    <div class="section-title mb-2 mb-sm-3 mb-lg-4">
                        <?php 
                        $elastic_section_title = get_field('technical_elastic_section_title');
                        if( $elastic_section_title ): ?>
                            <h4><?php echo esc_html($elastic_section_title); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 pr-md-4 pr-xl-4">
                    <?php 
                    $elastic_subtitle_1 = get_field('technical_elastic_subtitle_1');
                    if( $elastic_subtitle_1 ): ?>
                        <h5><?php echo esc_html($elastic_subtitle_1); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // Elastic List 1 Items (up to 5 items)
                        for ($i = 1; $i <= 5; $i++):
                            $list_item_text = get_field('technical_elastic_list_1_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>
                <div class="col-md-6 pl-md-4 pl-xl-5">
                    <?php 
                    $elastic_subtitle_2 = get_field('technical_elastic_subtitle_2');
                    if( $elastic_subtitle_2 ): ?>
                        <h5 class="<?php echo $elastic_subtitle_2 ? '' : 'd-none d-md-block'; ?>"><?php echo esc_html($elastic_subtitle_2); ?></h5>
                    <?php else: // Placeholder for layout alignment ?>
                         <h5 class="d-none d-md-block">&nbsp;</h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // Elastic List 2 Items (up to 4 items)
                        for ($i = 1; $i <= 4; $i++):
                            $list_item_text = get_field('technical_elastic_list_2_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="know-more-band">
        <div class="container">
            <?php 
            $contact_section_title = get_field('technical_contact_section_title');
            if( $contact_section_title ): ?>
                <div class="section-title mb-4">
                    <h4><?php echo esc_html($contact_section_title); ?></h4>
                </div>
            <?php endif; ?>

            <?php 
            $contact_form_shortcode = get_field('technical_contact_form_shortcode');
            if( $contact_form_shortcode ):
                echo do_shortcode($contact_form_shortcode);
            else: // Fallback to hardcoded shortcode if ACF field is empty
                echo do_shortcode('[contact-form-7 id="34ac436" title="Contact form 1"]');
            endif;
            ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>