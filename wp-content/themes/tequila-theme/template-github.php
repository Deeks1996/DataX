<?php
/**
 * Template Name: Github Page Template
 */

get_header(); // Includes your header.php

// Fetch ACF fields for the current page
$github_hero_video_url          = get_field('github_hero_video_url');
$github_x_image                 = get_field('github_x_image');
$github_tech_banner_bg_image    = get_field('github_tech_banner_bg_image');
$github_tech_banner_logo        = get_field('github_tech_banner_logo');
$github_tech_banner_title       = get_field('github_tech_banner_title');
$github_main_content            = get_field('github_main_content');

$github_benefits_title          = get_field('github_benefits_title');
$github_benefits_description    = get_field('github_benefits_description');
// Individual Benefit Items (Group fields with 'text' subfield)
$github_benefits_list_item_1    = get_field('github_benefits_list_item_1');
$github_benefits_list_item_2    = get_field('github_benefits_list_item_2');
$github_benefits_list_item_3    = get_field('github_benefits_list_item_3');
$github_benefits_list_item_4    = get_field('github_benefits_list_item_4');
$github_benefits_list_item_5    = get_field('github_benefits_list_item_5');

$github_tips_title              = get_field('github_tips_title');
$github_tips_description        = get_field('github_tips_description');
// Workflow Tips (Group fields with 'image', 'title', 'description' subfields)
$github_workflow_tip_1          = get_field('github_workflow_tip_1');
$github_workflow_tip_2          = get_field('github_workflow_tip_2');
$github_workflow_tip_3          = get_field('github_workflow_tip_3');
$github_workflow_tip_4          = get_field('github_workflow_tip_4');
$github_workflow_tip_5          = get_field('github_workflow_tip_5');

$github_know_more_text          = get_field('github_know_more_text');
$github_know_more_button_text   = get_field('github_know_more_button_text');
$github_know_more_button_link   = get_field('github_know_more_button_link');

