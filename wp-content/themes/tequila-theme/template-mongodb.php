<?php
/*
Template Name: MongoDB Template
*/
get_header();

// Fetch ACF fields for the current page
// All these fields should be configured as 'Group' fields in ACF,
// with 'image', 'title', and optionally 'description' as subfields.

// Hero Section Video (assuming this is a File field for video, or a URL for oEmbed)
$mongodb_hero_video_url           = get_field('mongodb_hero_video');

// Tech Banner Fields
$mongodb_tech_banner_bg_image     = get_field('mongodb_tech_banner_bg_image'); // Assumed Image field
$mongodb_tech_banner_logo         = get_field('mongodb_tech_banner_logo');     // Assumed Image field
$mongodb_tech_banner_title        = get_field('mongodb_tech_banner_title');    // Assumed Text field
$mongodb_tech_banner_description  = get_field('mongodb_tech_banner_description'); // Assumed Text Area / WYSIWYG

// Main Content Paragraphs (assumed WYSIWYG / Text Area fields)
$mongodb_main_content_paragraph_1 = get_field('mongodb_main_content_paragraph_1');
$mongodb_main_content_paragraph_2 = get_field('mongodb_main_content_paragraph_2');

// Benefits Section Fields
$mongodb_benefits_title           = get_field('mongodb_benefits_title');      // Assumed Text field
$mongodb_benefits_description     = get_field('mongodb_benefits_description'); // Assumed Text Area / WYSIWYG

// Individual Benefit Items (assumed Group fields with 'text' subfield)
// Ensure these are setup as GROUP fields in ACF, each with a 'text' sub-field.
$mongodb_benefit_item_1           = get_field('mongodb_benefit_item_1');
$mongodb_benefit_item_2           = get_field('mongodb_benefit_item_2');
$mongodb_benefit_item_3           = get_field('mongodb_benefit_item_3');
$mongodb_benefit_item_4           = get_field('mongodb_benefit_item_4');
$mongodb_benefit_item_5           = get_field('benefit_item_5');

// Consulting Service Items (assumed Group fields with 'image' and 'title' subfields)
// THESE MUST BE 'Group' fields in ACF. Sub-field 'image' must have 'Image Array' return format.
$mongodb_consulting_service_1     = get_field('mongodb_consulting_service_1');
$mongodb_consulting_service_2     = get_field('mongodb_consulting_service_2');
$mongodb_consulting_service_3     = get_field('mongodb_consulting_service_3');

// Video URL (assumed URL field or oEmbed field)
$mongodb_video_url                = get_field('embedded_video_url');

// Enterprise Advanced Section Fields
$mongodb_enterprise_advanced_title    = get_field('mongodb_enterprise_advanced_title'); // Assumed Text field
$mongodb_enterprise_advanced_description = get_field('mongodb_enterprise_advanced_description'); // Assumed Text Area / WYSIWYG

// Individual Enterprise Feature Items (assumed Group fields with 'image', 'title', 'description' subfields)
// THESE MUST BE 'Group' fields in ACF. Sub-field 'image' must have 'Image Array' return format.
$mongodb_enterprise_feature_1         = get_field('enterprise_feature_1');
$mongodb_enterprise_feature_2         = get_field('mongodb_enterprise_feature_2');
$mongodb_enterprise_feature_3         = get_field('mongodb_enterprise_feature_3');
$mongodb_enterprise_feature_4         = get_field('mongodb_enterprise_feature_4');
$mongodb_enterprise_feature_5         = get_field('mongodb_enterprise_feature_5');
$mongodb_enterprise_feature_6         = get_field('mongodb_enterprise_feature_6');
$mongodb_enterprise_feature_7         = get_field('mongodb_enterprise_feature_7');

// MongoDB Atlas Section Fields
$mongodb_atlas_title              = get_field('mongodb_atlas_title'); // Assumed Text field
$mongodb_atlas_description        = get_field('mongodb_atlas_description'); // Assumed Text Area / WYSIWYG

