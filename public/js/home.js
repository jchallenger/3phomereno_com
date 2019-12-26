
$(document).ready(function(){
    $('.main-slider').bxSlider({
        captions:true,
        auto: true,
        autoControls: true,
        mode: 'vertical',
        slideMargin: 10
    })
    .goToSlide(0);
    
    
    $('#number').mask("999 999-9999");
});
