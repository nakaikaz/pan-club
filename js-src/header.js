/*$(window).bind('load scroll resize', function(){
  if($('header').offset().top > 50){
    $('header').addClass('header-collapsed');
  } else {
    $('header').removeClass('header-collapsed');
  }
});*/


// #nav-wrapperのtransitionは0.8s
$('#menu-toggle').click(function(e){
  e.preventDefault();
  $('#nav-wrapper').toggleClass('active');
});
$('#menu-close').click(function(e){
  e.preventDefault();
  $('#nav-wrapper').toggleClass('active');
});

$('.tab-nav li a').click(function(){
  var href = $(this).attr('href');
  $("#nav-wrapper").on("oTransitionEnd mozTransitionEnd webkitTransitionEnd transitionend",function(){
    location.href = href;
  });
  $('#nav-wrapper').toggleClass('active');
  return false;
});
