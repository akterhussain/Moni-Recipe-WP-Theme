(function($) {
	$(document).ready(function(){

       //START HERE JQUERY CODE



$('.one-time').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true

});


  // Dextop Categories Menu
 $(".categories-btn").click(function(){
    $(".moni-categories-menu-stucture").slideToggle("slow");
  });

 $(".categories-hide-content").click(function(){
    $(".moni-categories-menu-stucture").slideUp("slow");
  });

  $(".main-menu-btn").click(function(){
    $(".moni-categories-menu-stucture").slideUp("slow");
  });



  // Dextop Main Menu
 $(".main-menu-btn").click(function(){
    $(".moni-main-menu-stucture").slideToggle("slow");
  });

   $(".main-menu-hide").click(function(){
    $(".moni-main-menu-stucture").slideUp("slow");
  });

  $(".categories-btn").click(function(){
    $(".moni-main-menu-stucture").slideUp("slow");
  });



  // Mobile Main Menu
 $(".main-menu-btn").click(function(){
    $(".mobile-main-maneu-cont").slideToggle("slow");
  });

  $(".mobile-main-mau-hide").click(function(){
    $(".mobile-main-maneu-cont").slideUp("slow");
  });

  $(".search-mobile").click(function(){
    $(".mobile-main-maneu-cont").slideUp("slow");
  });

  $(".category-mobile").click(function(){
    $(".mobile-main-maneu-cont").slideUp("slow");
  });


  // Mobile Search form
 $(".search-mobile").click(function(){
    $(".mobile-search-content").slideToggle("slow");
  });

  $(".mobile-search-hide").click(function(){
    $(".mobile-search-content").slideUp("slow");
  });

    $(".main-menu-btn").click(function(){
    $(".mobile-search-content").slideUp("slow");
  });

      $(".category-mobile").click(function(){
    $(".mobile-search-content").slideUp("slow");
  });


  // mobile cateroey menu
 $(".category-mobile").click(function(){
    $(".mobile-category-content").slideToggle("slow");
  });

 $(".mobile-cate-content-hide").click(function(){
    $(".mobile-category-content").slideUp("slow");
  });

 $(".search-mobile").click(function(){
    $(".mobile-category-content").slideUp("slow");
  });

 $(".main-menu-btn").click(function(){
    $(".mobile-category-content").slideUp("slow");
  });







/* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('.header-section').addClass('fixed-header');
    }
    else {
        $('.header-section').removeClass('fixed-header');
    }
});



  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD


$(window).load(function() {
   $('.preloader').fadeOut('slow');
});

       // END JQUERY CODE
   });
}(jQuery));


