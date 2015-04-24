// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs



$(window).resize(function(){
  var blockEqualize = $('.block');
  var doubleBlockEqualize = $('.double-block');
  var blockEqualizeWidth = blockEqualize.width();
  var doubleBlockEqualizeWidth = doubleBlockEqualize.width();
  $( blockEqualize ).height( blockEqualizeWidth );
  $( doubleBlockEqualize ).height( doubleBlockEqualizeWidth );
});


$(document).ready(function(){


  $(document).foundation();

  setTimeout(function() {
    var blockEqualize = $('.block');
    var doubleBlockEqualize = $('.double-block');
    var blockEqualizeWidth = blockEqualize.width();
    var doubleBlockEqualizeWidth = doubleBlockEqualize.width();
    $( blockEqualize ).height( blockEqualizeWidth );
    $( doubleBlockEqualize ).height( doubleBlockEqualizeWidth );
  }, 200);

  var lastScrollTop = $(window).scrollTop();
  if (lastScrollTop != 0) {
    var delta = $('.profile--header').height() - lastScrollTop;
    $('.bar').css({
      bottom: delta/4.5,
      opacity: delta/900
    });
  }

  $('.bar').hide().fadeIn(400);

  $(window).scroll(function(event){
     var scrollAmt = $(this).scrollTop();
     var deltaS = scrollAmt - lastScrollTop;
       $('.bar').css({
          bottom: "-=" + deltaS/4.5,
          opacity: "-=" + deltaS/700
       });

      if (scrollAmt >= 70) {
        $('.down-arrow').css({
            opacity: "-=" + deltaS/3
    });
      } else if (scrollAmt < 70){
        $('.down-arrow').css({
          opacity: 0.9
        });
      }

     lastScrollTop = scrollAmt;
  }); // scroll

  $(".hoewas > span").fitText();
}); // document ready