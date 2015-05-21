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

    // Fire lightbox
    lightbox();
  }, 200);
});
/*-----  End of Global  ------*/


/*====================================
=            Profile page            =
====================================*/


/*==========  jQuery Watcher  ==========*/
$.fn.watch = function (property, callback) {
  return $(this).each(function () {
    var self = this;
    var old_property_val = this[property];
    var timer;

    function watch() {
      if ($(self).data(property + '-watch-abort') == true) {
        timer = clearInterval(timer);
        $(self).data(property + '-watch-abort', null);
        return;
      }

      if (self[property] != old_property_val) {
        old_property_val = self[property];
        callback.call(self);
      }
    }
    timer = setInterval(watch, 700);
  });
};

$.fn.unwatch = function (property) {
  return $(this).each(function () {
    $(this).data(property + '-watch-abort', true);
  });
};


/*==========  Lightbox  ==========*/
function lightbox() {
  $('#lightbox-item').click(function (e) {

    //prevent default action (hyperlink)
    e.preventDefault();

    //Get clicked link href
    var image_href = $(this).attr("href");

    /*
    If the lightbox window HTML already exists in document,
    change the img src to to match the href of whatever link was clicked

    If the lightbox window HTML doesn't exists, create it and insert it.
    (This will only happen the first time around)
    */

    if ($('#lightbox').length > 0) { // #lightbox exists

      //place href as img src value
      $('#content').html('<img src="' + image_href + '" />');

      //show lightbox window - you could use .show('fast') for a transition
      $('#lightbox').show();
    }

  });

  //Click anywhere on the page to get rid of lightbox window


  $('#lightbox').watch('style', function () {
    //"this" in this scope will reference the object on which the property changed
    if ($(this).css('display') == 'block') {
      $('#lightbox').on('click', function () {
        $('#lightbox').hide();
      });
    }
  });

};

/*-----  End of Profile page  ------*/