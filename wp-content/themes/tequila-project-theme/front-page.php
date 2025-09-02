<?php
/**
 * The front page template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tequila-Project-theme
 */

get_header(); // This will include your header.php content
?>

    <div class="cursor"></div>
    <div class="loader">
        <div class="loader__bckg"></div>
        <div class="loader__logo">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lg-outline.webp" alt="Loader Logo" class="loader-logo" width="80" height="80" loading="lazy">
            <span></span>
        </div>
    </div>

    <?php
    // The header from your original HTML should now be dynamic via WordPress menus and custom logo
    // and would typically reside in header.php.
    // For now, I'm assuming you'll manage your header content via WordPress functions.
    ?>

    <div class="smooth-scroll">
        <div class="body-x" data-scroll data-scroll-speed="-4" data-scroll-direction="horizontal">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/body-x.webp" alt="body x" width="576" height="463" loading="lazy">
        </div>
        <section class="banner">
            <div class="swiper slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="content-box">
                                <h2 data-swiper-parallax="-300">Sole Distributor of REDIS in Middle East & Africa region</h2>
                                <a data-swiper-parallax="-200" href="<?php echo esc_url( home_url( '/redis/' ) ); ?>" class="button anim">
                                    <div class="img-box circle">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/circle.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                    </div>
                                    <div class="img-box arrow">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/circle-arrow.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                    </div>
                                    <span>learn more</span>
                                </a>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide4.webp" alt="ban img" width="720" height="508" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="content-box">
                                <h2 data-swiper-parallax="-300">Providing data solutions, the open source way</h2>
                                <a data-swiper-parallax="-200" href="<?php echo esc_url( home_url( '/technologies/' ) ); ?>" class="button anim">
                                    <div class="img-box circle">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/circle.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                    </div>
                                    <div class="img-box arrow">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/circle-arrow.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                    </div>
                                    <span>learn more</span>
                                </a>
                            </div>
                        </div>
                        <div class="banner-img">
                            <div class="img-1">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/chart-anim.svg" alt="Chart Animation" width="446" height="395" loading="lazy">
                            </div>
                            <div class="img-2" data-scroll data-scroll-speed="3" data-scroll-direction="horizontal">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/range-anim.svg" alt="Chart Animation" width="271" height="143" loading="lazy">
                            </div>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide1.webp" alt="ban img" width="720" height="508">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="content-box">
                                <h2 data-swiper-parallax="-300">Amp up your digital goals, with the power of multi cloud</h2>
                                <a data-swiper-parallax="-200" href="<?php echo esc_url( home_url( '/technologies/' ) ); ?>" class="button anim">
                                    <div class="img-box circle">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/circle.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                    </div>
                                    <div class="img-box arrow">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/circle-arrow.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                    </div>
                                    <span>learn more</span>
                                </a>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide2.webp" alt="Slide 2" width="720" height="508" loading="lazy">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="content-box">
                                <h2 data-swiper-parallax="-300">Get future ready with open source solutions & services</h2>
                                <a data-swiper-parallax="-200" href="<?php echo esc_url( home_url( '/analytics/' ) ); ?>" class="button anim">
                                    <div class="img-box circle">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/circle.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                    </div>
                                    <div class="img-box arrow">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon/circle-arrow.svg" alt="Icon Circle" width="60" height="64" loading="lazy">
                                    </div>
                                    <span>learn more</span>
                                </a>
                            </div>
                        </div>
                        <div class="banner-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide3.webp" alt="ban img" width="720" height="508" loading="lazy">
                        </div>
                    </div>
                    </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="mobile-x">
                <div class="img-box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner-x.webp" alt="banner x" data-scroll data-scroll-speed="-2" data-scroll-direction="horizontal" loading="lazy">
                </div>
            </div>
            <div class="x" data-scroll data-scroll-speed="-2" data-scroll-direction="horizontal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 790.218 874.794">
                    <clipPath id="mask">
                        <path id="Path_9222" data-name="Path 9222"
                            d="M216.81-49.455,393.221,248.693h6.834L577.32-49.455H786.195l-266.966,437.4,272.946,437.4H579.456l-179.4-298.574h-6.834L213.82,825.339H1.956l273.8-437.4L7.082-49.455Z"
                            transform="translate(-1.956 49.455)" />
                    </clipPath>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 790.218 874.794">
                    <foreignObject clip-path="url(#mask)" width="100%" height="100%">
                        <video loop muted autoplay>
                            <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/video/video.mp4" type="video/mp4" autoplay="true">
                        </video>
                    </foreignObject>
                </svg>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
        <section class="about-us">
            <div class="bg-left" data-scroll data-scroll-speed="-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about-pattern.webp" alt="About pattern" width="730" height="1588">
            </div>
            <div class="bg-right">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about-bg.png" alt="About bg" width="1944" height="528" loading="lazy">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>About DataX Solution</h2>
                        </div>
                    </div>
                    <div class="col-md-11 offset-md-1 offset-xl-0 col-xl-12">
                        <div class="swiper slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/retail-banking.webp" alt="ban img" width="296" height="328" loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <h3>Trusted by top Retail banks for implementing BigData data solution</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/telecom.webp" alt="ban img" width="296" height="328" loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <h3>Trusted by top Telecom companies for implementing BigData solution</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/healthcare-solutions.webp" alt="ban img" width="296" height="328" loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <h3>Trusted by top Healthcare organization for implementing BigData solution</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hr-solution.webp" alt="ban img" width="296" height="328" loading="lazy">
                                    </div>
                                    <div class="content-box">
                                        <h3>Business consulting partner for world’s leading HR solution</h3>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next custom"></div>
            <div class="swiper-button-prev custom"></div>
        </section>
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
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/redis/' ) ); ?>" class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0">
                                        </svg>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/solutions/red.webp" alt="Icon" width="70" height="70" loading="lazy">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Redis</h4>
                                                </div>
                                            </div>
                                            <p>A BSD licensed, in-memory data structure store.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/mongodb/' ) ); ?>" class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0">
                                        </svg>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/solutions/mon.webp" alt="Icon" width="70" height="70" loading="lazy">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Mongo DB</h4>
                                                </div>
                                            </div>
                                            <p>Powerful architecture to scale out a clustered environment.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/datastax/' ) ); ?>" class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0">
                                        </svg>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/solutions/data.webp" alt="Icon" width="70" height="70" loading="lazy">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Datastax</h4>
                                                </div>
                                            </div>
                                            <p>Handle large amounts of data across many commodity servers.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/elastic/' ) ); ?>" class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0">
                                        </svg>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/solutions/ela.webp" alt="Icon" width="70" height="70" loading="lazy">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Elastic</h4>
                                                </div>
                                            </div>
                                            <p>Scalable search, near real time search, supporting multi tenancy.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/hashicorp/' ) ); ?>" class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0">
                                        </svg>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/solutions/hash.webp" alt="Icon" width="70" height="70" loading="lazy">
                                                </div>
                                                <div class="media-body">
                                                    <h4>HashiCorp</h4>
                                                </div>
                                            </div>
                                            <p>Connecting & running cloud computing infrastructure.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/couchbase/' ) ); ?>" class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0">
                                        </svg>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/solutions/chbs.webp" alt="Icon" width="70" height="70" loading="lazy">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Couchbase</h4>
                                                </div>
                                            </div>
                                            <p>Big data analytics opportunities managing valuable data.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/postgresql/' ) ); ?>" class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0">
                                        </svg>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/solutions/sql.webp" alt="Icon" width="70" height="70" loading="lazy">
                                                </div>
                                                <div class="media-body">
                                                    <h4>Postgre SQL</h4>
                                                </div>
                                            </div>
                                            <p>Relational database of choice for many people and organizations.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( home_url( '/github/' ) ); ?>" class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <rect class="path" height="100%" width="100%" fill="transparent" stroke="#F0750F" stroke-width="2" x="0" y="0">
                                        </svg>
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-img">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/solutions/git.webp" alt="Icon" width="70" height="70" loading="lazy">
                                                </div>
                                                <div class="media-body">
                                                    <h4>GitHub</h4>
                                                </div>
                                            </div>
                                            <p>Making powerful, collaborative workflows for all small to big businesses.</p>
                                        </div>
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                    </div>
            </div>
        </section>
        <section class="our-client">
            <div class="container">
                <div class="section-title">
                    <h2 class="mb-0">Our Clients</h2>
                </div>
                <ul class="client-list">
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/alja.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/cap.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/etis.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/liv.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/nbd.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/rak.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/roshan.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/ZainKuwait.webp" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client/ZainKSA.webp" alt="">
                        </div>
                    </li>
                    </ul>
            </div>
        </section>
        </div>
    <?php
get_footer(); 
?>