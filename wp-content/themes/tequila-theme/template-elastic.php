<?php
/*
Template Name: Elastic Page
*/
get_header();
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php
            // ACF Field: elastic_banner_video (File field, return format: File URL)
            $banner_video = get_field('elastic_banner_video');
            if ($banner_video) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url($banner_video); ?>" type="video/mp4" autoplay="true">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4" autoplay="true">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php
            // ACF Field: elastic_banner_x_image (Image field, return format: Image URL)
            $x_image = get_field('elastic_banner_x_image');
            if ($x_image) : ?>
                <img src="<?php echo esc_url($x_image); ?>" alt="X">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-banner/x.webp" alt="X">
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink( get_page_by_path( 'technologies' ) ); ?>">Technologies</a></li>
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
                        <?php
                        // ACF Field: elastic_tech_banner_bg (Image field, return format: Image URL)
                        $tech_banner_bg = get_field('elastic_tech_banner_bg');
                        if ($tech_banner_bg) : ?>
                            <div class="card-img">
                                <img src="<?php echo esc_url($tech_banner_bg); ?>" alt="Background">
                            </div>
                        <?php else : ?>
                            <div class="card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/elastic-bg.webp" alt="bg1">
                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <?php
                            // ACF Field: elastic_tech_banner_logo (Image field, return format: Image URL)
                            $tech_banner_logo = get_field('elastic_tech_banner_logo');
                            if ($tech_banner_logo) : ?>
                                <div class="img-box">
                                    <img src="<?php echo esc_url($tech_banner_logo); ?>" alt="Logo">
                                </div>
                            <?php else : ?>
                                <div class="img-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/elastic.webp" alt="git">
                                </div>
                            <?php endif; ?>

                            <?php
                            // ACF Field: elastic_tech_banner_heading (Text)
                            $tech_banner_heading = get_field('elastic_tech_banner_heading');
                            if ($tech_banner_heading) : ?>
                                <h4><?php echo esc_html($tech_banner_heading); ?></h4>
                            <?php else : ?>
                                <h4>Helping you store, search, and analyze with ease.</h4>
                            <?php endif; ?>

                            <?php
                            // ACF Field: elastic_tech_banner_paragraph (Text Area)
                            $tech_banner_paragraph = get_field('elastic_tech_banner_paragraph');
                            if ($tech_banner_paragraph) : ?>
                                <p><?php echo esc_html($tech_banner_paragraph); ?></p>
                            <?php else : ?>
                                <p>The perfect choice for companies, organizations and individuals</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <?php
                    // ACF Field: elastic_why_heading (Text)
                    $why_elastic_heading = get_field('elastic_why_heading');
                    if ($why_elastic_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($why_elastic_heading); ?></h4>
                            <?php
                            // ACF Field: elastic_why_description (WYSIWYG Editor)
                            $why_elastic_description = get_field('elastic_why_description');
                            if ($why_elastic_description) : ?>
                                <p><?php echo apply_filters('the_content', $why_elastic_description); ?></p>
                            <?php else : ?>
                                <p>Elastic can be used to search all kinds of documents. It provides scalable search, has near real time search and supports multi tenancy. Elastic is distributed,
                                which means that indices can be divided into shards and each shard can have zero or more replicas. Each node hosts one or more shards, and acts as a coordinator
                                to delegate operations to the correct shard(s). Rebalancing and routing are done automatically. Related data is often stored in the same index, which consists of
                                one or more primary shards, and zero or more replica shards.</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_benefits_heading (Text)
                    $benefits_heading = get_field('elastic_benefits_heading');
                    if ($benefits_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($benefits_heading); ?></h4>
                            <?php
                            // ACF Field: elastic_benefits_description (WYSIWYG Editor)
                            $benefits_description = get_field('elastic_benefits_description');
                            if ($benefits_description) : ?>
                                <p><?php echo apply_filters('the_content', $benefits_description); ?></p>
                            <?php else : ?>
                                <p>Elastic is developed alongside a data collection and log parsing engine called Logstash, an analytics and visualization platform called Kibana. The three
                                products are designed for use as an integrated solution, referred to as the Elastic Stack (formerly the ELK stack)</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_benefits_list_content (WYSIWYG Editor)
                    $benefits_list_content = get_field('elastic_benefits_list_content');
                    if ($benefits_list_content) : ?>
                        <ul class="blt-list mb-4">
                            <?php echo apply_filters('the_content', $benefits_list_content); // Assume content editor adds <ul> and <li> ?>
                        </ul>
                    <?php else : // Fallback hardcoded list if no WYSIWYG content ?>
                        <ul class="blt-list mb-4">
                            <li><p>All round operational support</p></li>
                            <li><p>Design & architecting skills for your current & future needs</p></li>
                            <li><p>Providing automation to address rapidly scaling landscape</p></li>
                            <li><p>Integration & deployment expertise to simplify the complexities</p></li>
                            <li><p>Unbiased, independent insights for better & smarter decision making</p></li>
                        </ul>
                    <?php endif; ?>

                    <?php
                    // ACF Fields: elastic_consulting_service_1, _2, _3 (Groups with icon and title)
                    $consulting_services_exist = false;
                    $consulting_service_1 = get_field('elastic_consulting_service_1'); // Group field
                    $consulting_service_2 = get_field('elastic_consulting_service_2'); // Group field
                    $consulting_service_3 = get_field('elastic_consulting_service_3'); // Group field

                    if ($consulting_service_1 || $consulting_service_2 || $consulting_service_3) {
                        $consulting_services_exist = true;
                    }

                    if ($consulting_services_exist) : ?>
                        <ul class="consulting-services-list mb-4 mb-md-5">
                            <?php
                            // Display Consulting Service 1
                            if ($consulting_service_1 && !empty($consulting_service_1['icon']) && !empty($consulting_service_1['title'])) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url($consulting_service_1['icon']); ?>" alt="<?php echo esc_attr($consulting_service_1['title']); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html($consulting_service_1['title']); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php
                            // Display Consulting Service 2
                            if ($consulting_service_2 && !empty($consulting_service_2['icon']) && !empty($consulting_service_2['title'])) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url($consulting_service_2['icon']); ?>" alt="<?php echo esc_attr($consulting_service_2['title']); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html($consulting_service_2['title']); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php
                            // Display Consulting Service 3
                            if ($consulting_service_3 && !empty($consulting_service_3['icon']) && !empty($consulting_service_3['title'])) : ?>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-img">
                                            <img src="<?php echo esc_url($consulting_service_3['icon']); ?>" alt="<?php echo esc_attr($consulting_service_3['title']); ?>">
                                        </div>
                                        <div class="card-body">
                                            <?php echo esc_html($consulting_service_3['title']); ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php else : // Fallback hardcoded list ?>
                        <ul class="consulting-services-list mb-4 mb-md-5">
                            <li><a href="javascript:void(0)" class="card disabled"><div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/postgresql/SVG/oracle-compatibility-features.svg" alt=""></div><div class="card-body">Oracle compatible features</div></a></li>
                            <li><a href="javascript:void(0)" class="card disabled"><div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/postgresql/SVG/enterprise-ready-tools.svg" alt=""></div><div class="card-body">Enterprise-ready tools</div></a></li>
                            <li><a href="javascript:void(0)" class="card disabled"><div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/postgresql/SVG/anytime-anywhere-support.svg" alt=""></div><div class="card-body">24x7 support</div></a></li>
                        </ul>
                    <?php endif; ?>

                    <div class="video-box mb-4 mb-md-5">
                        <?php
                        // ACF Field: elastic_main_video_url (oEmbed field)
                        $main_video_embed = get_field('elastic_main_video_url');
                        if ( $main_video_embed ) :
                            echo $main_video_embed; // oEmbed field returns the full embed HTML
                        else : ?>
                            <iframe src="https://www.youtube.com/embed/yJarWSLRM24" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>

                    <?php
                    // ACF Field: elastic_search_heading (Text)
                    $elasticsearch_heading = get_field('elastic_search_heading');
                    if ($elasticsearch_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($elasticsearch_heading); ?></h4>
                            <?php
                            // ACF Field: elastic_search_description (WYSIWYG Editor)
                            $elasticsearch_description = get_field('elastic_search_description');
                            if ($elasticsearch_description) : ?>
                                <p><?php echo apply_filters('the_content', $elasticsearch_description); ?></p>
                            <?php else : ?>
                                <p>Based on the Apache Lucene search engine, Elasticsearch is a free and open, full text search and analysis engine. The NoSQL database is used to power
                                applications that achieve search requirements, by enabling indexing and storing the data. Adopted in search engine platforms for modern web & mobile applications,
                                the tool also offers complex analytics and many more advanced features</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_search_benefits_heading (Text)
                    $elasticsearch_benefits_heading = get_field('elastic_search_benefits_heading');
                    if ($elasticsearch_benefits_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($elasticsearch_benefits_heading); ?></h4>
                        </div>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_search_benefits_content (WYSIWYG Editor)
                    $elasticsearch_benefits_content = get_field('elastic_search_benefits_content');
                    if ($elasticsearch_benefits_content) : ?>
                        <ul class="blt-list mb-4">
                            <?php echo apply_filters('the_content', $elasticsearch_benefits_content); // Assume content editor adds <ul> and <li> ?>
                        </ul>
                    <?php else : // Fallback hardcoded list ?>
                        <ul class="blt-list mb-4">
                            <li><p>Providing RESTful API, it is based on Apache Lucene</p></li>
                            <li><p>Using Multi-document APIs, it manipulates every your data record by record</p></li>
                            <li><p>Filtering & Querying of data is order to derive insights</p></li>
                            <li><p>To make search faster, real time use of indexing is done by horizontal scalability, reliability, and multi-tenant capabilities</p></li>
                            <li><p>Creates a schema for data while storing schema-less data</p></li>
                        </ul>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_logstash_heading (Text)
                    $logstash_heading = get_field('elastic_logstash_heading');
                    if ($logstash_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($logstash_heading); ?></h4>
                            <?php
                            // ACF Field: elastic_logstash_description (WYSIWYG Editor)
                            $logstash_description = get_field('elastic_logstash_description');
                            if ($logstash_description) : ?>
                                <p><?php echo apply_filters('the_content', $logstash_description); ?></p>
                            <?php else : ?>
                                <p>Executing different transformations and enhancements, Logstash is a log aggregator collecting data from different input sources and shipping the data to various
                                supported output destinations. It supports cleansing your data for analytics & visualization of use cases, while unifying data from different sources into your
                                desired destinations.</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_logstash_benefits_heading (Text)
                    $logstash_benefits_heading = get_field('elastic_logstash_benefits_heading');
                    if ($logstash_benefits_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($logstash_benefits_heading); ?></h4>
                        </div>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_logstash_benefits_content (WYSIWYG Editor)
                    $logstash_benefits_content = get_field('elastic_logstash_benefits_content');
                    if ($logstash_benefits_content) : ?>
                        <ul class="blt-list mb-4">
                            <?php echo apply_filters('the_content', $logstash_benefits_content); // Assume content editor adds <ul> and <li> ?>
                        </ul>
                    <?php else : // Fallback hardcoded list ?>
                        <ul class="blt-list mb-4">
                            <li><p>Analysis of a large variety of structured or unstructured data, events, etc.</p></li>
                            <li><p>Plugins offered to connect with different types of input sources and platforms</p></li>
                            <li><p>Enabling centralized data processing</p></li>
                        </ul>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_kibana_heading (Text)
                    $kibana_heading = get_field('elastic_kibana_heading');
                    if ($kibana_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($kibana_heading); ?></h4>
                            <?php
                            // ACF Field: elastic_kibana_description (WYSIWYG Editor)
                            $kibana_description = get_field('elastic_kibana_description');
                            if ($kibana_description) : ?>
                                <p><?php echo apply_filters('the_content', $kibana_description); ?></p>
                            <?php else : ?>
                                <p>Kibana helps developers get a quick insight into the Elasticsearch documents. It is a visualization layer that works on top of Elasticsearch in order to provide
                                users an interface to visualize and for data querying.</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_kibana_benefits_heading (Text)
                    $kibana_benefits_heading = get_field('elastic_kibana_benefits_heading');
                    if ($kibana_benefits_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($kibana_benefits_heading); ?></h4>
                        </div>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_kibana_benefits_content (WYSIWYG Editor)
                    $kibana_benefits_content = get_field('elastic_kibana_benefits_content');
                    if ($kibana_benefits_content) : ?>
                        <ul class="blt-list mb-4">
                            <?php echo apply_filters('the_content', $kibana_benefits_content); // Assume content editor adds <ul> and <li> ?>
                        </ul>
                    <?php else : // Fallback hardcoded list ?>
                        <ul class="blt-list mb-4">
                            <li><p>Instinctive & user friendly interface</p></li>
                            <li><p>Real time analysis, debugging capabilities, charting and summarization</p></li>
                            <li><p>Real time search of indexed information</p></li>
                            <li><p>Integrated totally with Elasticsearch</p></li>
                            <li><p>Dashboard visualizes indexed information from the cluster</p></li>
                        </ul>
                    <?php endif; ?>

                    <?php
                    // ACF Field: elastic_beats_heading (Text)
                    $beats_heading = get_field('elastic_beats_heading');
                    if ($beats_heading) : ?>
                        <div class="section-title mb-4">
                            <h4><?php echo esc_html($beats_heading); ?></h4>
                            <?php
                            // ACF Field: elastic_beats_description (WYSIWYG Editor)
                            $beats_description = get_field('elastic_beats_description');
                            if ($beats_description) : ?>
                                <p><?php echo apply_filters('the_content', $beats_description); ?></p>
                            <?php else : ?>
                                <p>Lightweight agents installed on edge hosts in order to collect the different types of data for forwarding into the stack, they along-with Logstash, take care of
                                data collection & processing. They are commonly used for securing IT environments as well as monitoring and troubleshooting them.</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <section class="know-more-band">
        <div class="container">
            <?php
            // ACF Field: elastic_know_more_text (Text Area)
            $know_more_text = get_field('elastic_know_more_text');
            if ($know_more_text) : ?>
                <P class="text-center w-100"><?php echo esc_html($know_more_text); ?></P>
            <?php else : ?>
                <P class="text-center w-100">To know more about Services, Pricing & Support</P>
            <?php endif; ?>

            <div class="d-flex flex-wrap justify-content-center">
                <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>" class="button anim mx-auto">
                    <div class="img-box circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                    </div>
                    <div class="img-box arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                    </div>
                    <?php
                    // ACF Field: elastic_contact_button_text (Text)
                    $contact_button_text = get_field('elastic_contact_button_text');
                    if ($contact_button_text) : ?>
                        <span><?php echo esc_html($contact_button_text); ?></span>
                    <?php else : ?>
                        <span>Contact Us</span>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </section>

    <section class="case-study">
        <div class="container">
            <?php
            // ACF Field: elastic_case_studies_heading (Text)
            $case_studies_heading = get_field('elastic_case_studies_heading');
            if ($case_studies_heading) : ?>
                <div class="section-title mb-3">
                    <h2><?php echo esc_html($case_studies_heading); ?></h2>
                </div>
            <?php else : ?>
                <div class="section-title mb-3">
                    <h2>Case Studies</h2>
                </div>
            <?php endif; ?>

            <?php
            // ACF Field: elastic_featured_case_studies (Post Object field, returns Post Object array)
            $featured_case_studies = get_field('elastic_featured_case_studies');

            if ($featured_case_studies) : ?>
                <ul class="case-list">
                    <?php
                    // Loop through each selected post object
                    foreach ($featured_case_studies as $post) :
                        setup_postdata($post); // Sets up post data so WordPress template tags work
                        
                        $case_study_date = get_field('case_study_date', $post->ID); // Get ACF field from the specific case study post
                        $external_link = get_field('case_study_external_link', $post->ID); // Get optional external link
                        $link_to_use = $external_link ? esc_url($external_link) : esc_url(get_permalink($post->ID)); // Use post ID for permalink
                        ?>
                        <li>
                            <a href="<?php echo $link_to_use; ?>" class="card">
                                <?php if ( has_post_thumbnail($post->ID) ) : // Check if the selected post has a featured image ?>
                                    <div class="card-img">
                                        <?php echo get_the_post_thumbnail($post->ID, 'medium', array('alt' => get_the_title($post->ID))); // Get thumbnail for the selected post ?>
                                    </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5><?php the_title($post->ID); ?></h5>
                                    <?php if ($case_study_date) : ?>
                                        <span><?php echo esc_html($case_study_date); ?></span>
                                    <?php endif; ?>
                                    <?php if ( has_excerpt($post->ID) ) : // Check if a custom excerpt is set for the selected post ?>
                                        <p><?php echo get_the_excerpt($post->ID); ?></p>
                                    <?php else : // Fallback to trimmed content if no excerpt ?>
                                        <p><?php echo wp_trim_words( get_the_content($post->ID), 50, '...' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata(); // Restore original Post Data after the loop ?>
            <?php else : // Fallback hardcoded case study if no CPT posts are selected ?>
                <ul class="case-list">
                    <li>
                        <a href="<?php echo get_permalink( get_page_by_path( 'case-study-elastic' ) ); ?>" class="card">
                            <div class="card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case3.webp" alt="Case">
                            </div>
                            <div class="card-body">
                                <h5>How a leading healthcare service provider implemented Data-Log monitoring solution using Elastic</h5>
                                <span>16 Nov 2021</span>
                                <p>Our customer is one of leading healthcare provider that offer services that include Cancer Research, Cardiovascular Disease, Stem Cells Therapy and Genetics
                                Research & others, thus making it one of the world top centers in rare diseases research</p>
                            </div>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>