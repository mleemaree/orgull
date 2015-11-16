/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/



/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
  var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
  return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
  var timers = {};
  return function (callback, ms, uniqueId) {
    if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
    if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
    timers[uniqueId] = setTimeout(callback, ms);
  };
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *  // update the viewport, in case the window size has changed
 *  viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
  }
} // end function


/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();


//============HOMEPAGE MASONRY

if(viewport.width >= 992){
$(window).on( 'resize', function () {
    $('.post-wrapper').width( $('.posts').width() / 2 );
}).resize();
}else{
  $('.post-wrapper').width($('.posts').width);
}

if(viewport.width >= 992){
$(window).on( 'resize', function () {
    $('.tag-post-wrapper').width( $('#main-tag').width() / 2 );
}).resize();
}else{
  $('.tag-post-wrapper').width($('#main-tag').width);
}
  
$('.posts').masonry({
  // options
  itemSelector: '.post-wrapper'
});

(function($) {
var $container = $('.posts'); // this is the content selector
$container.imagesLoaded( function() {
    $container.masonry({
        itemSelector: '.post-wrapper' // this is the item selector
    });
});
})(jQuery);


//__________PRODUCTORS MASONRY
$('.prod-cont').masonry({
  columnWidth:'.productor',
  itemSelector: '.productor'
});

(function($) {
var $container = $('.prod-cont'); // this is the content selector
$container.imagesLoaded( function() {
    $container.masonry({
        itemSelector: '.productor' // this is the item selector
    });
});
})(jQuery);


//SKROLLR INIT

var s = skrollr.init();

if (s.isMobile()) {
    s.destroy();
}

//=================mousewheel


//=============GSAP STUFF
//=======SINGLE POST
$(window).load(function(){
 $('.hers')
    .hover(function(){
      TweenMax.to(".soc", 0.5, {x:40}, 0.5);
      return false;
      },function(){
      TweenMax.to(".soc", 0.5, {x:-150, ease: Power1.easeInOut}, 0.5);
      return false;
      
  });

})

  var $qsorig = $('#orig');

var tween = TweenMax.from($qsorig, 0.5, {x:-50, ease: Power1.easeIn}, 0.2);

//MENU ANIMATIONNSS

$('.animateddrawer').click(function(){
  $(this).toggleClass('special');
});
   
$('·back-icono').click(function(){
  $('#close-icono-stay').hide();
});




//-------------qui som page
 /*TweenMax.to("#camins-img", 6, { 
  rotation:360, 
  repeat: -1, 
  yoyo: true, 
  ease: Sine.easeInOut, y: 0
});
 TweenMax.from("#fuet-img", 1, {
  scaleX:0.7, 
  scaleY:0.7,
  repeat:-1,
  repeatDelay:2,
  yoyo:true,
  ease: Elastic.easeInOut.config(1, 0.3), y: 0 
});
TweenMax.to("#pa-img", 2, {
  rotation:20, 
  transformOrigin:"50% 100%",
  repeat:-1,
  yoyo:true,
  ease: Sine.easeInOut, y: 0
});*/

//down arrow
$("#down-arrow").delay(2000).fadeIn(500);
$("#orig").delay(2000).fadeIn(500);

//----MODAL

    $(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
      $("#s").focus();
});

$('.modal').on('shown.bs.modal', function() {
  $(this).find('[autofocus]').focus();
});

$('#sf-btn').click(function(){
  $('.animateddrawer').addClass('open');
});


$('#cursor').click(function(){
  $('html,body').animate({scrollTop: ($('#wayward-up')).offset().top}, 'slow');
});

/*MENU-----------*/

        $('#mc').click(function(){
            $('.contact-cont').fadeIn().css('display', 'table');
            $('#menu-35, #um').fadeOut();
            $('#back-icono').fadeIn();
            $('#sf-btn').css('pointer-events','none');
        });

        $('#back-icono').click(function(){
            $('#back-icono').fadeOut();
            $('#sf-btn').css('pointer-events','auto');
            $('.contact-cont, .news-cont, .leg-not').fadeOut();
            $('#menu-35, #um').fadeIn();
        });

        $('.animateddrawer').click(function(){
            $('#menu-35, #um').fadeIn();
            $('.contact-cont, .news-cont, .leg-not').fadeOut();
            $('#back-icono').fadeOut();

            /*search function
            $('.modal, .modal-backdrop').fadeOut();
            */

        });

        $('#mn').click(function(){
            $('.news-cont').fadeIn().css('display', 'table');
            $('#menu-35, #um').fadeOut();
            $('#back-icono').fadeIn();
            $('#sf-btn').css('pointer-events','none');
        });

        $('#mnl').click(function(){
            $('.leg-not').fadeIn();
            $('#menu-35, #um').fadeOut();
            $('#back-icono').fadeIn();
            $('#sf-btn').css('pointer-events','none');
        });


/*AJAX forms============*/

/*contact form*/

$(function() {

  // Get the form.
  var form = $('#ajax-contact');

  // Get the messages div.
  var formMessages = $('#form-messages');

  // Set up an event listener for the contact form.
  $(form).submit(function(e) {
    // Stop the browser from submitting the form.
    e.preventDefault();

    // Serialize the form data.
    var formData = $(form).serialize();

    // Submit the form using AJAX.
    $.ajax({
      type: $(form).attr('method'),
      url: $(form).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Make sure that the formMessages div has the 'success' class.
      $(formMessages).removeClass('error');
      $(formMessages).addClass('success');
      $('.contact-cont').fadeOut();
      $('.conf-cont').delay(500).css({
      'display':'table'
    });

      // Set the message text.
      $(formMessages).text(response);

      // Clear the form.
      $('#nom').val('');
      $('#poblacio').val('');
      $('#email').val('');
      $('#tel').val('');
      $('#comentari').val('');
      $('#czech').val('');
    })
    .fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('error');

      // Set the message text.
      if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
      } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    });

  });

});


//NEwsletter

/*$('#email-form').on('submit', function(event){
  event.preventDefault();
  var form = $(this);
  $.ajax($('form').attr('action'),{
    type: $('form').attr('method'),
    data: form.serialize()
  })
  .done(function(response) {
    $('.news-cont').fadeOut();
    $('.conf-news').delay(500).fadeIn();

    //Clear form
    $('#email').val('');
  });

});*/
$(function() {

  // Get the form.
  var form = $('#email-form');

  // Get the messages div.
  var formMessages = $('#form-messages');

  // Set up an event listener for the contact form.
  $(form).submit(function(e) {
    // Stop the browser from submitting the form.
    e.preventDefault();

    // Serialize the form data.
    var formData = $(form).serialize();

    // Submit the form using AJAX.
    $.ajax({
      type: $(form).attr('method'),
      url: $(form).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Make sure that the formMessages div has the 'success' class.
      $(formMessages).removeClass('error');
      $(formMessages).addClass('success');
    $('.news-cont').fadeOut();
    $('.conf-news').delay(500).css({
      'display':'table'
    });

      // Set the message text.
      $(formMessages).text(response);

      // Clear the form.

      $('#em').val('');

    })
    .fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('error');

      // Set the message text.
      if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
      } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    });

  });

});



$('.animateddrawer, #sf-btn, #back-icono').click(function(){
  $('.conf-news, .conf-cont').fadeOut("fast");
})





$(document).on("click","#conf-accept, #conf-news", function(e) {
       document.location.href='http://orgullpages.wp#main-anchor';
       menu1.togglemenu();
       $('#back-icono').fadeOut();

 });










}); /* end of as page load scripts */


