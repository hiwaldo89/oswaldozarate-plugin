<?php

// Register a custom post type that is viewable from both the frontend and the backend
// The custom post type is searchable
function oswaldozarate_register_cpt() {
    $args = array(
        'label' => __( 'Oswaldo Zarate CPT\'s', 'oswaldozarate-plugin'),
        'public' => true,
        'menu_icon' => 'dashicons-media-code',
        'supports' => array('editor'),
        'show_in_rest' => true
    );
    register_post_type('oswaldozarate-cpt', $args);
}
add_action( 'init', 'oswaldozarate_register_cpt' );