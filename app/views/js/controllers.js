/**
*
* MaLinked Controllers
*
**/
angular.module('MaLinked.Controllers', [])

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
}])

/*==========  Profiel  ==========*/
.controller('profiel', ['$scope', '$state', '$stateParams', '$filter', 'db', function($scope, $state, $stateParams, $filter, db){
	$scope.student = db.students.single({id: $stateParams.id});
}])

/*==========  Zoeken  ==========*/
.controller('zoeken', ['$scope', 'db', function($scope, db){
	$scope.db = db;
}])

/*==========  Beheer  ==========*/
.controller('dev', [function(){
	
}])
