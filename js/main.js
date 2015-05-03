(function($){

  $('#loading').fakeLoader({timeToHide: 9999999, zIndex: 9999, spinner: 'spinner1', bgColor: '#fff'});
  $('.double-bounce1, .double-bounce2').css('background-color', '#c2b49a');

  function loadImages(){
    var promises = [], $ret = $.Deferred();

    $('.cover').each(function(){
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
    $('#loading').fadeOut();
  });
  imagesLoaded.fail(function(){
  });

  $('a.page-scroll').on('click', function(e){
    e.preventDefault();

    var $toggleBtn = $('.navbar-toggle');
    $toggleBtn.click();
    $toggleBtn.find('i').removeClass('fa-times').addClass('fa-bars');

    var duration = 1280;
    var offset = 50;
    if(window.matchMedia('(max-width:992px)').matches){
      duration = 0;
      offset = -30;
    }
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top - offset
    }, duration, 'easeInOutExpo');
  });

  $('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 51
  });

  $(window).bind('load scroll resize', function(){
    if($(this).scrollTop()< 200) {
      $('nav').addClass('navbar-expanded');
    } else {
      $('nav').removeClass('navbar-expanded');
    }
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

})(jQuery);


var isMobile = 'ontouchstart' in document.documentElement;
$(function(){
  if(!isMobile){
    new WOW({offset: 50}).init();
  }
});