$(function() {
  $('.fancy-image').fancybox({
    maxWidth: 500,
    openEffect: 'fade',
    closeEffect: 'fade',
    beforeShow: function(){
      var title = $('a[href="' + this.href + '"]').attr('data-title');
      var comment = $('a[href="' + this.href + '"]').attr('data-comment');
      var price = $('a[href="' + this.href + '"]').attr('data-price');
      //this.inner.prepend('<p>' + price + '円</p>');
      this.inner.prepend('<h3>' + title + '</h3>');
      this.inner.append('<p>' + comment + '</p>');
    }
  });
});
