/**
 *
 * MaLinked Services
 *
 **/
/**

TODO:
- Meer

**/
angular.module('MaLinked.Services', [])
/*===================================
=            PROFIELFOTO            =
===================================*/
.directive('profielfoto', ['API',
  function (API) {
    var sync = API.sync();
    return {
      name: 'profielfoto',
      replace: true,
      template: '<img src="{{ uri }}" />',
      controller: function ($scope, $element, $attrs, $transclude) {
        $scope.uri = '';
        sync.then(function (db) {
          if ($attrs.studentId) {
            var student = db.students.single({
              id: $attrs.studentId
            });
            if (!student.file || !student.file[$attrs.size]) {
              $scope.uri = "/static/anon.jpg";
            } else {
              $scope.uri = student.file[$attrs.size];
            }
          }
        });
      }
    };
  }
])
/*======================================
=            PROFIELBLOKKEN            =
========================================*/
.directive('profielblokken', ['API', '$compile',
  function (API, $compile) {
    // Runs during compile
    return {
      name: 'profielblokken',
      // terminal: true,
      // scope: {}, // {} = isolate, true = child, false/undefined = no change
      controller: function ($scope, $element, $attrs, $transclude) {
        // Single object generator
        function infoBlok(title, css, container) {
          return {
            title: title,
            css: css,
            container: container
          };
        };
        // Assign to scope so children can access the neccisary data.
        $scope.infoBlokken = {
          future_vision: infoBlok('Mijn toekomstbeeld', 'toekomstbeeld'),
          fav_teacher: infoBlok('Favoriete Leraren', 'favoriet'),
          fav_project: infoBlok('Favoriete Projecten', 'favoriet'),
          fav_class: infoBlok('Favoriete Klas', 'favoriet'),
          rate_school: infoBlok('Schoolcijfer', 'hoewas', 'span'),
          rate_internship: infoBlok('Stagecijfer', 'hoewas', 'span'),
          specialize: infoBlok('Specialisaties', 'favoriet'),
          school_match_ambitions: infoBlok('Tevreden over MA?', 'favoriet'),
          hobbies: infoBlok('Hobbies', 'favoriet'),
          why_ma: infoBlok('Waarom gekozen voor MA?', 'favoriet'),
          best_experience: infoBlok('Memorabel Moment', 'favoriet')
        };
      },
      // require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
      // restrict: 'A', // E = Element, A = Attribute, C = Class, M = Comment
      // compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
      link: function ($scope, iElm, iAttrs, controller) {
        var block = $('<div class="block"></div>');
        for (var key in $scope.infoBlokken) {
          var infoStudent = $scope.student.info[key];
          var infoBlok = $scope.infoBlokken[key];
          var projects = $scope.student.projects;

          if (!infoStudent) continue;

          if (projects.length > 0) {
            var project = projects.pop();
            iElm.append(
              block.clone().addClass("project-info")
              .append($('<h2></h2>').text(project.title))
              .append($('<p></p>').text(project.description))
            );

            if (project.project_file.length > 0) {
              var file = project.project_file.pop();
              if (file.fileExtension == "png" || file.fileExtension == "jpg" || file.fileExtension == "jpeg") {
                iElm.append(
                  block.clone().addClass("project-image")
                  .append($('<img/>').attr("src", file.medium))
                );
              }

            }
          }

          if (!infoBlok.container) {
            iElm.append(
              block.clone().addClass(infoBlok.css)
              .append($('<h2></h2>').text(infoBlok.title))
              .append($('<p></p>').text(infoStudent))
            );
          }

          if (infoBlok.container == "span") {
            iElm.append(
              block.clone().addClass(infoBlok.css)
              .append($('<h2></h2>').text(infoBlok.title))
              .append($('<span></span>').text(infoStudent))
            );
          }

        }
        var blockEqualize = $('.block');
        var blockEqualizeWidth = blockEqualize.width();
        $(blockEqualize).height(blockEqualizeWidth);
      }
    };
  }
])