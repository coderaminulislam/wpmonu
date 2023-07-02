<?php
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Monu Settings',
        'menu_title'    => 'Monu Settings',
        'menu_slug'     => 'monu-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Hero Section',
        'menu_title'    => 'Hero Section',
        'parent_slug'   => 'monu-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'About Section',
        'menu_title'    => 'About Section',
        'parent_slug'   => 'monu-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Services Section',
        'menu_title'    => 'Services Section',
        'parent_slug'   => 'monu-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Pricing Section',
        'menu_title'    => 'Pricing Section',
        'parent_slug'   => 'monu-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Counter Section',
        'menu_title'    => 'Counter Section',
        'parent_slug'   => 'monu-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Team Section',
        'menu_title'    => 'Team Section',
        'parent_slug'   => 'monu-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Blog Section',
        'menu_title'    => 'Blog Section',
        'parent_slug'   => 'monu-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Testimonial Section',
        'menu_title'    => 'Testimonial Section',
        'parent_slug'   => 'monu-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'monu-settings',
    ));
    
}