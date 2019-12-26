$(document).ready(function(){
    $('.gallery-nav').bxSlider({
        minSlides: 3,
        maxSlides: 5,
        slideWidth: 170,
        slideMargin: 10
    });
    var slider = $('.gallery-main').bxSlider({
        pagerCustom: '.gallery-nav',
        adaptiveHeight: true,
        mode: 'fade'
    });
    
    $(document).keyup(function(key){
        var keyCode = key.keyCode || key.which;
        switch(keyCode){
            case 37:
                slider.goToNextSlide();
                break;
            case 39:
                slider.goToPrevSlide();                
                break;
        }
        return;
    });
});
