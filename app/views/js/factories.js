/**
* MaLinked.Factories Module
*/
angular.module('MaLinked.Factories', [])

/**

	TODO:
	- ENTEPRISE NIVEAU, YO

**/

/*==========  work in zhe progress  ==========*/
.factory('API', ['$http', function($http){

	var get = function(action){
		return $http.get('/api/db/' + action);
	}

	return {
		sync: function(){
			return get('study');
		}
	}
}]);