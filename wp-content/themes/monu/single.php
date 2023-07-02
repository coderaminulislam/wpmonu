<?php
$breadbg=get_field('breadcrumb_bg', 'options'); 
get_header()?>

<div class="breadcrumb__area" style="background:url(<?php echo esc_url($breadbg['url']); ?>">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12 mt-100">
                <h2><?php echo esc_html__( 'Single Post', 'monu' ); ?></h2>
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </div>
</div>
<div class="single__post pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 ml-auto">
            <article>
                    <div class="blog__item__pic">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo esc_html__('thumbnails', 'monu'); ?>">
                    </div>
                    <div class="blog__item__text">
                        <h4 class="blog__title"><?php the_title(); ?></h4>
                        <div class="blog__meta">
                            <span><?php the_time('j F'); ?></span>
                           <span class="meta__line"></span>
                        </div>
                        <?php the_content(); ?>
                    </div>
                   
               </article>
            </div>
        </div>
    </div>
</div>


<?php get_footer(  ); ?>