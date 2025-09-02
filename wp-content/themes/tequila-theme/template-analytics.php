<?php
/*
Template Name: Analytics Page Template
Description: Custom template for the Analytics page.
*/
get_header();

// --- Retrieve ACF Field Values for Analytics Page ---
// In-Banner Section
$analytics_in_banner_video_mp4_url = get_field( 'analytics_in_banner_video_mp4' );
$analytics_in_banner_x_image       = get_field( 'analytics_in_banner_x_image' ); // Returns array

// Main Analytics Content
$analytics_partner_logo       = get_field( 'analytics_partner_logo' ); // Returns array
$analytics_section_heading_1  = get_field( 'analytics_section_heading_1' );
$analytics_paragraph_1        = get_field( 'analytics_paragraph_1' ); // WYSIWYG
$analytics_paragraph_2        = get_field( 'analytics_paragraph_2' ); // WYSIWYG
$analytics_youtube_embed_url  = get_field( 'analytics_youtube_embed_url' ); // oEmbed
$analytics_section_heading_2  = get_field( 'analytics_section_heading_2' );
$analytics_paragraph_3        = get_field( 'analytics_paragraph_3' ); // WYSIWYG
$analytics_paragraph_4        = get_field( 'analytics_paragraph_4' ); // WYSIWYG

// --- End Retrieve ACF Field Values ---
?>

<div class="smooth-scroll">
  <div class="space"></div>
  <section class="in-banner">
    <div class="img-box">
      <?php if ( $analytics_in_banner_video_mp4_url ) : ?>
        <video loop muted autoplay data-scroll data-scroll-speed="3">
          <source src="<?php echo esc_url( $analytics_in_banner_video_mp4_url ); ?>" type="video/mp4" autoplay="true">
        </video>
      <?php else : ?>
        <video loop muted autoplay data-scroll data-scroll-speed="3">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4" autoplay="true">
        </video>
      <?php endif; ?>
    </div>
    <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
      <?php if ( $analytics_in_banner_x_image ) : ?>
        <img src="<?php echo esc_url( $analytics_in_banner_x_image['url'] ); ?>" alt="<?php echo esc_attr( $analytics_in_banner_x_image['alt'] ? $analytics_in_banner_x_image['alt'] : 'X' ); ?>">
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-banner/x.webp" alt="X">
      <?php endif; ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="page-title"><?php the_title(); ?></h2> <?php // Uses the standard WordPress Page Title ?>
        </div>
        <div class="col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="analytics">
    <div class="container">
      <div class="row">
        <div class="col-5 col-sm-3 col-md-2">
          <div class="img-box">
            <?php if ( $analytics_partner_logo ) : ?>
              <img src="<?php echo esc_url( $analytics_partner_logo['url'] ); ?>" alt="<?php echo esc_attr( $analytics_partner_logo['alt'] ? $analytics_partner_logo['alt'] : 'Partner Logo' ); ?>">
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qlik.png" alt="qlik">
            <?php endif; ?>
          </div>
        </div>
        <div class="col-12 py-2 py-md-3"></div>
        <div class="col-12">
          <div class="section-title mb-sm-4">
            <?php if ( $analytics_section_heading_1 ) : ?>
              <h4><?php echo esc_html( $analytics_section_heading_1 ); ?></h4>
            <?php else : ?>
              <h4>What’s Big Data Analytics?</h4>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6 pr-md-4 pr-xl-4">
          <?php if ( $analytics_paragraph_1 ) : ?>
            <?php echo $analytics_paragraph_1; // Direct echo for WYSIWYG ?>
          <?php else : ?>
            <p>Organizations are struggling to get the ROI they expect from big data initiatives. Building a repository is just a starting point. Big data analytics quickly turns
              massive, raw data sources into analytics-ready information that can be easily analyzed and visualized.</p>
          <?php endif; ?>
        </div>
        <div class="col-md-6 pl-md-4 pl-xl-5">
          <?php if ( $analytics_paragraph_2 ) : ?>
            <?php echo $analytics_paragraph_2; // Direct echo for WYSIWYG ?>
          <?php else : ?>
            <p>The best big data analytics tools enable users to freely explore and uncover hidden insights within big datasets that combine relevant data from multiple sources.
              This offers a more complete view of their business and the forces shaping it so they can confidently make decisions and take action.</p>
          <?php endif; ?>
        </div>
        <div class="col-12">
          <div class="video-box mt-4">
            <?php if ( $analytics_youtube_embed_url ) : ?>
              <?php echo $analytics_youtube_embed_url; // Direct echo for oEmbed field ?>
            <?php else : ?>
              <iframe src="https://www.youtube.com/embed/sd84bsRWSLY" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-12 mt-4">
          <div class="section-title mb-sm-3 mb-lg-4">
            <?php if ( $analytics_section_heading_2 ) : ?>
              <h4><?php echo esc_html( $analytics_section_heading_2 ); ?></h4>
            <?php else : ?>
              <h4>Big Data Integration – Go From Raw To Analytics - Ready, Faster</h4>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6 pr-md-4 pr-xl-4">
          <?php if ( $analytics_paragraph_3 ) : ?>
            <?php echo $analytics_paragraph_3; // Direct echo for WYSIWYG ?>
          <?php else : ?>
            <p>Leverage your existing big data analytics investments and accelerate your ROI with an end-to-end solution that simplifies the many steps needed to create clean,
              well-documented data from any source, transforming raw data into trusted, analytics-ready information.</p>
          <?php endif; ?>
        </div>
        <div class="col-md-6 pl-md-4 pl-xl-5">
          <?php if ( $analytics_paragraph_4 ) : ?>
            <?php echo $analytics_paragraph_4; // Direct echo for WYSIWYG ?>
          <?php else : ?>
            <p>Whether data is within a data lake or legacy application, Qlik lets you access and manage all your data, big and small, within a single environment.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>