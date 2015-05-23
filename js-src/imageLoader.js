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
    var page = $('#tab-content').attr('data-page');
    console.log('http://' + window.location.host + '/templates/' + page + '.php');
    $('#tab-content').load('http://' + window.location.host + '/templates/' + page + '.php', function(){
      $('.top-cover').css('height', $(window).height() + 'px');
    });
    // header, #tab-content, footerはスタイルシートで非表示にしてある。
    // 画面遷移して、.5s秒経過後、header, #tab-content, footerを表示した後、fakeLoaderをフェードアウトする。
    setTimeout(function(){
      $('#tab-content, header, footer').show();
      $('#loading').fadeOut();
    }, 500);
  });
  imagesLoaded.fail(function(){
  });
})(jQuery);
