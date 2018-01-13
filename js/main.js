//Use Strict Mode
(function($) {
  "use strict";

//Begin - Window Load
$(window).load(function(){

  //Owl Carousel

  // >> Home
  $("#home-slideshow").owlCarousel({
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,      
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    items : 1,
    autoPlay: 6000,
    stopOnHover: true,
    pagination: true,
    singleItem: true
  });

  // >> Team
	$("#about-team").owlCarousel({
    navigation : true, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,      
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    items : 4,
    itemsMobile : [479,1],
    autoPlay: 6000,
    stopOnHover: true,
    pagination: true,
    //singleItem: true,
    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"]
  });

  // >> Project Single
  $("#project-single-carousel").owlCarousel({
    navigation : true, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,      
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    pagination: true,
    singleItem: true,    
    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],     
  });

  // >> Testimonials
 $("#testimonial-carousel").owlCarousel({
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,      
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    pagination: true,
    singleItem: true,    
    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],     
  });

  // >> Clients
   $("#clients-carousel").owlCarousel({ 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 5,
      itemsCustom : false,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsMobile : [479,1],
      pagination: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,
      //navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],     
  });

  // >> Blog Carousel
  $("#blog-carousel").owlCarousel({
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,      
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    pagination: true,
    singleItem: false,    
    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],     
    items : 3,
  }); 




  // Portfolio Filter
  var catActive = '';

  $('#filter-header .category-item').on('click', function(event){    
    var catActive = $(this).attr('data-filter');  
    $('#filter-header .category-item').removeClass('category-item-active'); 
    $(this).addClass('category-item-active');
    $("#filter-container .filter-item").removeClass('project-item-disabled');  
    $("#filter-container .filter-item:not(." + catActive + ")").addClass('project-item-disabled');
    event.preventDefault();
  });

  //Tabs

  var tabs = '.tabs';
  var tabsButtons = $('.tabs .tabs-buttons a');

  tabsButtons.on('click', function(e)  {
      var currentAttrValue = $(this).attr('href');
      // Show/Hide Tabs
      $('.tabs ' + currentAttrValue).fadeIn(600).siblings().hide();
      // Change/remove current tab to active
      $(this).parent('li').addClass('active').siblings().removeClass('active');
      e.preventDefault();
      return false;
  });

  $('.tab').hide();
  $('#tab1').show();

  //Fillers
  var barjH = '200px';
  var pScheduleItem = $( ".filler-item");

  function adjustFiller() {
    pScheduleItem.each(function() {
      var barjH = $(this).find('.filler-item-block-dad').height();
      //alert(barjH);
      $(this).find('.filler-item-block').css('min-height', barjH);
    });
  }
  adjustFiller();

  //Masonry
  //==============___MASONRY___================
  var $container = $('#blog-posts-masonry');
  // initialize Masonry after all images have loaded  
  $container.imagesLoaded( function() {
    $container.masonry({
      itemSelector: '.blog-item'
    });
  });

  var $galleryMasonry = $('#image-gallery-masonry');
  // initialize Masonry after all images have loaded  
  $galleryMasonry.imagesLoaded( function() {
    $galleryMasonry.masonry({
      itemSelector: '.image-gallery-item'
    });
  });

  // Counters (Use with Waypoints.JS)
$('#counters').waypoint(function() {

     // >> Finished projects
    $('#counter-item-title1').countTo({
      from: 300,
      to: 467,
      speed: 1500,
      refreshInterval: 50,
      onComplete: function(value) {
          console.debug(this);
      }
    });

    // >> Happy Customers
    $('#counter-item-title2').countTo({
      from: 120,
      to: 168,
      speed: 1500,
      refreshInterval: 50,
      onComplete: function(value) {
          console.debug(this);
      }
    });

    // >> Working Hours
    $('#counter-item-title3').countTo({
      from: 700,
      to: 785,
      speed: 1500,
      refreshInterval: 50,
      onComplete: function(value) {
          console.debug(this);
      }
    });

    // >> Partnerships in the Word
    $('#counter-item-title4').countTo({
      from: 700,
      to: 785,
      speed: 1500,
      refreshInterval: 50,
      onComplete: function(value) {
          console.debug(this);
      }
    });
  },
  {
    triggerOnce: true, 
    offset: '70%'
});


  //Viewport
  var windowHeight = $(window).height();

  function adjustViewport() {
    $('.viewport').css('min-height', windowHeight);
    return false;
  }
  adjustViewport();

});

//Begin - Document Ready
$(document).ready(function(){


// NiceScroll
$("#nicescroll-example").niceScroll({
  cursorwidth: 8,
  cursoropacitymin : 0.7
});

// Fancybox
$(".blog-carousel-item a").fancybox({
  type: 'ajax',
  fitToView: true
});

$(".fancybox-iframe-btn").fancybox({
  type: 'iframe',
  fitToView: true
});

$(".fancybox").fancybox({
});

$(".image-gallery a").fancybox({

});

//Countdown (Edit this with your own date)
$("#countdown").countdown("2016/11/22", function(event) {
  var $this = $(this).html(event.strftime(''
     + '<div class="countdown-col-wrapper col-xs-6 col-sm-3"><div class="countdown-col"><span class="countdown-time"> %-D </span> <span class="countdown-type"> Days </span></div></div> '
     + '<div class="countdown-col-wrapper col-xs-6 col-sm-3"><div class="countdown-col"><span class="countdown-time"> %H </span> <span class="countdown-type">Hours </span></div></div>'
     + '<div class="countdown-col-wrapper col-xs-6 col-sm-3"><div class="countdown-col"><span class="countdown-time"> %M </span> <span class="countdown-type">Minutes </span></div></div>'
     + '<div class="countdown-col-wrapper col-xs-6 col-sm-3"><div class="countdown-col"><span class="countdown-time"> %S </span> <span class="countdown-type">Seconds </span></div></div>'));
});

// Double Tap to Go - Mobile Friendly SubMenus
$('.navbar-nav li:has(ul)').doubleTapToGo();

// Maps iframe Overlay
var map = $('#map');
map.on('click', function () {
    $('#map iframe').css("pointer-events", "auto");
    return false;
});

map.on('mouseleave', function () {
    $('#map iframe').css("pointer-events", "none");
    return false;
});

//Forms
// >> Intro - Intro Form Validator and Ajax Sender
$("#intro-form").validate({
  submitHandler: function(form) {
    $.ajax({
      type: "POST",
      url: "php/contact-form.php",
      data: {
        "name": $("#intro-form #if-name").val(),
        "email": $("#intro-form #if-email").val(),
        "subject": $("#intro-form #if-subject").val(),
        "phone": $("#intro-form #if-phone").val()
      },
      dataType: "json",
      success: function (data) {
        if (data.response == "success") {
          pContactSuccess.fadeIn(300);
          pContactError.addClass("hidden");    
        } else {
          pContactError.fadeIn(300);
          pContactSuccess.addClass("hidden");
        }
      }

    });
  }
});

//Modal for Forms
function hideModal() {
  $('.modal-wrap').fadeOut(300);
  return false;
}

$('.modal-wrap').on('click', function () {
  hideModal();
});   

$('.modal-bg').on('click', function () {
  hideModal();
}); 

//End - Document Ready
});

//End - Use Strict mode
})(jQuery);