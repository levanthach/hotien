<!-- MENU -->
    <section class="navbar-menu-p custom-navbar navbar-fixed-top top-nav-collapse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                <ul class="nav navbar-nav navbar-right">
                    <a href="<?php echo get_site_url(); ?>" class="navbar-brand hidden-lg hidden-md hidden-sm">
                        <img src="<?php bloginfo('template_directory') ?>/assets/imgs/logo-main.png" alt="" class="img-responsive"></a>
                   <li class="li-icon"><a href="https://www.facebook.com/baudahotien" target="_blank" class="navbar-icon hidden-xs"><i class="fa fa-facebook-f fa-lg"></i></a></li>
                   
                    <li class="li-icon"><a href=" https://www.youtube.com/channel/UCZHKuVRvISK8RNqbOiPT4Rw/" class="navbar-icon hidden-xs" target="_blank"><i
                                class="fa fa-youtube-play fa-lg"></i></a></li>
                </ul>

                <a href="<?php echo get_site_url(); ?>" class="navbar-brand hidden-lg hidden-xs hidden-md hidden-sm">
                    <img src="<?php bloginfo('template_directory') ?>/assets/imgs/logo-main.png" alt="" class="img-responsive"></a>
            </div>

            <div class="collapse navbar-collapse">
                <div class="menu text-center">
                   <img src="<?php bloginfo('template_directory') ?>/assets/imgs/logo-chu.png" alt="Logo" class="img-responsive hidden-sm hidden-lg" width="170" style="padding-top: 10px">
                        <?php wp_nav_menu( 
                          array( 
                              'theme_location' => 'header-menu', 
                              'container' => 'false', 
                              'menu_id' => 'header-menu', 
                              'menu_class' => 'main-menu-wp nav navbar-nav navbar-nav-first'
                           ) 
                        ); ?>
                       <script type="text/javascript">
                            function myFunction() {
                              var para = document.createElement("li");
                              para.innerHTML =  '<a href="<?php echo get_site_url(); ?>" style="padding-top: 0;margin-top: -10px; padding-bottom: 0;"><img src="<?php bloginfo('template_directory') ?>/assets/imgs/logo-main.png" alt="Logo" class="img-responsive hidden-xs"></a>';
                              document.querySelector("#header-menu #menu-item-44").after(para);
                            }
                           
                        </script>
                       
                                           <!--  <ul class="nav navbar-nav navbar-nav-first">
                        <li><a href="#about" class="smoothScroll">Câu chuyện</a></li>
                        <li><a href="#team" class="smoothScroll">Sản phẩm</a></li>
                        <li>
                            <a href="#" style="padding-top: 0;margin-top: -10px; padding-bottom: 0;"><img src="<?php bloginfo('template_directory') ?>/assets/imgs/logo-main.png" alt="" class="img-responsive hidden-xs"></a>
                        </li>
                        <li><a href="news.html" class="smoothScroll">Tin tức</a></li>
                        <li><a href="contact.html" class="smoothScroll">- Liên hệ -</a></li>
                    </ul> -->

                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="li-icon"><a href="#" class="navbar-icon  hidden-xs"><i class="fa fa-search fa-lg"></i></a></li>
                    <li class="li-icon"><a href="#" class="navbar-icon  hidden-xs" style="margin-right: 15px;"><i class="fa fa-phone fa-lg"></i></a></li>
                </ul>
            </div>

        </div>
    </section>