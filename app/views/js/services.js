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
    .directive('profielfoto', ['API',
        function(API) {
            var sync = API.sync();
            return {
                name: 'profielfoto',
                template: '<img src="{{ uri }}" />',
                controller: function($scope, $element, $attrs, $transclude) {
                    $scope.uri = '';
                    sync.then(function(db) {
                        if ($attrs.studentId) {
                            var student = db.students.single({
                                id: $attrs.studentId
                            });

                            if (!student.file || !student.file.thumbnail) {
                                $scope.uri = "/static/anon.jpg";
                            } else {
                                $scope.uri = student.file.thumbnail;
                            }
                        }
                    });

                }
            };
        }
    ])