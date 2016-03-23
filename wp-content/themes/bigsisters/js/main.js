// /* Slide up/down Menus Funciton */

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
