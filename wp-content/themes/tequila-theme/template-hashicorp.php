<?php
/*
Template Name: HashiCorp Page Template
*/
get_header();

// Fetch ACF fields for the current page
$hashicorp_hero_video_url           = get_field('hashicorp_hero_video_url');
$hashicorp_x_image                  = get_field('hashicorp_x_image');
$hashicorp_tech_banner_bg_image     = get_field('hashicorp_tech_banner_bg_image');
$hashicorp_tech_banner_logo         = get_field('hashicorp_tech_banner_logo');
$hashicorp_tech_banner_title        = get_field('hashicorp_tech_banner_title');
$hashicorp_main_content             = get_field('hashicorp_main_content'); // Combined paragraphs into one WYSIWYG

$hashicorp_benefits_title           = get_field('hashicorp_benefits_title');
$hashicorp_benefits_description     = get_field('hashicorp_benefits_description');
// Individual Benefit Items (Group fields with 'text' subfield)
$hashicorp_benefits_list_item_1     = get_field('hashicorp_benefits_list_item_1');
$hashicorp_benefits_list_item_2     = get_field('hashicorp_benefits_list_item_2');
$hashicorp_benefits_list_item_3     = get_field('hashicorp_benefits_list_item_3');
$hashicorp_benefits_list_item_4     = get_field('hashicorp_benefits_list_item_4');
$hashicorp_benefits_list_item_5     = get_field('hashicorp_benefits_list_item_5');

$hashicorp_youtube_video_url        = get_field('hashicorp_youtube_video_url');

$hashicorp_stack_title              = get_field('hashicorp_stack_title');
$hashicorp_stack_description        = get_field('hashicorp_stack_description');
// HashiCorp Stack Items (Group fields with 'image', 'title', 'description' subfields)
$hashicorp_stack_item_consul        = get_field('hashicorp_stack_item_consul');
$hashicorp_stack_item_vault         = get_field('hashicorp_stack_item_vault');
$hashicorp_stack_item_terraform     = get_field('hashicorp_stack_item_terraform');
$hashicorp_stack_item_nomad         = get_field('hashicorp_stack_item_nomad'); // Added Nomad as it was in your HTML fallback

$hashicorp_know_more_text           = get_field('hashicorp_know_more_text');
$hashicorp_know_more_button_text    = get_field('hashicorp_know_more_button_text');
$hashicorp_know_more_button_link    = get_field('hashicorp_know_more_button_link');