// Individual Atlas Feature Items (assumed Group fields with 'image', 'title', 'description' subfields)
// THESE MUST BE 'Group' fields in ACF. Sub-field 'image' must have 'Image Array' return format.
$mongodb_atlas_feature_1          = get_field('mongodb_atlas_feature_1');
$mongodb_atlas_feature_2          = get_field('mongodb_atlas_feature_2');
$mongodb_atlas_feature_3          = get_field('mongodb_atlas_feature_3');
$mongodb_atlas_feature_4          = get_field('Atlas_Feature_4');
$mongodb_atlas_feature_5          = get_field('mongodb_atlas_feature_5');
$mongodb_atlas_feature_6          = get_field('mongodb_atlas_feature_6');

// Know More Section Fields
$mongodb_know_more_text           = get_field('mongodb_know_more_text'); // Assumed Text Area / WYSIWYG
$mongodb_know_more_button_text    = get_field('mongodb_know_more_button_text'); // Assumed Text field
$mongodb_know_more_button_link    = get_field('mongodb_know_more_button_link'); // Assumed URL field

// Case Study Section Fields (ASSUMED TO BE A POST OBJECT FIELD, NOT A GROUP FIELD)
// This field should be an ACF "Post Object" field, returning a WP_Post object.
$mongodb_case_study_title         = get_field('mongodb_case_study_title'); // Assumed Text field for the section title
$mongodb_case_study_item          = get_field('case_study_link'); // Assumed Post Object field

