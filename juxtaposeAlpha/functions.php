<?php

function juxtaposeAlpha_register_styles() {

    $version = wp_get_theme() ->get('Version' );
    wp_enqueue_style('juxtaposeAlpha-style', get_template_directory_uri() . "/style.css" , array('juxtaposeAlpha-bootstrap'), $version, 'all');
    wp_enqueue_style('juxtaposeAlpha-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" , array(), '4.4.1', 'all');
    wp_enqueue_style('juxtaposeAlpha-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" , array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'juxtaposeAlpha_register_styles');

?>