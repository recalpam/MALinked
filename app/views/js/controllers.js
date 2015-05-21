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
.controller('home', ['$scope', '$filter', 'db', function($scope, $filter, db){
	$scope.db = db;

	var facts = {
		0: 'sperma is dikker dan pis.',
		1: 'er is meer water dan vis.',
		2: 'dat weet je wat het is.',
		3: 'een paard schijt meer dan een hagedis.'

	};

	var getRandomFact = function(){
		var give;
		var keys = Object.keys(facts);
		var rand = keys[ keys.length * Math.random() << 0];

		if( facts[rand] != null ){
			var chosen = facts[rand];

			give = {
				'isFact': true,
				'answer': chosen
			}

			facts[rand] = null;

			console.log(keys);
			return give;
		}

		return getRandomFact();
		
	}

	var getStudyBySlug = function(slug){
		var result = $filter('filter')(db.studies, {slug: slug}, true);
		result[0]['isFact'] = false;

		if(result.length == 1){
			return result[0];
		}
	}

	var htmlClasses = {
		'Aa' : {
			'object': getStudyBySlug('grafisch-vormgever'), 
			'htmlClass': 'grafischvormgeven'
		},
		'Ab' : {
			'object': getStudyBySlug('interactief-vormgever'), 
			'htmlClass': 'interactiefvormgeven'
		},
		'Ac' : {
			'object': getStudyBySlug('audiovisueel-vormgeveranimatie'), 
			'htmlClass': 'audiovisueel'
		},
		'Ad': {
			'object': getStudyBySlug('dtp-er'), 
			'htmlClass': 'dtper'
		},
		'Ae': {
			'object': getStudyBySlug('mediamanager'),
			'htmlClass': 'mediamanager'
		},
		'Af': {
			'object': getStudyBySlug('av-technicus'),
			'htmlClass': 'audiovisueeltechnicus'
		},
		'Ag': {
			'object': getStudyBySlug('evenemententechnicus'),
			'htmlClass': 'evenemententechnicus'
		},
		'Ah': getRandomFact(),
		'Ai': getRandomFact(),
		'Aj': {
			'object': getStudyBySlug('geluidstechnicus'),
			'htmlClass': 'geluidtechnicus'
		},
		'Ak': {
			'object': getStudyBySlug('media-en-gamedeveloper'),
			'htmlClass': 'mediaengamedeveloper'
		},
		'Al': {
			'object': getStudyBySlug('ruimtelijk-vormgever'),
			'htmlClass': 'ruimtelijkvormgeven'
		},
		'Am': {
			'object': getStudyBySlug('podiumtechnicus'),
			'htmlClass': 'podiumtechnicus'
		},
		'An': {
			'object': getStudyBySlug('filmacteur'),
			'htmlClass': 'filmacteur'
		},
		'Ao': {
			'object': getStudyBySlug('signmaker'),
			'htmlClass': 'signmaker'
		},
		'Ap': {
			'object': getStudyBySlug('game-artist'),
			'htmlClass': 'gameartist'
		}
	};

	$scope.studies = htmlClasses;

	

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
