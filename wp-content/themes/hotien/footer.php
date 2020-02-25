    <!-- FOOTER -->
    <footer id="footer">
        <div class="container img-for-footer">
            <div class="row">

                <div class="col-md-3 col-xs-12 col-sm-3">
                    <div class="footer-logo">
                        <img src="<?php bloginfo('template_directory') ?>/assets/imgs/footer-logo.png" alt="logo-footer" class="img-responsive">
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-3">
                    <div class="footer-info">
                        <div class="section-title news__title">

                            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Liên hệ</h3>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p><i class="fa fa-map-marker"></i> &nbsp;Làng Cù Lâm, Bình Định</p>
                            <p><a href="#"><i class="fa fa-envelope-o"></i>info@baudahotien.com</a></p>
                            <p><i class="fa fa-mobile"></i> &nbsp;0563-946-425</p>
                        </address>
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-3">
                    <div class="footer-info">
                        <div class="section-title news__title">
                            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Về chúng tôi</h3>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                           <?php wp_nav_menu( 
                          array( 
                              'theme_location' => 'header-menu', 
                              'container' => 'false', 
                              'menu_id' => 'footer-menu', 
                              'menu_class' => 'footer-menu'
                           ) 
                        ); ?>
                        </address>
                    </div>
                </div>


                <div class="col-md-3 col-xs-12 col-sm-3">
                    <div class="footer-info">
                        <div class="section-title news__title">
                            <h3 class="wow fadeInUp" data-wow-delay="0.2s">Tìm kiếm</h3>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <div class="footer-date news__author">
                                <input type="text" name="" id="">
                                <!-- <p>September 11,2019</p>
                                        <strong>LARGEST VINEYARD</strong> -->

                            </div>
                            <div class="footer-date news__author">
                                <div class="news_social">
                                    <ul class="social-icon">
                                        <li>
                                            <a href="https://www.facebook.com/baudahotien" class="fa fa-facebook-f" target="_blank" attr="facebook icon"></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCZHKuVRvISK8RNqbOiPT4Rw/" target="_blank" class="fa fa-youtube"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="img-for-footer"></div> -->
        </div>
        <div class="col-12 copyright text-center">
            <p>Made with love by <span style="color: #c9693a">WebDevStudios</span></p>
        </div>
    </footer>


    <a id="go-top" href="#">
        <i class="fa fa-long-arrow-alt-up"></i>
    </a>

<?php wp_footer(); ?>
</body>
</html>