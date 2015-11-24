<?php
    
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

show_admin_bar( false );

// add_action( 'init', 'my_add_excerpts_to_pages' );
// function my_add_excerpts_to_pages() {
//      add_post_type_support( 'page', 'excerpt' );
// }

function pwd(){
    return get_stylesheet_directory_uri().'/';
}

function get_hd(){
    return get_home_url().'/';
}

?>