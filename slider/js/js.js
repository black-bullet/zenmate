$(document).ready(function(){
  $("#owl-demo").owlCarousel({
      items : 1,
      autoplay : true,
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      nav:true,
      navText : false,
      loop : true,
      responsive : false, 
      itemsScaleUp : false, 
  });
})