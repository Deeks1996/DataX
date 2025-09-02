<?php
/**
 * Template part for displaying the home solutions section.
 *
 * @package TequilaTheme
 */
?>
<section class="home-solutions">
  <div class="container">
    <div class="section-title mb-4">
      <h2>Technologies</h2>
      <p>Best consulting solutions, Services, and much more</p>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="content-box">
          <ul>
            <?php
            // WordPress Query to fetch all 'solution' custom post types
            $args = array(
                'post_type'      => 'solution',           // The slug of our Custom Post Type
                'posts_per_page' => -1,                   // Get all posts of this type (-1 means all)
                'orderby'        => 'menu_order',         // Order them by the order set in admin, or by 'date', 'title'
                'order'          => 'ASC',                // Ascending order
                'post_status'    => 'publish'             // Only retrieve published posts
            );
            $solutions_query = new WP_Query( $args );

            // Check if there are any solution posts
            if ( $solutions_query->have_posts() ) :
                while ( $solutions_query->have_posts() ) : $solutions_query->the_post(); // The WordPress Loop
                    // Get ACF fields for the current solution post
                    $solution_icon        = get_field( 'solution_icon' );
                    $solution_title       = get_field( 'solution_title' );
                    $solution_description = get_field( 'solution_description' );
                    $solution_url         = get_field( 'solution_url' );
                    ?>
                    <li>
                        <?php if ( $solution_url ) : ?>
                            <a href="<?php echo esc_url( $solution_url ); ?>" class="card">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                    <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0"></rect>
                                </svg>
                                <div class="card-body">
                                    <div class="media">
                                        <?php if ( $solution_icon ) : ?>
                                            <div class="media-img">
                                                <?php echo wp_get_attachment_image( $solution_icon['id'], 'full', false, array( 'width' => 70, 'height' => 70, 'loading' => 'lazy', 'alt' => esc_attr($solution_title) . ' Icon' ) ); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="media-body">
                                            <?php if ( $solution_title ) : ?>
                                                <h4><?php echo esc_html( $solution_title ); ?></h4>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php if ( $solution_description ) : ?>
                                        <p><?php echo esc_html( $solution_description ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php endif; ?>
                    </li>
                    <?php
                endwhile;

                // Restore original post data to prevent conflicts with other queries
                wp_reset_postdata();
            else :
                // Message to display if no solutions are found
                ?>
                <p>No Solutions found. Please add solutions via the WordPress admin panel.</p>
                <?php
            endif;
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>