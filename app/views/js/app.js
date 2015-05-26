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
        $urlRouterProvider.otherwise("home");
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
.run(['$rootScope', '$timeout', 'ngProgress', '$rootScope', '$state', '$stateParams',
    function($rootScope, $timeout, ngProgress, $rootScope, $state, $stateParams) {

        $rootScope.state = $state;

        /*==========  ngProgress  ==========*/
        $rootScope.show = false;
        ngProgress.start();
        $timeout(function() {
            ngProgress.complete();
            $rootScope.show = true;
        }, 2000);
        $rootScope
            .$watch('$stateChangeStart', function() {
                $rootScope.currentState = $state.current.name;
                ngProgress.start();
            });
        $rootScope
            .$on('$stateChangeSuccess',
                function(event, toState, toParams, fromState, fromParams) {
                    ngProgress.complete();
                });
    }
])


/*==================================================
=            Accessable outside ui-view            =
==================================================*/
.run(['$rootScope', '$http',
    function($rootScope, $http) {

        // $http get
        var get = function(action) {
            return $http.get('/api/db/' + action);
        }

        // appends query-like methods to a local object!
        querify = function(object) {
            if (typeof(object) == "object") {
                for (var candidate in object) {

                    /* Filter based upon params */
                    object[candidate].where = function(params) {
                        return $filter('filter')(this, params, true);
                    };

                    /* Filter but only return a single value */
                    object[candidate].single = function(params) {
                        var result = this.where(params);
                        if (result.length > 0) return result[0];
                    };
                }
            }

            // return the modified (contains appended functionality)
            return object;
        };

        get('sync').then(function(response) {
            $rootScope.db = querify(response.data);
        });



    }
])