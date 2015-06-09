/*$('#products-gallery').owlCarousel({
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
});*/
$(function(){
  $('.product-carousel').owlCarousel({
    singleItem: true,
    rewindNav: true
  });
});
