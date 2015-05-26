/**
 * Dashboard.Controllers Module
 *
 * COntrollers
 */
angular.module('Dashboard.Controllers', [])


/*=============================
=            Login            =
=============================*/
.controller('login', ['$scope',
  function ($scope) {
    $scope.foo = "bar";
  }
])

.controller('waarom-het-ma', ['$scope',
  function ($scope) {
    $scope.foo = "bar";
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