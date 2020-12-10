<?php

function juxtaposeAlpha_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');

    //Enables custom logo inserted in primary nav
    add_theme_support('custom-logo');

    //Enables featured images/thumbnails
    add_theme_support( 'post-thumbnails' );

    //Gets the title of the page
    add_theme_support( 'title-tag' );

}
add_action('after_setup_theme', 'juxtaposeAlpha_theme_support');

//setup and register menus
function juxtaposeAlpha_menus() {

    $locations = array (
        'primary' => "Desktop Primary Top Navbar",
        'category' => "Category Menu Items"
    );

    register_nav_menus($locations);
}
add_action('init', 'juxtaposeAlpha_menus');


function juxtaposeAlpha_register_styles() {

    $version = wp_get_theme() ->get('Version' );
    wp_enqueue_style('juxtaposeAlpha-style', get_template_directory_uri() . "/style.css" , array('juxtaposeAlpha-bootstrap'), $version, 'all');
    wp_enqueue_style('juxtaposeAlpha-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" , array(), '4.4.1', 'all');
    wp_enqueue_style('juxtaposeAlpha-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" , array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'juxtaposeAlpha_register_styles');


function juxtaposeAlpha_register_scripts() {

    wp_enqueue_script('juxtaposeAlpha-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('juxtaposeAlpha-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('juxtaposeAlpha-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('juxtaposeAlpha-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);


}

add_action( 'wp_enqueue_scripts', 'juxtaposeAlpha_register_scripts');

?>

<?php
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>

<?php
//custom length of excerpts for returned posts
// add_filter( 'excerpt_length', function($length) {
//     return 8;
// } );
?>

<?php
//Removes ellipsis from excerpt (if it exists)
// function new_excerpt_more($more) {
//   global $post;
//   remove_filter('excerpt_more', 'new_excerpt_more'); 
//   return ' <a class="read_more" href="'. get_permalink($post->ID) . '">' . '' . '</a>';
// }
// add_filter('excerpt_more','new_excerpt_more');
?>

<?php
//set image size for post thumbnail image
set_post_thumbnail_size(510, 500);
?>


<?php
//create sidebar
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'one',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'two',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Third Sidebar', 'theme_name' ),
        'id'            => 'three',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    /* Repeat register_sidebar() code for additional sidebars. */
}
  