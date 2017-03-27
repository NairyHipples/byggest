$(document).ready(function() {
  $('.carousel').carousel({
    interval: 6500,
    pause: null
  });
  $.each( jQuery('.carousel .item'), function( i, val ) {
    $(this).css('background-image','url('+$(this).find('img').attr('src')+')').css('background-size', 'cover').find('img').css('visibility','hidden');
  });
});
