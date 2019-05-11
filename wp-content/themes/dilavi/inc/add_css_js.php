<?php 

// Load css
add_action('wp_enqueue_scripts','p_load_css');
if(!function_exists('p_load_css')){
    function p_load_css(){

        //$css_ran = '1.0';
        $css_ran = rand(1000,100000000);
        //wp_enqueue_style('normalize',P_LIB . '/normalize/normalize-4.2.0.css');
        // Linearicons
        wp_enqueue_style('icon-font', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css' );
        // <!-- Opensan font -->
        wp_enqueue_style('googleapis', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' );
        // <!-- tino google font -->
        wp_enqueue_style('tino-font', 'https://fonts.googleapis.com/css?family=Tinos:400,400i,700,700i' );
        // <!-- USE font-awesome -->
        wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
        // <!--  frame bootstrap -->
        // <!-- bootstrap3 -->
        // frame bootstrap
        wp_enqueue_style('bootstrap3',get_template_directory_uri() . '/vendor/bootstrap.css');
        //bootstrap4 
        wp_enqueue_style('bootstrap4',get_template_directory_uri() . '/vendor/bootstrap.min.css');
        //modal-video-youtube
       	wp_enqueue_style('modal-video',get_template_directory_uri() . '/lib/yt_modal/grt-youtube-popup.css');
       	//lightgallery
       	wp_enqueue_style('lightgallery',get_template_directory_uri() . '/lib/lightGallery/dist/css/lightgallery.css');
       	// owl-carousel
       	wp_enqueue_style('owl-carousel',get_template_directory_uri() . '/dist/assets/owl.carousel.min.css');
       	wp_enqueue_style('owl-carousel',get_template_directory_uri() . 'dist/assets/owl.theme.default.min.css');
        // fancybox
        wp_enqueue_style('fancybox.css',get_template_directory_uri() . '/lib/fancybox/jquery.fancybox-1.3.4.css');
       	//animate css
       	wp_enqueue_style('animate.css',get_template_directory_uri() . '/dist/animate.css');
       	// style.css
       	wp_enqueue_style('style.css', get_template_directory_uri()  . '/sass/css/style.css'); 	
       	// style-custom
       	wp_enqueue_style('style2.css', get_template_directory_uri()  . '/sass/css/style2.css'); 

        // customer
       //wp_enqueue_style('style-css',P_CSS . '/style.css','',$css_ran);

    }
}   

// Load Js
add_action('wp_enqueue_scripts','p_load_js');
if(!function_exists('p_load_js')){
    function p_load_js(){
        global $wp_scripts,$wp;
        //$js_ran = '1.0';
        $js_ran = rand(1000,100000000);



        // js HEDADER

        
       // wp_enqueue_script('boostrap-js-popper', P_LIB . '/bootstrap-4/js/popper.min.js',array('jquery'),'1.0');

        // js footer
        //  //<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        // wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js',array('jquery'),'1.0', true);
        // bootstrap4
        wp_enqueue_script('modal-video', get_template_directory_uri() . '/lib/modal-video/js/modal-video.js',array('jquery'),'1.0',true);
        // lightgallery 
        wp_enqueue_script('lightgallery', get_template_directory_uri() . '/lib/lightGallery/dist/js/lightgallery.min.js',array('jquery'),'1.0',true);
        // lightgalleryPlugins
        wp_enqueue_script('lg-thumbnail.min.js', get_template_directory_uri() . '/lib/lightGallery/modules/lg-thumbnail.min.js',array('jquery'),'1.0',true);   
        wp_enqueue_script('lg-fullscreen.min.js', get_template_directory_uri() . '/lib/lightGallery/modules/lg-fullscreen.min.js',array('jquery'),'1.0',true);  
        wp_enqueue_script('lg-autoplay.min.js', get_template_directory_uri() . '/lib/lightGallery/modules/lg-autoplay.min.js',array('jquery'),'1.0',true);   
        wp_enqueue_script('lg-zoom.min.js', get_template_directory_uri() . '/lib/lightGallery/modules/lg-zoom.min.js',array('jquery'),'1.0',true); 
        wp_enqueue_script('lg-share.min.js', get_template_directory_uri() . '/lib/lightGallery/modules/lg-share.min.js',array('jquery'),'1.0',true);   
        wp_enqueue_script('lg-hash.min.js', get_template_directory_uri() . '/lib/lightGallery/modules/lg-hash.min.js',array('jquery'),'1.0',true); 
        //yt-modal-video
        wp_enqueue_script('yt-modal-video', get_template_directory_uri() . '/lib/yt_modal/grt-youtube-popup.js',array('jquery'),'1.0',true);
        //owl-carousel
        wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/dist/owl.carousel.min.js',array('jquery'),'1.0',true);   
        //fancybox 
         wp_enqueue_script('fancybox.js', get_template_directory_uri() . '/lib/fancybox/jquery.fancybox-1.3.4.pack.js',array('jquery'),'1.0',true);
        // style.js
        wp_enqueue_script('style.js', get_template_directory_uri() . '/js/style.js', array('jquery'),$js_ran, true);
    }
}
?>