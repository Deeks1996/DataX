<?php
/**
 * Template Name: Consulting Services Page
 * Description: Custom page template for the Consulting Services page.
 */
get_header(); 
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php 
            $banner_video = get_field('consulting_banner_video_mp4');
            if( $banner_video ): ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url($banner_video); ?>" type="video/mp4" autoplay="true">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php 
            $banner_x_image = get_field('consulting_banner_x_image');
            if( $banner_x_image ): ?>
                <img src="<?php echo esc_url($banner_x_image); ?>" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php 
                    $page_title = get_field('consulting_page_title');
                    if( $page_title ): ?>
                        <h2 class="page-title"><?php echo esc_html($page_title); ?></h2>
                    <?php else: ?>
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
                        $section_1_title = get_field('consulting_section_1_title');
                        if( $section_1_title ): ?>
                            <h4><?php echo esc_html($section_1_title); ?></h4>
                        <?php endif; ?>
                        <?php 
                        $section_1_description = get_field('consulting_section_1_description');
                        if( $section_1_description ): ?>
                            <p><?php echo esc_html($section_1_description); ?></p>
                        <?php endif; ?>
                    </div>
                    
                    <ul class="consulting-services-list mb-3 mb-md-5">
                        <?php 
                        // Service Item 1
                        $item_1_image = get_field('consulting_service_item_1_image');
                        $item_1_title = get_field('consulting_service_item_1_title');
                        $item_1_link = get_field('consulting_service_item_1_link');
                        if ($item_1_image || $item_1_title): ?>
                            <li>
                                <a href="<?php echo $item_1_link ? esc_url($item_1_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_1_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_1_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_1_image); ?>" alt="<?php echo esc_attr($item_1_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_1_title ): ?><div class="card-body"><?php echo esc_html($item_1_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php 
                        // Service Item 2
                        $item_2_image = get_field('consulting_service_item_2_image');
                        $item_2_title = get_field('consulting_service_item_2_title');
                        $item_2_link = get_field('consulting_service_item_2_link');
                        if ($item_2_image || $item_2_title): ?>
                            <li>
                                <a href="<?php echo $item_2_link ? esc_url($item_2_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_2_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_2_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_2_image); ?>" alt="<?php echo esc_attr($item_2_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_2_title ): ?><div class="card-body"><?php echo esc_html($item_2_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php 
                        // Service Item 3
                        $item_3_image = get_field('consulting_service_item_3_image');
                        $item_3_title = get_field('consulting_service_item_3_title');
                        $item_3_link = get_field('consulting_service_item_3_link');
                        if ($item_3_image || $item_3_title): ?>
                            <li>
                                <a href="<?php echo $item_3_link ? esc_url($item_3_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_3_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_3_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_3_image); ?>" alt="<?php echo esc_attr($item_3_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_3_title ): ?><div class="card-body"><?php echo esc_html($item_3_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php 
                        // Service Item 4
                        $item_4_image = get_field('consulting_service_item_4_image');
                        $item_4_title = get_field('consulting_service_item_4_title');
                        $item_4_link = get_field('consulting_service_item_4_link');
                        if ($item_4_image || $item_4_title): ?>
                            <li>
                                <a href="<?php echo $item_4_link ? esc_url($item_4_link) : 'javascript:void(0)'; ?>" class="card <?php echo $item_4_link ? '' : 'disabled'; ?>">
                                    <?php if( $item_4_image ): ?><div class="card-img"><img src="<?php echo esc_url($item_4_image); ?>" alt="<?php echo esc_attr($item_4_title); ?>"></div><?php endif; ?>
                                    <?php if( $item_4_title ): ?><div class="card-body"><?php echo esc_html($item_4_title); ?></div><?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="col-12">
                    <div class="section-title mb-2 mb-sm-3 mb-lg-4">
                        <?php 
                        $design_deployment_section_title = get_field('consulting_design_deployment_section_title');
                        if( $design_deployment_section_title ): ?>
                            <h4><?php echo esc_html($design_deployment_section_title); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>

                <?php 
                // Collect all design topics
                $design_topics = [];
                for ($i = 1; $i <= 7; $i++) { // Assuming up to 7 topics based on your original code
                    $topic_title = get_field('consulting_design_topic_' . $i . '_title');
                    if ($topic_title) {
                        $design_topics[] = $topic_title;
                    }
                }

                if (!empty($design_topics)): 
                    $half = ceil(count($design_topics) / 2);
                ?>
                    <div class="col-md-6 pr-md-4 pr-xl-4">
                        <ul class="solution-overview services-topics">
                            <?php 
                            for ($i = 0; $i < $half; $i++): ?>
                                <li>
                                    <h4><?php echo esc_html($design_topics[$i]); ?></h4>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div class="col-md-6 pl-md-4 pl-xl-5">
                        <ul class="solution-overview services-topics">
                            <?php 
                            for ($i = $half; $i < count($design_topics); $i++): ?>
                                <li>
                                    <h4><?php echo esc_html($design_topics[$i]); ?></h4>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="col-12 mt-4 mt-md-5">
                    <div class="section-title mb-2 mb-sm-3 mb-lg-4">
                        <?php 
                        $devops_section_title = get_field('consulting_devops_section_title');
                        if( $devops_section_title ): ?>
                            <h4><?php echo esc_html($devops_section_title); ?></h4>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6 pr-md-4 pr-xl-4">
                    <?php 
                    $devops_subtitle_1 = get_field('consulting_devops_subtitle_1');
                    if( $devops_subtitle_1 ): ?>
                        <h5><?php echo esc_html($devops_subtitle_1); ?></h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // DevOps List 1 Item 1
                        $devops_list_1_item_1_text = get_field('consulting_devops_list_1_item_1_text');
                        if( $devops_list_1_item_1_text ): ?>
                            <li><h4><?php echo esc_html($devops_list_1_item_1_text); ?></h4></li>
                        <?php endif; ?>
                        <?php 
                        // DevOps List 1 Item 2
                        $devops_list_1_item_2_text = get_field('consulting_devops_list_1_item_2_text');
                        if( $devops_list_1_item_2_text ): ?>
                            <li><h4><?php echo esc_html($devops_list_1_item_2_text); ?></h4></li>
                        <?php endif; ?>
                        <?php 
                        // DevOps List 1 Item 3
                        $devops_list_1_item_3_text = get_field('consulting_devops_list_1_item_3_text');
                        if( $devops_list_1_item_3_text ): ?>
                            <li><h4><?php echo esc_html($devops_list_1_item_3_text); ?></h4></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="col-md-6 pl-md-4 pl-xl-5">
                    <?php 
                    $devops_subtitle_2 = get_field('consulting_devops_subtitle_2');
                    if( $devops_subtitle_2 ): ?>
                        <h5 class="<?php echo $devops_subtitle_2 ? '' : 'd-none d-md-block'; ?>"><?php echo esc_html($devops_subtitle_2); ?></h5>
                    <?php else: ?>
                         <h5 class="d-none d-md-block">&nbsp;</h5>
                    <?php endif; ?>
                    <ul class="solution-overview services-topics">
                        <?php 
                        // DevOps List 2 Item 1
                        $devops_list_2_item_1_text = get_field('consulting_devops_list_2_item_1_text');
                        if( $devops_list_2_item_1_text ): ?>
                            <li><h4><?php echo esc_html($devops_list_2_item_1_text); ?></h4></li>
                        <?php endif; ?>
                        <?php 
                        // DevOps List 2 Item 2
                        $devops_list_2_item_2_text = get_field('consulting_devops_list_2_item_2_text');
                        if( $devops_list_2_item_2_text ): ?>
                            <li><h4><?php echo esc_html($devops_list_2_item_2_text); ?></h4></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="know-more-band">
        <div class="container">
            <?php 
            $contact_section_title = get_field('consulting_contact_section_title');
            if( $contact_section_title ): ?>
                <div class="section-title mb-4">
                    <h4><?php echo esc_html($contact_section_title); ?></h4>
                </div>
            <?php endif; ?>

            <?php 
            $contact_form_shortcode = get_field('consulting_contact_form_shortcode');
            if( $contact_form_shortcode ):
                echo do_shortcode($contact_form_shortcode);
            endif;
            ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>