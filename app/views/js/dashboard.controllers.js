/**
 * Dashboard.Controllers Module
 *
 * Controllers
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