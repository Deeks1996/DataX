<?php
/**
 * Template part for displaying the our clients section.
 *
 * @package TequilaTheme
 */
?>
<section class="our-client">
  <div class="container">
    <div class="section-title">
      <h2 class="mb-0">Our Clients</h2>
    </div>

    <ul class="client-list">
      <?php
      // WordPress Query to fetch all 'client' custom post types
      $args = array(
          'post_type'      => 'client',             // The slug of our Custom Post Type
          'posts_per_page' => -1,                   // Get all posts of this type (-1 means all)
          'orderby'        => 'menu_order',         // Order them by the order set in admin, or by 'date', 'title'
          'order'          => 'ASC',                // Ascending order
          'post_status'    => 'publish'             // Only retrieve published posts
      );
      $clients_query = new WP_Query( $args );

      // Check if there are any client posts
      if ( $clients_query->have_posts() ) :
          while ( $clients_query->have_posts() ) : $clients_query->the_post(); // The WordPress Loop
              // Get ACF field for the current client logo
              $client_logo = get_field( 'client_logo' );
              ?>
              <li>
                  <div class="img-box">
                      <?php if ( $client_logo ) :
                          // Use wp_get_attachment_image to output the image tag
                          // 'full' for the original size, adjust attributes as needed
                          echo wp_get_attachment_image( $client_logo['id'], 'full', false, array(
                              'alt'     => esc_attr( get_the_title() ), // Use the post title as alt text
                              'loading' => 'lazy'
                          ) );
                      endif; ?>
                  </div>
              </li>
              <?php
          endwhile;

          // Restore original post data to prevent conflicts with other queries
          wp_reset_postdata();
      else :
          // Message to display if no clients are found
          ?>
          <li><p>No Clients found. Please add client logos via the WordPress admin panel.</p></li>
          <?php
      endif;
      ?>
    </ul>

    <a href="<?php echo site_url('/our-clients'); ?>" class="button anim mt-4">
      <div class="img-box circle">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
      </div>
      <div class="img-box arrow">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Arrow" width="60" height="64" loading="lazy">
      </div>
      <span>View All Clients</span>
    </a>
  </div>
</section>