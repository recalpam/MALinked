/**
 *
 * MaLinked Controllers
 *
 **/
angular.module('MaLinked.Controllers', [])

/*==========  Home  ==========*/

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
.controller('profiel', ['$scope', '$state', '$stateParams', '$filter', 'db',
    function($scope, $state, $stateParams, $filter, db) {

    }
])

/*==========  Zoeken  ==========*/
.controller('zoeken', ['$scope', 'db',
    function($scope, db) {
        $scope.db = db;
    }
])

/*==========  Zoeken  ==========*/
.controller('opleiding', ['$scope', 'db', '$stateParams',
    function($scope, db, $stateParams) {
        $scope.db = db;
        $scope.params = $stateParams
    }
])

/*==========  Beheer  ==========*/
.controller('dev', [
    function() {

    }
])
