(function($) {
  'use strict';

  /* Slide up/down Menus Function */

  $('.info-panel-content').click(function(e) {
    e.preventDefault();

    var $this = $(this);

    if ($this.next().hasClass('show')) {
      $this.next().removeClass('show');
      $this.next().slideUp(350);
      // switch top-level dropdown from minus icon to plus icon on click
      $this.children('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');

    } else {
      $this.parent().parent().find('div .acr-box-content').removeClass('show');
      $this.parent().parent().find('div .acr-box-content').slideUp(350);
      $this.next().toggleClass('show');
      $this.next().slideToggle(350);
      // switch nested dropdown to minus icon on click
      $this.children('.fa').addClass('fa-minus-circle');
      // switch any sibling nested dropdowns to plus icon on click
      $this.siblings('.info-panel-content').children('.fa').removeClass('fa-minus-circle');
      // switch any nested dropdowns to plus if top-level dropdown is closed
      $this.next().children('.info-panel-content').children('.fa').removeClass('fa-minus-circle');

    }
  });

  /* Success Story Show/Hide Functionality */

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

  // bxSlider functionality
  $('.bxslider').bxSlider({
    speed: 500,
    controls: false,
    auto: true
  });

  // Instagram API Functionality

  var $photoList = $('.ig-photo-list');
  var endpointURL = 'https://api.instagram.com/v1/users/self/media/recent/?count=6&access_token=260006638.ec2ce43.e6b06a897b984941ad22bae3fb27f977';
  var photoElements = '';
  var buildPhotoGrid = function (value) {
    photoElements +=  '<li>';
    photoElements +=    '<div class="photo-box">';
    photoElements +=      '<a href="' + value.link + '"><img src="' + value.images.standard_resolution.url + '"/></a>';
    photoElements +=    '</div>';
    photoElements +=  '</li>';
  };
  $.ajax({
    dataType: 'jsonp',
    method: 'GET',
    url: endpointURL,
  })
  .done(function (apiData) {
    photoElements += '<ul>';
    $.each(apiData.data, function (key, value) {
      buildPhotoGrid(value);
    });
    photoElements += '</ul>';
    $photoList.append(photoElements);
  });

  // Flickity init
  $('.main-carousel').flickity({
    wrapAround: true,
    freeScroll: true,
    cellAlign: 'left',
    autoPlay: true
    //contain: true
  });


}(jQuery));
