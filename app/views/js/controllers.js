/**
 *
 * MaLinked Controllers
 *
 **/
angular.module('MaLinked.Controllers', [])

/*==========  Home  ==========*/
.controller('home', ['$scope', '$filter', 'db', function($scope, $filter, db){
    $scope.db = db;

    var facts = {
        0: 'AV4A de grootste klas is met maarliefst 32 studenten.',
        1: 'Allround evenemententechnicus de kleinste opleiding is met slechts 3 studenten.',
        2: 'Er dit jaar 488 studenten afstuderen.',
        3: 'De studenten hun school gemiddeld een 7,9 hebben beoordeld.',
        4: 'De meest favorite docent van media-en-gamedeveloper Jelle Sjollema is.',
        5: 'De meest favorite decont van filmacteur Frederik de Groot is.'

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

    var overview = {
        'Aa' : {
            'study': db.studies.single( { slug: 'grafisch-vormgever' } ),
            'htmlClass': 'grafischvormgeven'
        },
        'Ab' : {
            'study': db.studies.single( { slug: 'interactief-vormgever' } ),
            'htmlClass': 'interactiefvormgeven'
        },'Ac' : {
            'study': db.studies.single( { slug: 'audiovisueel-vormgeveranimatie' } ),
            'htmlClass': 'audiovisueel'
        },'Ad' : {
            'study': db.studies.single( { slug: 'dtp-er' } ),
            'htmlClass': 'dtper'
        },'Ae' : {
            'study': db.studies.single( { slug: 'mediamanager' } ),
            'htmlClass': 'mediamanager'
        },'Af' : {
            'study': db.studies.single( { slug: 'av-technicus' } ),
            'htmlClass': 'audiovisueeltechnicus'
        },'Ag' : {
            'study': db.studies.single( { slug: 'evenemententechnicus' } ),
            'htmlClass': 'evenemententechnicus'
        },
        'Ah' : getRandomFact(),
        'Ai' : getRandomFact(),
        'Aj' : {
            'study': db.studies.single( { slug: 'geluidstechnicus' } ),
            'htmlClass': 'geluidtechnicus'
        },'Ak' : {
            'study': db.studies.single( { slug: 'media-en-gamedeveloper' } ),
            'htmlClass': 'mediaengamedeveloper'
        },'Al' : {
            'study': db.studies.single( { slug: 'ruimtelijk-vormgever' } ),
            'htmlClass': 'ruimtelijkvormgeven'
        },'Am' : {
            'study': db.studies.single( { slug: 'podiumtechnicus' } ),
            'htmlClass': 'podiumtechnicus'
        },'An' : {
            'study': db.studies.single( { slug: 'filmacteur' } ),
            'htmlClass': 'filmacteur'
        },'Ao' : {
            'study': db.studies.single( { slug: 'signmaker' } ),
            'htmlClass': 'signmaker'
        },'Ap' : {
            'study': db.studies.single( { slug: 'game-artist' } ),
            'htmlClass': 'gameartist'
        }
    };

    $scope.studies = overview;

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

/*==========  Opleiding  ==========*/
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
