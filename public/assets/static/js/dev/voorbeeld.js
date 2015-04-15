var module = angular.module('voorbeeld', []);

module.controller('BodyCtrl', ['$scope', '$http', function($scope, $http){
	$http.get('http://malinked.dev/example').success(function(data) {
		// we kunnen nu dus via 'coolstuff' de data in html parsen
		$scope.coolstuff = data;
	  });
}]);