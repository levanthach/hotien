<?php 

// Load css
add_action('wp_enqueue_scripts','p_load_css');
if(!function_exists('p_load_css')){
    function p_load_css(){

        //$css_ran = '1.0';
        $css_ran = rand(1000,100000000);
        wp_enqueue_style('bootstrap', get_template_directory_uri()  . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri()  . '/assets/css/font-awesome.min.css');
        wp_enqueue_style('Spectral', get_template_directory_uri()  . '/assets/fonts/Spectral/font.css');
        wp_enqueue_style('Spectral_SC', get_template_directory_uri()  . '/assets/fonts/Spectral_sc/font.css');
        wp_enqueue_style('Animate', get_template_directory_uri()  . '/assets/css/animate.css');
        wp_enqueue_style('Popup-video', get_template_directory_uri()  . '/assets/css/video.popup.css');
        wp_enqueue_style('Carousel', get_template_directory_uri()  . '/assets/css/video.popup.css');
        wp_enqueue_style('Carousel-them', get_template_directory_uri()  . '/assets/css/owl.theme.default.min.css');
        wp_enqueue_style('Magnific-popup', get_template_directory_uri()  . '/assets/css/magnific-popup.css');
        wp_enqueue_style('lightgallery', get_template_directory_uri()  . '/assets/css/lightgallery.css');

      
       	// style-custom
       	wp_enqueue_style('template-style', get_template_directory_uri()  . '/assets/css/templatemo-style.css'); 
        wp_enqueue_style('main-css', get_template_directory_uri()  . '/assets/css/main.css'); 
        wp_enqueue_style('contact-css', get_template_directory_uri()  . '/assets/css/contact-css.css'); 
        wp_enqueue_style('blog-css', get_template_directory_uri()  . '/assets/css/blog-css.css'); 
        wp_enqueue_style('comment-css', get_template_directory_uri()  . '/assets/css/comments.css'); 
        wp_enqueue_style('about-css', get_template_directory_uri()  . '/assets/css/about-css.css'); 

    }
}   

// Load Js
add_action('wp_enqueue_scripts','p_load_js');
if(!function_exists('p_load_js')){
    function p_load_js(){
        global $wp_scripts,$wp;
        //$js_ran = '1.0';
        $js_ran = rand(1000,100000000);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('Stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('video-popup-js', get_template_directory_uri() . '/assets/js/video.popup.js',array('jquery'),'1.0',true);
        wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('smoothscroll-js', get_template_directory_uri() . '/assets/js/smoothscroll.js',array('jquery'),'1.0',true);
        wp_enqueue_script('lightgallery', get_template_directory_uri() . '/assets/js/lightgallery.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('jquery-mousewheel', get_template_directory_uri() . '/assets/js/jquery.mousewheel.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('lg-zoom', get_template_directory_uri() . '/assets/js/lg-zoom.min.js',array('jquery'),'1.0',true);
        wp_enqueue_script('lg-fullscreen', get_template_directory_uri() . '/assets/js/lg-fullscreen.min.js',array('jquery'),'1.0',true);

        // style.js
        wp_enqueue_script('style-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),$js_ran, true);
      }
}
?>