?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $mongodb_hero_video_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $mongodb_hero_video_url ); ?>" type="video/mp4">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <!-- Assuming x.webp is a static asset or a simple image field -->
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
                            <?php if ( $mongodb_tech_banner_bg_image && is_array($mongodb_tech_banner_bg_image) ) : ?>
                                <img src="<?php echo esc_url( $mongodb_tech_banner_bg_image['url'] ); ?>" alt="<?php echo esc_attr( $mongodb_tech_banner_bg_image['alt'] ); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/mongo-bg.webp" alt="Default Mongo BG">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="img-box">
                                <?php if ( $mongodb_tech_banner_logo && is_array($mongodb_tech_banner_logo) ) : ?>
                                    <img src="<?php echo esc_url( $mongodb_tech_banner_logo['url'] ); ?>" alt="<?php echo esc_attr( $mongodb_tech_banner_logo['alt'] ); ?>">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/mongo.webp" alt="Default Mongo Logo">
                                <?php endif; ?>
                            </div>
                            <?php if ( $mongodb_tech_banner_title ) : ?>
                                <h4><?php echo esc_html( $mongodb_tech_banner_title ); ?></h4>
                            <?php else : ?>
                                <h4>MongoDB is the leading Document based database.</h4>
                            <?php endif; ?>
                            <?php if ( $mongodb_tech_banner_description ) : ?>
                                <p><?php echo esc_html( $mongodb_tech_banner_description ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <?php if ( $mongodb_main_content_paragraph_1 ) : ?>
                        <?php echo apply_filters( 'the_content', $mongodb_main_content_paragraph_1 ); ?>
                    <?php else : ?>
                        <p>MongoDB is the leading Document based database, empowering businesses to be more agile and scalable. Fortune 500 companies and start-ups alike are using MongoDB to
                            create new types of applications, improve customer experience, accelerate time to market and reduce costs. In today’s constantly evolving data strategies, MongoDB
                            tops in the list of favorites for its known as being the best in its class, low cost, reliable NoSQL data solution to overcome business challenges, application
                            needs and technical resource capabilities.</p>
                    <?php endif; ?>
                    <?php if ( $mongodb_main_content_paragraph_2 ) : ?>
                        <?php echo apply_filters( 'the_content', $mongodb_main_content_paragraph_2 ); ?>
                    <?php else : ?>
                        <p>MongoDB has chosen us as the first partner in the GCC region to cater to the key application needs such as high scalability and concurrency.</p>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <?php if ( $mongodb_benefits_title || $mongodb_benefits_description ) : ?>
                        <div class="section-title mb-4">
                            <?php if ( $mongodb_benefits_title ) : ?>
                                <h4><?php echo esc_html( $mongodb_benefits_title ); ?></h4>
                            <?php else : ?>
                                <h4>Benefits of our offerings</h4>
                            <?php endif; ?>
                            <?php if ( $mongodb_benefits_description ) : ?>
                                <?php echo apply_filters( 'the_content', $mongodb_benefits_description ); ?>
                            <?php else : ?>
                                <p>Powered with open source architecture that can efficiently scale out in a clustered environment, it is centered around a cross-platform document data model that
                                    can effectively flex with programming paradigms and is loaded with a breadth of functionality that can elegantly cater needs of contemporary software developers.
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // Grouping benefit items into an array for easier loop
                    $benefit_items = [
                        $mongodb_benefit_item_1,
                        $mongodb_benefit_item_2,
                        $mongodb_benefit_item_3,
                        $mongodb_benefit_item_4,
                        $mongodb_benefit_item_5,
                    ];
                    // Check if any benefit item exists by checking for non-empty arrays with a 'text' key
                    $benefits_exist = false;
                    foreach ($benefit_items as $item) {
                        if (is_array($item) && isset($item['text']) && !empty($item['text'])) {
                            $benefits_exist = true;
                            break;
                        }
                    }
                    ?>
                    <?php if ( $benefits_exist ) : ?>
                        <ul class="blt-list mb-4">
                            <?php foreach ($benefit_items as $item) : ?>
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

                    <?php
                    // Grouping consulting service items into an array for easier loop
                    $consulting_services_items = [
                        $mongodb_consulting_service_1,
                        $mongodb_consulting_service_2,
                        $mongodb_consulting_service_3,
                    ];
                    // Check if any consulting service item exists by checking for non-empty arrays with required keys
                    $consulting_services_exist = false;
                    foreach ($consulting_services_items as $item) {
                        // Ensure it's an array, and both 'image' and 'title' keys exist and are not empty
                        if (is_array($item) && isset($item['image']) && is_array($item['image']) && !empty($item['image']['url']) && isset($item['title']) && !empty($item['title'])) {
                            $consulting_services_exist = true;
                            break;
                        }
                    }
                    ?>
                    <?php if ( $consulting_services_exist ) : ?>
                        <ul class="consulting-services-list mb-4 mb-md-5">
                            <?php foreach ( $consulting_services_items as $service_item ) : ?>
                                <?php
                                // Robust check: ensure $service_item is an array, 'image' subfield is an array with 'url', and 'title' exists
                                if ( is_array($service_item) &&
                                     isset($service_item['image']) && is_array($service_item['image']) && !empty($service_item['image']['url']) &&
                                     isset($service_item['title']) && !empty($service_item['title']) ) :
                                ?>
                                    <li>
                                        <a href="javascript:void(0)" class="card disabled">
                                            <div class="card-img">
                                                <img src="<?php echo esc_url( $service_item['image']['url'] ); ?>" alt="<?php echo esc_attr( $service_item['title'] ); ?>">
                                            </div>
                                            <div class="card-body">
                                                <?php echo esc_html( $service_item['title'] ); ?>
                                            </div>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <ul class="consulting-services-list mb-4 mb-md-5">
                            <li>
                                <a href="javascript:void(0)" class="card disabled">
                                    <div class="card-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/cloud.svg" alt="Database Platform Icon">
                                    </div>
                                    <div class="card-body">
                                        Database Platform
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="card disabled">
                                    <div class="card-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/on-premises.svg" alt="High-speed Data Pipeline Icon">
                                    </div>
                                    <div class="card-body">
                                        High-speed Data Pipeline
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="card disabled">
                                    <div class="card-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/mobile.svg" alt="Kubernetes Platform Icon">
                                    </div>
                                    <div class="card-body">
                                        Kubernetes Platform
                                    </div>
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>

                    <div class="video-box mb-4 mb-md-5">
                        <?php
                        // Check if ACF field has a value AND if wp_oembed_get can embed it.
                        // wp_oembed_get() is the most robust way to handle video embeds from various sources.
                        if ( $mongodb_video_url ) :
                            $embed_code = wp_oembed_get( $mongodb_video_url );
                            if ( $embed_code ) :
                                echo $embed_code; // This will output the iframe or other embed HTML
                            else :
                                ?>
                                <iframe src="https://www.youtube.com/embed/EE8ZTQxa0AM" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <?php
                            endif;
                        else : ?>
                             <iframe src="https://www.youtube.com/embed/5" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>

                    <?php if ( $mongodb_enterprise_advanced_title || $mongodb_enterprise_advanced_description ) : ?>
                        <div class="section-title mb-4">
                            <?php if ( $mongodb_enterprise_advanced_title ) : ?>
                                <h4><?php echo esc_html( $mongodb_enterprise_advanced_title ); ?></h4>
                            <?php else : ?>
                                <h4>MongoDB Enterprise Advanced</h4>
                            <?php endif; ?>
                            <?php if ( $mongodb_enterprise_advanced_description ) : ?>
                                <?php echo apply_filters( 'the_content', $mongodb_enterprise_advanced_description ); ?>
                            <?php else : ?>
                                <p>Providing a fine-tuned package of software, support, certifications, services, MongoDB Enterprise Advanced is the best way to run MongoDB on your own
                                    infrastructure. Many organizations use it to accelerate time for competitive advantage while reducing costs and risk.
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // Grouping enterprise feature items into an array for easier loop
                    $enterprise_feature_items = [
                        $mongodb_enterprise_feature_1,
                        $mongodb_enterprise_feature_2,
                        $mongodb_enterprise_feature_3,
                        $mongodb_enterprise_feature_4,
                        $mongodb_enterprise_feature_5,
                        $mongodb_enterprise_feature_6,
                        $mongodb_enterprise_feature_7,
                    ];
                    // Check if any enterprise feature item exists
                    $enterprise_features_exist = false;
                    foreach ($enterprise_feature_items as $item) {
                        if (is_array($item) && isset($item['image']) && is_array($item['image']) && !empty($item['image']['url']) && isset($item['title']) && !empty($item['title'])) {
                            $enterprise_features_exist = true;
                            break;
                        }
                    }
                    ?>
                    <?php if ( $enterprise_features_exist ) : ?>
                        <div class="content-box topic-list">
                            <ul>
                                <?php foreach ($enterprise_feature_items as $feature_item) : ?>
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
                        </div>
                    <?php else : ?>
                        <div class="content-box topic-list">
                            <ul>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/mongodb-compass.svg" alt="MongoDB Compass Icon"></div><div class="media-body"><h4>MongoDB Compass</h4></div></div><p>Explore and manipulate your data by creating queries, aggregation pipelines, and export them to your app as code, create indexes, build schema validation rules and more.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/in-memory-speed.svg" alt="In-Memory Speed Icon"></div><div class="media-body"><h4>In-Memory Speed</h4></div></div><p>With the most stringent response-time SLAs, deliver high throughput and predictable low latency for workloads.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/proactive-support.svg" alt="Proactive Support Icon"></div><div class="media-body"><h4>Proactive Support</h4></div></div><p>Proactive and consultative support right from development to production.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/enterprise-software-integration.svg" alt="Enterprise Software Integration Icon"></div><div class="media-body"><h4>Enterprise Software Integration</h4></div></div><p>With your management and monitoring tools, MongoDB Enterprise fits easily into your existing IT infrastructure & processes.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/advanced-security.svg" alt="Advanced Security Icon"></div><div class="media-body"><h4>Advanced Security</h4></div></div><p>Defend, detect, control access to your data, and meet security & compliance standards with Kerberos and LDAP access controls and auditing.</p></div></a></li>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if ( $mongodb_atlas_title || $mongodb_atlas_description ) : ?>
                        <div class="section-title mb-4">
                            <?php if ( $mongodb_atlas_title ) : ?>
                                <h4><?php echo esc_html( $mongodb_atlas_title ); ?></h4>
                            <?php else : ?>
                                <h4>MongoDB Atlas</h4>
                            <?php endif; ?>
                            <?php if ( $mongodb_atlas_description ) : ?>
                                <?php echo apply_filters( 'the_content', $mongodb_atlas_description ); ?>
                            <?php else : ?>
                                <p>Fully managed MongoDB across AWS, Google Cloud, Azure, with proven practices and best in class automation. They guarantee availability, scalability, compliance
                                    with most demanding privacy standards and data security.
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // Grouping atlas feature items into an array for easier loop
                    $atlas_feature_items = [
                        $mongodb_atlas_feature_1,
                        $mongodb_atlas_feature_2,
                        $mongodb_atlas_feature_3,
                        $mongodb_atlas_feature_4,
                        $mongodb_atlas_feature_5,
                        $mongodb_atlas_feature_6,
                    ];
                    // Check if any Atlas feature item exists
                    $atlas_features_exist = false;
                    foreach ($atlas_feature_items as $item) {
                        if (is_array($item) && isset($item['image']) && is_array($item['image']) && !empty($item['image']['url']) && isset($item['title']) && !empty($item['title'])) {
                            $atlas_features_exist = true;
                            break;
                        }
                    }
                    ?>
                    <?php if ( $atlas_features_exist ) : ?>
                        <div class="content-box topic-list">
                            <ul>
                                <?php foreach ($atlas_feature_items as $atlas_feature_item) : ?>
                                    <?php
                                    // Robust check for each atlas feature item
                                    if ( is_array($atlas_feature_item) &&
                                         isset($atlas_feature_item['image']) && is_array($atlas_feature_item['image']) && !empty($atlas_feature_item['image']['url']) &&
                                         isset($atlas_feature_item['title']) && !empty($atlas_feature_item['title']) ) :
                                    ?>
                                        <li>
                                            <a href="javascript:void(0)" class="card disabled">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-img">
                                                            <img src="<?php echo esc_url( $atlas_feature_item['image']['url'] ); ?>" alt="<?php echo esc_attr( $atlas_feature_item['title'] ); ?>">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4><?php echo esc_html( $atlas_feature_item['title'] ); ?></h4>
                                                        </div>
                                                    </div>
                                                    <?php if ( isset($atlas_feature_item['description']) && !empty($atlas_feature_item['description']) ) : ?>
                                                        <?php echo apply_filters( 'the_content', $atlas_feature_item['description'] ); ?>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php else : ?>
                        <div class="content-box topic-list">
                            <ul>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/performance.svg" alt="Performance Icon"></div><div class="media-body"><h4>Performance</h4></div></div><p>Explore and manipulate your data by creating queries, aggregation pipelines, and export them to your app as code, create indexes, build schema validation rules and more.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/efficiency.svg" alt="Efficiency Icon"></div><div class="media-body"><h4>Efficiency</h4></div></div><p>With the most stringent response-time SLAs, deliver high throughput and predictable low latency for workloads.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/security.svg" alt="Security Icon"></div><div class="media-body"><h4>Security</h4></div></div><p>Proactive and consultative support right from development to production.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/productivity.svg" alt="Productivity Icon"></div><div class="media-body"><h4>Productivity</h4></div></div><p>With your management and monitoring tools, MongoDB Enterprise fits easily into your existing IT infrastructure & processes.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/reliability.svg" alt="Reliability Icon"></div><div class="media-body"><h4>Reliability</h4></div></div><p>Defend, detect, control access to your data, and meet security & compliance standards with Kerberos and LDAP access controls and auditing.</p></div></a></li>
                                <li><a href="javascript:void(0)" class="card disabled"><div class="card-body"><div class="media"><div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mongodb/SVG/multi-cloud-data-distribution.svg" alt="Multi-Cloud Data Distribution Icon"></div><div class="media-body"><h4>Multi-Cloud Data Distribution</h4></div></div><p>For your existing SQL based BI, and analytics platforms, use MongoDB as a data source with MongoDB Connector.</p></div></a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="know-more-band">
        <div class="container">
            <?php if ( $mongodb_know_more_text ) : ?>
                <P class="text-center w-100"><?php echo nl2br(esc_html($mongodb_know_more_text)); ?></P>
            <?php else : ?>
                <P class="text-center w-100">To know more about Services, Pricing & Support</P>
            <?php endif; ?>

            <div class="d-flex flex-wrap justify-content-center">
                <?php if ( $mongodb_know_more_button_link && $mongodb_know_more_button_text ) : ?>
                    <a href="<?php echo esc_url( $mongodb_know_more_button_link ); ?>" class="button anim mx-auto">
                        <div class="img-box circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                        </div>
                        <div class="img-box arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                        </div>
                        <span><?php echo esc_html( $mongodb_know_more_button_text ); ?></span>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button anim mx-auto">
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
    <section class="case-study">
        <div class="container">
            <?php if ( $mongodb_case_study_title ) : ?>
                <div class="section-title mb-3">
                    <h2><?php echo esc_html( $mongodb_case_study_title ); ?></h2>
                </div>
            <?php else : ?>
                <div class="section-title mb-3">
                    <h2>Case Studies</h2>
                </div>
            <?php endif; ?>

            <?php
            // Assuming $mongodb_case_study_item is now an ACF "Post Object" field
            // and returns a single WP_Post object.
            $case_study_post = $mongodb_case_study_item; // Rename for clarity
            if ( $case_study_post && is_a($case_study_post, 'WP_Post') ) :
                // Use setup_postdata() to make standard template tags work
                setup_postdata( $case_study_post );
            ?>
                <ul class="case-list">
                    <li>
                        <a href="<?php echo esc_url( get_permalink( $case_study_post->ID ) ); ?>" class="card">
                            <div class="card-img">
                                <?php if ( has_post_thumbnail( $case_study_post->ID ) ) : ?>
                                    <?php echo get_the_post_thumbnail( $case_study_post->ID, 'large' ); // Or 'full', 'medium', etc. ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case1.webp" alt="Default Case Study Image">
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h5><?php echo esc_html( get_the_title( $case_study_post->ID ) ); ?></h5>
                                <?php
                                // get_the_date works with a post ID
                                $post_date = get_the_date('d M Y', $case_study_post->ID);
                                if ( $post_date ) : ?>
                                    <span><?php echo esc_html( $post_date ); ?></span>
                                <?php endif; ?>
                                <?php
                                // get_the_excerpt works with a post ID
                                $post_excerpt = get_the_excerpt( $case_study_post->ID );
                                if ( $post_excerpt ) :
                                    echo wpautop( $post_excerpt );
                                endif;
                                ?>
                            </div>
                        </a>
                    </li>
                </ul>
            <?php
                wp_reset_postdata(); // IMPORTANT: Reset global post data after using setup_postdata
            else :
                // Fallback if no ACF Post Object is selected or valid
            ?>
                <ul class="case-list">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/case-study-mongodb/' ) ); ?>" class="card">
                            <div class="card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case1.webp" alt="Default Case Study Image">
                            </div>
                            <div class="card-body">
                                <h5>Next Generation Mobile Bank Current is Using MongoDB</h5>
                                <span>07 Oct 2020</span>
                                <p>Current CEO Stuart Sopp knows a thing or two about banking and financial services. His background reads like a Who’s Who of the industry: Morgan Stanley, Citi,
                                    Deutsche Bank, and BNY Mellon...</p>
                            </div>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
