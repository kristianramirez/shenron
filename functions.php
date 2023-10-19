<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                          Enqueue Scripts & Stylesheets                       *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// Stylesheets & Javascript
function shnrn_scripts() {
    // Load Main Stylesheet
    wp_enqueue_style( 'shnrn-style', get_stylesheet_uri() );
} 
add_action( 'wp_enqueue_scripts', 'shnrn_scripts' );

// Fonts
function flkr_fonts() {
    // Google Fonts "Roboto" & "Lato"
    wp_register_style( 'shnrn_google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700,900' );
    wp_enqueue_style( 'shnrn_google_fonts' );
}
add_action( 'wp_print_styles', 'shnrn_fonts' );