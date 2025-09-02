
<?php
// Define the ID of your 'Global Site Settings' page
$global_settings_page_id = 1490;
?>

    <footer class="footer">
        <?php
        $footer_bg_image = get_field('footer_bg_image', $global_settings_page_id);
        if ( $footer_bg_image ) : ?>
            <div class="footer-bg">
                <img src="<?php echo esc_url( $footer_bg_image ); ?>" alt="footer bg" data-scroll data-scroll-speed="-5" data-scroll-direction="horizontal" width="1872" height="872" loading="lazy">
            </div>
        <?php else : ?>
            <div class="footer-bg">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-bg.png" alt="footer bg" data-scroll data-scroll-speed="-5" data-scroll-direction="horizontal" width="1872" height="872" loading="lazy">
            </div>
        <?php endif; ?>

        <?php
        $footer_x_svg = get_field('footer_x_svg', $global_settings_page_id);
        if ( $footer_x_svg ) : ?>
            <div class="footer-x">
                <img src="<?php echo esc_url( $footer_x_svg ); ?>" alt="footer x" data-scroll data-scroll-speed="2" data-scroll-direction="horizontal" width="576" height="463" loading="lazy">
            </div>
        <?php else : ?>
            <div class="footer-x">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer-x.svg" alt="footer x" data-scroll data-scroll-speed="2" data-scroll-direction="horizontal" width="576" height="463" loading="lazy">
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title mb-0">
                        <?php
                        $footer_cta_title = get_field('footer_cta_title', $global_settings_page_id);
                        if ( $footer_cta_title ) : ?>
                            <h2><?php echo esc_html( $footer_cta_title ); ?></h2>
                        <?php else : ?>
                            <h2>Ready To Evolve?</h2>
                        <?php endif; ?>
                    </div>
                    <ul class="con-list">
                        <li>
                            <?php
                            $footer_phone_icon = get_field('footer_phone_icon', $global_settings_page_id);
                            if ( $footer_phone_icon ) : ?>
                                <div class="img-box"><img src="<?php echo esc_url( $footer_phone_icon ); ?>" alt="Phone" width="30" height="30" loading="lazy"></div>
                            <?php else : ?>
                                <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/phone.svg" alt="Phone" width="30" height="30" loading="lazy"></div>
                            <?php endif; ?>
                            <?php
                            $footer_phone_number = get_field('footer_phone_number', $global_settings_page_id);
                            if ( $footer_phone_number ) : ?>
                                <a href="tel:<?php echo esc_attr( str_replace(' ', '', $footer_phone_number) ); ?>"><?php echo esc_html( $footer_phone_number ); ?></a>
                            <?php else : ?>
                                <a href="tel:+97165211720">+971 6 521 1720</a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php
                            $footer_mail_icon = get_field('footer_mail_icon', $global_settings_page_id);
                            if ( $footer_mail_icon ) : ?>
                                <div class="img-box"><img src="<?php echo esc_url( $footer_mail_icon ); ?>" alt="Mail" width="30" height="30" loading="lazy"></div>
                            <?php else : ?>
                                <div class="img-box"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/mail.svg" alt="Mail" width="30" height="30" loading="lazy"></div>
                            <?php endif; ?>
                            <?php
                            $footer_email_address = get_field('footer_email_address', $global_settings_page_id);
                            if ( $footer_email_address ) : ?>
                                <a href="mailto:<?php echo esc_attr( $footer_email_address ); ?>"><?php echo esc_html( $footer_email_address ); ?></a>
                            <?php else : ?>
                                <a href="mailto:contact@dataxsolution.net">contact@dataxsolution.net</a>
                            <?php endif; ?>
                        </li>
                    </ul>

                    <?php
                    // Dynamic Quick Links Menu
                    // IMPORTANT: Create a new WordPress menu under Appearance > Menus (e.g., 'footer-quick-links')
                    // and assign it to the 'footer-quick-links' theme location.
                    // If no menu is assigned, it will output the hardcoded fallback.
                    if ( has_nav_menu( 'footer-quick-links' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer-quick-links',
                            'container'      => false, // No container div
                            'menu_class'     => 'quick-link', // Your existing class
                            'depth'          => 1, // Only top-level items
                        ) );
                    } else {
                        // Fallback hardcoded menu (REMOVE this else block once menu is set up in WP Admin)
                        ?>
                        <ul class="quick-link">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/our-clients' ) ); ?>">Our Clients</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/technologies' ) ); ?>">Technologies</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/analytics' ) ); ?>">Analytics</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/hr-solutions' ) ); ?>">HR Solutions</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blogs</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Get in Touch</a></li>
                        </ul>
                        <?php
                    }
                    ?>

                    <ul class="social-link">
                        <?php
                        // First, get the parent social links group
                        $social_links_parent_group = get_field('social_links_group', $global_settings_page_id);

                        if ( $social_links_parent_group ) :
                            // Now access each nested social media group from the parent group
                            $facebook_group = $social_links_parent_group['facebook_group'] ?? null;
                            if ( $facebook_group && !empty($facebook_group['url']) && !empty($facebook_group['icon']) ) : ?>
                                <li><a href="<?php echo esc_url( $facebook_group['url'] ); ?>" class="img-box" target="_blank"><img src="<?php echo esc_url( $facebook_group['icon'] ); ?>" alt="Facebook" width="25" height="25" loading="lazy"></a></li>
                            <?php endif; ?>

                            <?php
                            $linkedin_group = $social_links_parent_group['linkedin_group'] ?? null;
                            if ( $linkedin_group && !empty($linkedin_group['url']) && !empty($linkedin_group['icon']) ) : ?>
                                <li><a href="<?php echo esc_url( $linkedin_group['url'] ); ?>" class="img-box" target="_blank"><img src="<?php echo esc_url( $linkedin_group['icon'] ); ?>" alt="LinkedIn" width="25" height="25" loading="lazy"></a></li>
                            <?php endif; ?>

                            <?php
                            $twitter_group = $social_links_parent_group['twitter_group'] ?? null;
                            if ( $twitter_group && !empty($twitter_group['url']) && !empty($twitter_group['icon']) ) : ?>
                                <li><a href="<?php echo esc_url( $twitter_group['url'] ); ?>" class="img-box" target="_blank"><img src="<?php echo esc_url( $twitter_group['icon'] ); ?>" alt="Twitter" width="25" height="25" loading="lazy"></a></li>
                            <?php endif; ?>

                            <?php
                            $instagram_group = $social_links_parent_group['instagram_group'] ?? null;
                            if ( $instagram_group && !empty($instagram_group['url']) && !empty($instagram_group['icon']) ) : ?>
                                <li><a href="<?php echo esc_url( $instagram_group['url'] ); ?>" class="img-box" target="_blank"><img src="<?php echo esc_url( $instagram_group['icon'] ); ?>" alt="Instagram" width="25" height="25" loading="lazy"></a></li>
                            <?php endif; ?>

                            <?php
                            // Check if ANY social media link (nested in the parent group) was rendered.
                            // If the parent group exists but all sub-groups are empty/not set, then show fallbacks.
                            if ( (empty($facebook_group) || empty($facebook_group['url']) || empty($facebook_group['icon'])) &&
                                 (empty($linkedin_group) || empty($linkedin_group['url']) || empty($linkedin_group['icon'])) &&
                                 (empty($twitter_group) || empty($twitter_group['url']) || empty($twitter_group['icon'])) &&
                                 (empty($instagram_group) || empty($instagram_group['url']) || empty($instagram_group['icon'])) ) :
                                // Fallback hardcoded social links if no valid ACF data found within the nested groups
                            ?>
                                <li><a href="https://www.facebook.com/pages/category/Information-Technology-Company/Datax-Solution-FZC-113786970393467/" class="img-box" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/fb.svg" alt="Facebook" width="25" height="25" loading="lazy"></a></li>
                                <li><a href="https://www.linkedin.com/company/81959597/admin/" class="img-box" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/li.svg" alt="LinkedIn" width="25" height="25" loading="lazy"></a></li>
                                <li><a href="https://twitter.com/DataxSolution" class="img-box" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/tw.svg" alt="Twitter" width="25" height="25" loading="lazy"></a></li>
                                <li><a href="https://www.instagram.com/dataxsolution/" class="img-box" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/in.svg" alt="Instagram" width="25" height="25" loading="lazy"></a></li>
                            <?php endif; ?>
                        <?php else :
                            // Fallback if the parent social_links_group itself is not set or empty
                        ?>
                            <li><a href="https://www.facebook.com/pages/category/Information-Technology-Company/Datax-Solution-FZC-113786970393467/" class="img-box" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/fb.svg" alt="Facebook" width="25" height="25" loading="lazy"></a></li>
                            <li><a href="https://www.linkedin.com/company/81959597/admin/" class="img-box" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/li.svg" alt="LinkedIn" width="25" height="25" loading="lazy"></a></li>
                            <li><a href="https://twitter.com/DataxSolution" class="img-box" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/tw.svg" alt="Twitter" width="25" height="25" loading="lazy"></a></li>
                            <li><a href="https://www.instagram.com/dataxsolution/" class="img-box" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/in.svg" alt="Instagram" width="25" height="25" loading="lazy"></a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="col-md-7 mt-4 mt-lg-5">
                    <div class="copy">
                        <p>
                            <?php
                            $footer_copyright_text = get_field('footer_copyright_text', $global_settings_page_id);
                            if ( $footer_copyright_text ) {
                                // Replace %Y% with current year if used
                                echo str_replace( '%Y%', date('Y'), esc_html( $footer_copyright_text ) );
                            } else {
                                echo '© ' . date('Y') . ' DataX Solution All Rights Reserved.';
                            }
                            ?>
                            <br class="d-md-none">
                            <?php
                            $footer_designed_by_text = get_field('footer_designed_by_text', $global_settings_page_id);
                            $footer_designed_by_link_url = get_field('footer_designed_by_link_url', $global_settings_page_id);
                            $footer_designed_by_link_text = get_field('footer_designed_by_link_text', $global_settings_page_id);

                            if ( $footer_designed_by_text && $footer_designed_by_link_url && $footer_designed_by_link_text ) : ?>
                                <?php echo esc_html( $footer_designed_by_text ); ?> <a href="<?php echo esc_url( $footer_designed_by_link_url ); ?>"><?php echo esc_html( $footer_designed_by_link_text ); ?></a>
                            <?php else : ?>
                                Designed & Developed by <a href="https://tequila.ae/">Tequila.ae</a>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div> <!-- End of Smooth scroll-->

    <?php
    $whatsapp_button_image = get_field('whatsapp_button_image', $global_settings_page_id);
    $whatsapp_button_url = get_field('whatsapp_button_url', $global_settings_page_id);

    if ( $whatsapp_button_image && $whatsapp_button_url ) : ?>
        <a href="<?php echo esc_url( $whatsapp_button_url ); ?>" class="whatsapp-chat" target="_blank">
            <img src="<?php echo esc_url( $whatsapp_button_image ); ?>" alt="WhatsApp" width="60" height="60" loading="lazy">
        </a>
    <?php else : ?>
        <a href="https://wa.me/971547775191" class="whatsapp-chat" target="_blank">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/whatsapp.svg" alt="WhatsApp" width="60" height="60" loading="lazy">
        </a>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>
</html>
