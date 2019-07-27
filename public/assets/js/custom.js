

(function($){
   "use strict";


 // loader

$(window).on('load',function(){
    // Animate loader off screen
    $(".leggoo-loader").fadeOut("slow");;
 });




$(document).on('ready',function() {
  

 //Navbar Hide And Show  On Scroll   and     back to top button
  $(window).on('scroll',function() {

    var scroll = $(window).scrollTop();
    if (scroll >=300) {
      $(".back-to-top").fadeIn();
    } else {
      $(".back-to-top").fadeOut();
    }
});

  // Scroll Animation
  $('.leggoo-nav a').on('click',function(e) {
    e.preventDefault();
    $('body, html').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 750);
  });

/* ============== SKILL ============== */
  $('.chart').appear(function() {

    var barColor = $(this).css('color'),
      trackColor =   $(this).css('borderTopColor'),
      size  = parseInt( $(this).css('width') , 10 );

    $(this).easyPieChart({
      barColor: barColor ,
      trackColor: trackColor, 
      scaleColor: false,
      lineCap: 'square',
      lineWidth: 10,
      size: size,
      animate: 1500,
      onStep: function(from, to, percent) {
        $(this.el).find('span').html(Math.round(percent) + '<small></small>');
      }
    });

  });

/* ============== LIGHTBOX  ============== */

  $('.lightbox').magnificPopup({
    type:'image',
    gallery: {
    enabled: true
    }
  });

  /* ============== PORTFOLIO ============== */

  var $container = $('.portfolio-container'),
    $containerProxy = $container.clone().empty().css({ visibility: 'hidden' }),
    colWidth;

  $container.after( $containerProxy );

  $(window).resize( function() {

    colWidth = Math.floor( $containerProxy.width() / 4 );
    $container.css({
      width: colWidth * 4
    })
    .isotope({
      resizable: false,
      itemSelector: '.portfolio-item',
      masonry: {
        columnWidth: colWidth
      }
    });
    
  }).resize();


  $container.imagesLoaded( function() {
    $container.isotope('layout');
  });

  // filters
  $('.portfolio-filters li:eq(0) a').addClass('active');

  $('.portfolio-filters a').on('click',function(){

    $('.portfolio-filters a').removeClass('active');
    $(this).addClass('active');

    var selector = $(this).attr('data-filter');

    $container.isotope({ filter: selector });

    return false;
  });

    setInterval(function() {
        var $curr = $('.slideshow img:visible'), 
            $next = ($curr.next().length) ? $curr.next() : $('.slideshow img').first();
        $next.css('z-index',2).fadeIn('slow', function() {
            $curr.hide().css('z-index',0);
            $next.css('z-index',1);
        });
    }, 6000); // milliseconds

    var interval = undefined;
$(document).ready(function () {
    interval = setInterval(getNext, 2000); // milliseconds
    $('#next').on('click', getNext);
    $('#prev').on('click', getPrev);
});

function getNext() {
    var $curr = $('.slideshow img:visible'),
        $next = ($curr.next().length) ? $curr.next() : $('.slideshow img').first();

    transition($curr, $next);
}

function getPrev() {
    var $curr = $('.slideshow img:visible'),
        $next = ($curr.prev().length) ? $curr.prev() : $('.slideshow img').last();
    transition($curr, $next);
}

function transition($curr, $next) {
    clearInterval(interval);

    $next.css('z-index', 2).fadeIn('slow', function () {
        $curr.hide().css('z-index', 0);
        $next.css('z-index', 1);
    });
}
    // CLIENT CAROUSEL
     $("#show-client").owlCarousel({
      autoPlay: 5000, //Set AutoPlay to 5 seconds
      items : 5,
      pagination : false,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      itemsTablet: [600,2],
      itemsMobile : [350,1] 
 
  });
// animated counter 

$('.timer').countTo();

$('.counter').appear(function() {
    $('.timer').countTo();
},{accY: -100}); 

// map
$('.map').on('click',function(){
      $(this).find('iframe').addClass('clicked')})
      .mouseleave(function(){
      $(this).find('iframe').removeClass('clicked')});
});
})(window.jQuery);


