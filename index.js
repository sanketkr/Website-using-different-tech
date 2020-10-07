jQuery.noConflict();
jQuery("document").ready(function($){


   $(window).scroll(function() {

      if ($(this).scrollTop()>0)
       {
          $('.navbar-brand').addClass('display');
       }
      else
       {
        $('.navbar-brand').removeClass('display');
       }
      });
   
})
