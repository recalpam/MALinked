/**
 *
 * MaLinked Services
 *
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
                    	if($attrs.studentId){
                    		console.log(db.students.single({id: $attrs.studentId}));
                    		/**
                    		
                    			TODO:
                    			- img url @ uri 
                    			- op basis van size attribute                    		
                    		**/
                    		
                    	}
                    });

                }
            };
        }
    ])