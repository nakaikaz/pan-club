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
