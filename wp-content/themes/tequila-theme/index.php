<?php
/**
 * The template for displaying the home page.
 *
 * Template Name: Home Page Template
 *
 * This template uses ACF Post Object fields to dynamically select content
 * for various sections of the homepage from existing WordPress posts or CPTs.
 * It is set up to handle selection of multiple posts for each section.
 */

get_header(); // Includes header.php

// Store the current global post object to restore it later
global $post;
$original_post = $post;

// --- Section: Banner ---
// Get all selected banner posts (will be an array)
$banner_posts = get_field('homepage_banner_content');
if ( $banner_posts && is_array( $banner_posts ) ) :
    // Loop through each selected banner post
    foreach ( $banner_posts as $post_item ) :
        // Temporarily set up post data for the current banner post in the loop
        $post = $post_item;
        setup_postdata( $post );
        get_template_part( 'template-parts/section', 'banner' );
        // After rendering this single banner, reset post data before the next loop iteration
        wp_reset_postdata(); // Important after each setup_postdata in a loop
    endforeach;
endif;

// --- Section: About ---
$about_posts = get_field('homepage_about_content');
if ( $about_posts && is_array( $about_posts ) ) :
    foreach ( $about_posts as $post_item ) :
        $post = $post_item;
        setup_postdata( $post );
        get_template_part( 'template-parts/section', 'about' );
        wp_reset_postdata();
    endforeach;
endif;

// --- Section: Home Solutions ---
$solutions_posts = get_field('homepage_solutions_content');
if ( $solutions_posts && is_array( $solutions_posts ) ) :
    foreach ( $solutions_posts as $post_item ) :
        $post = $post_item;
        setup_postdata( $post );
        get_template_part( 'template-parts/section', 'home-solutions' );
        wp_reset_postdata();
    endforeach;
endif;

// --- Section: Our Clients ---
$clients_posts = get_field('homepage_clients_content');
if ( $clients_posts && is_array( $clients_posts ) ) :
    foreach ( $clients_posts as $post_item ) :
        $post = $post_item;
        setup_postdata( $post );
        get_template_part( 'template-parts/section', 'our-clients' );
        wp_reset_postdata();
    endforeach;
endif;

// --- Section: Testimonials ---
$testimonials_posts = get_field('homepage_testimonials_content');
if ( $testimonials_posts && is_array( $testimonials_posts ) ) :
    foreach ( $testimonials_posts as $post_item ) :
        $post = $post_item;
        setup_postdata( $post );
        get_template_part( 'template-parts/section', 'testimonials' );
        wp_reset_postdata();
    endforeach;
endif;

// --- Section: Case Study ---
$case_study_posts = get_field('homepage_case_study_content');
if ( $case_study_posts && is_array( $case_study_posts ) ) :
    foreach ( $case_study_posts as $post_item ) :
        $post = $post_item;
        setup_postdata( $post );
        get_template_part( 'template-parts/section', 'case-study' );
        wp_reset_postdata();
    endforeach;
endif;

// Restore the original global $post object for the main page
$post = $original_post;
if ( $post ) {
    setup_postdata( $post );
}

get_footer(); // Includes footer.php
