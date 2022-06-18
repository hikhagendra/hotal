<?php

// @package hotaltheme
//     =======================
//     ADMIN PAGE
//     =======================

function hotal_add_admin_page() {
    add_menu_page( 'Hotal Theme Options', 'Hotal', 'manage_options', 'hotal', 'hotal_theme_create_page', get_template_directory_uri().'/assets/images/hotal-icon.png', 110 );
}

add_action( 'admin_menu', 'hotal_add_admin_page' );

function hotal_theme_create_page() {
    return;
}