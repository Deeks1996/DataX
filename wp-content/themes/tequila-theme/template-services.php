<?php
/*
Template Name: Services Page
Description: Custom template for the Services page.
*/
get_header();

// Fetch banner fields
$banner_video_url = get_field('services_banner_video_mp4');
$banner_x_image = get_field('services_banner_x_image'); // Returns an array
$page_title_override = get_field('services_page_title_override');

// Determine the page title to display
$display_page_title = $page_title_override ? $page_title_override : get_the_title();
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <?php if ($banner_video_url) : ?>
            <div class="img-box">
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url($banner_video_url); ?>" type="video/mp4" autoplay="true">
                </video>
            </div>
        <?php endif; ?>

        <?php if ($banner_x_image) : ?>
            <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
                <img src="<?php echo esc_url($banner_x_image['url']); ?>" alt="<?php echo esc_attr($banner_x_image['alt']); ?>">
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php echo esc_html($display_page_title); ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <?php
    // --- Consulting Services Section ---
    $consulting_bg_image = get_field('consulting_bg_image');
    $consulting_link_url = get_field('consulting_link_url');
    $consulting_main_heading = get_field('consulting_main_heading');
    $consulting_description = get_field('consulting_description');
    $consulting_list_item_1 = get_field('consulting_list_item_1');
    $consulting_list_item_2 = get_field('consulting_list_item_2');
    $consulting_list_item_3 = get_field('consulting_list_item_3');
    $consulting_button_text = get_field('consulting_button_text');

    if ($consulting_main_heading) : // Only display section if main heading exists
    ?>
        <section class="services consulting">
            <?php if ($consulting_bg_image) : ?>
                <div class="img-box">
                    <img src="<?php echo esc_url($consulting_bg_image['url']); ?>" alt="<?php echo esc_attr($consulting_bg_image['alt']); ?>" data-scroll data-scroll-speed="2">
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        </div>
                    <div class="col-12 col-md-6">
                        <div class="section-title mb-2 mb-sm-3">
                            <?php if ($consulting_link_url) : ?>
                                <a href="<?php echo esc_url(home_url($consulting_link_url)); ?>">
                                    <h4><?php echo esc_html($consulting_main_heading); ?></h4>
                                </a>
                            <?php else : ?>
                                <h4><?php echo esc_html($consulting_main_heading); ?></h4>
                            <?php endif; ?>
                            <?php if ($consulting_description) : ?>
                                <p><?php echo esc_html($consulting_description); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php
                        // Check if any list items exist before rendering the ul
                        if ($consulting_list_item_1 || $consulting_list_item_2 || $consulting_list_item_3) :
                        ?>
                            <ul class="solution-overview mb-4">
                                <?php if ($consulting_list_item_1) : ?>
                                    <li><h4><?php echo esc_html($consulting_list_item_1); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($consulting_list_item_2) : ?>
                                    <li><h4><?php echo esc_html($consulting_list_item_2); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($consulting_list_item_3) : ?>
                                    <li><h4><?php echo esc_html($consulting_list_item_3); ?></h4></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if ($consulting_button_text && $consulting_link_url) : ?>
                            <a href="<?php echo esc_url(home_url($consulting_link_url)); ?>" class="button anim">
                                <div class="img-box circle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-white.svg" alt="Icon Circle">
                                </div>
                                <div class="img-box arrow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow-white.svg" alt="Icon Circle">
                                </div>
                                <span class="text-white"><?php echo esc_html($consulting_button_text); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    // --- Technical Services Section ---
    $technical_bg_image = get_field('technical_bg_image');
    $technical_link_url = get_field('technical_link_url');
    $technical_main_heading = get_field('technical_main_heading');
    $technical_description = get_field('technical_description');
    $technical_list_item_1 = get_field('technical_list_item_1');
    $technical_list_item_2 = get_field('technical_list_item_2');
    $technical_list_item_3 = get_field('technical_list_item_3');
    $technical_button_text = get_field('technical_button_text');

    if ($technical_main_heading) : // Only display section if main heading exists
    ?>
        <section class="services technical">
            <?php if ($technical_bg_image) : ?>
                <div class="img-box">
                    <img src="<?php echo esc_url($technical_bg_image['url']); ?>" alt="<?php echo esc_attr($technical_bg_image['alt']); ?>" data-scroll data-scroll-speed="2">
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="row flex-md-row-reverse">
                    <div class="col-12 col-md-6">
                        </div>
                    <div class="col-12 col-md-6">
                        <div class="section-title mb-2 mb-sm-3">
                            <?php if ($technical_link_url) : ?>
                                <a href="<?php echo esc_url(home_url($technical_link_url)); ?>">
                                    <h4><?php echo esc_html($technical_main_heading); ?></h4>
                                </a>
                            <?php else : ?>
                                <h4><?php echo esc_html($technical_main_heading); ?></h4>
                            <?php endif; ?>
                            <?php if ($technical_description) : ?>
                                <p><?php echo esc_html($technical_description); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php
                        // Check if any list items exist before rendering the ul
                        if ($technical_list_item_1 || $technical_list_item_2 || $technical_list_item_3) :
                        ?>
                            <ul class="solution-overview mb-4">
                                <?php if ($technical_list_item_1) : ?>
                                    <li><h4><?php echo esc_html($technical_list_item_1); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($technical_list_item_2) : ?>
                                    <li><h4><?php echo esc_html($technical_list_item_2); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($technical_list_item_3) : ?>
                                    <li><h4><?php echo esc_html($technical_list_item_3); ?></h4></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if ($technical_button_text && $technical_link_url) : ?>
                            <a href="<?php echo esc_url(home_url($technical_link_url)); ?>" class="button anim">
                                <div class="img-box circle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-white.svg" alt="Icon Circle">
                                </div>
                                <div class="img-box arrow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow-white.svg" alt="Icon Circle">
                                </div>
                                <span class="text-white"><?php echo esc_html($technical_button_text); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    // --- Migration Services Section ---
    $migration_bg_image = get_field('migration_bg_image');
    $migration_link_url = get_field('migration_link_url');
    $migration_main_heading = get_field('migration_main_heading');
    $migration_description = get_field('migration_description');
    $migration_list_item_1 = get_field('migration_list_item_1');
    $migration_list_item_2 = get_field('migration_list_item_2');
    $migration_list_item_3 = get_field('migration_list_item_3');
    $migration_list_item_4 = get_field('migration_list_item_4');
    $migration_button_text = get_field('migration_button_text');

    if ($migration_main_heading) : // Only display section if main heading exists
    ?>
        <section class="services migration">
            <?php if ($migration_bg_image) : ?>
                <div class="img-box">
                    <img src="<?php echo esc_url($migration_bg_image['url']); ?>" alt="<?php echo esc_attr($migration_bg_image['alt']); ?>" data-scroll data-scroll-speed="2">
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        </div>
                    <div class="col-12 col-md-6">
                        <div class="section-title mb-2 mb-sm-3">
                            <?php if ($migration_link_url) : ?>
                                <a href="<?php echo esc_url(home_url($migration_link_url)); ?>">
                                    <h4><?php echo esc_html($migration_main_heading); ?></h4>
                                </a>
                            <?php else : ?>
                                <h4><?php echo esc_html($migration_main_heading); ?></h4>
                            <?php endif; ?>
                            <?php if ($migration_description) : ?>
                                <p><?php echo esc_html($migration_description); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php
                        // Check if any list items exist before rendering the ul
                        if ($migration_list_item_1 || $migration_list_item_2 || $migration_list_item_3 || $migration_list_item_4) :
                        ?>
                            <ul class="solution-overview mb-4">
                                <?php if ($migration_list_item_1) : ?>
                                    <li><h4><?php echo esc_html($migration_list_item_1); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($migration_list_item_2) : ?>
                                    <li><h4><?php echo esc_html($migration_list_item_2); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($migration_list_item_3) : ?>
                                    <li><h4><?php echo esc_html($migration_list_item_3); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($migration_list_item_4) : ?>
                                    <li><h4><?php echo esc_html($migration_list_item_4); ?></h4></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if ($migration_button_text && $migration_link_url) : ?>
                            <a href="<?php echo esc_url(home_url($migration_link_url)); ?>" class="button anim">
                                <div class="img-box circle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-white.svg" alt="Icon Circle">
                                </div>
                                <div class="img-box arrow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow-white.svg" alt="Icon Circle">
                                </div>
                                <span class="text-white"><?php echo esc_html($migration_button_text); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    // --- Training Services Section (using 'managed' class) ---
    $managed_bg_image = get_field('managed_bg_image');
    $managed_link_url = get_field('managed_link_url');
    $managed_main_heading = get_field('managed_main_heading');
    $managed_description = get_field('managed_description');
    $managed_list_item_1 = get_field('managed_list_item_1');
    $managed_list_item_2 = get_field('managed_list_item_2');
    $managed_list_item_3 = get_field('managed_list_item_3');
    $managed_button_text = get_field('managed_button_text');

    if ($managed_main_heading) : // Only display section if main heading exists
    ?>
        <section class="services managed">
            <?php if ($managed_bg_image) : ?>
                <div class="img-box">
                    <img src="<?php echo esc_url($managed_bg_image['url']); ?>" alt="<?php echo esc_attr($managed_bg_image['alt']); ?>" data-scroll data-scroll-speed="2">
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="row flex-md-row-reverse">
                    <div class="col-12 col-md-6">
                        </div>
                    <div class="col-12 col-md-6">
                        <div class="section-title mb-2 mb-sm-3">
                            <?php if ($managed_link_url) : ?>
                                <a href="<?php echo esc_url(home_url($managed_link_url)); ?>">
                                    <h4><?php echo esc_html($managed_main_heading); ?></h4>
                                </a>
                            <?php else : ?>
                                <h4><?php echo esc_html($managed_main_heading); ?></h4>
                            <?php endif; ?>
                            <?php if ($managed_description) : ?>
                                <p><?php echo esc_html($managed_description); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php
                        // Check if any list items exist before rendering the ul
                        if ($managed_list_item_1 || $managed_list_item_2 || $managed_list_item_3) :
                        ?>
                            <ul class="solution-overview mb-4">
                                <?php if ($managed_list_item_1) : ?>
                                    <li><h4><?php echo esc_html($managed_list_item_1); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($managed_list_item_2) : ?>
                                    <li><h4><?php echo esc_html($managed_list_item_2); ?></h4></li>
                                <?php endif; ?>
                                <?php if ($managed_list_item_3) : ?>
                                    <li><h4><?php echo esc_html($managed_list_item_3); ?></h4></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if ($managed_button_text && $managed_link_url) : ?>
                            <a href="<?php echo esc_url(home_url($managed_link_url)); ?>" class="button anim">
                                <div class="img-box circle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-white.svg" alt="Icon Circle">
                                </div>
                                <div class="img-box arrow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow-white.svg" alt="Icon Circle">
                                </div>
                                <span class="text-white"><?php echo esc_html($managed_button_text); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

</div>
<?php get_footer(); ?>