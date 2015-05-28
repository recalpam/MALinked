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