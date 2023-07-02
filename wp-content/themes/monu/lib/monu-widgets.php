<?php

function monu_widgets(){

    register_sidebar(array(
        'name'=>__('Footer Column 1', 'monu'),
        'id'=>'column1',
        'before_title'=> '<h4 class="footer__title">',
        'after_title'=> '</h4>',
        'before_widget'=> '<div class="footer__widget">',
        'after_widget'=> '</div>',
    ));
    register_sidebar(array(
        'name'=>__('Footer Column 2', 'monu'),
        'id'=>'column2',
        'before_title'=> '<h4 class="footer__title">',
        'after_title'=> '</h4>',
        'before_widget'=> '<div class="footer__widget">',
        'after_widget'=> '</div>',
    ));
    register_sidebar(array(
        'name'=>__('Footer Column 3', 'monu'),
        'id'=>'column3',
        'before_title'=> '<h4 class="footer__title">',
        'after_title'=> '</h4>',
        'before_widget'=> '<div class="footer__widget">',
        'after_widget'=> '</div>',
    ));
}
add_action( 'widgets_init', 'monu_widgets');