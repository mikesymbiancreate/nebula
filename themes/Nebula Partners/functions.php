<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

if( function_exists('acf_add_options_page') ) {
 	
 	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'redirect' 		=> false
	));
} 


/**
 * Register widgetized areas.
 *
 */

function register_my_menus() {
  register_nav_menus(
    array(
    'header-menu' => __( 'Header' ),
    'page-menu' => __( 'Page' ),
    )  
  );
}
add_action( 'init', 'register_my_menus' );




/* Enqueue Register Styles & Scripts */

function my_add_scripts() {
    wp_enqueue_script( 'jquery.flexslider-min.js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'flexslider-init.js', get_template_directory_uri() . '/assets/js/flexslider-init.js', array(), '1.0.0', true );    
    wp_enqueue_script( 'header2.js', get_template_directory_uri() . '/assets/js/header2.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_add_scripts' );



//function my_add_styles() {
 //wp_enqueue_style('flexslider', get_stylesheet_directory_uri().'/assets/css/flexslider.css'); 
//}
//add_action('wp_enqueue_scripts', 'my_add_styles');



/* DeRegister Styles & Scripts */
function remove_scripts_styles_head() {
//----- CSS
}
add_action('wp_head', 'remove_scripts_styles_head');

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( &$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.2.1' );
    }
}

// EXCERPT LENGTH
function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'excerpt_more' );


// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}


// Adds a custom url field to your attachment
function attachment_custom_url( $form_fields, $post ) {
        $form_fields['video-url'] = array(
        'label' => 'CustomURL',
        'input' => 'text',
        'value' => get_post_meta( $post->ID, 'custom_url', true ),
        'helps' => 'Add custom URL, if applicable',
    );
    return $form_fields;
}
add_filter( 'attachment_fields_to_edit', 'attachment_custom_url', 10, 2 );

function attachment_custom_url_save( $post, $attachment ) {
if( isset( $attachment['custom-url'] ) )
update_post_meta( $post['ID'], 'custom_url', esc_url( $attachment['custom-url'] ) );                        
    return $post;
}
add_filter( 'attachment_fields_to_save', 'attachment_custom_url_save', 10, 2 );
