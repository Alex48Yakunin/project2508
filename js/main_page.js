$(document).ready(function(){
   
    $('.col-a').mouseenter(function(){
       $(this).children('.main-page-custom').addClass("hover_active");
    });
    $('.col-a').mouseleave(function(){
       $(this).children('.main-page-custom').removeClass("hover_active");
    });
    
});