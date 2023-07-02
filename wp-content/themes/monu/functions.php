<?php

function monu__theme__setup(){

    add_theme_support( 'title' );
    add_theme_support('post-thumbnails');
    remove_theme_support( 'widgets-block-editor' );
    load_textdomain('text-domain', get_template_directory_uri().'/languages');

    register_nav_menus([
        'primary__menu'=> esc_html__('Main menu', 'monu'),
        'footer__menu'=> esc_html__('Footer menu', 'monu')
    ]);
}
add_action( 'after_setup_theme', 'monu__theme__setup' );

/**
 * Enqueue scripts and styles.
 */

 define( 'MONU_THEME_DIR', get_template_directory() );
 define( 'MONU_THEME_URI', get_template_directory_uri() );
 define( 'MONU_THEME_CSS_DIR', MONU_THEME_URI . '/css/' );
 define( 'MONU_THEME_JS_DIR', MONU_THEME_URI . '/js/' );
 define( 'MONU_THEME_INC', MONU_THEME_DIR . '/lib/' );
 /**
 * Enqueue scripts and styles.
 */

require_once MONU_THEME_INC .'/scripts.php';
require_once MONU_THEME_INC .'/class-wp-bootstrap-navwalker.php';
require_once MONU_THEME_INC .'/acf-page-options.php';
require_once MONU_THEME_INC .'/monu-widgets.php';


