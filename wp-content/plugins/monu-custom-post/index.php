<?php
/**
 * Plugin Name:       Monu Custom Post
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Author:           Aminul Islam
 * Author URI:        https://coderaminul.net/


 
 */

 function custom__post_type(){

    register_post_type( 'sliders',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon'=> "dashicons-images-alt2",
            'rewrite' => array('slug' => 'sliders'),
            'show_in_rest' => true,
  
        )
    );
}
add_action( 'init', 'custom__post_type' );

