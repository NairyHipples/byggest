$(document).ready(function() {
  $('.carousel').carousel({
    interval: 6500,
    pause: null
  });
  $.each( jQuery('.carousel .item'), function( i, val ) {
    $(this).css('background-image','url('+$(this).find('img').attr('src')+')').css('background-size', 'cover').find('img').css('visibility','hidden');
  });
  // // if ($('.mobile-indicator').css('display') == 'none') {
  // //   $(".carousel-caption").mouseenter(function(){
  // //     clearTimeout($(this).data('timeoutId'));
  // //     $(this).find(".carousel-button").slideDown(300);
  // //
  // //   }).mouseleave(function(){
  // //     var button = $(this),
  // //     timeoutId = setTimeout(function(){
  // //       button.find(".carousel-button").slideUp(300);
  // //     }, 200);
  // //     //set the timeoutId, allowing us to clear this trigger if the mouse comes back over
  // //     button.data('timeoutId', timeoutId);
  // //   });
  // }
});
