// /* Slide up/down Menus Funciton */
(function($) {

  $('.acr-box-content').hide();
  // jQuery('info-panel-content').addClass('active');

  $('.info-panel-content').click(function(){
    $('.acr-box-content').slideUp();
    $('.info-panel-content .fa').attr('class', 'fa fa-minus-circle');
    // jQuery('info-panel-content').removeClass('active');
    if($(this).next().is(':visible')){
      $(this).next().slideUp();
      $('.info-panel-content .fa').attr('class', 'fa fa-plus-circle');
    }else{
      $(this).next().slideDown();

    }
  });

// Success Story show/hide functionality
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
