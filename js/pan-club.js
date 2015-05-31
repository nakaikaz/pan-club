(function($){
  $('#loading').fakeLoader({timeToHide: 9999999, zIndex: 9999, spinner: 'spinner1', bgColor: '#fff'});
  $('.double-bounce1, .double-bounce2').css('background-color', '#c2b49a');

  function loadImages(){
    var promises = [], $ret = $.Deferred();

    $('.sync-image').each(function(){
      var src = $(this).css('background-image');
      if(src == 'none') {
        src = 'http://newsite.local/' + $(this).attr('src');
      }else{
        src = src.replace(/url\(['"]?(.*?)['"]?\)/i, '$1');
      }

      var $dfd = $.Deferred();
      var $img = $('<img src=""/>');
      $img.attr('src', src);
      $img.bind('load', function(){
        $dfd.resolve();
        $dfd = null;
      });
      promises.push($dfd.promise());
    });

    $.when.apply(null, promises).done(function(){
      $ret.resolve();
    });

    $.when.apply(null, promises).fail(function(){
      $ret.reject();
    })

    return $ret.promise();
  }
  var imagesLoaded = new loadImages();
  imagesLoaded.done(function(){
    // #tab-contentにコンテンツをロード
    //var page = $('#tab-content').attr('data-page');
    //console.log('http://' + window.location.host + '/templates/' + page + '.php');
    //$('#tab-content').load('http://' + window.location.host + '/templates/' + page + '.php', function(){
    //  $('.top-cover').css('height', $(window).height() + 'px');
    //});
    // header, #tab-content, footerはスタイルシートで非表示にしてある。
    // 画面遷移して、.5s秒経過後、header, #tab-content, footerを表示した後、fakeLoaderをフェードアウトする。
    setTimeout(function(){
      $('header, footer, .content').show();
      $('#loading').fadeOut();
    }, 500);
  });
  imagesLoaded.fail(function(){
  });
})(jQuery);

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
