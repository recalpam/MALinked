/*==============================
=            Global            =
==============================*/


/*==========  Browser Outdated  ==========*/
//event listener: DOM ready
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function () {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}
//call plugin function after DOM ready
addLoadEvent(function () {
  outdatedBrowser({
    bgColor: '#f25648',
    color: '#ffffff',
    lowerThan: 'borderImage',
    languagePath: '/static/components/outdated-browser/outdatedbrowser/lang/nl.html'
  })
});

// Check IE Version
function msieversion() {
  var tmp = (document["documentMode"] || document.attachEvent) && "ev",
    msie = tmp && (tmp = window[tmp + "al"]) && tmp("/*@cc_on 1;@*/") && +((/msie (d+)/i.exec(navigator.userAgent) || [])[1] || 0);
  return msie || void 0;

  console.log('test ' + tmp);
};


/*==========  Header Scroll  ==========*/
// Cache
var $content = $('header .content'),
  $blur = $('header .overlay'),
  wHeight = $(window).height();

$(window).on('resize', function () {
  wHeight = $(window).height();
});

// requestAnimationFrame Shim
window.requestAnimFrame = (function () {
  return window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    function (callback) {
      window.setTimeout(callback, 1000 / 60);
    };
})();

// Scroller
function Scroller() {
  this.latestKnownScrollY = 0;
  this.ticking = false;
}

Scroller.prototype = {
  // Initialize
  init: function () {
    window.addEventListener('scroll', this.onScroll.bind(this), false);
  },

  // Capture Scroll
  onScroll: function () {
    this.latestKnownScrollY = window.scrollY;
    this.requestTick();
  },

  // Request a Tick
  requestTick: function () {
    if (!this.ticking) {
      window.requestAnimFrame(this.update.bind(this));
    }
    this.ticking = true;
  },

  // Update.
  update: function () {
    var currentScrollY = this.latestKnownScrollY;
    this.ticking = false;

    /**
     * Do The Dirty Work Here
     */
    var slowScroll = currentScrollY / 2,
      blurScroll = currentScrollY * 2;

    $content.css({
      'transform': 'translateY(+' + slowScroll + 'px)',
      '-moz-transform': 'translateY(+' + slowScroll + 'px)',
      '-webkit-transform': 'translateY(+' + slowScroll + 'px)'
    });

    $blur.css({
      'opacity': blurScroll / wHeight
    });
  }
};

// Attach!
var scroller = new Scroller();
scroller.init();


/*==========  Window Resize  ==========*/
$(window).resize(function () {
  var blockEqualize = $('.block');
  var blockEqualizeWidth = blockEqualize.width();
  $(blockEqualize).height(blockEqualizeWidth);
});

/*==========  Document Ready  ==========*/
$(document).ready(function () {

  // Bug fix fire on angular ready
  setTimeout(function () {
    var blockEqualize = $('.block');
    var blockEqualizeWidth = blockEqualize.width();
    $(blockEqualize).height(blockEqualizeWidth);

    // Foundation
    $(document).foundation();

    // Check IE version
    msieversion();
  }, 200);
});
/*-----  End of Global  ------*/


/*================================
=            Homepage            =
================================*/


/*==========  Play/Pause  ==========*/
var video = $("video").get(0);

function playVid() {
  video.play();
}

function pauseVid() {
  video.pause();
}


/*==========  Header Scroll  ==========*/
// binnen te standaard Header Scroll in "Do The Dirty Work Here"
if ((blurScroll / (wHeight / 2)) > 1) {
  pauseVid();
} else {
  playVid();
}


/*-----  End of Homepage  ------*/