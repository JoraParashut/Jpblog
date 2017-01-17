<?php

function myblogV2_setup(){

	load_theme_textdomain('myblogV2');

	add_theme_support('title-tag');

	add_theme_support('custom-logo', array('height' => 120,'width' => 160, 'flex-height'  => true));

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(930,530);

	add_theme_support('html5', array('search_form', 'comment-form', 'comment-list', 'gallery', 'caption'));

	add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery'));

	register_nav_menu('primary', 'Primary-menu');
}

add_action('after_setup_theme', 'myblogV2_setup');

function myblogV2_style_load() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'media-css', get_stylesheet_directory_uri() .'/css/media.css');
	
}
add_action( 'wp_enqueue_scripts', 'myblogV2_style_load' );

function create_taxonomies(){
	register_taxonomy('potracheno','post', array('hierarchical'=>false,'label'=>'Potracheno','query_var'=>true,'rewrite'=>true));
}

add_action('init','create_taxonomies',0);


function jquery_init() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'jquery_init');


function add_svg_to_upload_mimes( $upload_mimes ) {
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );


function add_image_responsive_class($content) {
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}
add_filter('the_content', 'add_image_responsive_class');



add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {

  $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
  return $html;
} 

?>
