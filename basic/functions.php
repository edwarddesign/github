<?php


add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );



//this is to set images as post thumbnails and activating it 
  add_theme_support( 'post-thumbnails' ); 
//this is to set images size for the post thumbnails 
  set_post_thumbnail_size( 400, 400);





function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );








}