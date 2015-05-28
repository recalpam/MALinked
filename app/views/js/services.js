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
    function(API) {
        var sync = API.sync();
        return {
            name: 'profielfoto',
            replace: true,
            template: '<img src="{{ uri }}" />',
            controller: function($scope, $element, $attrs, $transclude) {
                $scope.uri = '';
                sync.then(function(db) {
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
    function(API, $compile) {
        // Runs during compile
        return {
            name: 'profielblokken',
            // terminal: true,
            // scope: {}, // {} = isolate, true = child, false/undefined = no change
            controller: function($scope, $element, $attrs, $transclude) {
                // Single object generator
                function infoBlok(title) {
                    return {
                        title: title
                    };
                };
                // Assign to scope so children can access the neccisary data.
                $scope.infoBlokken = {
                    future_vision: infoBlok('Mijn toekomstbeeld'),
                    fav_teacher: infoBlok('Favoriete Leraren'),
                    fav_project: infoBlok('Favoriete Projecten'),
                    fav_class: infoBlok('Favoriete Klas'),
                    rate_school: infoBlok('Schoolcijfer'),
                    rate_internship: infoBlok('Stagecijfer'),
                    specialize: infoBlok('Specializaties'),
                    school_match_ambitions: infoBlok('Tevreden over MA?'),
                    hobbies: infoBlok('Hobbies'),
                    why_ma: infoBlok('Waarom gekozen voor MA?'),
                    best_experience: infoBlok('Memorabel Moment')
                };
            },
            // require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
            // restrict: 'A', // E = Element, A = Attribute, C = Class, M = Comment
            // compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
            link: function($scope, iElm, iAttrs, controller) {
                var block = $('<div class="block"></div>');
                for (var key in $scope.infoBlokken) {
                    var infoStudent = $scope.student.info[key];
                    var infoBlok = $scope.infoBlokken[key];
                    iElm.append(
                        block.clone().addClass(key)
                        .append($('<h2></h2>').text(infoBlok.title))
                        .append($('<p></p>').text(infoStudent.toString()))
                    );
                }
                var blockEqualize = $('.block');
                var blockEqualizeWidth = blockEqualize.width();
                $(blockEqualize).height(blockEqualizeWidth);
            }
        };
    }
])