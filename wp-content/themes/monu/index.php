<?php get_header() ?>
<!-- slider start -->
<div class="slider__area" id="Home">
    <div class="slider__active owl-carousel owl-theme">
        <?php 
        $args=array(
            'post_type'=> 'sliders',
            'posts_per_page'=> 4,
             );
            $query=new WP_Query($args);
            while($query->have_posts()){
                $query->the_post(); 

                $slider_bg=get_field('slider_image');
                $btn_text=get_field('slider_button_text');
                $btn_link=get_field('slider_button_link');
                $social_repeater=get_field('slider_social')
                ?>
                
                <div class="slider__single text-center d-flex align-items-center justify-content-center" style="background:url('<?php echo esc_url($slider_bg['url']); ?>');">
                    <div class="slider__inner">
                        <div class="slider__icons">
                            <?php if(!empty($social_repeater)):
                                 foreach($social_repeater as $social): ?>

                                <a href="<?php echo esc_url($social['icon_link'])?>"><i class="<?php echo esc_attr($social['choose_icon'])?>"></i></a>

                            <?php endforeach; ?>
                            <?php endif; ?>
                            
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                        <?php if(!empty($btn_text)): ?>
                        <a class="hero__btn" href="<?php echo esc_url($btn_link)?>"><?php echo esc_html__( $btn_text, 'monu' )?></a>
                        <?php endif; ?>
                    </div>
                </div>
          <?php  } wp_reset_postdata(); ?>
    
     
 
       
    </div>
</div>
<!-- slider end -->


<!-- feature start -->
<div id="portfolio" class="feature__area">
    <div class="container">
        <div class="theme__bg">
            <div class="row">
                <?php 
                  $title1=get_field('feature_title', 'options');
                  $title2=get_field('feature_title_two', 'options');
                  $title3=get_field('feature_title_three', 'options');

                  $disc1=get_field('feature_discription', 'options');
                  $disc_two=get_field('feature_description_two', 'options');
                  $disc_three=get_field('feature_description_three', 'options');
                ?>
                <?php if(!empty($title1)): ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single__feature_item text-center">
                        <i class="ti-pencil-alt"></i>
                        <h3><?php echo esc_html__($title1, 'monu' )?></h3>
                        <p><?php echo esc_html__($disc1, 'monu' )?></p>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(!empty($title2)): ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single__feature_item text-center">
                        <i class="ti-ruler-pencil"></i>
                        <h3><?php echo esc_html__($title2, 'monu' )?></h3>
                        <p><?php echo esc_html__($disc_two, 'monu' )?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($title3)): ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single__feature_item text-center">
                        <i class="ti-comment-alt"></i>
                        <h3><?php echo esc_html__($title3, 'monu' )?></h3>
                        <p><?php echo esc_html__($disc_three, 'monu' )?></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- feature end -->
<!-- about area start -->
<div class="about__area pt-100 pb-80" id="about-us">
    <div class="container">
        <div class="row">
            <?php 
             $abtitle=get_field('about_title', 'options');
             $abdesc=get_field('about_description', 'options');
             $abbtnlink=get_field('about_btn_link', 'options');
             $abimg=get_field('about_image', 'options');
             ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-20">
                <div class="about__info pl-50">
                    <?php if(!empty($abtitle)): ?>
                    <h2><?php echo esc_html__( $abtitle, 'monu' ); ?></h2>
                    <?php endif; ?>

                    <?php if(!empty($abdesc)): ?>
                    <p><?php echo esc_html__( $abdesc, 'monu' ); ?></p>
                    <?php endif; ?>

                   
                    <a href="<?php echo esc_url($abbtnlink); ?>" class="hero__btn"><?php echo esc_html__( 'Read More', 'monu' )?></a>
                   
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-20">
                <div class="about__image">
                <img src="<?php echo esc_attr($abimg['url']); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->
