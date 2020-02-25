<?php get_header(); ?>


    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>

    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
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
<!-- 
                        <li><a href="#about" class="smoothScroll">Câu chuyện</a></li>
                        <li><a href="#team" class="smoothScroll">Sản phẩm</a></li>
                        <li>
                            <a href="#" style="padding-top: 0;margin-top: -10px; padding-bottom: 0;"><img src="<?php bloginfo('template_directory') ?>/assets/imgs/logo-main.png" alt="" class="img-responsive hidden-xs"></a>
                        </li>
                        <li><a href="news.html" class="smoothScroll">Tin tức</a></li>
                        <li><a href="contact.html" class="smoothScroll">Liên hệ</a></li> -->
                    

                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="li-icon"><a href="#" class="navbar-icon  hidden-xs"><i
                                class="fa fa-search fa-lg"></i></a></li>
                    <li class="li-icon"><a href="#" class="navbar-icon  hidden-xs" style="margin-right: 15px;"><i
                                class="fa fa-phone fa-lg"></i></a></li>
                </ul>
            </div>

        </div>
    </section>

    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="row">
            <div id="bannerCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <div class="col-md-3 col-sm-3 hidden-xs item-indicators active" data-target="#bannerCarousel" data-slide-to="0">
                        <div class="name-product">
                            <h3 class="name-product__title tp-tab-title">Truyền thống</h3>
                            <p class="name-product__desc tp-tab-desc">Làng Bàu Đá</p>
                        </div>
                        <div class="carousel-indicators-bar"></div>
                    </div>

                    <div class="col-md-3 col-sm-3 hidden-xs item-indicators" data-target="#bannerCarousel" data-slide-to="1">
                        <div class="name-product">
                            <h3 class="name-product__title tp-tab-title">Hiện đại</h3>
                            <p class="name-product__desc tp-tab-desc">Công nghệ hiện đại</p>
                        </div>
                        <div class="carousel-indicators-bar"></div>
                    </div>

                    <div class="col-md-3 col-sm-3 hidden-xs item-indicators" data-target="#bannerCarousel" data-slide-to="2">
                        <div class="name-product">
                            <h3 class="name-product__title tp-tab-title">Sang trọng</h3>
                            <p class="name-product__desc tp-tab-desc">Thiết kế sang trọng</p>
                        </div>
                        <div class="carousel-indicators-bar"></div>
                    </div>
                    <div class="col-md-3 col-sm-3 hidden-xs item-indicators" data-target="#bannerCarousel" data-slide-to="3">
                        <div class="name-product">
                            <h3 class="name-product__title tp-tab-title">Bản lĩnh</h3>
                            <p class="name-product__desc tp-tab-desc">Bản lĩnh Việt</p>
                        </div>
                        <div class="carousel-indicators-bar"></div>
                    </div>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active item-first">
                    </div>

                    <div class="item item-second">
                    </div>

                    <div class="item item-third">
                    </div>

                    <div class="item item-fourth">
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control hidden-xs hidden-md hidden-sm" href="#bannerCarousel" data-slide="prev">
                    <svg viewBox="0 10 32 12" xmlns="http://www.w3.org/2000/svg" style=" height: 20px; ">
                        <g id="arrow-left">
                            <line class="cls-1" x1="3" x2="29" y1="16" y2="16" />
                            <line class="cls-1" x1="2" x2="6" y1="16" y2="12" />
                            <line class="cls-1" x1="2" x2="6" y1="16" y2="20" />
                        </g>
                    </svg>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control  hidden-xs hidden-md hidden-sm" href="#bannerCarousel" data-slide="next">
                    <!-- <span class="fa fa-long-arrow-right"></span> -->
                    <svg viewBox="0 10 32 12" xmlns="http://www.w3.org/2000/svg" style=" height: 20px; ">
                        <g id="arrow-right">
                            <line class="cls-1" x1="28" x2="3" y1="16" y2="16"></line>
                            <line class="cls-1" x1="29" x2="25" y1="16" y2="20"></line>
                            <line class="cls-1" x1="29" x2="25" y1="16" y2="12"></line>
                        </g>
                    </svg>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h2>BÀU ĐÁ HỒ TIÊN</h2>
                            <h4>Câu chuyện của chúng tôi</h4>

                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Bàu Đá Hồ Tiên - “đệ nhất danh tửu” đất Việt được sinh ra từ làng Cù Lâm, thuộc xã Nhơn Lộc, huyện An Nhơn, tỉnh Bình Định. Sở dĩ có cái tên Bàu Đá là do rượu được nấu và chưng cất bằng nguồn nước từ một chiếc Bàu (ao, hồ)
                                có tên là Bàu Đá (hay Hồ Tiên) của làng. Chính nét đặc biệt này đã làm nên hương vị thơm ngon, nồng nàn và đắm say lòng người của rượu Bàu Đá Hồ Tiên. Đến nay, Bàu Đá Hồ Tiên đã trở thành một trong những biểu tượng rượu
                                truyền thống quý giá của đất Việt, được nhiều người yêu thích lựa chọn.</p>
                           <a href="./cau-chuyen"><div class="selection__button pull-left">XEM THÊM</div></a>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInRight about-image" data-wow-delay="0.6s">
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/about-image.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="about-image-title">
                        <h2>
                            Hồ TIÊN </h2>
                    </div>
                    <!-- <div class="about-logo">
                              <img src="/imgs/logo-about.png" alt="" srcset="">
                         </div> -->
                    <div class="about-image-caption">
                        <p>Bàu Đá Hồ Tiên Đông trùng Hạ thảo</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="product-banner_1">
                        <div class="name-product">
                            <h3 class="name-product__title">ĐÔNG TRÙNG</h3>
                            <p class="name-product__desc">Cordyceps Sinenis Wine</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="product-banner_2">
                        <div class="name-product">
                            <h3 class="name-product__title">RƯỢU NẾP</h3>
                            <p class="name-product__desc">Glutinous Rice Wine</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- VIDEO ADS -->

    <section id="video-ads">

        <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_video_img_1.jpg" alt="Use your own screenshot.">
        <a id="video" video-url="https://www.youtube.com/watch?v=gDB67WLA7g8&feature=youtu.be"><span id="play">
                <div class="play-button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="125px" height="125px" viewBox="0 0 197 197" enable-background="new 0 0 197 197"
                        xml:space="preserve">
                        <circle class="video-button-stroke" stroke-linecap="round" cx="98.5" cy="98.6" r="97.5">
                        </circle>
                        <circle class="video-button-circle" stroke-linecap="round" cx="98.5" cy="98.6" r="95.5">
                        </circle>
                        <g>
                            <path fill="currentColor" d="M88.5,78.6l20,20l-20,20V78.6z"></path>
                        </g>
                    </svg>
                </div>
            </span></a>


        <div class="video__text pull-left">
            <p>BÀU ĐÁ HỒ TIÊN</p>
            <span>Gìn giữ bản sắc Việt</span>

        </div>
    </section>

    <!-- Product -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>SẢN PHẨM NỔI BẬT</h2>
                        <h4>Các sản phẩm của chúng tôi</h4>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_img_4.jpg" class="img-responsive" alt="">
                        <div class="team-hover" data-toggle="modal" data-target="#modal-product-1">
                            <div class="team-item">
                                <a type="button" class="fa fa-eye"></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <span class="name-product__desc">Cordyceps Sinenis Wine</span>
                        <h3>RƯỢU ĐÔNG TRÙNG HẠ THẢO</h3>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_img_5.jpg" class="img-responsive" alt="">
                        <div class="team-hover" data-toggle="modal" data-target="#modal-product-2">
                            <div class="team-item">
                                <a type="button" class="fa fa-eye"></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <span class="name-product__desc">Glutinous Rice Wine</span>
                        <h3>RƯỢU NẾP</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MODAL PRODUCT  -->
    <!-- Modal product 1-->
    <div id="modal-product-1" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg modal-product-info">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-image">
                                <img style=" max-width: 100%; " src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_product_3.jpg" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="product-info-title">Rượu đông trùng hạ thảo sâm 30 độ</h2>
                            <p>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                            </p>
                            <p class="product-info-description">Được tạo nên từ rượu đặc sản nổi tiếng của làng Bàu Đá Bình Định và Đông trùng hạ thảo, sâm, hương vị thơm ngon, nồng nàn đặc trưng làm say lòng người của rượu đông trùng hạ thảo sâm 30 độ đã trở thành một trong những biểu
                                tượng rượu truyền thống quý của người Việt. Hương vị đậm đà, tinh thất, cay cay của rượu, quyện hòa với vị thuốc quý của sâm và đông trùng hạ thảo càng hấp dẫn vị giác thực khách, khẳng định “đệ nhất danh tửu đất Việt”
                                của rượu Bàu Đá Hồ Tiên.
                            </p>
                            <a href="./lien-he" class="product-info-button">LIÊN HỆ</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal product 2-->
    <div id="modal-product-2" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg modal-product-info">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-image">
                                <img style=" max-width: 100%; " src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_product_2.jpg" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="product-info-title">Rượu nếp Bầu Đá 30 độ</h2>
                            <p>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                                <i class="fa fa-star" style=" color: #af2a4d; "></i>
                            </p>
                            <p class="product-info-description">Không chỉ được tạo nên từ nguồn nước đặc biệt, với những cây lúa nếp đặc sản của làng Bàu Đá, những chai rượu nếp 30 độ còn được áp dụng công nghệ hiện đại vào quá trình sản xuất, với quy trình loại bỏ Methanol/Andehit và ủ
                                trong thời gian dài, đảm bảo hương vị đặc trưng vốn có của rượu Bàu Đá. Với công thức nấu rượu khác biệt, rượu nếp Bàu Đá là minh chứng rõ rệt về những tinh túy ẩm thực Việt Nam còn lưu giữ đến ngày hôm nay. Những giá trị
                                văn hóa Việt truyền thống từ đặc sản này sẽ đưa Việt Nam vươn tầm Quốc tế.
                            </p>
                            <a href="./lien-he" class="product-info-button">LIÊN HỆ</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- TESTIMONIAL -->
    <section id="testimonial">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators" style="bottom: 15px;margin: 0;left: 0;width: 100%;">
                            <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="1"></li>
                            <li data-target="#testimonialCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-xs-12 col-md-offset-2 col-md-8">
                                    <div class="img-author">
                                        <div class="avt-effect">
                                            <img src="<?php bloginfo('template_directory') ?>/assets/imgs//user_1_100x100.png" alt="" class="img-responsive img-testi">
                                        </div>
                                    </div>
                                    <p>Nhấp một chén rượu Bàu Đá Hồ Tiên, tôi cảm nhận được hướng vị cay cay, đậm đà, nuốt vào thì có vị ngọt thanh, càng uống càng ngấm. Uống rượu Bàu Đá Hồ Tiên, dù có thấm men say, tôi cũng không có cảm giác nhức mỏi hay
                                        choáng váng như những loại rượu khác.</p>
                                    <div class="tst-author">
                                        <h4>HOÀNG HỮU TÙNG</h4>
                                        <p>Nghệ An</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-xs-12 col-md-offset-2 col-md-8">
                                    <div class="img-author">
                                        <div class="avt-effect">
                                            <img src="<?php bloginfo('template_directory') ?>/assets/imgs//user_4_100x100.png" alt="" class="img-responsive img-testi">
                                        </div>
                                    </div>
                                    <p>Tôi đã thử một số loại rượu truyền thống của Việt Nam đến các loại rượu nhập ngoại nhưng khó có hương vị nào thấm và hấp dẫn vị giác như Bàu Đá Hồ Tiên. Nếu một lần được thưởng thức loại rượu này, tôi dám chắc rằng
                                        bạn sẽ thực sự bị “mê hoặc”. <br>
                                    </p>
                                    <div class="tst-author">
                                        <h4>Nguyễn Lan Chi</h4>
                                        <p>Hà Nội</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-xs-12 col-md-offset-2 col-md-8">
                                    <div class="img-author">
                                        <div class="avt-effect">
                                            <img src="<?php bloginfo('template_directory') ?>/assets/imgs//user_5_100x100.png" alt="" class="img-responsive img-testi">
                                        </div>
                                    </div>
                                    <p>Thật khó có thể diễn tả được cảm giác khoan khoái của mình khi thưởng thức rượu Bàu Đá Hồ Tiên. Cái chất rượu cay nồng, hương vị thơm ngon thật khó có thể trộn lẫn, làm giả hay bắt chước. Những ngày trời trở gió, được
                                        nhâm nhi một vài chén rượu Bàu Đá Hồ Tiên bên những người bạn thì còn gì bằng.
                                    </p>
                                    <div class="tst-author">
                                        <h4>Đinh Hữu Dũng</h4>
                                        <p>Sài Gòn</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control  hidden-xs hidden-md hidden-sm" href="#testimonialCarousel" data-slide="prev">
                            <svg viewBox="0 10 32 12" xmlns="http://www.w3.org/2000/svg" style=" height: 20px; ">
                                <g id="arrow-left">
                                    <line class="cls-2" x1="3" x2="29" y1="16" y2="16" />
                                    <line class="cls-2" x1="2" x2="6" y1="16" y2="12" />
                                    <line class="cls-2" x1="2" x2="6" y1="16" y2="20" />
                                </g>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control  hidden-xs hidden-md hidden-sm" href="#testimonialCarousel" data-slide="next">
                            <!-- <span class="fa fa-long-arrow-right"></span> -->
                            <svg viewBox="0 10 32 12" xmlns="http://www.w3.org/2000/svg" style=" height: 20px; ">
                                <g id="arrow-right">
                                    <line class="cls-2" x1="28" x2="3" y1="16" y2="16"></line>
                                    <line class="cls-2" x1="29" x2="25" y1="16" y2="20"></line>
                                    <line class="cls-2" x1="29" x2="25" y1="16" y2="12"></line>
                                </g>
                            </svg>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT2 -->
    <section id="more-info" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="about-us wow fadeInUp" data-wow-delay="0.4s">
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <div class="about-us__img"><img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_custom_icon_1.png" alt="" class="img-responsive"></div>
                                <div class="about-us__title">CÂU CHUYỆN</div>
                                <div class="about-us__text">Bàu đá Hồ Tiên mang hào khí Tây Sơn cùng tinh thần người dân tộc Quang Trung</div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                                <div class="about-us__img"><img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_custom_icon_2.png" alt="" class="img-responsive"></div>
                                <div class="about-us__title">NGUYÊN LIỆU</div>
                                <div class="about-us__text">Để làm nên những mẻ rượu quý cần gạo, men rượu, nhân sâm và đông trùng hạ thảo</div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center wow fadeInUp" data-wow-delay="0.3s">
                                <div class="about-us__img"><img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_custom_icon_3.png" alt="" class="img-responsive"></div>
                                <div class="about-us__title">CHẾ BIẾN</div>
                                <div class="about-us__text">Xử lý bằng công nghệ hiện đại, loại bỏ tạp chất andehit, methanol, đảm bảo sức khỏe</div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center wow fadeInUp" data-wow-delay="0.4s">
                                <div class="about-us__img"><img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_custom_icon_4.png" alt="" class="img-responsive text-center"></div>
                                <div class="about-us__title">THÀNH PHẨM</div>
                                <div class="about-us__text">Thiết kế sang trọng, lịch lãm, phù hợp trong mọi hoàn cảnh và mục đích sử dụng</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="about-info" style=" padding: 0 0em 5em 0; ">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h2>ĐỆ NHẤT DANH TỬU</h2>
                            <h4>Bàu Đá Hồ Tiên</h4>

                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Rượu Bàu Đá Hồ Tiên ghi điểm bởi mùi vị đậm đà, cay nồng hòa quyện với hương thơm khó quên của nhân sâm và đông trùng hạ thảo bổ dưỡng. Thật khó có loại rượu nào có thể “chen ngang” hoặc “soán ngôi” “đệ nhất danh tửu đất Việt”
                                của loại rượu Bàu Đá Hồ Tiên. Với công thức nấu rượu khác biệt được lưu truyền từ xa xưa, rượu Bàu Đá Hồ Tiên là minh chứng rõ về những tinh túy ẩm thực Việt Nam vẫn được bảo tồn và lưu giữ đến ngày nay. Những giá trị văn
                                hóa Việt truyền thống này sẽ đưa Việt Nam vươn tầm Quốc tế.</p>
                            <a href="./cau-chuyen"><div class="selection__button pull-left">XEM THÊM</div></a>
                            <div class="pull-right">
                                <img src="<?php bloginfo('template_directory') ?>/assets/imgs//sign.jpg" style=" margin-top: -45px; max-width: 90%" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        </div>
    </section>

    <!-- IMAGE-->
    <!-- <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>NATURAL AROMA</h2>
                              <h4 style="color: #cc5d26cc!important">Ut enim ad minim veniam quis nostrud</h4>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="menu-thumb">
                              <a href="imgs/h1_img_7.jpg" class="image-popup" title="American Breakfast">
                                   <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_img_7.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>American Breakfast</h3>
                                             <p>Tomato / Eggs / Sausage</p>
                                        </div>

                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         
                         <div class="menu-thumb">
                              <a href="imgs/h1_img_2.jpg" class="image-popup" title="Self-made Salad">
                                   <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_img_2.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Self-made Salad</h3>
                                             <p>Green / Fruits / Healthy</p>
                                        </div>

                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         
                         <div class="menu-thumb">
                              <a href="imgs/h1_img_3.jpg" class="image-popup" title="Chinese Noodle">
                                   <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_img_3.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Chinese Noodle</h3>
                                             <p>Pepper / Chicken / Vegetables</p>
                                        </div>

                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         
                         <div class="menu-thumb">
                              <a href="imgs/h1_img_4.jpg" class="image-popup" title="Rice Soup">
                                   <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_img_4.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Rice Soup</h3>
                                             <p>Green / Chicken</p>
                                        </div>

                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         
                         <div class="menu-thumb">
                              <a href="imgs/h1_img_5.jpg" class="image-popup" title="Project title">
                                   <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_img_5.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Deli Burger</h3>
                                             <p>Beef / Fried Potatoes</p>
                                        </div>

                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         
                         <div class="menu-thumb">
                              <a href="imgs/h1_img_6.jpg" class="image-popup" title="Project title">
                                   <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_img_6.jpg" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Big Flat Fried</h3>
                                             <p>Pepper / Crispy</p>
                                        </div>

                                   </div>
                              </a>
                         </div>
                    </div>


               </div>
          </div>
     </section> -->





    <!-- CONTACT -->
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
    <!-- <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Get to know us</h2>
                                   <h4 style="color: #cc5d26cc!important">Ut enim ad minim veniam quis nostrud</h4>
                              </div>
                         </div>
                         <div class="col-md-12 col-sm-12">
                              <div class="panel-group" id="accordion">
                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                             <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                                                       class="show_content">Collapsible Group 1</a>
                                             </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse in">
                                             <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                  elit,
                                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                  enim ad minim veniam,
                                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                  commodo consequat.</div>
                                        </div>
                                   </div>
                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                             <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                                                       class="show_content">Collapsible Group 2</a>
                                             </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                             <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                  elit,
                                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                  enim ad minim veniam,
                                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                  commodo consequat.</div>
                                        </div>
                                   </div>
                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                             <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                                                       class="show_content">Collapsible Group 3</a>
                                             </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                             <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                  elit,
                                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                  enim ad minim veniam,
                                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                  commodo consequat.</div>
                                        </div>
                                   </div>
                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                             <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                                                       class="show_content">Collapsible Group 4</a>
                                             </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                             <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                  elit,
                                                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                  enim ad minim veniam,
                                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                  commodo consequat.</div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="img-map">
                              <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1-bckg-map-img.png" alt="" class="img-responsive">
                         </div>
                    </div>

               </div>
          </div>
     </section> -->

    <!-- <section id="selection">
          <div class="container">
               <div class="col-xs-12 col-md-6">
                    <div class="section-title" style="padding: 0">
                         <h2 style="    margin-top: 6px;padding: 0;">OUR WINE SELECTION</h2>
                    </div>
               </div>

               <div class="col-xs-12 col-md-6">
                    <div class="selection__button">XEM THÊM</div>
               </div>
          </div>

     </section> -->

    <!-- Letter -->
    <section id="letter">
        <div class="letter_form wow fadeInLeft">
            <div class="letter_form__content text-center section-title">
                <h2>Liên hệ</h2>
                <h4 style="color: #cc5d26cc!important">Nhận những tin tức mới nhất về chúng tôi</h4>
                <div class="input-letter">
                    <input type="text" name="email_letter" placeholder="Nhập email của bạn...">
                </div><br>
                <div class="selection__button letter-button">ĐĂNG KÝ</div>
            </div>
        </div>

    </section>

    <!--  NEWS -->
    <section id="news" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp text-center" data-wow-delay="0.1s">
                        <h2>TIN TỨC</h2>
                        <h4>Các câu chuyện về chúng tôi</h4>
                    </div>
                </div>

		<?php 
			$args = array(
				'post_status' => 'publish', // Chỉ lấy những bài viết được publish
				'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
				'showposts' => 4, // số lượng bài viết
				'cat' => 2, // lấy bài viết trong chuyên mục có id là 1
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			  <div class="col-xs-12 col-sm-6 col-md-3 news_content wow fadeInUp" data-wow-delay="0.4s">
		                    <div class="news__avatar">
		                        	
<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>" class="img-responsive">
		                    </div>

		                    <div class="news__title">
		                        <h3><?php the_title(); ?></h3>
		                    </div>
		                   
		                    <div class="news__brief">
		                        <?php the_excerpt(); ?>
		                    </div>

		          
		                   </div>

		<?php endwhile; wp_reset_postdata(); ?>
		              
            </div>
        </div>
    </section>


<?php get_footer(); ?>



	