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


/*==========  Subsection comment block  ==========*/
var count = $('.speedyUpload').length - 1;
var pdfIcon = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACWCAYAAAA8AXHiAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUE3ODZGRkFCNjlGMTFFNEEwNjQ5N0Q2OEM5NTQzMUEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUE3ODZGRkJCNjlGMTFFNEEwNjQ5N0Q2OEM5NTQzMUEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFQTc4NkZGOEI2OUYxMUU0QTA2NDk3RDY4Qzk1NDMxQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFQTc4NkZGOUI2OUYxMUU0QTA2NDk3RDY4Qzk1NDMxQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PtWbOlEAAAmoSURBVHja7J0LcFTV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';

$(document).foundation();

$('.hobby-field input').tagsInput({
  'interactive': true,
  'height': '5.625rem',
  'width': '100%',
  'defaultText': 'voeg toe'
});

$('.docent-school-field input').tagsInput({
  'interactive': true,
  'height': '5.625rem',
  'width': '100%',
  'defaultText': 'voeg toe'
});

$('.part-1 a').on('click', function (e) {
  e.preventDefault();
  if ($('body > div.row.padding-top-40 > div > div.part-1 > form > div > div.small-6.small-centered.columns > div > label > input[type="text"]').val() == '123456@ma-web.nl') {
    $('.part-1').css('display', 'none');
    $('.part-2').css('display', 'block');
  } else {
    $('#no-login-access').foundation('reveal', 'open');
  }
});

$(document).on('change', '.speedyUpload', function (e) {
  var fileString = '';
  var files = $(this)[0].files;
  if (files.length > 1) {
    fileString = files.length + ' bestanden geselecteerd';
  } else {
    fileString = $(this).val();
  }

  $(this).parent('.speedyUpload-container').find('.input').html(fileString);
});

// Add New Project
$('#add-new-project').on('click', function (e, part) {
  e.preventDefault();
  var html = $("#project").html();
  count += 1;
  html = html.replace('{part}', count);
  html = html.replace('{part}', count);
  html = html.replace('{part}', count);
  html = html.replace('{part}', count);
  html = html.replace('{part}', count);
  html = html.replace('{part}', count);

  if (count <= 4) {
    $(".add-new-project").append(html);
  }
  if (count == 4) {
    $(this).remove();
  }
});

// filereader
function readFile(file, part) {
  var reader = new FileReader();

  reader.onload = function (e) {
    var base64 = e.target.result;
    var regex = /^data:(.+?)\/(.+?);/i;
    var data = base64.match(regex);
    if (part == 'profile') {
      if (data[2] != 'png' && data[2] != 'jpg' && data[2] != 'jpeg') {
        alert('Je mag alleen png of jpeg uploaden.');
        changed = true;
        return;
      }
      $('#fileList' + part).html('<li><img src="' + base64 + '" alt="imagepreview"/></li>');
    } else {
      if (data[2] != 'pdf' && data[2] != 'png' && data[2] != 'jpg' && data[2] != 'jpeg') {
        alert('Je mag alleen pdf, png of jpeg uploaden.');
        return;
      }

      if (data[2] == 'pdf') {
        base64 = pdfIcon;
      }
      $('#fileList' + part).append('<li><img src="' + base64 + '" alt="imagepreview"/></li>');
    }
  }

  reader.readAsDataURL(file);
}
//
$('.stap-2-submit').on('click', function () {
  var source = $('.avatar-field').attr('src');
  if (source.substr(0, 18) == 'profilepicture.php' || changed == true) {
    $('.avatar-field').removeClass('error');
  } else {
    $('.avatar-field').addClass('error');
  }
});

if ($(".speedyUpload")) {
  $(document).on("change", '.speedyUpload', function () {
    files = $(this)[0].files;
    if (typeof window.FileReader === 'function') {
      for (var k = 0; k < files.length; k++) {
        readFile(files[k], $(this).data('part'));
      }
    }
  });
}

$('.fileList').on('click', '.delete-image', function (e) {
  e.preventDefault();
  var elem = $(this);
  data = {
    file: $(this).data('id'),
    action: 'ajax',
    call: 'deleteimage',
    project: $(this).data('project')
  };
  $.post("index.php", data, function (results) {
    if (results.success == true) {
      elem.parent('li').remove();
    } else {
      alert('Uh ooh.. er is iets fout gegaan tijdens het verwijderen van dit bestand');
    }
  });
});



/*==========  Document Ready  ==========*/
$(document).ready(function () {

  // Bug fix fire on angular ready
  setTimeout(function () {

    // Foundation
    $(document).foundation();

    // Check IE version
    msieversion();
  }, 200);
});
/*-----  End of Global  ------*/