?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <?php if ( $hashicorp_hero_video_url ) : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo esc_url( $hashicorp_hero_video_url ); ?>" type="video/mp4">
                </video>
            <?php else : ?>
                <video loop muted autoplay data-scroll data-scroll-speed="3">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/banner.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <?php if ( $hashicorp_x_image && is_array($hashicorp_x_image) ) : ?>
                <img src="<?php echo esc_url( $hashicorp_x_image['url'] ); ?>" alt="<?php echo esc_attr( $hashicorp_x_image['alt'] ); ?>">
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
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'technologies' ) ) ); ?>">Technologies</a></li>
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
                <?php
                    // Display the main content of the page, which comes from the WordPress editor
                    // or if you use an ACF WYSIWYG field, ensure it's outputted here.
                    // For now, retaining the_content() if it's meant to be the default WordPress editor.
                    // If hashicorp_main_content is a WYSIWYG, replace the_content() with its output.
                    /*
                    if ( $hashicorp_main_content ) {
                        echo apply_filters( 'the_content', $hashicorp_main_content );
                    } else {
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        endif;
                    }
                    
                    // Using the new hashicorp_main_content ACF field if it exists, otherwise the default WP content
                    if ( $hashicorp_main_content ) :
                        echo apply_filters( 'the_content', $hashicorp_main_content );
                    else :
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        endif;
                    endif;*/
                    ?>

                    <div class="card tech-banner">
                        <div class="card-img">
                            <?php if ( $hashicorp_tech_banner_bg_image && is_array($hashicorp_tech_banner_bg_image) ) : ?>
                                <img src="<?php echo esc_url( $hashicorp_tech_banner_bg_image['url'] ); ?>" alt="<?php echo esc_attr( $hashicorp_tech_banner_bg_image['alt'] ); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/hashicorp-bg.webp" alt="bg1">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="img-box">
                                <?php if ( $hashicorp_tech_banner_logo && is_array($hashicorp_tech_banner_logo) ) : ?>
                                    <img src="<?php echo esc_url( $hashicorp_tech_banner_logo['url'] ); ?>" alt="<?php echo esc_attr( $hashicorp_tech_banner_logo['alt'] ); ?>">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-solution/hashicorp.webp" alt="git">
                                <?php endif; ?>
                            </div>
                            <?php if ( $hashicorp_tech_banner_title ) : ?>
                                <h4><?php echo esc_html( $hashicorp_tech_banner_title ); ?></h4>
                            <?php else : ?>
                                <h4>HashiCorp provides open-source tools and commercial products that enables developers.</h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                   <?php
                    // Main content now displayed directly after the tech banner card
                    if ( $hashicorp_main_content ) :
                        echo apply_filters( 'the_content', $hashicorp_main_content );
                    else :
                        // Fallback content if ACF field is empty
                        ?>
                        <p>HashiCorp provides open-source tools and commercial products that enables developers, operators and security professionals to provision, secure, run and connect cloud computing infrastructure.</p>
                        <?php
                    endif;
                    ?>

                    <div class="section-title mb-4">
                        <?php if ( $hashicorp_benefits_title ) : ?>
                            <h4><?php echo esc_html( $hashicorp_benefits_title ); ?></h4>
                        <?php else : ?>
                            <h4>Benefits of our offerings</h4>
                        <?php endif; ?>
                    </div>
                    <?php if ( $hashicorp_benefits_description ) : ?>
                        <?php echo apply_filters( 'the_content', $hashicorp_benefits_description ); ?>
                    <?php else : ?>
                        <p><strong>The main product line consists of these following tools:</strong></p>
                        <p><strong>Terraform: </strong> Infrastructure as code software which enables provisioning and adapting virtual infrastructure across all major cloud providers</p>
                        <p><strong>Consul: </strong> Provides distributed KV storage, DNS based service discovery, RPC and event propagation.
                            Vault: provides secret management, identity-based access, encrypting application data and auditing of secrets for applications, systems, and users.</p>
                    <?php endif; ?>

                    <?php
                    // Grouping benefit items into an array for easier loop
                    $benefits_items = [
                        $hashicorp_benefits_list_item_1,
                        $hashicorp_benefits_list_item_2,
                        $hashicorp_benefits_list_item_3,
                        $hashicorp_benefits_list_item_4,
                        $hashicorp_benefits_list_item_5,
                    ];
                    // Check if any benefit item exists by checking for non-empty arrays with a 'text' key
                    $benefits_exist = false;
                    foreach ($benefits_items as $item) {
                        if (is_array($item) && isset($item['text']) && !empty($item['text'])) {
                            $benefits_exist = true;
                            break;
                        }
                    }
                    ?>
                    <?php if ( $benefits_exist ) : ?>
                        <ul class="blt-list mb-4 mb-md-5">
                            <?php foreach ($benefits_items as $item) : ?>
                                <?php if ( is_array($item) && isset($item['text']) && !empty($item['text']) ) : ?>
                                    <li><p><?php echo esc_html( $item['text'] ); ?></p></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <ul class="blt-list mb-4 mb-md-5">
                            <li><p>All round operational support</p></li>
                            <li><p>Design & architecting skills for your current & future needs</p></li>
                            <li><p>Providing automation to address rapidly scaling landscape</p></li>
                            <li><p>Integration & deployment expertise to simplify the complexities</p></li>
                            <li><p>Unbiased, independent insights for better & smarter decision making</p></li>
                        </ul>
                    <?php endif; ?>

                    <div class="video-box mb-4 mb-md-5">
                        <?php if ( $hashicorp_youtube_video_url ) :
                            $embed_code = wp_oembed_get( $hashicorp_youtube_video_url );
                            if ( $embed_code ) :
                                echo $embed_code;
                            else : ?>
                                <iframe src="https://www.youtube.com/embed/VYfl-DpZ5wM" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php endif; ?>
                        <?php else : ?>
                            <iframe src="https://www.youtube.com/embed/VYfl-DpZ5wM" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>

                    <div class="section-title mb-4">
                        <?php if ( $hashicorp_stack_title ) : ?>
                            <h4><?php echo esc_html( $hashicorp_stack_title ); ?></h4>
                        <?php else : ?>
                            <h4>HashiCorp Stack</h4>
                        <?php endif; ?>
                        <?php if ( $hashicorp_stack_description ) : ?>
                            <?php echo apply_filters( 'the_content', $hashicorp_stack_description ); ?>
                        <?php else : ?>
                            <p>Every product addresses specific organizational and technical challenges of cloud infrastructure automation, while the tools provide a control plane for each
                                layer of the cloud, enabling enterprises to make the shift to cloud operating model.
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="content-box topic-list">
                        <?php
                        // Grouping stack items into an array for easier loop
                        $stack_items = [
                            'consul' => $hashicorp_stack_item_consul,
                            'vault' => $hashicorp_stack_item_vault,
                            'terraform' => $hashicorp_stack_item_terraform,
                            'nomad' => $hashicorp_stack_item_nomad, // Make sure this ACF field is also defined
                        ];

                        $stack_items_exist = false;
                        foreach ($stack_items as $key => $item) {
                            if (is_array($item) && isset($item['image']) && is_array($item['image']) && !empty($item['image']['url']) && isset($item['title']) && !empty($item['title'])) {
                                $stack_items_exist = true;
                                break;
                            }
                        }
                        ?>
                        <?php if ( $stack_items_exist ) : ?>
                            <ul>
                                <?php foreach ($stack_items as $key => $item) : ?>
                                    <?php
                                    // Robust check for each stack item
                                    if ( is_array($item) &&
                                         isset($item['image']) && is_array($item['image']) && !empty($item['image']['url']) &&
                                         isset($item['title']) && !empty($item['title']) ) :
                                    ?>
                                        <li>
                                            <a href="javascript:void(0)" class="card disabled">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-img">
                                                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4><?php echo esc_html( $item['title'] ); ?></h4>
                                                        </div>
                                                    </div>
                                                    <?php if ( isset($item['description']) && !empty($item['description']) ) : ?>
                                                        <?php echo apply_filters( 'the_content', $item['description'] ); ?>
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
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/hashicorp/SVG/consul.svg" alt="Consul Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Consul</h4>
                                                </div>
                                            </div>
                                            <p>Service based cloud networking that includes Service Discovery for connectivity in order to remove manual processes, & Service Mesh to secure and observe
                                                services across any runtime platform and public/private cloud.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/hashicorp/SVG/vault.svg" alt="Vault Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Vault</h4>
                                                </div>
                                            </div>
                                            <p>Managing secrets and protecting sensitive data by secrets management that centrally manages secrets to reduce secrets sprawl, and Data Encryption that
                                                protects sensitive data with centralized key management and simple APIs for data encryption.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/hashicorp/SVG/terraform.svg" alt="Terraform Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Terraform</h4>
                                                </div>
                                            </div>
                                            <p>Safely provision and manage multi cloud infrastructure at all scales by reproducing infrastructure as a code to shift from manual, error prone
                                                provisioning to automated, Multi cloud compliance and management by using a consistent workflow to provision, govern, secure and audit all
                                                infrastructures. Also enabling users to easily provision infrastructure on demand with a library of approved infrastructure.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="card disabled">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/hashicorp/SVG/nomad.svg" alt="Nomad Icon">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Nomad</h4>
                                                </div>
                                            </div>
                                            <p>Utilization of optimized resources with bin-packing, unified and automated deployment workflows, and a resource pool across on-perm and clouds.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="know-more-band">
        <div class="container">
            <?php if ( $hashicorp_know_more_text ) : ?>
                <P class="text-center w-100"><?php echo nl2br(esc_html($hashicorp_know_more_text)); ?></P>
            <?php else : ?>
                <P class="text-center w-100">To know more about Services, Pricing & Support</P>
            <?php endif; ?>

            <div class="d-flex flex-wrap justify-content-center">
                <?php if ( $hashicorp_know_more_button_link && $hashicorp_know_more_button_text ) : ?>
                    <a href="<?php echo esc_url( $hashicorp_know_more_button_link ); ?>" class="button anim mx-auto">
                        <div class="img-box circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                        </div>
                        <div class="img-box arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                        </div>
                        <span><?php echo esc_html( $hashicorp_know_more_button_text ); ?></span>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="button anim mx-auto">
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
</div>
<?php get_footer(); ?>
