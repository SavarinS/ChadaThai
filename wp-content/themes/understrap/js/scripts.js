jQuery(document).ready(function ($) {
    console.log("Ready!");
    
    //Effect to page 
    $(window).on('load', function() {
        console.log('All assets are loaded')
        //$(".welcome-title").slideDown(2000);
        $(".wrapper").fadeIn(3000, "swing");
        
    });

      //scroll to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
      $('#toTop').fadeIn(300);
      console.log('Fade In');
    } else {
      $('#toTop').fadeOut(300);
      console.log('Fade Out');
    }
  });

  

    
});