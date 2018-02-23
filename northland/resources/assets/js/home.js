/*
*
*** HEADER
*
*/
//resize header
$(document).ready(function() {
  $('header, .slide-item').css({
    'height': $(window).height() - ($('.logo').height() + $('#topnav').height())+'px'
  }); 
  
});
$(window).resize(function(){
  $('header, .slide-item').css({
    'height': $(window).height() - ($('.logo').height() + $('#topnav').height())+'px'
  });
});

//carousel script
$(document).ready(function() {
  setTimeout(slideInit, 5000);
  bind();
  $(slide[count]).next().css('z-index', '1')  
});

var timer =  null,
    slide = $.makeArray($('.item-container'));
    count = 0,
    endPos = {'left': 0},
    afterPos = {'left': '-120%'},
    beforePos = {'left': '1150px'},
    trans = {'transition': 'left 1.8s cubic-bezier(0.215, 0.61, 0.355, 1)'},
    notrans = {'transition': 'none'};

function hideSlides() {
  for (i = 0; i < slide.length; i++){
    $(slide[i].children[1]).css({
      'opacity': 0
    });
  }  

  $(slide[count].children[1]).animate({
    'opacity': '1'
  }, 800);
}

hideSlides() 
function nextSlide() {
  $(slide[count]).next().css('z-index', '1')  
  
  $(slide[count].children[1]).animate({
    'opacity': '0'
  }, 200);
  setTimeout(function(){
  $(slide[count]).css(afterPos).css(trans).css('z-index', 0)
  count++;
  if(count == slide.length ) {
    
    count = 0;
  }
  $(slide[count]).css(endPos).css(trans).css('z-index', 2)
  },200);
  $(slide[count]).siblings().css(beforePos).css(notrans);

  setTimeout(function() {
    
    $(slide[count].children[1]).animate({
      'opacity': '1'
    }, 400);
    
  }, 1200);
}

function bind() {
$('.next-slide').bind('click', function() {
  nextSlide();
  clearTimeout(timer);
  timer = setTimeout(slideInit, 7000);
  unBind();
  
});
}

function unBind() {
  $('.next-slide').unbind('click')
  setTimeout(bind, 800);

}

function slideInit() {
  bind();
  function loop() {
    nextSlide();
    timer = setTimeout(loop,7000);
    unBind();
    }                        
  loop();
}

//end of carousel script


//event wow js timing 
$('.event-container article').each(function(i) {

  $('.event-container article').eq(i).addClass('wow bounceInRight').css(
    'animation-delay', i*0.2+'s'
  );
});


//backpic parallax scroll
$(window).scroll(function() {
  var winScroll = $(window).scrollTop(),
      foodPicPos = $('#food-bg').offset().top,
      barPicPos = $('#bar-bg').offset().top;

      if (winScroll > foodPicPos - $(window).height()) {
        $('#food-bg').css(
          'background-position', 'center '+ -winScroll/30+'px'
        )
      }

      if (winScroll > barPicPos - $(window).height()) {
        $('#bar-bg').css(
          'background-position', 'center '+ -winScroll/30+'px'
        )
      }
  
});