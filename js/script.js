function animateServices(){
	$(".service-widget").each(function(i){
    		setTimeout(function(){
    			$(".service-widget").eq(i).addClass("isShowing");
    		}, 140*(i+1));
    	});
}

function initialize() {
  var myCenter = new google.maps.LatLng(53.511344, -7.141550);
  var mapProp = {
    center:myCenter,
    zoom:13,
	zoomControl:true,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  
	var marker=new google.maps.Marker({
	  position:myCenter,
  });
  
  marker.setMap(map);
}
$(document).ready(function() {
	google.maps.event.addDomListener(window, 'load', initialize);
	
	var left = $(".leftPanel");
	left.css({ 'left': 900 });
	left.show(200).animate({left: 0}, 950);

	var imgPanel = $(".eCommerce-service img");
	imgPanel.css({ 'left': -900 });
	imgPanel.show(200).animate({left: 0}, 950);
	
	
	var owl = $("#owl-demo");

      owl.owlCarousel({

      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [700,2], //2 items between 600 and 0;
      itemsMobile : [480, 1] // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
      $(".play").click(function(){
        owl.trigger('owl.play',1000);
      })
      $(".stop").click(function(){
        owl.trigger('owl.stop');
      })


    });