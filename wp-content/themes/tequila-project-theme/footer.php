<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tequila-Project-theme
 */

?>

	</div>
		<footer class="site-footer">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.webp" alt="Footer Logo" class="footer-logo">
                <p>Providing data solutions, the open source way.</p>
            </div>
            <div class="col-md-4">
              <h4>Quick Links</h4>
                <ul>
                  <li><a href="<?php echo home_url('/about/'); ?>">About Us</a></li>
                  <li><a href="<?php echo home_url('/services/'); ?>">Services</a></li>
                  <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
              <h4>Contact Us</h4>
                <p><i class="fas fa-phone-alt"></i> +97165211720</p>
                <p><i class="fas fa-envelope"></i> contact@dataxsolution.net</p>
            </div>
          </div>
          <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> DataX Solution. All rights reserved.</p>
          </div>
      </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
