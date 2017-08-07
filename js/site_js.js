jQuery(document).ready(function ($) {
  $('.carousel').carousel({
    pause: "hover"
  });

  $('#myCarousel').find('.carousel-item').first().addClass('active');
  $('#product-carousel').find('.carousel-item').first().addClass('active');
  
  $('.tooltip-info').tooltip({
    placement: 'right'
  });

  $('#menu-main-navigation > li').addClass('nav-item');
  $('#menu-main-navigation > li > a:first-child').addClass('nav-link');
  $('#menu-item-2342, #menu-item-47').addClass('dropdown');
  $('#menu-item-2342 > a, #menu-item-47 > a').addClass('dropdown-toggle').attr('data-toggle', 'dropdown');
  $('.dropdown-menu > li').addClass('dropdown-item');

  $('body.single-post #menu-item-2708, body.archive #menu-item-2708').addClass('current-menu-item');

  $('#accordion').find('.panel-collapse').first().addClass('in');
  $('#accordion').find('.panel a').first().removeClass('collapsed');
});
