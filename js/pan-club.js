$(window).bind('load scroll resize', function(){
  //console.log($('header').offset().top);
  if($('header').offset().top > 50){
    $('header').addClass('header-collapsed');
  } else {
    $('header').removeClass('header-collapsed');
  }
});

/*$('.nav-tabs a:not(:first)').on('shown.bs.tab', function (e) {
  //e.target // newly activated tab
  //e.relatedTarget // previous active tab
  $('.navbar-fixed-top').addClass('top-nav-collapse');
})*/

//$('.navbar a:not(:first)').click(function(){
//  $('.navbar-fixed-top').addClass('top-nav-collapse');
//});

/*function storeQueryAndToggleButton($li) {
  $('#nav-wrapper').toggleClass('active');
  var tabIndex = $li.index();
  $.cookie('tabIndex', tabIndex, {expires: 365});
}

if($.cookie('tabIndex')) {
  var tabIndex = $.cookie('tabIndex');
  $('.tab-nav li:eq(' + tabIndex + ') a').tab('show');
  //storeQueryAndToggleButton($('.tab-nav li:eq(' + tabIndex + ')'));
}*/

$('#menu-toggle').click(function(e){
  e.preventDefault();
  $('#nav-wrapper').toggleClass('active');
});
$('#menu-close').click(function(e){
  e.preventDefault();
  $('#nav-wrapper').toggleClass('active');
});
/*$('.tab-nav li:eq(0) a').click(function(e){
  e.preventDefault();
  //$(this).tab('show');
  //storeQueryAndToggleButton($(this).parent('li'));
  $('#tab-content').load('/templates/' + $(this).attr('href').replace(/\//, '') + '-page.php');
  $('#nav-wrapper').toggleClass('active');
});
$('.tab-nav li:eq(1) a').click(function(e){
  e.preventDefault();
  $(this).tab('show');
  ///storeQueryAndToggleButton($(this).parent('li'));
  $('#nav-wrapper').toggleClass('active');
});
$('.tab-nav li:eq(2) a').click(function(e){
  e.preventDefault();
  $(this).tab('show');
  //storeQueryAndToggleButton($(this).parent('li'));
  $('#nav-wrapper').toggleClass('active');
});*/
$('.tab-nav li a').click(function(){
  $('#nav-wrapper').toggleClass('active');
});

$('#products-gallery').owlCarousel({
  items: 3,
  rewindNav : true,
  jsonPath:'json/products-gallery.json',
  jsonSuccess: function(data){
    var content = '';
    for(var i in data['items']){
      var img = data['items'][i].img;
      var alt = data['items'][i].alt;
      var name = data['items'][i].name;
      //content += '<img src="' + img + '" alt="' + alt + '" class="img-responsive img-centered">';

      content += '<div class="item">';
      content += '<div>';
      content += '<img src="' + img + '" alt="' + alt + '">';
      content += '</div>';
      content += '<div class="name">' + name + '</div>';
      content += '</div>';
    }
    $('#products-gallery').html(content);
    $('#products-gallery img').addClass('img-responsive img-centered');
  }
});



$('.news-carousel').owlCarousel({
  singleItem: true,
  navigation: true,
  pagination: true,
  autoHeight: true,
  navigationText: [
    '<i class="fa fa-angle-left"></i>',
    '<i class="fa fa-angle-right"></i>'
  ],
  transitionStyle: "backSlide"
});

var isMobile = 'ontouchstart' in document.documentElement;
$(function(){
  if(!isMobile){
    new WOW({offset: 50}).init();
  }
});

$(window).bind('load resize', function(){
  var h = $(window).height();
  $('.top-cover').css('height', h + 'px');
});
