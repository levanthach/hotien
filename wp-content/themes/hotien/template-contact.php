<?php 
/*
Template name: lien-he
Template Post Type: post, page
*/
?>

<?php 
	get_header();

 ?>

 <?php get_template_part('menu-page'); ?>
    <section id="contact-page">
        <div class="container-fluid">
            <div class="col-xs-12 col-md-12">
                <div class="section-title" style="padding: 0">
                    <h1>Liên hệ</h2>
                </div>
            </div>
        </div>

    </section>

    <section id="contact-template">

        <div class="main-content wrapper-contact-form">
            <div class="container-fluid">
                <div class="row contact">
                    <div class="services_img text-center pt-4 mb-4" style="margin:auto;">
                        <div class="address">
                            <h3>
                                <i class="fa fa-map-signs"></i> Làng Cù Lâm, Bình Định<br>
                            </h3>
                            <h3>
                                <i class="fa fa-phone"></i> 0563-946-425<br>
                            </h3>
                            <h3>
                                <i class="fa fa-envelope"></i> info@baudahotien.com
                            </h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 contact__form">
                        <h4 class="form-contact-heading">Thông tin liên hệ</h4>
                        <p class="form-contact-sub-heading">Hãy để chúng tôi tư vấn cho bạn</p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Họ Tên">
                            </div>
                            <div class="form-row">

                                <div class="form-group col-xs-6 form-div_1">
                                    <input type="text" class="form-control" id="inputPhone" placeholder="Số Điện Thoại">
                                </div>
                                <div class="form-group col-xs-6 form-div_2">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea cols="65" rows="4" name="content-form" class="form-control" style="resize: none;" placeholder="Viết nội dung liên hệ"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary submit-contact">GỬI LIÊN HỆ</button>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-6 contact__map">
                        <!-- nhúng freame google-map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993659.6695211973!2d108.01225849988612!3d13.382386340851248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f17d07b5edc1b%3A0x9ab82f7a717551b5!2zVHLhu6Ugc-G7nyB0aMO0biBDw7kgTMOibQ!5e0!3m2!1svi!2s!4v1581833286912!5m2!1svi!2s"
                            width="100%" height="470" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end main-content -->
    </section>
<?php
	get_footer();
 ?>
