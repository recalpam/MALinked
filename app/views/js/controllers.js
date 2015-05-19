/**
*
* MaLinked Controllers
*
**/
angular.module('MaLinked.Controllers', ['ngRoute'])

/*==========  Home  ==========*/
.controller('MainCtrl', ['$scope', '$state', '$stateParams', '$route', '$routeParams', '$location', '$timeout', 'ngProgress' ,function($scope, $state, $stateParams, $route, $routeParams, $location, $timeout, ngProgress){
	


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
.controller('home', ['$scope', 'db', function($scope, db){
	$scope.db = db;

	var htmlClasses = {
		0 : {
			'slug': 'grafisch-vormgever', 
			'htmlClass': 'grafischvorgever'
		},
		1 : {
			'slug': 'interactief-vormgever', 
			'htmlClass': 'interactiefvormgeven'
		},
		2 : {
			'slug': 'audiovisueel-vormgeveranimatie', 
			'htmlClass': 'audiovisueel'
		},
		3: {
			'slug': 'dtp-er', 
			'htmlClass': 'dtper'
		},
		4: {
			'slug': 'mediamanager',
			'htmlClass': 'mediamanager'
		}
		//'av-technicus': 'audiovisueeltechnicus',
		//'evenemententechnicus': 'evenemententechnicus',
		//'geluidstechnicus': 'geluidtechnicus',
		//'media-en-gamedeveloper': 'mediaengamedeveloper',
		//'ruimtelijkvormgeven': 'ruimtelijkvormgeven',
		//'podiumtechnicus': 'podiumtechnicus',
		//'filmacteur': 'filmacteur',
		//'signmaker': 'signmaker',
		//'game-artist': 'gameartist'
	};

	$scope.studies = htmlClasses;

	$scope.getStudyClassFromSlug = function(slug){
		var result = $filter('filter')(db.students, {slug: slug}, true);

		if(result.length == 1){
			result[0];
		}

	}
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
