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

	// $http promise
	var sync;

	// $http get
	var get = function(action){
		return $http.get('/api/db/' + action);
	}

	return {
		sync: function(){
			if(!sync){
				sync = get('sync').then(function(response){
					return response.data
				});
			}
			return sync;
		}
	}
}]);