<?php 
/*
Template name: related
Template Post Type: post, page
*/
?>
<?php 
	get_header();
 ?>

<section id="blog-page">
    <div class="container-fluid">
        <div class="col-xs-12 col-md-6">
            <div class="section-title" style="padding: 0">
                <h2 style="    margin-top: 6px;padding: 0;">Sản phẩm Hồ Tiên</h2>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <!-- <div class="selection__button">XEM THÊM</div> -->
             <p class="blog-page-breakcum">Trang chủ > Sản phẩm > Rượu nếp bàu đá</p>
        </div>
    </div>

</section>

<section id="product-page">
    <div class="container">
        <div class="row product-page-info">
            <div class="col-xs-12 col-md-6">
                <div id="lightgallery" class="col-xs-12 col-md-3 img-related">
                    <a href="<?php bloginfo('template_directory') ?>/assets/imgs/related_1.png">
                                  <img src="<?php bloginfo('template_directory') ?>/assets/imgs/p2-related_1.png" />
                              </a>
                    <a href="<?php bloginfo('template_directory') ?>/assets/imgs/related_2.png">
                                  <img src="<?php bloginfo('template_directory') ?>/assets/imgs/p2-related_2.png" />
                              </a>

                    <a href="<?php bloginfo('template_directory') ?>/assets/imgs/related_4.png">
                                  <img src="<?php bloginfo('template_directory') ?>/assets/imgs/p2-related_4.png" />
                              </a>
                    <a href="<?php bloginfo('template_directory') ?>/assets/imgs/related_3.png">
                                  <img src="<?php bloginfo('template_directory') ?>/assets/imgs/p2-related_3.png" />
                              </a>
                    <a href="<?php bloginfo('template_directory') ?>/assets/imgs/related_5.png">
                                  <img src="<?php bloginfo('template_directory') ?>/assets/imgs/p2-related_5.png" />
                              </a>

                </div>
                <div class="col-xs-12 col-md-9 product-image-up">

                    <img style=" max-width: 100%; " src="<?php bloginfo('template_directory') ?>/assets/imgs/p2-product-avatar.png" alt="Product-page">

                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <h2 class="product-info-title">Rượu nếp Bầu Đá 30 độ</h2>
                <p>
                    <i class="fa fa-star" style=" color: #af2a4d; "></i>
                    <i class="fa fa-star" style=" color: #af2a4d; "></i>
                    <i class="fa fa-star" style=" color: #af2a4d; "></i>
                    <i class="fa fa-star" style=" color: #af2a4d; "></i>
                    <i class="fa fa-star" style=" color: #af2a4d; "></i>
                </p>
                <p class="product-info-description">Không chỉ được tạo nên từ nguồn nước đặc biệt, với những cây lúa nếp đặc sản của làng Bàu Đá, những chai rượu nếp 30 độ còn được áp dụng công nghệ hiện đại vào quá trình sản xuất, với quy trình loại bỏ Methanol/Andehit và ủ trong thời gian dài, đảm bảo hương vị đặc trưng vốn có của rượu Bàu Đá. 
                    <br>Với công thức nấu rượu khác biệt, rượu nếp Bàu Đá là minh chứng rõ rệt về những tinh túy ẩm thực Việt Nam còn lưu giữ đến ngày hôm nay. Những giá trị văn hóa Việt truyền thống từ đặc sản này sẽ đưa Việt Nam vươn tầm Quốc tế.
                </p>
                <a href="../lien-he" class="product-info-button">LIÊN HỆ</a>
                <!--  <div class="product_sku">
                        <p><span class="blog__date">MÃ SẢN PHẨM:</span> 967</p>
                        <p><span class="blog__date">CHUYÊN MỤC:</span> Rượu bàu đá</p>
                        <p><span class="blog__date">TAGS:</span> Drink ~ Gift</p>
                    </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Product -->
<section id="team" class="product-relate">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>SẢN PHẨM LIÊN QUAN</h2>
                </div>
            </div>
            <div class="col-md-12 col-md-push-3">
                
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_product_3.jpg" class="img-responsive" alt="">
                        <div class="team-hover" data-toggle="modal" data-target="#modal-product-1">
                            <div class="team-item">
                                <a type="button" class="fa fa-eye"></a>
                            </div>
                        </div>
                    </div>
                    <div class="info-product-page">
                        <span class="name-product__desc">Cordyceps Sinenis Wine</span>
                        <a href="../san-pham"><h3>RƯỢU ĐÔNG TRÙNG HẠ THẢO</h3></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php bloginfo('template_directory') ?>/assets/imgs//h1_product_2.jpg" class="img-responsive" alt="">
                        <div class="team-hover" data-toggle="modal" data-target="#modal-product-3">
                            <div class="team-item">
                                <a type="button" class="fa fa-eye"></a>
                            </div>
                        </div>
                    </div>
                    <div class="info-product-page">
                        <span class="name-product__desc">Glutinous Rice Wine</span>
                        <a href="./"><h3>RƯỢU NẾP</h3></a>
                    </div>
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
                        <p class="product-info-description">Được tạo nên từ rượu đặc sản nổi tiếng của làng Bàu Đá Bình Định và Đông trùng hạ thảo, sâm, hương vị thơm ngon, nồng nàn đặc trưng làm say lòng người của rượu đông trùng hạ thảo sâm 30 độ đã trở thành một trong những biểu tượng
                            rượu truyền thống quý của người Việt. Hương vị đậm đà, tinh thất, cay cay của rượu, quyện hòa với vị thuốc quý của sâm và đông trùng hạ thảo càng hấp dẫn vị giác thực khách, khẳng định “đệ nhất danh tửu đất Việt” của rượu Bàu
                            Đá Hồ Tiên.
                        </p>
                        <a href="../lien-he" class="product-info-button">LIÊN HỆ</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Modal product 3-->
<div id="modal-product-3" class="modal fade" role="dialog">
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
                        <p class="product-info-description">Không chỉ được tạo nên từ nguồn nước đặc biệt, với những cây lúa nếp đặc sản của làng Bàu Đá, những chai rượu nếp 30 độ còn được áp dụng công nghệ hiện đại vào quá trình sản xuất, với quy trình loại bỏ Methanol/Andehit và ủ trong
                            thời gian dài, đảm bảo hương vị đặc trưng vốn có của rượu Bàu Đá. Với công thức nấu rượu khác biệt, rượu nếp Bàu Đá là minh chứng rõ rệt về những tinh túy ẩm thực Việt Nam còn lưu giữ đến ngày hôm nay. Những giá trị văn hóa
                            Việt truyền thống từ đặc sản này sẽ đưa Việt Nam vươn tầm Quốc tế.
                        </p>
                        <a href="../lien-he" class="product-info-button">LIÊN HỆ</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<?php get_template_part('menu-page'); ?>
<?php
	get_footer();
 ?>