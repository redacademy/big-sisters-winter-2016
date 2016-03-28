// Slide Up/Down menu Functionality
(function($) {

  $('.acr-box-content').hide();

  $('.info-panel-content').click(function(){
    var currentText = $(this).text();
    $(this).html('<h3>'+currentText+'</h3><i class="fa fa-minus-circle"></i>');
    if($(this).next().is(':visible')){
      $(this).html('<h3>'+currentText+'</h3><i class="fa fa-plus-circle"></i>');
      $(this).next().slideUp();
    }else{
      $(this).next().slideDown();
    }
  });

// Success Story Show/Hide Functionality
    $('.story-box-content').hide();
    $('.story-panel-content').click(function() {
      $('.story-box-content').slideUp();
      $('.story-panel-content').html('<div class="button-white">Read More</div>');

      if($(this).prev().is(':hidden')) {
        $(this).prev().slideDown();
        $(this).html('<div class="button-white">Read Less</div>');
      } else {
        $(this).prev().slideUp();
        $(this).html('<div class="button-white">Read More</div>');
      }
    });

 }(jQuery));

 //bxSlider Functionality

jQuery(document).ready(function($){
 $('.bxslider').bxSlider({
    speed: 500,
    controls: false,
    auto: true
 });
});
