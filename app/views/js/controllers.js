/**
 *
 * MaLinked Controllers
 *
 **/
angular.module('MaLinked.Controllers', [])

/*==========  Home  ==========*/
.controller('home', ['$scope', '$filter', 'db',
    function($scope, $filter, db) {
        $scope.db = db;

        var facts = {
            0: 'sperma is dikker dan pis.',
            1: 'er is meer water dan vis.',
            2: 'dat weet je wat het is.',
            3: 'een paard schijt meer dan een hagedis.'

        };

        var getRandomFact = function() {
            var give;
            var keys = Object.keys(facts);
            var rand = keys[keys.length * Math.random() << 0];

            if (facts[rand] != null) {
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

    }
])

/*==========  Profiel  ==========*/
.controller('profiel', ['$scope', '$state', '$stateParams', '$filter', 'db', '$rootScope',
    function($scope, $state, $stateParams, $filter, db, $rootScope) {
        $('#searchModal').foundation('reveal', 'close');
        var blockEqualize = $('.block');
        var blockEqualizeWidth = blockEqualize.width();
        $(blockEqualize).height(blockEqualizeWidth);
        $rootScope.header.class = "profile";
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