/**
 * Dashboard.Controllers Module
 *
 * COntrollers
 */
angular.module('Dashboard.Controllers', [])

/*=============================
=            Login            =
=============================*/
.controller('login', ['$scope', 'API',
  function($scope, API) {
        $scope.input;

        $scope.checkLogin = function(){
            if( !$scope.input.user || !$scope.input.password ){
                return;
            }
            API.postLogin( {'student': $scope.input.user, 'password': $scope.input.password}, function(data, status, headers, config){
                if( !data.error ){
                    
                }
                console.log(data);
            });
            
        };
    }
])

/*=============================
=         Waarom het ma      =
=============================*/
.controller('waarom-het-ma', ['$scope', 'API',
  function ($scope) {

    
  }
])

.controller('hobbys-en-gegevens', ['$scope',
  function ($scope) {
    $('.hobby-field input').tagsInput({
      'interactive': true,
      'height': '5.625rem',
      'width': '100%',
      'defaultText': 'voeg toe'
    });
  }
])

.controller('projecten', ['$scope',
  function ($scope) {
    $scope.foo = "bar";
  }
])

.controller('over-de-school', ['$scope',
  function ($scope) {
    $('.docent-school-field input').tagsInput({
      'interactive': true,
      'height': '5.625rem',
      'width': '100%',
      'defaultText': 'voeg toe'
    });
  }
])

.controller('toekomstbeeld', ['$scope',
  function ($scope) {
    $scope.foo = "bar";
  }
])