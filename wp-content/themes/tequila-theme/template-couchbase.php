<?php
/**
 * Template Name: Couchbase Page Template
 */
get_header();
?>

<div class="smooth-scroll">
    <div class="space"></div>
    <section class="in-banner">
        <div class="img-box">
            <video loop muted autoplay data-scroll data-scroll-speed="3">
                <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/video/banner.mp4" type="video/mp4" autoplay="true">
            </video>
        </div>
        <div class="x" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-banner/x.webp" alt="X">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/technologies' ) ); ?>">Technologies</a></li>
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
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-solution/apache-bg.webp" alt="bg1">
                        </div>
                        <div class="card-body">
                            <div class="img-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/in-solution/couchbase.webp" alt="Couchbase Logo">
                            </div>
                            <h4>An award-winning distributed NoSQL cloud database.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2 mb-md-4">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content(); 
                        endwhile;
                    else :
                        echo '<p>No content found for this page.</p>';
                    endif;
                    ?>
                    <div class="section-title mb-4">
                        <h4>Why Couchbase?</h4>
                        <p>The database that delivers unmatched versatility, performance, scalability, and financial value across cloud, on-premises, hybrid, distributed cloud, and edge
                            computing deployments.</p>
                    </div>
                    <div class="content-box topic-list">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="card disabled">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/mongodb/SVG/performance.svg" alt="Icon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Build fast, move faster</h4>
                                            </div>
                                        </div>
                                        <p>Develop on your stack, deploy in your cloud or at your edge, and build applications swiftly using tools, tutorials, and SDKs.</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="card disabled">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/kafka/SVG/flexible.svg" alt="Icon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Architect for high demand</h4>
                                            </div>
                                        </div>
                                        <p>Architect’s choice for NoSQL, that has a distributed, elastic, in-memory database on your cloud and at your edge.</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="card disabled">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/mongodb/SVG/multi-cloud-data-distribution.svg" alt="Icon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Lower TCO</h4>
                                            </div>
                                        </div>
                                        <p>Globally, securely, and affordably, mix and match public clouds, private clouds, containers and bare metal servers, and operate at scale as a multicloud
                                            to edge distributed database.</p>
                                    </div>
                                </a>
                            </li>
                            </ul>
                    </div>
                    <div class="section-title mb-4">
                        <h4>Build fast, move faster</h4>
                        <p>Couchbase empowers developers to build responsive and flexible cloud, mobile, and edge computing applications that scale effortlessly, as a key-value and
                            document database that’s memory first:</p>
                    </div>
                    <ul class="blt-list mb-4">
                        <li><p>Easy, SQL-friendly query language for JSON</p></li>
                        <li><p>Flexible JSON schema for continuous delivery</p></li>
                        <li><p>Peer-to-peer-to-cloud syncing for mobile and edge computing</p></li>
                        <li><p>Fully integrated SDKs for Java, .NET, Scala, Go, JavaScript, and Python</p></li>
                    </ul>
                    <div class="section-title mb-4">
                        <h4>Architect for high demand</h4>
                        <p>Couchbase guarantees consistent and dependable performance all day, every day, from the cloud to the edge for all users, as a distributed scale-anywhere
                            database:</p>
                    </div>
                    <ul class="blt-list mb-4">
                        <li><p>Distributed ACID transactions</p></li>
                        <li><p>Memory-first high-performance design</p></li>
                        <li><p>A distributed cloud-to-edge architecture</p></li>
                        <li><p>Guaranteed availability via native replication</p></li>
                        <li><p>Masterless, asynchronous, and geo-aware clustering</p></li>
                    </ul>
                    <div class="section-title mb-4">
                        <h4>Lower total cost of ownership</h4>
                        <p>Couchbase’s hyper-scalability improves price-performance as you scale. It’s cloud database makes it easy to globally manage distributed clusters from a single
                            console, elastically scale with a few clicks, and optimize services to match your workloads to your infrastructure.</p>
                    </div>
                    <ul class="blt-list mb-4">
                        <li><p>Flexible per-cluster SLAs</p></li>
                        <li><p>Multi Cloud, hybrid-cloud, cloud-to-edge</p></li>
                        <li><p>Control your data, clusters, services, and costs</p></li>
                        <li><p>Exceptional price/performance across workloads</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="know-more-band">
        <div class="container">
            <P class="text-center w-100">To know more about Services, Pricing & Support</P>
            <div class="d-flex flex-wrap justify-content-center">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button anim mx-auto">
                    <div class="img-box circle">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
                    </div>
                    <div class="img-box arrow">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
                    </div>
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </section>
    </div>

<?php get_footer(); ?>