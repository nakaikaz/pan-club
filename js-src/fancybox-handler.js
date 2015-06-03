var locArray = {
  "hachinohe-branch": {x: 40.524927, y: 141.508507},
  "morioka-branch": {x: 39.714267, y: 141.122478},
  "akita-branch": {x: 39.747525, y: 140.081477}
}

function initMap(name, loc) {
  var elm = document.getElementById(name);
  var map = new google.maps.Map(elm, {
    zoom: 15,
    center: new google.maps.LatLng(loc.x, loc.y),
    scrollwheel: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var image = new google.maps.MarkerImage('img/mapicon.png');
  image.scaledSize = new google.maps.Size(60, 66);
  var marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(loc.x, loc.y), icon: image});
}

$(function() {
  $('.fancy-map').fancybox({
    maxWidth	: 960,
		maxHeight	: 600,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'fade',
		closeEffect	: 'fade',
    beforeShow: function(){
      var branchName = $(this).attr('href').replace('#', '');
      initMap(branchName, locArray[branchName]);
    },
    afterClose: function() {
      //console.log('close', $(this).attr('href'));
      $($(this).attr('href')).empty();
    }
  });
});
