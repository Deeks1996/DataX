<section class="case-study">
    <div class="container">
        <div class="section-title mb-3">
            <h2>Case Studies</h2>
        </div>
        <ul class="case-list">
            <?php
            // WordPress Loop to fetch Case Studies
            $args = array(
                'post_type'      => 'case-study',      
                'posts_per_page' => 3,                 
                'orderby'        => 'menu_order',      
                'order'          => 'ASC',            
            );
            $case_studies_query = new WP_Query( $args );

            if ( $case_studies_query->have_posts() ) :
                while ( $case_studies_query->have_posts() ) : $case_studies_query->the_post();
                    // Get ACF fields
                    $card_image_url       = get_field('case_study_card_image');
                    $case_date            = get_field('case_study_date');
                    $case_excerpt         = get_field('case_study_excerpt');
                    $case_study_card_title = get_field('case_study_display_title');

                    // Fallback to native title if ACF field is empty
                    if ( empty($case_study_card_title) ) {
                        $case_study_card_title = get_the_title();
                    }
            ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="card">
                            <div class="card-img">
                                <img src="<?php echo esc_url($card_image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="537" height="178" loading="lazy">
                            </div>
                            <div class="card-body">
                                <h5><?php echo esc_html($case_study_card_title); ?></h5>
                                <span><?php echo esc_html($case_date); ?></span>
                                <p><?php echo esc_html($case_excerpt); ?></p>
                            </div>
                        </a>
                    </li>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No case studies found.</p>';
            endif;
            ?>
        </ul>
    </div>
</section>