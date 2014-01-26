$('.my-sticky-element').waypoint('sticky');


$(document).on("scroll",function(){
    if($(document).scrollTop()>100){
        $("header").removeClass("large").addClass("small");
    } else{
        $("header").removeClass("small").addClass("large");
    }
});

$(window).resize(function() {
  $("#header.clearfix.docked").width($(window).width());
});


$(document).ready(function(){
    $('.video').magnificPopup({
      type: 'iframe',


      iframe: {
        patterns: {
         youtube: {
      index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

      id: 'v=', // String that splits URL in a two parts, second part should be %id%
      // Or null - full URL will be returned
      // Or a function that should return %id%, for example:
      // id: function(url) { return 'parsed id'; } 

      src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
  }
}
}


});




});


    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object

        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed')); 

            // Put together our final background position
            var coords = '50% '+ yPos + 'px';

            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        }); 
    });    
}); 






