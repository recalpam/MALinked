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
    function($scope) {
    	$scope.submit = function(){
    		alert('ik ben vies');
    	};
    }
])