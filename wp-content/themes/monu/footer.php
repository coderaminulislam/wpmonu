
<!-- footer area start-->
<footer class="black-bg pt-100 pb-40">
    <div class="footer__top pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-20">

                    <div class="footer__widget">
                      
                      <?php dynamic_sidebar( 'column1' ); ?>
                       <?php 
                       $footers=get_field('footer_icons', 'options'); 
                       $footercopy=get_field('copyright_text', 'options'); 
                       ?>
                        <div class="slider__icons">
                          <?php if(!empty($footers)): foreach($footers as $footericon): ?>
                            <a href="<?php echo esc_url($footericon['link']); ?>"><i class="<?php echo esc_attr($footericon['select_icon']); ?>"></i></a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-20">
                   <?php dynamic_sidebar( 'column2' ); ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-20">
                <?php dynamic_sidebar( 'column3' ); ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
           
      
        <div class="border__top pt-40">
            <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <?php if(!empty($footercopy)): ?>
                <div class="copyright__text">
                    <p><?php echo esc_html__( $footercopy, 'monu' ); ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 justify-conent-md-center">
                <div class="footer__menu">
                        <?php
                            wp_nav_menu( [
                                'theme_location' => 'footer__menu',
                                'menu_class'     => '',
                                'container'      => '',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
                            ] );
                        ?>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</footer>
<!-- footer area end -->


<?php wp_footer(  ); ?>
</body>
</html>