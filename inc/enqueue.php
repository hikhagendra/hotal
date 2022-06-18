<?php

// @package hotaltheme
//     =======================
//     FRONTEND ENQUEQU FUNCTIONS
//     =======================

function hotal_load_scripts() {
    wp_enqueue_style( 'hotal', get_template_directory_uri() . '/assets/css/hotal.css', array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'hotal_load_scripts' );
