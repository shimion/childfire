jQuery(window).load(function(){
    
    jQuery(".btn-search").toggle(function(){
        jQuery("#search-header").fadeIn();
        jQuery(".btn-search").addClass("active");
        document.getElementById("search-form_it").focus();
    },function(){
        jQuery("#search-header").fadeOut();
        jQuery(".btn-search").removeClass("active");
    });
    
});

jQuery(document).ready(function(){
jQuery('#map').css('display', 'block');

jQuery(window).resize(
   function(){
    jQuery('#map').width(jQuery(window).width());
    jQuery('#map').css({width: jQuery(window).width(), "margin-left": (jQuery(window).width()/-2)});
   }
  ).trigger('resize');

});