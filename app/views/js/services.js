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
          future_vision: infoBlok('Mijn toekomstbeeld is..', 'toekomstbeeld'),
          fav_teacher: infoBlok('Mijn favoriete leraren zijn..', 'favoriet'),
          fav_project: infoBlok('Mijn favoriete projecten..', 'favoriet'),
          fav_class: infoBlok('Mijn favoriete vak was..', 'favoriet'),
          rate_school: infoBlok('Ik geef mijn klas een..', 'hoewas', 'span'),
          rate_internship: infoBlok('Ik geef mijn stage een..', 'hoewas', 'span'),
          specialize: infoBlok('Mijn specialisaties zijn..', 'favoriet'),
          school_match_ambitions: infoBlok('Ben je tevreden over het MA?', 'favoriet'),
          hobbies: infoBlok('Mijn hobby\'s zijn..', 'favoriet'),
          why_ma: infoBlok('Waarom heb je voor het Mediacollege gekozen?', 'favoriet'),
          best_experience: infoBlok('Het leukste op het MA was..', 'favoriet')
        };
      },
      // require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
      // restrict: 'A', // E = Element, A = Attribute, C = Class, M = Comment
      // compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
      link: function ($scope, iElm, iAttrs, controller) {
        var block = $('<div class="block"></div>');
        var projects = angular.copy($scope.student.projects);
        var projcounter = 0;
        for (var key in $scope.infoBlokken) {
          var infoStudent = $scope.student.info[key];
          var infoBlok = $scope.infoBlokken[key];

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
              var groupId = project.id;
              if (file.fileExtension == "png" || file.fileExtension == "jpg" || file.fileExtension == "jpeg") {
                iElm.append(
                  block.clone().addClass("project-image")
                  .append($('<img data-reveal-id="projectsModal" data-reveal-ajax="/api/frontend/modal/group/' + groupId + '" data-project="' + projcounter + '" />').attr("src", file.medium))
                );
              }

            }
          }

          if (typeof (infoStudent) == typeof ([])) {
            // WANNEER ARRAY/OPSOMMING
            //
            var onzeLijst = $('<ul></ul>');
            iElm.append(
              block.clone().addClass(infoBlok.css)
              .append($('<h2></h2>').text(infoBlok.title))
              .append(onzeLijst)
            );

            for (var i = 0; i < infoStudent.length; ++i) {
              onzeLijst.append($("<li></li>").text(infoStudent[i]));
            }
          } else {

            // WANNER GEEN ARRAY

            iElm.append(
              block.clone().addClass(infoBlok.css)
              .append($('<h2></h2>').text(infoBlok.title))
              .append($('<span></span>').text(infoStudent))
            );
          }

        }


        // projectElemId.addEventListener('click', function () {
        //   console.log(this.dataset.project);
        // });


        // projectsCarousel;

        // [].forEach.call(projectElemId, function (div) {
        //   // do whatever
        //   // div.style.color = "red";
        //   div.addEventListener('click', function () {
        //     console.log(div.dataset.project);
        //     // open modal, en switch naar juiste slide
        //     $('#projectsModal').foundation('reveal', 'open');
        //     var projectsCarousel = $('.projectsCarousel').slick();
        //     $(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
        //       console.log();
        //       projectsCarousel[0].slick.goTo(div.dataset.project, true)
        //     });
        //   });
        // });





        var blockEqualize = $('.block');
        var blockEqualizeWidth = blockEqualize.width();
        $(blockEqualize).height(blockEqualizeWidth);
      }
    };
  }
])