<?php $subsbg=get_field('subscribe_bg', 'options'); ?>
<!-- subscribe area end -->
<div id="contact" class="subscribe__area pt-70 pb-50" style="background-image: url('<?php echo esc_url($subsbg['url']);?>">
    <div class="container">
        <?php $subscribe_content=get_field('subscribe_info', 'options'); ?>
        <?php if(!empty($subscribe_content)): ?>
        <div class="row">
            <div class="col-xl-12 text-center mb-50">
            <h2><?php echo esc_html__($subscribe_content['subscribe_title'], 'monu' ); ?></h2>
            <p><?php echo esc_html__($subscribe_content['subscribe_subtitle'], 'monu' ); ?></p>
            </div>  
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="subscribe__form">
                    <?php echo do_shortcode('[contact-form-7 id="48" title="subscribe-form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe area end -->


<!-- services area start -->
<div id="services" class="services__area pt-100 pb-80 text-center">
    <div class="container-fluid">
        <div class="row">

        <?php
        $services_repeater=get_field('services_repeater', 'options');
        if($services_repeater): foreach($services_repeater as $services) : ?>

            <div class="col-xl-3 col-lg-6 col-md-6 mb-20">
                <div class="single__services__item">
                    <div class="services__icon">
                        <i class="<?php echo esc_attr($services['select_icon']); ?>"></i>
                        <h4><?php echo esc_html__( $services['service_title'], 'monu' )?></h4>
                        <p><?php echo esc_html__( $services['short_description'], 'monu' )?></p>
                        <a href="<?php echo esc_url($services['services_btn_link']); ?>" class="services__btn"> <?php echo esc_html__( 'View Services', 'monu' ); ?></a>

                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <?php endif;?>
   
        </div>
    </div>
</div>
<!-- services area end -->


<!-- pricing area start -->
<div class="pricing__area gray-bg pt-80 pb-60">
    <div class="container">
        <?php 
        $sectitle=get_field('section_title', 'options');
        $secsubtitle=get_field('section_subtitle', 'options');

        $pricingtitle=get_field('pricing_name', 'options');
        $price=get_field('price', 'options');
        $price_btn=get_field('pricing_btn_text', 'options');
        $price_btn_link=get_field('btn_link', 'options');
        $pricing_repeater=get_field('pricing_repeater', 'options');

        $pricingtitle2=get_field('pricing_name_2', 'options');
        $price2=get_field('price_2', 'options');
        $price_btn2=get_field('pricing_btn_text_2', 'options');
        $price_btn_link2=get_field('btn_link_2', 'options');
        $pricing_repeater2=get_field('pricing_repeater_2', 'options');

        $pricingtitle3=get_field('pricing_name_3', 'options');
        $price3=get_field('price_3', 'options');
        $price_btn3=get_field('pricing_btn_text_3', 'options');
        $price_btn_link3=get_field('btn_link_3', 'options');
        $pricing_repeater3=get_field('pricing_repeater_3', 'options');


        ?>
        <?php if($sectitle): ?>
        <div class="row mb-60">
            <div class="col-xl-12 text-center">
                <h2><?php echo esc_html__($sectitle, 'monu')?></h2>
                <p><?php echo esc_html__($secsubtitle, 'monu')?></p>
            </div>
        </div>


        <?php endif; ?>
        <div class="row justify-content-between text-center">

            <?php if(!empty($pricingtitle)): ?>
                <div class="pricing__item mb-20">
                    <div class="pricing___wrapper">
                        <h3><?php echo esc_html__($pricingtitle, 'monu'); ?></h3>
                        <span><span>$</span><?php echo esc_html__($price, 'monu'); ?></span>

                        <ul>
                            <?php if($pricing_repeater): foreach($pricing_repeater as $price_feature): ?>
                            <li><?php echo esc_html__($price_feature['pricing_feature'], 'monu'); ?></li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            
                        </ul>

                        <a href="<?php echo esc_url($price_btn_link); ?>" class="subscribe__btn"><?php echo esc_html__($price_btn, 'monu'); ?></a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!empty($pricingtitle2)): ?>
                <div class="pricing__item mb-20">
                    <div class="pricing___wrapper">
                        <h3><?php echo esc_html__($pricingtitle2, 'monu'); ?></h3>
                        <span><span>$</span><?php echo esc_html__($price2, 'monu'); ?></span>

                        <ul>
                            <?php if($pricing_repeater2): foreach($pricing_repeater2 as $price_feature): ?>
                            <li><?php echo esc_html__($price_feature['pricing_feature'], 'monu'); ?></li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            
                        </ul>

                        <a href="<?php echo esc_url($price_btn_link2); ?>" class="subscribe__btn"><?php echo esc_html__($price_btn2, 'monu'); ?></a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(!empty($pricingtitle3)): ?>
                <div class="pricing__item mb-20">
                    <div class="pricing___wrapper">
                        <h3><?php echo esc_html__($pricingtitle3, 'monu'); ?></h3>
                        <span><span>$</span><?php echo esc_html__($price3, 'monu'); ?></span>

                        <ul>
                            <?php if($pricing_repeater3): foreach($pricing_repeater3 as $price_feature): ?>
                            <li><?php echo esc_html__($price_feature['pricing_feature'], 'monu'); ?></li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            
                        </ul>

                        <a href="<?php echo esc_url($price_btn_link3); ?>" class="subscribe__btn"><?php echo esc_html__($price_btn3, 'monu'); ?></a>
                    </div>
                </div>
            <?php endif; ?>

       
        </div>
    </div>
