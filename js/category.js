$(function(){

  $('nav').removeClass('navbar-expanded').addClass('subpage');

  if(window.matchMedia('(max-width:767px)').matches) {
    $('.product-carousel').owlCarousel({
      singleItem: true,
      transitionStyle: 'fade'
    });
  }
});