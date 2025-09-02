<?php
/**
 * Template Name: Datastax Page Template
 */
get_header();

// Fetch ACF fields for the current page
$datastax_hero_video_url          = get_field('datastax_hero_video_url');
$datastax_x_image                 = get_field('datastax_x_image');
$datastax_tech_banner_bg_image    = get_field('datastax_tech_banner_bg_image');
$datastax_tech_banner_logo        = get_field('datastax_tech_banner_logo');
$datastax_tech_banner_title       = get_field('datastax_tech_banner_title');
$datastax_main_content            = get_field('datastax_main_content'); // Main editor content (replaces the_content())
$datastax_intro_paragraph_1       = get_field('datastax_intro_paragraph_1');
$datastax_intro_paragraph_2       = get_field('datastax_intro_paragraph_2');

$datastax_benefits_title          = get_field('datastax_benefits_title');
$datastax_benefits_description    = get_field('datastax_benefits_description');
// Individual Benefit Items for 'Benefits of our offerings' (Group fields with 'text' subfield)
$datastax_offerings_list_item_1   = get_field('datastax_offerings_list_item_1');
$datastax_offerings_list_item_2   = get_field('datastax_offerings_list_item_2');
$datastax_offerings_list_item_3   = get_field('datastax_offerings_list_item_3');
$datastax_offerings_list_item_4   = get_field('datastax_offerings_list_item_4');
$datastax_offerings_list_item_5   = get_field('datastax_offerings_list_item_5');

$datastax_youtube_video_url       = get_field('datastax_youtube_video_url');

$datastax_features_title          = get_field('datastax_features_title');
// Features of DataStax (Group fields with 'image', 'title', 'description' subfields)
$datastax_features_list_item_1    = get_field('datastax_features_list_item_1');
$datastax_features_list_item_2    = get_field('datastax_features_list_item_2');
$datastax_features_list_item_3    = get_field('datastax_features_list_item_3');
$datastax_features_list_item_4    = get_field('datastax_features_list_item_4');
$datastax_features_list_item_5    = get_field('datastax_features_list_item_5');

$datastax_benefits_of_datastax_title = get_field('datastax_benefits_of_datastax_title');
// Secondary Benefits of DataStax (Group fields with 'text' subfield)
$datastax_secondary_benefits_list_item_1 = get_field('datastax_secondary_benefits_list_item_1');
$datastax_secondary_benefits_list_item_2 = get_field('datastax_secondary_benefits_list_item_2');
$datastax_secondary_benefits_list_item_3 = get_field('datastax_secondary_benefits_list_item_3');
$datastax_secondary_benefits_list_item_4 = get_field('datastax_secondary_benefits_list_item_4');
$datastax_secondary_benefits_list_item_5 = get_field('datastax_secondary_benefits_list_item_5');
$datastax_secondary_benefits_list_item_6 = get_field('datastax_secondary_benefits_list_item_6');
$datastax_secondary_benefits_list_item_7 = get_field('datastax_secondary_benefits_list_item_7');
$datastax_secondary_benefits_list_item_8 = get_field('datastax_secondary_benefits_list_item_8');

$datastax_know_more_text          = get_field('datastax_know_more_text');
$datastax_know_more_button_text   = get_field('datastax_know_more_button_text');
$datastax_know_more_button_link   = get_field('datastax_know_more_button_link');

