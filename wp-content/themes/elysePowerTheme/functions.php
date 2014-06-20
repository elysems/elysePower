<?php
/*
 *  Author: Elyse Power | @elysempower
 *  URL: elysepower.com
 *  Custom functions, support, custom post types and more.
 */

//remove default markup from content
remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );

//register navigation

function register_my_menu() {
  register_nav_menu('primary-menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_my_menu' );

//adding support for featured image
add_theme_support( 'post-thumbnails' ); 

//jquery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null, true);
   wp_enqueue_script('jquery');
}


?>