<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(  ); ?>
</head>
<body <?php body_class(); ?>>
<!-- header start -->
<header>
    <div class="header__area sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 d-flex align-items-center">
                    <?php $logo= get_field('header_logo', 'options') 
                
                    ?>
                    <div class="logo">
                        <?php if(!empty($logo)):?>
                        <a href="<?php echo esc_url(home_url( '/' ))?>"><img src="<?php echo  esc_url($logo['url'])?>" alt="<?php echo esc_attr__('logo', 'monu'); ?>"></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-6 col-6">
                    <div class="hire__us__btn float-end"><a href="#contact">Hire Us</a></div>
                    <div class="main__menu float-end">
                        <nav id="mobile__menu__active">
                            <?php
                                wp_nav_menu( [
                                    'theme_location' => 'primary__menu',
                                    'menu_class'     => '',
                                    'container'      => '',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker()
                                ] );
                            ?>
                           
                        </nav>
                    </div>
                </div>
                <div class="mobile__menu"></div>
            </div>
        </div>
    </div>
</header>

<!-- header end -->