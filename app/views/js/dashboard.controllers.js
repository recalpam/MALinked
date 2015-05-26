/**
 * Dashboard.Controllers Module
 *
 * Controllers
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
                console.log(data);
            });
    		
    	};
    }
])