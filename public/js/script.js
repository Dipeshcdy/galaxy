
$(document).ready(function(){
    var navbar = $('#navbar');
    var scrollTop=$('#scrollToTop');
      function checkScrollPosition()
      {
        var scrollPos = $(window).scrollTop();

        if (scrollPos > 50 || scrollPos === $(document).height() - $(window).height())
        {
            scrollTop.css('opacity','1');
            navbar.addClass("nav_scrolled");
          }
          else
          {
            navbar.removeClass("nav_scrolled");
            scrollTop.css('opacity','0');
          }
          
      }
      checkScrollPosition();
      $(window).scroll(function() {
        checkScrollPosition();
      });


    $('#scrollToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
    });

    $('.dropdown-btn .menu').click(function(event) {

      var $dropdownMenu = $(this).closest('.dropdown-btn').find('.dropdown-menu');
      var $icon = $(this).closest('.dropdown-btn').find('.dropdown-icon');

      $icon.toggleClass('fa-plus fa-minus');
      $dropdownMenu.toggleClass('active');
  });

  // active nav of services and digital marketing
  // $('.nav-services .nav-title').removeClass('active');
  // $('.nav-digitalMarketing .nav-title').removeClass('active');
  // $('.nav-services .menu').click(function(event) {
  //   $('.nav-services .nav-title').add('active');
  // });
  // $('.nav-digitalMarketing .menu').click(function(event) {
  //   $('.nav-digitalMarketing .nav-title').add('active');
  // });

  // end of active nav

    
});
function menuBtn() {
  var element = $('#mobnav');
  var mobileIcon = $('#mobile-icon');
  element.toggleClass("active");
  mobileIcon.toggleClass("active");
  $("body").toggleClass('overflow-hidden'); 
} 


