var isMobile = 'ontouchstart' in document.documentElement;
$(function(){
  if(!isMobile){
    new WOW({offset: 50}).init();
  }
});
