// /* Slide up/down Menus Funciton */
//
// jQuery(document).ready(function($){
//   jQuery('.show-hide-container').hide();
//   jQuery('.info-panel-content').on('click', function(event){
//
//     if( $('.show-hide-container').is(':visible') ){
//
//       $('.show-hide-container').slideUp();
//
//     }else{
//
//       $('.show-hide-container').slideDown();
//     }
//
//   });
// });

jQuery(document).ready(function(){
  jQuery('.acr-box-content').hide();
  jQuery('info-panel-content').addClass('active');

  jQuery('.info-panel-content').click(function(){
    jQuery('.acr-box-content').slideUp();
    jQuery('info-panel-content').removeClass('active')
    if(jQuery(this).next().is(':visible')){
      jQuery(this).next().slideUp();
    }else{
      jQuery(this).next().slideDown();
      jQuery(this).addClass('active')
    }
  });
});
