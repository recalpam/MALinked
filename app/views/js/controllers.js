/**
*
* MaLinked Controllers
*
**/
angular.module('MaLinked.Controllers', [])

/*==========  Home  ==========*/
.controller('home', [function(){
	
}])

/*==========  Profiel  ==========*/
.controller('profiel', ['$scope', '$state', '$stateParams', '$filter', 'db', function($scope, $state, $stateParams, $filter, db){

	$scope.boris = "hey";

	// filter based upon id that we get from the url
	var result = $filter('filter')(db.students, {slug: $stateParams.student}, true);

	// if no results, we assume the user is trying to screw around with the app
	if(result.length!=1){
		// we will redirect it back to home
		$state.go('home');
	}

	$scope.student = result[0];
	console.log($scope.student);

	
}])

/*==========  Zoeken  ==========*/
.controller('zoeken', ['$scope', 'db', function($scope, db){

	$scope.db = db;

	$scope.thumbnail = function(url){
		if(angular.isUndefined(url)){
			return "/static/anon.jpg";
		}else{
			return url;
		}
	}
}])

/*==========  Beheer  ==========*/
.controller('beheer', [function(){
	
}])
