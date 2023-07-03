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



//widget


Class CA_Latest_Posts_Footer_Widget extends WP_Widget{

	public function __construct(){
		parent::__construct('ca-latest-posts-footer', 'Monu Footer Posts', array(
			'description'	=> 'Latest Post Widget by Coderaminul'
		));
	}


	public function widget($args, $instance){
			extract($args);
			extract($instance);

	 	echo $before_widget; 
	 		if($instance['title']):
     		echo $before_title; ?> 
     			<?php echo apply_filters( 'widget_title', $instance['title'] ); ?>
     		<?php echo $after_title; ?>
     	<?php endif; ?>


	     	<div class="footer__widget">
			
				    <?php 
					$q = new WP_Query( array(
					    'post_type'     => 'post',
					    'posts_per_page'=> ($instance['count']) ? $instance['count'] : '3',
					    'order'			=> ($instance['posts_order']) ? $instance['posts_order'] : 'DESC',
					    'orderby' => 'comment_count'
					));

					if( $q->have_posts() ):
					while( $q->have_posts() ):$q->the_post();
					?>

		              <article class="fix">
		                 <div class="post__thumb f-left">
		                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
		                 </div>
		                  <div class="post__content fix">
                            <h5><a href="<?php the_permalink(); ?>"><?php print wp_trim_words(get_the_title(), 6, ''); ?></a></h5>
		                    <p><?php the_time('F j Y'); ?></p>
		                  </div>
                       </article>

						<?php endwhile;            
					 endif; ?> 
			   
		   </div> 


		<?php echo $after_widget; ?>

		<?php
	}
}