</div>
<!-- pricing area end -->

<!-- counter area start -->
<div id="history" class="counter__area theme__bg pt-50 pb-30">
    <div class="container">
        <div class="row text-center">
            <?php $counters=get_field('counter_repeater', 'options');?>
            <?php if($counters): foreach($counters as $counter): ?>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-20 col-6">
                <div class="single__counter__item">
                    <div class="counter__img">
                   <img src="<?php echo esc_url($counter['counter_icon_image']['url']); ?>" alt="<?php echo esc_html__('icon image' , 'monu'); ?>">
                </div>
                    <span class="counter"><?php echo esc_html__($counter['counter_number'],'monu'); ?></span>
                    <p><?php echo esc_html__($counter['counter_title'],'monu'); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
          
        </div>
    </div>
</div>
<!-- counter area  end -->

<!-- testimonial area  start -->
<div id="team" class="team__area">
    <div class="container-fluid">
        <div class="row">
        <?php $teams=get_field('team_repeater', 'options');?>
            <?php if($teams): foreach($teams as $team): ?>

            <div class="team__item">
                <div class="team__wrapper">
                    <div class="team__img">
                        <img src="<?php echo esc_url($team['member_image']['url']); ?>" alt="<?php echo esc_html__('image' , 'monu'); ?>">
                    </div>
                    <div class="team__info">
                        <h4><?php echo esc_html__($team['member_name'],'monu'); ?></h4>
                        <p><?php echo esc_html__($team['member_designations'],'monu'); ?></p>
                        <div class="slider__icons">
                    
                            <a href="<?php echo esc_url($team['facebook_link']); ?>"><i class="ti-facebook"></i></a>
                            <a href="<?php echo esc_url($team['twitter_link']); ?>"><i class="ti-twitter-alt"></i></a>
                            <a href="<?php echo esc_url($team['google_plus_link']); ?>"><i class="ti-google"></i></a>
                            <a href="<?php echo esc_url($team['instagram_link']); ?>"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
           

        </div>
    </div>
  
</div>
<!-- testimonial area end -->

<!-- Blog area end -->
<div class="blog__area pt-100 pb-70">
    <div class="container">
       <?php
        $title=get_field('section_title', 'options');
        $subtitle=get_field('section_description', 'options');
        ?>

        <?php if(!empty($title)): ?>
        <div class="row mb-50">
            <div class="col-xl-12  text-center">
                <h2><?php echo esc_html__($title, 'monu'); ?> </h2>
                <p><?php echo esc_html__($subtitle, 'monu'); ?></p>
            </div>
        </div>
        <?php endif; ?>
        <div class="post__wrapper">
          
        <?php 
        $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
        $the_query = new WP_Query( $args ); 
        ?>
       
          

             <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="blog__btn"><?php echo esc_html__('Continue Reading', 'monu'); ?></a>
               </article>
            
            <?php endwhile; wp_reset_postdata(); ?>
          
            
        </div>
    </div>
</div>
<!-- blog area end -->
<?php $testibg=get_field('testimonial_background', 'options') ?>
<!-- testimonial area start -->
<div id="clients" class="testimonial__area pt-100 pb-100" style="background-image: url(<?php echo esc_url($testibg['url'])?>);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial__active owl-carousel owl-theme text-center">

                <?php $testi_items=get_field('testimonial_items', 'options'); ?>
                <?php if(!empty($testi_items)): foreach($testi_items as $items): ?>
                    <div class="testimonial__item">
                        <h4><?php echo esc_html__($items['client_name'], 'monu'); ?></h4>
                        <p><?php echo esc_html__($items['client_designation'], 'monu'); ?></p>
                        <p><?php echo esc_html__($items['client_comment'], 'monu'); ?>c</p>
                    </div>
                    <?php endforeach; ?>
                <?php endif;?>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->


<!-- brand area start-->
<div  class="brand__area pt-100 pb-80">
    <div class="container">
        <div class="row">
            <div class="brand__active owl-carousel owl-theme">
                <?php $brands=get_field('brand_image_slider', 'options'); ?>
                <?php if(!empty($brands)): foreach($brands as $brand): ?>
                <div class="brand__item mb-20">
                    <a href="<?php echo esc_url($brand['brand_link']); ?>"><img src="<?php echo esc_url($brand['brand_image']['url'])?>" alt="<?php echo esc_html__('brand image', 'monu' ); ?>"></a>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->
<?php get_footer() ?>