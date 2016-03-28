(function($) {
  'use strict';
   /* Slide up/down Menus Funciton */

  $('.info-panel-content').click(function(e) {
    	e.preventDefault();

      var $this = $(this);

      if ($this.next().hasClass('show')) {
          $this.next().removeClass('show');
          $this.next().slideUp(350);
          // $this.children('.fa').toggleClass('fa-plus-circle');

      } else {
          $this.parent().parent().find('div .acr-box-content').removeClass('show');
          $this.parent().parent().find('div .acr-box-content').slideUp(350);
          $this.next().toggleClass('show');
          $this.next().slideToggle(350);
          // $this.children('.fa').toggleClass('fa-minus-circle');
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
