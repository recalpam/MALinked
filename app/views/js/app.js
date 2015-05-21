/**
 *
 * MaLinked Client
 *
 **/
angular.module('MaLinked', [

    /*==========  Third Party  ==========*/
    'ui.router',
    'ngMaterial',
    'progressApp',

    /*==========  Native  ==========*/
    'MaLinked.Controllers',
    'MaLinked.Services',
    'MaLinked.Factories',
    'MaLinked.Routes',


])

/*=========================================
=            $urlRouteProvider            =
=========================================*/
.config(['$urlRouterProvider',
    function($urlRouterProvider) {
        $urlRouterProvider.otherwise("/home");
    }
])


/*=========================================
=            $locationProvider            =
=========================================*/
.config(['$locationProvider',
    function($locationProvider) {
        $locationProvider.html5Mode(true);
    }
])

/*==============================
=            Events            =
==============================*/
.run(['$rootScope', '$timeout', 'ngProgress',
    function($rootScope, $timeout, ngProgress) {
        $rootScope.show = false;

        ngProgress.start();
        $timeout(function() {
            ngProgress.complete();
            $rootScope.show = true;
        }, 2000);

        $rootScope
            .$watch('$stateChangeStart', function() {
                console.log('Start loading..');
                ngProgress.start();
            });


        $rootScope
            .$on('$stateChangeSuccess',
                function(event, toState, toParams, fromState, fromParams) {
                    ngProgress.complete();
                });
    }
]);