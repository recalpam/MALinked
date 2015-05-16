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
.controller('profiel', ['$scope', '$state', '$stateParams', '$filter', 'API', function($scope, $state, $stateParams, $filter, API){

	// access database records
	API.sync().then(function(value){

		// filter based upon id that we get from the url
		$scope.student = $filter('filter')(value.students, {id: parseInt($stateParams.id)}, true);

		// if no results, we assume the user is trying to screw around with the app
		if($scope.student.length!=1){

			// we will redirect it back to home
			$state.go('home')
		}

	// close the API.sync.then() function
	});
}])

/*==========  Zoeken  ==========*/
.controller('zoeken', ['$scope', function($scope){
	
}])

/*==========  Beheer  ==========*/
.controller('beheer', [function(){
	
}])