?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $datastax_hero_video_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $datastax_hero_video_url ); ?>" type="video/mp4">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $datastax_x_image && is_array($datastax_x_image) ) : ?>
                <img src="<?php echo esc_url( $datastax_x_image['url'] ); ?>" alt="<?php echo esc_attr( $datastax_x_image['alt'] ); ?>">
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
                            <?php if ( $datastax_tech_banner_bg_image && is_array($datastax_tech_banner_bg_image) ) : ?>
                                <img src="<?php echo esc_url( $datastax_tech_banner_bg_image['url'] ); ?>" alt="<?php echo esc_attr( $datastax_tech_banner_bg_image['alt'] ); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-solution/datastax-bg.webp" alt="Background Image">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="img-box">
                                <?php if ( $datastax_tech_banner_logo && is_array($datastax_tech_banner_logo) ) : ?>
                                    <img src="<?php echo esc_url( $datastax_tech_banner_logo['url'] ); ?>" alt="<?php echo esc_attr( $datastax_tech_banner_logo['alt'] ); ?>">
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-solution/datastax.webp" alt="Datastax Logo">
                                <?php endif; ?>
                            </div>
                            <?php if ( $datastax_tech_banner_title ) : ?>
                                <h4><?php echo esc_html( $datastax_tech_banner_title ); ?></h4>
                            <?php else : ?>
                                <h4>Apache Cassandra is open source, distributed, wide column store, NoSQL database management system.</h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 mb-md-4">
                    <?php
                    // Display the main content from the ACF field, if set.
                    // Otherwise, fallback to the default WordPress content editor.
                    if ( $datastax_main_content ) :
                        echo apply_filters( 'the_content', $datastax_main_content );
                    else :
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        else :
                            echo '<p>No content found for this page.</p>';
                        endif;
                    endif;
                    ?>
                    <div class="section-title mb-4">
                        <?php if ( $datastax_intro_paragraph_1 ) : ?>
                            <?php echo apply_filters( 'the_content', $datastax_intro_paragraph_1 ); ?>
                        <?php else : ?>
                            <p>DataStax is open source, distributed, wide column store, NoSQL database management system designed to handle large amounts of data across many commodity servers
                                providing high availability with no single point of failure. It offers robust support for clusters spanning multiple datacenters with asynchronous master less
                                replication allowing low latency operations for all clients</p>
                        <?php endif; ?>
                        <?php if ( $datastax_intro_paragraph_2 ) : ?>
                            <?php echo apply_filters( 'the_content', $datastax_intro_paragraph_2 ); ?>
                        <?php else : ?>
                            <p>DataStax has chosen us as their first partner in the GCC region.</p>
                        <?php endif; ?>
                    </div>
                    <div class="section-title mb-4">
                        <?php if ( $datastax_benefits_title ) : ?>
                            <h4><?php echo esc_html( $datastax_benefits_title ); ?></h4>
                        <?php else : ?>
                            <h4>Benefits of our offerings</h4>
                        <?php endif; ?>
                        <?php if ( $datastax_benefits_description ) : ?>
                            <?php echo apply_filters( 'the_content', $datastax_benefits_description ); ?>
                        <?php else : ?>
                            <p>DataStax Enterprise enables any workload on an active-everywhere, zero-downtime platform with zero lock-in and global scale. Built on the foundation of Apache
                                Cassandra, DataStax Enterprise adds operational reliability, monitoring and security layer hardened by the largest internet apps and the Fortune 100.</p>
                        <?php endif; ?>
                    </div>
                    <?php
                    // Grouping benefit items into an array for easier loop
                    $offerings_items = [
                        $datastax_offerings_list_item_1,
                        $datastax_offerings_list_item_2,
                        $datastax_offerings_list_item_3,
                        $datastax_offerings_list_item_4,
                        $datastax_offerings_list_item_5,
                    ];
                    // Check if any benefit item exists by checking for non-empty arrays with a 'text' key
                    $offerings_exist = false;
                    foreach ($offerings_items as $item) {
                        if (is_array($item) && isset($item['text']) && !empty($item['text'])) {
                            $offerings_exist = true;
                            break;
                        }
                    }
                    ?>
                    <?php if ( $offerings_exist ) : ?>
                        <ul class="blt-list mb-4">
                            <?php foreach ($offerings_items as $item) : ?>
                                <?php if ( is_array($item) && isset($item['text']) && !empty($item['text']) ) : ?>
                                    <li><p><?php echo esc_html( $item['text'] ); ?></p></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <ul class="blt-list mb-4">
                            <li><p>All round operational support</p></li>
                            <li><p>Design & architecting skills for your current & future needs</p></li>
                            <li><p>Providing automation to address rapidly scaling landscape</p></li>
                            <li><p>Integration & deployment expertise to simplify the complexities</p></li>
                            <li><p>Unbiased, independent insights for better & smarter decision making</p></li>
                        </ul>
                    <?php endif; ?>

                    <div class="video-box mt-4 mt-md-5 mb-4 mb-md-5">
                        <?php if ( $datastax_youtube_video_url ) :
                            $embed_code = wp_oembed_get( $datastax_youtube_video_url );
                            if ( $embed_code ) :
                                echo $embed_code;
                            else : ?>
                                <iframe src="https://www.youtube.com/embed/ydGplerDjpI" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php endif; ?>
                        <?php else : ?>
                            <iframe src="https://www.youtube.com/embed/ydGplerDjpI" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>

                    <div class="section-title mb-4">
                        <?php if ( $datastax_features_title ) : ?>
                            <h4><?php echo esc_html( $datastax_features_title ); ?></h4>
                        <?php else : ?>
                            <h4>Features of DataStax</h4>
                        <?php endif; ?>
                    </div>
                    <div class="content-box topic-list">
                        <?php
                        // Grouping features into an array for easier loop
                        $features_items = [
                            $datastax_features_list_item_1,
                            $datastax_features_list_item_2,
                            $datastax_features_list_item_3,
                            $datastax_features_list_item_4,
                            $datastax_features_list_item_5,
                        ];
                        // Check if any feature item exists
                        $features_exist = false;
                        foreach ($features_items as $item) {
                            if (is_array($item) && isset($item['image']) && is_array($item['image']) && !empty($item['image']['url']) && isset($item['title']) && !empty($item['title'])) {
                                $features_exist = true;
                                break;
                            }
                        }
                        ?>
                        <?php if ( $features_exist ) : ?>
                            <ul>
                                <?php foreach ($features_items as $feature_item) : ?>
                                    <?php
                                    // Robust check for each feature item
                                    if ( is_array($feature_item) &&
                                         isset($feature_item['image']) && is_array($feature_item['image']) && !empty($feature_item['image']['url']) &&
                                         isset($feature_item['title']) && !empty($feature_item['title']) ) :
                                    ?>
                                        <li>
                                            <a href="javascript:void(0)" class="card disabled">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-img">
                                                            <img src="<?php echo esc_url( $feature_item['image']['url'] ); ?>" alt="<?php echo esc_attr( $feature_item['title'] ); ?>">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4><?php echo esc_html( $feature_item['title'] ); ?></h4>
                                                        </div>
                                                    </div>
                                                    <?php if ( isset($feature_item['description']) && !empty($feature_item['description']) ) : ?>
                                                        <?php echo apply_filters( 'the_content', $feature_item['description'] ); ?>
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
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/datastax/SVG/zero.svg" alt="Zero Downtime Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Zero Downtime & Zero Lock-in</h4>
                                                </div>
                                            </div>
                                            <p>Built on Apache Cassandra’s active-everywhere architecture for 24x7x365 availability. Avoid cloud lock-in and keep compatibility with open source
                                                Cassandra.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/datastax/SVG/global.svg" alt="Global Scale Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Global scale</h4>
                                                </div>
                                            </div>
                                            <p>Put your data where you need it without compromising performance, availability or accessibility.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/datastax/SVG/operational.svg" alt="Operational Reliability Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Operational Reliability</h4>
                                                </div>
                                            </div>
                                            <p>Enterprise-grade security, monitoring, and support, hardened by the Fortune 100.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/datastax/SVG/cloud.svg" alt="Cloud-Native Data Platform Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Cloud-Native Data Platform</h4>
                                                </div>
                                            </div>
                                            <p>Native Kubernetes support to tame the complexity of development, operations, and deployment.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/datastax/SVG/developer.svg" alt="Developer Success Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Developer Success</h4>
                                                </div>
                                            </div>
                                            <p>Powerful and productive APIs for developers and operators.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="section-title mb-4">
                        <?php if ( $datastax_benefits_of_datastax_title ) : ?>
                            <h4><?php echo esc_html( $datastax_benefits_of_datastax_title ); ?></h4>
                        <?php else : ?>
                            <h4>Benefits of DataStax</h4>
                        <?php endif; ?>
                    </div>
                    <?php
                    // Grouping secondary benefits into an array for easier loop
                    $secondary_benefits_items = [
                        $datastax_secondary_benefits_list_item_1,
                        $datastax_secondary_benefits_list_item_2,
                        $datastax_secondary_benefits_list_item_3,
                        $datastax_secondary_benefits_list_item_4,
                        $datastax_secondary_benefits_list_item_5,
                        $datastax_secondary_benefits_list_item_6,
                        $datastax_secondary_benefits_list_item_7,
                        $datastax_secondary_benefits_list_item_8,
                    ];
                    // Check if any secondary benefit item exists
                    $secondary_benefits_exist = false;
                    foreach ($secondary_benefits_items as $item) {
                        if (is_array($item) && isset($item['text']) && !empty($item['text'])) {
                            $secondary_benefits_exist = true;
                            break;
                        }
                    }
                    ?>
                    <?php if ( $secondary_benefits_exist ) : ?>
                        <ul class="blt-list mb-4">
                            <?php foreach ($secondary_benefits_items as $item) : ?>
                                <?php if ( is_array($item) && isset($item['text']) && !empty($item['text']) ) : ?>
                                    <li><p><?php echo esc_html( $item['text'] ); ?></p></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <ul class="blt-list mb-4">
                            <li><p>Advanced performance</p></li>
                            <li><p>Enterprise-grade security</p></li>
                            <li><p>Management and monitoring</p></li>
                            <li><p>Multi-model data, and Graph engine</p></li>
                            <li><p>Integrated analytics</p></li>
                            <li><p>Enhanced search, and Extensible Integration</p></li>
                            <li><p>DevOps APIs, and Developer Tools</p></li>
                            <li><p>Cloud-Native automation + elasticity</p></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="know-more-band">
        <div class="container">
            <?php if ( $datastax_know_more_text ) : ?>
                <P class="text-center w-100"><?php echo nl2br(esc_html($datastax_know_more_text)); ?></P>
            <?php else : ?>
                <P class="text-center w-100">To know more about Services, Pricing & Support</P>
            <?php endif; ?>

            <div class="d-flex flex-wrap justify-content-center">
                <?php if ( $datastax_know_more_button_link && $datastax_know_more_button_text ) : ?>
                    <a href="<?php echo esc_url( $datastax_know_more_button_link ); ?>" class="button anim mx-auto">
                        <div class="img-box circle">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                        </div>
                        <div class="img-box arrow">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                        </div>
                        <span><?php echo esc_html( $datastax_know_more_button_text ); ?></span>
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
