/**
*
* MaLinked Controllers
*
**/
angular.module('MaLinked.Controllers', ['ngRoute'])

/*==========  Home  ==========*/
.controller('MainCtrl', ['$scope', '$state', '$stateParams', '$route', '$routeParams', '$location', '$timeout', 'ngProgress' ,function($scope, $state, $stateParams, $route, $routeParams, $location, $timeout, ngProgress){
	$scope.show = false;

	ngProgress.start();
	$timeout(function(){
        ngProgress.complete();
        $scope.show = true;
    }, 2000);

	$scope
		.$watch('$stateChangeStart', function() {
			console.log('Start loading..');
			ngProgress.start();
		});


    $scope
        .$on('$stateChangeSuccess',
            function(event, toState, toParams, fromState, fromParams){ 
            	ngProgress.complete();
               
        });


    //80x80
	$scope.thumbnail = function(url){
		if(angular.isUndefined(url)){
			return "/static/anon.jpg";
		}else{
			return url;
		}
	}

	//250x250
	$scope.medium = function(url){
		if(angular.isUndefined(url)){
			return "/static/anon.jpg";
		}else{
			return url;
		}
	}

	//500x500
	$scope.large = function(url){
		if(angular.isUndefined(url)){
			return "/static/anon.jpg";
		}else{
			return url;
		}
	}

	//User uploaded size
	$scope.original = function(url){
		if(angular.isUndefined(url)){
			return "/static/anon.jpg";
		}else{
			return url;
		}
	}
}])

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


}])

/*==========  Beheer  ==========*/
.controller('beheer', [function(){
	
}])
