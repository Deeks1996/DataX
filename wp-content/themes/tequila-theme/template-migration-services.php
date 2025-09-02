<?php
/**
 * Template Name: Migration Services Page
 * Description: Custom template for the Migration Services page.
 */
get_header(); 
?>

<div class="cursor"></div>
<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php 
            $banner_video = get_field('migration_banner_video_mp4');
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
            $banner_x_image = get_field('migration_banner_x_image');
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
                    $page_title = get_field('migration_page_title');
                    if( $page_title ): ?>
                        <h2 class="page-title"><?php echo esc_html($page_title); ?></h2>
                    <?php else: // Fallback to standard WordPress title ?>
                        <h2 class="page-title"><?php the_title(); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ); ?>">Services</a></li>
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
                    <?php
                    // This outputs content entered in the standard WordPress editor for the page.
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>

                <div class="col-12">
                    <div class="section-title mb-4">
                        <?php 
                        $section_1_title = get_field('migration_section_1_title');
                        if( $section_1_title ): ?>
                            <h4><?php echo esc_html($section_1_title); ?></h4>
                        <?php endif; ?>
                    </div>
                    <ul class="consulting-services-list mb-3 mb-md-5">
                        <?php 
                        // Migration Service Item 1 (Cloud)
                        $item_1_image = get_field('migration_service_item_1_image');
                        $item_1_title = get_field('migration_service_item_1_title');
                        $item_1_link = get_field('migration_service_item_1_link');
                        if ($item_1_image || $item_1_title): ?>
                            <li>
                                <a href="<?php echo $item_1_link ? esc_url($item_1_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_1_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_1_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_1_image); ?>" alt="<?php echo esc_attr($item_1_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_1_title ): ?><div class="card-body"><?php echo esc_html($item_1_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php 
                        // Migration Service Item 2 (PostGreSQL)
                        $item_2_image = get_field('migration_service_item_2_image');
                        $item_2_title = get_field('migration_service_item_2_title');
                        $item_2_link = get_field('migration_service_item_2_link');
                        if ($item_2_image || $item_2_title): ?>
                            <li>
                                <a href="<?php echo $item_2_link ? esc_url($item_2_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_2_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_2_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_2_image); ?>" alt="<?php echo esc_attr($item_2_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_2_title ): ?><div class="card-body"><?php echo esc_html($item_2_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php 
                        // Migration Service Item 3 (MongoDB)
                        $item_3_image = get_field('migration_service_item_3_image');
                        $item_3_title = get_field('migration_service_item_3_title');
                        $item_3_link = get_field('migration_service_item_3_link');
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

                <div class="col-md-6 pr-md-4 pr-xl-5">
                    <?php 
                    $platform_migration_subtitle = get_field('migration_platform_migration_subtitle');
                    if( $platform_migration_subtitle ): ?>
                        <h5><?php echo esc_html($platform_migration_subtitle); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics mb-4">
                        <?php 
                        // Platform Migration List Items (up to 3 items)
                        for ($i = 1; $i <= 3; $i++):
                            $list_item_text = get_field('migration_platform_migration_list_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>

                    <?php 
                    $typical_workload_subtitle = get_field('migration_typical_workload_subtitle');
                    if( $typical_workload_subtitle ): ?>
                        <h5><?php echo esc_html($typical_workload_subtitle); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics mb-4">
                        <?php 
                        // Typical Workload List Items (up to 5 items)
                        for ($i = 1; $i <= 5; $i++):
                            $list_item_text = get_field('migration_typical_workload_list_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>

                <div class="col-md-6 pl-md-4 pl-xl-5">
                    <?php 
                    $platform_methodology_subtitle = get_field('migration_platform_methodology_subtitle');
                    if( $platform_methodology_subtitle ): ?>
                        <h5><?php echo esc_html($platform_methodology_subtitle); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics mb-4 mb-md-0">
                        <?php 
                        // Platform Migration Methodology List Items (up to 8 items)
                        for ($i = 1; $i <= 8; $i++):
                            $list_item_text = get_field('migration_platform_methodology_list_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>

                <div class="col-md-6 pr-md-4 pr-xl-5">
                    <?php 
                    $database_methodology_subtitle = get_field('migration_database_methodology_subtitle');
                    if( $database_methodology_subtitle ): ?>
                        <h5><?php echo esc_html($database_methodology_subtitle); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics mb-md-4">
                        <?php 
                        // Database Migration Methodology List 1 Items (up to 4 items)
                        for ($i = 1; $i <= 4; $i++):
                            $list_item_text = get_field('migration_database_methodology_list_1_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>

                <div class="col-md-6 pl-md-4 pl-xl-5">
                    <h5 class="d-none d-md-block">&nbsp;</h5>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // Database Migration Methodology List 2 Items (up to 5 items)
                        for ($i = 1; $i <= 5; $i++):
                            $list_item_text = get_field('migration_database_methodology_list_2_item_' . $i . '_text');
                            if( $list_item_text ): ?>
                                <li><h4><?php echo esc_html($list_item_text); ?></h4></li>
                            <?php endif;
                        endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="know-more-band">
        <div class="container">
            <div class="section-title mb-4">
                <?php 
                $contact_section_title = get_field('migration_contact_section_title');
                if( $contact_section_title ): ?>
                    <h4><?php echo esc_html($contact_section_title); ?></h4>
                <?php else: ?>
                    <h4>Know more about our migration services</h4>
                <?php endif; ?>
            </div>

            <?php 
            $contact_form_shortcode = get_field('migration_contact_form_shortcode');
            if( $contact_form_shortcode ):
                echo do_shortcode($contact_form_shortcode);
            else: // Fallback to hardcoded shortcode if ACF field is empty
                echo do_shortcode('[contact-form-7 id="34ac436" title="Contact form 1"]');
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer(); 
?>