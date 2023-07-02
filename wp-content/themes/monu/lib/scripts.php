<?php
function MONU_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'MONU-fonts', MONU_fonts_url(), array(), time() );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', MONU_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', MONU_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }
    wp_enqueue_style( 'meanmenu', MONU_THEME_CSS_DIR . 'meanmenu.min.css', [] );
    wp_enqueue_style( 'owl-carousel', MONU_THEME_CSS_DIR . 'owl.carousel.min.css', [] );
    wp_enqueue_style( 'owl-default', MONU_THEME_CSS_DIR . 'owl.theme.default.min.css', [] ); 
    wp_enqueue_style( 'default', MONU_THEME_CSS_DIR . 'default.css', [] );
    wp_enqueue_style( 'all', MONU_THEME_CSS_DIR . 'all.min.css', [] );
    wp_enqueue_style( 'font-awesome', MONU_THEME_CSS_DIR . 'fontawesome.min.css', [] );
    wp_enqueue_style( 'themify', MONU_THEME_CSS_DIR . 'themify-icons.css', [] );
    wp_enqueue_style( 'MONU-core', MONU_THEME_CSS_DIR . 'monu-core.css', [], time() );
    wp_enqueue_style( 'MONU-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script('JQuery');
    wp_enqueue_script( 'bootstrap-min', MONU_THEME_JS_DIR . 'bootstrap.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'meanmenu', MONU_THEME_JS_DIR . 'jquery.meanmenu.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'counterup', MONU_THEME_JS_DIR . 'jquery.counterup.min.js', [ 'jquery' ], false, true ); 
    wp_enqueue_script( 'owl-carousel-js', MONU_THEME_JS_DIR . 'owl.carousel.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'slick', MONU_THEME_JS_DIR . 'slick.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'waypoint', MONU_THEME_JS_DIR . 'waypoints.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'MONU-main', MONU_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'MONU_scripts' );

/*
Register Fonts
 */
function MONU_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'MONU' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&family=Rubik:wght@400;500;600;700;900&display=swap';
    }
    return $font_url;
}