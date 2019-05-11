
// owl-carousel doi tac
jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:true
        }
    }
});

jQuery(document).ready(function() {
    jQuery('.lighgallery').lightGallery({
        selector: '.box-photo'
    }); 
    jQuery(".youtube-link").grtyoutube({
        autoPlay:true
    });
});






