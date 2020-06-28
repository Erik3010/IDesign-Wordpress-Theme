<?php

function enqueue_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri().'/script.js', [], 0, true);
}

add_action('wp_enqueue_scripts', 'enqueue_style');

function remove_main_post() {
    $post_type = 'post';

    remove_post_type_support( $post_type, 'title' );
    // remove_post_type_support( $post_type, 'editor' );

    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;

    $labels->name = 'Designer';
    $labels->singular_name = 'Designer';
    $labels->add_new = 'Add Designer';
    $labels->add_new_item = 'Add Designer';
    $labels->all_items = 'All Designer';
    $labels->menu_name = 'Designer';
    $labels->edit_item = 'Edit Designer';
    $labels->view_item = 'View Desginer';
    $labels->not_found = 'No designer found';
    $labels->not_found_in_trash = 'No desginer found in trash';
    $labels->search_items = 'Search desinger';
}

add_action('init', 'remove_main_post');

add_theme_support('widgets');