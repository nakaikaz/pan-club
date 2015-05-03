function initMap(elm, loc) {
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

function initMaps() {
    initMap(document.getElementById('hachinohe-branch-map2'), {x: 40.524927, y: 141.508507});
    initMap(document.getElementById('morioka-branch-map2'), {x: 39.714267, y: 141.122478});
    initMap(document.getElementById('akita-branch-map2'), {x: 39.747525, y: 140.081477});
}

$(function(){
    $('nav').removeClass('navbar-expanded').addClass('subpage');
    initMaps();
});