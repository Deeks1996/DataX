<?php
/*
Template Name: Redis Page
*/
get_header();
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php
            $banner_video_mp4 = get_field('redis_banner_video_mp4');
            if ( $banner_video_mp4 ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url($banner_video_mp4); ?>" type="video/mp4" autoplay="true">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4" autoplay="true">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php
            $banner_x_image = get_field('redis_banner_x_image');
            if ( $banner_x_image ) : ?>
                <img src="<?php echo esc_url($banner_x_image); ?>" alt="X">
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
                        <div class="card-img">
                            <?php
                            $tech_banner_bg_image = get_field('redis_tech_banner_bg_image');
                            if ( $tech_banner_bg_image ) : ?>
                                <img src="<?php echo esc_url($tech_banner_bg_image); ?>" alt="Background">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/redis-bg.webp" alt="bg1">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="img-box">
                                <?php
                                $tech_banner_logo = get_field('redis_tech_banner_logo');
                                if ( $tech_banner_logo ) : ?>
                                    <img src="<?php echo esc_url($tech_banner_logo); ?>" alt="Logo">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/redis.webp" alt="git">
                                <?php endif; ?>
                            </div>
                            <?php
                            $tech_banner_description = get_field('redis_tech_banner_description');
                            if ( $tech_banner_description ) : ?>
                                <h4><?php echo nl2br(esc_html($tech_banner_description)); ?></h4>
                            <?php else : ?>
                                <h4>Redis is an open source (BSD licensed), in-memory data structure store, used as a database, cache and message broker.</h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-title mb-4">
                        <?php
                        $why_redis_title = get_field('redis_why_title');
                        if ( $why_redis_title ) : ?>
                            <h4><?php echo esc_html($why_redis_title); ?></h4>
                        <?php else : ?>
                            <h4>Why Redis?</h4>
                        <?php endif; ?>

                        <?php
                        $why_redis_content = get_field('redis_why_content');
                        if ( $why_redis_content ) : ?>
                            <p><?php echo $why_redis_content; ?></p>
                        <?php else : ?>
                            <p>Redis is an open source (BSD licensed), in-memory data structure store, used as a database, cache and message broker. It supports data structures such as strings, hashes, lists, sets, sorted sets with range queries, bitmaps, hyperloglogs, geospatial indexes with radius queries and streams.</p>
                        <?php endif; ?>
                    </div>
                    <div class="video-box mb-4 mb-md-5">
                        <div class="video-box mb-4 mb-md-5">
                          <?php
                          // Get the oEmbed content directly
                          $why_redis_video_embed = get_field('redis_why_video_url');

                          if ( $why_redis_video_embed ) :
                              echo $why_redis_video_embed;
                          else :
                              // Fallback static iframe if no oEmbed URL is provided in ACF
                              ?>
                              <iframe src="https://www.youtube.com/embed/oa1ns12KFhQ" title="Why Redis? - Redis Labs" frameborder="0"
                                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <?php endif; ?>
                      </div>
                    </div>

                    <div class="section-title mb-4">
                        <?php
                        $benefits_title = get_field('redis_benefits_title');
                        if ( $benefits_title ) : ?>
                            <h4><?php echo esc_html($benefits_title); ?></h4>
                        <?php else : ?>
                            <h4>Benefits of our offerings</h4>
                        <?php endif; ?>

                        <?php
                        $benefits_intro_content = get_field('redis_benefits_intro_content');
                        if ( $benefits_intro_content ) : ?>
                            <p><?php echo $benefits_intro_content; ?></p>
                        <?php else : ?>
                            <p>Redis has built-in replication, Lua scripting, LRU eviction, transactions and different levels of on-disk persistence, and provides high availability via Redis Sentinel and automatic partitioning with Redis Cluster.</p>
                        <?php endif; ?>
                    </div>

                    <ul class="blt-list mb-4">
                        <?php for ( $i = 1; $i <= 9; $i++ ) :
                            $benefit_item = get_field( 'redis_benefit_item_' . $i );
                            if ( $benefit_item ) : ?>
                                <li><p><?php echo esc_html( $benefit_item ); ?></p></li>
                            <?php endif;
                        endfor; ?>
                        <?php if ( ! get_field( 'redis_benefit_item_1' ) ) : // Fallback if no dynamic items set ?>
                            <li><p>All round operational support</p></li>
                            <li><p>Design & architecting skills for your current & future needs</p></li>
                            <li><p>Providing automation to address rapidly scaling landscape</p></li>
                            <li><p>Integration & deployment expertise to simplify the complexities</p></li>
                            <li><p>Unbiased, independent insights for better & smarter decision making</p></li>
                        <?php endif; ?>
                    </ul>

                    <div class="content-box topic-list">
                      <ul>
                          <?php
                          $has_topics = false;
                          // Loop through the 11 topics
                          for ( $i = 1; $i <= 11; $i++ ) :
                              // Fetch each individual field directly by its full name
                              $topic_icon_field = get_field( 'topic_' . $i . '_icon' ); // Correct field name for icon
                              $topic_title = get_field( 'topic_' . $i . '_title' );     // Correct field name for title
                              $topic_description = get_field( 'topic_' . $i . '_description' ); // Correct field name for description

                              // Determine the correct URL for the icon, handling both array and string returns
                              $icon_url = '';
                              if ( is_array($topic_icon_field) && isset($topic_icon_field['url']) ) {
                                  $icon_url = $topic_icon_field['url']; // If ACF 'Image' field is set to return 'Image Array'
                              } elseif ( is_string($topic_icon_field) ) {
                                  $icon_url = $topic_icon_field; // If ACF 'Image' field is set to return 'Image URL'
                              }

                              // Skip this list item if all three fields for the current topic are empty
                              if ( empty($topic_title) && empty($icon_url) && empty($topic_description) ) {
                                  continue; // Skip to the next iteration of the loop
                              }

                              // If at least one field has content, set has_topics to true
                              $has_topics = true;
                              ?>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <?php if ( $icon_url ) : ?>
                                                      <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($topic_title); ?> Icon">
                                                  <?php else : ?>
                                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/placeholder.svg" alt="Icon">
                                                  <?php endif; ?>
                                              </div>
                                              <div class="media-body">
                                                  <h4><?php echo esc_html($topic_title); ?></h4>
                                              </div>
                                          </div>
                                          <p><?php echo apply_filters('the_content', $topic_description); ?></p>
                                      </div>
                                  </a>
                              </li>
                          <?php endfor; ?>

                          <?php if ( ! $has_topics ) : // Fallback if no dynamic topics were set ?>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/high-availability-with-99-999-uptime.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>99.99% uptime</h4>
                                              </div>
                                          </div>
                                          <p>Working with complete transparency, it offers uninterrupted high availability, with diskless replication, single digit seconds failover, and instant failure detection.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/acid-compliant.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>ACID compliant</h4>
                                              </div>
                                          </div>
                                          <p>Full ACID compliance with its support for commands that allow for sequential execution of durable transaction components as a single operation.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/best-in-class-performance-at-scale.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Best-in-class performance</h4>
                                              </div>
                                          </div>
                                          <p>Delivering superior application performance, and the best use of infrastructure resources, it delivers infinite linear scaling and deploys on a single cluster node helping take full advantage if multi core architecture.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/active-active-geo-distribution.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Active Geo distribution</h4>
                                              </div>
                                          </div>
                                          <p>Delivering local latency & enabling disaster proof architecture, Redis offers Active active deployment for globally distributed databases.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/multi-layer-security-and-compliance.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Multi-layer security & compliance</h4>
                                              </div>
                                          </div>
                                          <p>Offers multi layer security for authorization, encryption, authentication, multi layer security for access control, and ensures production data is isolated from administrative access.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/built-in-durabilit.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Built in durability</h4>
                                              </div>
                                          </div>
                                          <p>Delivering high disk IOPS even under heavy write loads, it provides multiple persistence options on primary and replica shards. Guarding against the short term nature of local storage, it persists data to network attached storage.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/intelligent-tiered-access-to-memory.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Intelligent tiered memory access</h4>
                                              </div>
                                          </div>
                                          <p>Saving upto 70% on infrastructure costs, this approach places frequently accessed hot data in memory and colder values in persistent memory. Redis on Dram, and Redis on Flash deliver high performance.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/backup-cluster-recovery-and-disaster-recovery.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Backup, cluster recovery, and disaster recovery</h4>
                                              </div>
                                          </div>
                                          <p>Allows fast recovery in case of disaster by providing a full suite of disaster recovery, backup, and cluster recovery capabilities.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/flexible-deployment-options.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Flexible deployment</h4>
                                              </div>
                                          </div>
                                          <p>Deployed on any cloud platform, it is also available as a native service on platforms like Pivotal Cloud Foundry, Pivotal Kubernete Service and more.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/true-multi-model-with-dedicated-modules.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Multi models support</h4>
                                              </div>
                                          </div>
                                          <p>Supports multi data types and models in a single database platform, with modules such as RediSearch, RedisGraph, RedisJSON, RedisTimeSeries, RedisAI.</p>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" class="card disabled">
                                      <div class="card-body">
                                          <div class="media">
                                              <div class="media-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redis/SVG/automationandsupport.svg" alt="Icon">
                                              </div>
                                              <div class="media-body">
                                                  <h4>Support & Automation</h4>
                                              </div>
                                          </div>
                                          <p>Complete automation of day to day database operations, without impacting your application. This includes re-sharding, shard migration, setting up triggers for auto balancing.</p>
                                      </div>
                                  </a>
                              </li>
                          <?php endif; ?>
                      </ul>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section class="know-more-band">
        <div class="container">
            <?php
            $know_more_text = get_field('redis_know_more_text');
            if ( $know_more_text ) : ?>
                <P class="text-center w-100"><?php echo nl2br(esc_html($know_more_text)); ?></P>
            <?php else : ?>
                <P class="text-center w-100">To know more about Services, Pricing & Support</P>
            <?php endif; ?>

            <div class="d-flex flex-wrap justify-content-center">
                <?php
                $contact_us_page_link = get_field('redis_contact_us_page_link');
                $contact_us_button_text = get_field('redis_contact_us_button_text');
                if ( $contact_us_page_link && $contact_us_button_text ) : ?>
                    <a href="<?php echo esc_url($contact_us_page_link); ?>" class="button anim mx-auto">
                        <div class="img-box circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                        </div>
                        <div class="img-box arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                        </div>
                        <span><?php echo esc_html($contact_us_button_text); ?></span>
                    </a>
                <?php else : ?>
                    <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>" class="button anim mx-auto">
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
            <div class="section-title mb-3">
                <?php
                $case_study_section_title = get_field('redis_case_study_section_title');
                if ( $case_study_section_title ) : ?>
                    <h2><?php echo esc_html($case_study_section_title); ?></h2>
                <?php else : ?>
                    <h2>Case Studies</h2>
                <?php endif; ?>
            </div>

            <?php
            $featured_case_study = get_field('redis_featured_case_study');

            if ( $featured_case_study ) :
                setup_postdata( $featured_case_study );
                ?>
                <ul class="case-list">
                    <li>
                        <a href="<?php the_permalink(); ?>" class="card">
                            <div class="card-img">
                                <?php if ( has_post_thumbnail( $featured_case_study->ID ) ) : ?>
                                    <?php echo get_the_post_thumbnail( $featured_case_study->ID, 'medium' ); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/placeholder-case.webp" alt="Case Placeholder">
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h5><?php the_title(); ?></h5>
                                <span><?php echo get_the_date('d M Y', $featured_case_study->ID); ?></span>
                                <p><?php echo wp_trim_words( get_the_excerpt( $featured_case_study->ID ), 30 ); ?></p>
                            </div>
                        </a>
                    </li>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <ul class="case-list">
                    <li>
                        <a href="<?php echo get_permalink( get_page_by_path( 'case-study-redis' ) ); ?>" class="card">
                            <div class="card-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case4.webp" alt="Case">
                            </div>
                            <div class="card-body">
                                <h5>Why the Financial Industry Needs Redis Enterprise</h5>
                                <span>07 Oct 2020</span>
                                <p>The financial industry faces massive challenges. Consumer expectations have increased while regulators have ramped up their scrutiny of financial institutions. Consumers have many choices...</p>
                            </div>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>