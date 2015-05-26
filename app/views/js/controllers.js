/**
 *
 * MaLinked Controllers
 *
 **/
angular.module('MaLinked.Controllers', [])

/*==========  Home  ==========*/

.controller('home', ['$scope', '$filter', 'db', '$rootScope', function($scope, $filter, db, $rootScope){

	var facts = {
		0: '‘Uncomfortable art Biënnale’ het meest favoriete project van de grafische vormgevers is?',
		1: 'Jelle Sjollema de meest favoriete docent van media- en gamedevelopment is?',
		2: '8 de gemiddelde beoordeling van de school is?',
		3: '7,9 de gemiddelde beoordeling van de stageperiode is?',
		4: 'Frederik de Groot de meeste favoriete docent van filmacteur is?',
		5: '29 studenten hun stageperiode een 10 hebben gegeven?',
		6: 'Er 488 studenten afstuderen dit jaar?',
		7: 'Evenemententechnicus de kleinste opleiding is met 3 studenten?',
		8: 'AV4A de grootste klas is met 32 studenten?'
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
			};

			return give;
		}

		 return getRandomFact();
	}

	var overview = {
		'Aa': {
			'study': db.studies.single({
				slug: 'grafisch-vormgever'
			}),
			'htmlClass': 'grafischvormgeven'
		},
		'Ab': {
			'study': db.studies.single({
				slug: 'interactief-vormgever'
			}),
			'htmlClass': 'interactiefvormgeven'
		},
		'Ac': {
			'study': db.studies.single({
				slug: 'audiovisueel-vormgeveranimatie'
			}),
			'htmlClass': 'audiovisueel'
		},
		'Ad': {
			'study': db.studies.single({
				slug: 'dtp-er'
			}),
			'htmlClass': 'dtper'
		},
		'Ae': {
			'study': db.studies.single({
				slug: 'mediamanager'
			}),
			'htmlClass': 'mediamanager'
		},
		'Af': {
			'study': db.studies.single({
				slug: 'av-technicus'
			}),
			'htmlClass': 'audiovisueeltechnicus'
		},
		'Ag': {
			'study': db.studies.single({
				slug: 'evenemententechnicus'
			}),
			'htmlClass': 'evenemententechnicus'
		},
		'Ah': getRandomFact(),
		'Ai': getRandomFact(),
		'Aj': {
			'study': db.studies.single({
				slug: 'geluidstechnicus'
			}),
			'htmlClass': 'geluidtechnicus'
		},
		'Ak': {
			'study': db.studies.single({
				slug: 'media-en-gamedeveloper'
			}),
			'htmlClass': 'mediaengamedeveloper'
		},
		'Al': {
			'study': db.studies.single({
				slug: 'ruimtelijk-vormgever'
			}),
			'htmlClass': 'ruimtelijkvormgeven'
		},
		'Am': {
			'study': db.studies.single({
				slug: 'podiumtechnicus'
			}),
			'htmlClass': 'podiumtechnicus'
		},
		'An': {
			'study': db.studies.single({
				slug: 'filmacteur'
			}),
			'htmlClass': 'filmacteur'
		},
		'Ao': {
			'study': db.studies.single({
				slug: 'signmaker'
			}),
			'htmlClass': 'signmaker'
		},
		'Ap': {
			'study': db.studies.single({
				slug: 'game-artist'
			}),
			'htmlClass': 'gameartist'
		}
	};

	$scope.studies = overview;
}])

/*==========  Profiel  ==========*/
.controller('profiel', ['$scope', '$state', '$stateParams', '$filter', 'db', '$rootScope',
	function($scope, $state, $stateParams, $filter, db, $rootScope) {
		$('#searchModal').foundation('reveal', 'close');
		var blockEqualize = $('.block');
		var blockEqualizeWidth = blockEqualize.width();
		$(blockEqualize).height(blockEqualizeWidth);
		$scope.student = db.students.single({slug: $stateParams.slug});
	
	}
])

/*==========  Zoeken  ==========*/
.controller('zoeken', ['$scope', 'db',
	function($scope, db) {
		$scope.db = db;
	}
])

/*==========  Opleiding  ==========*/
.controller('opleiding', ['$scope', 'db', '$stateParams',
	function($scope, db, $stateParams) {
		$scope.db = db;
		$scope.params = $stateParams
	}
])
