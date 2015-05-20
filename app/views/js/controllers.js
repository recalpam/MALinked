/**
 *
 * MaLinked Controllers
 *
 **/
angular.module('MaLinked.Controllers', [])

/*==========  Home  ==========*/
.controller('home', ['$scope', 'db',
    function($scope, db) {
        $scope.db = db;

        var htmlClasses = {
            0: {
                'slug': 'grafisch-vormgever',
                'htmlClass': 'grafischvorgever'
            },
            1: {
                'slug': 'interactief-vormgever',
                'htmlClass': 'interactiefvormgeven'
            },
            2: {
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
            },
            5: {
                'slug': 'av-technicus',
                'htmlClass': 'audiovisueeltechnicus'
            },
            6: {
                'slug': 'evenemententechnicus',
                'htmlClass': 'evenemententechnicus'
            },
            7: {
                'slug': 'geluidstechnicus',
                'htmlClass': 'geluidtechnicus'
            },
            8: {
                'slug': 'media-en-gamedeveloper',
                'htmlClass': 'mediaengamedeveloper'
            },
            9: {
                'slug': 'ruimtelijkvormgeven',
                'htmlClass': 'ruimtelijkvormgeven'
            },
            10: {
                'slug': 'podiumtechnicus',
                'htmlClass': 'podiumtechnicus'
            },
            11: {
                'slug': 'filmacteur',
                'htmlClass': 'filmacteur'
            },
            12: {
                'slug': 'signmaker',
                'htmlClass': 'signmaker'
            },
            13: {
                'slug': 'game-artist',
                'htmlClass': 'gameartist'
            }
        };

        $scope.studies = htmlClasses;
    }
])

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