?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $github_hero_video_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $github_hero_video_url ); ?>" type="video/mp4">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $github_x_image && is_array($github_x_image) ) : ?>
                <img src="<?php echo esc_url( $github_x_image['url'] ); ?>" alt="<?php echo esc_attr( $github_x_image['alt'] ); ?>">
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
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/technologies' ) ); ?>">Technologies</a></li>
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
                            <?php if ( $github_tech_banner_bg_image && is_array($github_tech_banner_bg_image) ) : ?>
                                <img src="<?php echo esc_url( $github_tech_banner_bg_image['url'] ); ?>" alt="<?php echo esc_attr( $github_tech_banner_bg_image['alt'] ); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-solution/git-bg.webp" alt="Background Image">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="img-box">
                                <?php if ( $github_tech_banner_logo && is_array($github_tech_banner_logo) ) : ?>
                                    <img src="<?php echo esc_url( $github_tech_banner_logo['url'] ); ?>" alt="<?php echo esc_attr( $github_tech_banner_logo['alt'] ); ?>">
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-solution/git.webp" alt="GitHub Logo">
                                <?php endif; ?>
                            </div>
                            <?php if ( $github_tech_banner_title ) : ?>
                                <h4><?php echo esc_html( $github_tech_banner_title ); ?></h4>
                            <?php else : ?>
                                <h4>GitHub is how people build software.</h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 mb-md-4">
                    <?php
                    // Display the main content from the ACF field
                    if ( $github_main_content ) :
                        echo apply_filters( 'the_content', $github_main_content );
                    else :
                        // Fallback to default WordPress content if ACF field is empty
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        else :
                            echo '<p>No content found for this page.</p>';
                        endif;
                    endif;
                    ?>
                </div>
                <div class="col-12">
                    <div class="section-title mb-4">
                        <?php if ( $github_benefits_title ) : ?>
                            <h4><?php echo esc_html( $github_benefits_title ); ?></h4>
                        <?php else : ?>
                            <h4>Benefits of our offerings</h4>
                        <?php endif; ?>
                        <?php if ( $github_benefits_description ) : ?>
                            <?php echo apply_filters( 'the_content', $github_benefits_description ); ?>
                        <?php else : ?>
                            <p>Whether you work for a small startup, a university, or a large enterprise company, GitHub enables powerful, collaborative workflows. You can use GitHub in the
                                cloud or GitHub Enterprise on your server, then integrate your favorite apps and services to customize to build software.
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php
                    // Grouping benefit items into an array for easier loop
                    $benefits_items = [
                        $github_benefits_list_item_1,
                        $github_benefits_list_item_2,
                        $github_benefits_list_item_3,
                        $github_benefits_list_item_4,
                        $github_benefits_list_item_5,
                    ];
                    // Check if any benefit item exists by checking for non-empty arrays with a 'text' key
                    $benefits_exist = false;
                    foreach ($benefits_items as $item) {
                        if (is_array($item) && isset($item['text']) && !empty($item['text'])) {
                            $benefits_exist = true;
                            break;
                        }
                    }
                    ?>
                    <?php if ( $benefits_exist ) : ?>
                        <ul class="blt-list mb-4 mb-md-5">
                            <?php foreach ($benefits_items as $item) : ?>
                                <?php if ( is_array($item) && isset($item['text']) && !empty($item['text']) ) : ?>
                                    <li><p><?php echo esc_html( $item['text'] ); ?></p></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <ul class="blt-list mb-4 mb-md-5">
                            <li><p>All round operational support</p></li>
                            <li><p>Design & architecting skills for your current & future needs</p></li>
                            <li><p>Providing automation to address rapidly scaling landscape</p></li>
                            <li><p>Integration & deployment expertise to simplify the complexities</p></li>
                            <li><p>Unbiased, independent insights for better & smarter decision making</p></li>
                        </ul>
                    <?php endif; ?>

                    <div class="section-title">
                        <?php if ( $github_tips_title ) : ?>
                            <h4><?php echo esc_html( $github_tips_title ); ?></h4>
                        <?php else : ?>
                            <h4>5 tips for a more efficient workflow</h4>
                        <?php endif; ?>
                        <?php if ( $github_tips_description ) : ?>
                            <?php echo apply_filters( 'the_content', $github_tips_description ); ?>
                        <?php else : ?>
                            <p>DevOps makes building and shipping software faster, friendlier, and more collaborative. Developers on DevOps teams are more able to focus on their goals,
                                prioritize work-life balance, and get more time for the projects they care about. Want to learn how to implement DevOps strategies into your own business? Here
                                are five practical tips that will help you optimize your workflow.</p>
                        <?php endif; ?>
                    </div>
                    <div class="content-box topic-list">
                        <?php
                        // Grouping workflow tips into an array for easier loop
                        $workflow_tips = [
                            $github_workflow_tip_1,
                            $github_workflow_tip_2,
                            $github_workflow_tip_3,
                            $github_workflow_tip_4,
                            $github_workflow_tip_5,
                        ];
                        // Check if any workflow tip exists
                        $workflow_tips_exist = false;
                        foreach ($workflow_tips as $item) {
                            if (is_array($item) && isset($item['image']) && is_array($item['image']) && !empty($item['image']['url']) && isset($item['title']) && !empty($item['title'])) {
                                $workflow_tips_exist = true;
                                break;
                            }
                        }
                        ?>
                        <?php if ( $workflow_tips_exist ) : ?>
                            <ul>
                                <?php foreach ($workflow_tips as $tip_item) : ?>
                                    <?php
                                    // Robust check for each tip item
                                    if ( is_array($tip_item) &&
                                         isset($tip_item['image']) && is_array($tip_item['image']) && !empty($tip_item['image']['url']) &&
                                         isset($tip_item['title']) && !empty($tip_item['title']) ) :
                                    ?>
                                        <li>
                                            <a href="javascript:void(0)" class="card disabled">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-img">
                                                            <img src="<?php echo esc_url( $tip_item['image']['url'] ); ?>" alt="<?php echo esc_attr( $tip_item['title'] ); ?>">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4><?php echo esc_html( $tip_item['title'] ); ?></h4>
                                                        </div>
                                                    </div>
                                                    <?php if ( isset($tip_item['description']) && !empty($tip_item['description']) ) : ?>
                                                        <?php echo apply_filters( 'the_content', $tip_item['description'] ); ?>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php else : ?>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/github/SVG/yaml.svg" alt="YAML Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Tip #1: A little YAML can make front-end work easier</h4>
                                                </div>
                                            </div>
                                            <p>YAML is the perfect format for configuring your front-end files and storing data, and is commonly used in DevOps for an array of frontend configurations,
                                                automations, and more. Whether you can apply YAML directly to your day-to-day dev workflows or leverage different tools that use YAML, there are some
                                                pretty big benefits to getting started with this language.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/github/SVG/git.svg" alt="Git Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Tip #2: Use Git</h4>
                                                </div>
                                            </div>
                                            <p>Git is a cloud-hosted integrated development environment (IDE) that is used to track changes in source code over time. Cloud-hosted IDE services like Git
                                                allow you to write and edit code on a remote server instead of your local machine. This means that you can work on code from any device with an internet
                                                connection.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/github/SVG/ci.svg" alt="CI Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Tip #3: Stay one step ahead with automation and CI</h4>
                                                </div>
                                            </div>
                                            <p>In a typical software development process, continuous integration (CI) is a practice in which developers integrate their code into a shared repository
                                                several times a day. Each check-in triggers an automated build, allowing teams to detect and address problems early (saving time and energy).</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/github/SVG/server-orchestration.svg" alt="Server Orchestration Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Tip #4: Try server orchestration</h4>
                                                </div>
                                            </div>
                                            <p>Server orchestration is often the job of IT and DevOps teams, and includes configuring, managing, provisioning, and coordinating systems, applications,
                                                and core infrastructure needed to run software.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/github/SVG/bash-powershell.svg" alt="Bash or PowerShell Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Tip #5: Script repeatable tasks with Bash or PowerShell</h4>
                                                </div>
                                            </div>
                                            <p>There’s a better—and more efficient—way to handle repeatable tasks. How? Scripting with either Bash or PowerShell, which are both cross-platform.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="know-more-band">
        <div class="container">
            <?php if ( $github_know_more_text ) : ?>
                <P class="text-center w-100"><?php echo nl2br(esc_html($github_know_more_text)); ?></P>
            <?php else : ?>
                <P class="text-center w-100">To know more about Services, Pricing & Support</P>
            <?php endif; ?>

            <div class="d-flex flex-wrap justify-content-center">
                <?php if ( $github_know_more_button_link && $github_know_more_button_text ) : ?>
                    <a href="<?php echo esc_url( $github_know_more_button_link ); ?>" class="button anim mx-auto">
                        <div class="img-box circle">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                        </div>
                        <div class="img-box arrow">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                        </div>
                        <span><?php echo esc_html( $github_know_more_button_text ); ?></span>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button anim mx-auto">
                        <div class="img-box circle">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                        </div>
                        <div class="img-box arrow">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                        </div>
                        <span>Contact Us</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
